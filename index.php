<?php

/* 
 * The MIT License
 *
 * Copyright 2021 Alişan Uzundemir <alisan.uzundemir@hamzagil.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."helpers".DIRECTORY_SEPARATOR."setDefine.php");
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."helpers".DIRECTORY_SEPARATOR."commonFunctions.php");
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."helpers".DIRECTORY_SEPARATOR."getHelperTables.php");
include_once(dirname(__FILE__).DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Autoloader.php");

if(softwareType == "development"){
    ini_set("display_errors", "1");
    error_reporting(E_ALL);     
    $debugging = false;
    $caching = false;
}else if(softwareType == "production"){
    ini_set("display_errors", "0");
    error_reporting(0);  
    $debugging = false;
    $caching = false;
}
/**
 * DONT CHECK SESSION 
 */

$dontCheckSession = array(
    "login-check",
    "login-container",
    "ajaxUrl",
    "printingUrl"
);

/**
 * CALL SMARTY
 */
$smarty = new Smarty;
$smarty->debugging = $debugging;
$smarty->caching = $caching;

$smarty->assign("URL",url);
$smarty->assign("PATH",templatePath);
$smarty->assign("TITLE",dashboardTitle);
/**
 * CALL ROUTER 
 */
$router = new AltoRouter();
$router->setBasePath('/okulProje');

$router->map('POST','/users/checkLogin', 'users/loginCheck', 'login-check');
$router->map('GET','/', 'users/login', 'login-container');
$router->map('GET','/users/logout', 'users/logout', 'logout-container');
$router->map('GET','/dashboard', 'homepage', 'dashboard');
$router->map("POST|GET","/ajaxRequest","processAjax","ajaxUrl");
$router->map("POST|GET","/printing/[a:action]?/[:id]?/[:another]?","printing","printingUrl");

/**
 * SET SMARTY
 */
$smarty->assign("loginCheckUrl",$router->generate('login-check',array("username","password")));
$smarty->assign("homePageUrl",$router->generate('dashboard'));
$smarty->assign("loginPageUrl",$router->generate('login-container'));
$smarty->assign("logoutPageUrl",$router->generate('logout-container'));

// ITS A STRANGER

$smarty->assign("UserName"," YABANCI WTF! ");


/**
 * WE CHECK SESSION AND DEFINE IS LOGIN ? OR NOT ? WE WILL IMPROVE
 */
if( isset($_SESSION) && !empty($_SESSION['loginUserName']) ){

    $checked  = new usersonline;
    $hasCheck = $checked->checkUserReal();
    if($hasCheck !== FALSE && is_array($hasCheck)){

        $permission = array();
        $modules = new modules;

        $_SESSION["usersId"]    = $hasCheck['usersId'];
        $_SESSION["usersPer"]   = $hasCheck['usersPermission'];

        /**
         * SET MODULES PATH HERE
         */
        $getModules = $modules->setModulesRoute($hasCheck['usersPermission']);
        $paths      = $getModules;

        foreach($paths AS $readyModules){
            $router->map($readyModules['modulesMethod'],$readyModules['modulesPath'], $readyModules['modulesFile'], $readyModules['modulesName']);
        }

        $smarty->assign("UserName",$_SESSION['loginUserName']);
        $smarty->assign("ajaxProcUrl",$router->generate('ajaxUrl'));
        $smarty->assign("printingUrl",$router->generate('printingUrl'));
        
    }else{
        $matchCheck = $router->match();
        if( $matchCheck && !in_array($matchCheck['name'], $dontCheckSession) ){
            @session_destroy();
            header("Location:".$router->generate('login-container'));
        }
    }

}else{
    $matchCheck = $router->match();
    if( $matchCheck && !in_array($matchCheck['name'], $dontCheckSession) ){
        @session_destroy();
        header("Location:".$router->generate('login-container'));
    }
}
/**
 * SESSION CHECK IS FINISH
 */

/**
 * WE MAKED MATCH REQUEST IS HAS IN OUR ROUTES?
 */
$match = $router->match();
$incFile = $match["target"].".php";

$smarty->assign("CLASS",$match['name']);
/*var_dump($match);
echo modulesDir.$incFile;
*/

if( $match && !in_array($match['name'], $dontCheckSession) && ( file_exists(modulesDir.$incFile) || file_exists($incFile) ) ){
    /**
     * SET PAGE TITLE
     */
    $smarty->assign("TITLE",$match['name']."-".dashboardTitle);
    
    include(dirname(__FILE__)."/header.php");
    include(dirname(__FILE__)."/menu.php");

    if( file_exists(modulesDir.$incFile) ){
        
        include(modulesDir.$incFile);
    }else{
        include($incFile);
    }

    include(dirname(__FILE__)."/footer.php");  
        
}else if($match && in_array($match['name'], $dontCheckSession) ){
    
    if($match['name']=="login-container" && isset($_SESSION) && !empty($_SESSION['loginUserName']) ){
        header("Location:".$router->generate('dashboard'));
    }else if($match['name']=="login-container" && ( !isset($_SESSION) || empty($_SESSION['loginUserName']) ) ){
        include(dirname(__FILE__)."/header.php");
        include(modulesDir.$incFile);
        include(dirname(__FILE__)."/footer.php");
    }else{
        if( file_exists(modulesDir.$incFile) ){
            include(modulesDir.$incFile);   
        }else{
            include($incFile);
        }
    }
      
}else{
    include("404.php");
}