<?php

/* 
 * The MIT License
 *
 * Copyright 2017 Alişan Uzundemir <alisan.uzundemir@hamzagil.com>.
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

//CHECK USER PERMISSION SECOND TIME 

$userModPer = (isset($_SESSION["usersPer"]) && !empty($_SESSION["usersPer"])) ? $_SESSION["usersPer"] : array();

$getMenus = $modules->setModulesMenu($userModPer);



$modulesMenuHtml = array();
foreach($getMenus AS $getMenu){
    if($getMenu['modulesParentId'] == "0"){
        
        $modulesMenuHtml[$getMenu['modulesId']]['Parent'] = array(
            'modulesId'     => $getMenu['modulesId'],
            'ModulIcon'   => $getMenu['modulesIcon'],
            'ModulAdi'      => $getMenu['modulesName'],
            'ModulUrl'      => "#".$getMenu['modulesName'],
        );
        
        $deger = substr($match['target'], 0, strrpos($match['target'], '/'));

        if(!empty($deger) && $deger == $getMenu['modulesPath']){
            $actives = 'class="active"';
        }else{
            $actives = '';
        }
        
        $modulesMenuHtml[$getMenu['modulesId']]['Parent']['isActive'] = $actives;
    }else{
        $modulesMenuHtml[$getMenu['modulesParentId']]['Sub'][$getMenu['modulesId']] = array(
            'ModulAdi'  => $getMenu['modulesName'],
            'ModulUrl'  => $router->generate($getMenu['modulesName']),
        );
        if($match['name'] == $getMenu['modulesName']){ $active = 'class="active"'; }
        else{ $active = ""; }
        $modulesMenuHtml[$getMenu['modulesParentId']]['Sub'][$getMenu['modulesId']]['isActive'] = $active;
    }
}

if($match['target'] == "homepage"){ $parentMomActive = 'class="active"'; }
else{ $parentMomActive = ""; }

/*
var_dump($modulesMenuHtml);
exit;
*/
$smarty->assign("parentMomActive",$parentMomActive);
$smarty->assign("menuHtmls",$modulesMenuHtml);

$smarty->display('menu.tpl');