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
if(isset($_POST['username']) && isset($_POST['password']) && filter_var($_POST['username'], FILTER_VALIDATE_EMAIL) ){
    
    //echo password_hash($_POST['password'],PASSWORD_BCRYPT,$options=array("cost"=>12));
    
    $checkUser = new users;
    $checkUser->usersEmail      = trim($_POST['username']);
    $checkUser->usersStatus     = 1;
    $isUser = $checkUser->find();
    
    if( $isUser && count($isUser) > 0){
        if(password_verify($_POST['password'], $isUser['usersPassword'])){
            
            $sessID = session_id();
            
            $_SESSION['loginStatus']            = "ok";
            $_SESSION['loginUserId']            = $isUser["usersId"];
            $_SESSION['loginUserName']          = $isUser["usersNameSurname"];
            $_SESSION['loginUserDepartment']    = $isUser["usersDepartmentId"];
            $_SESSION['loginUserSessionId']     = $sessID;
            $_SESSION['loginUserSession']       = makeCrypt($sessID.SALT);
            
            $setOnlineUsers = new usersonline;
            $setOnlineUsers->loginUsersId           = $isUser["usersId"];
            $setOnlineUsers->loginUsersSessionId    = makeCrypt($sessID.SALT);
            $setOnlineUsers->loginUsersIp           = getClientIp();
            $setOnlineUsers->loginUsersBrowser      = getBrowserSpecific();
            $setOnlineUsers->loginUsersLoginTime    = time();
            $setOnlineUsers->loginUsersPermission   = $isUser["usersPermissions"];
            
            $setOnlineUsers->create();
            
            echo "ok";
        }else{
            $_SESSION['loginStatus'] = "notok";
            echo " Kullanıcı Adı ve/veya Şifre Yanlış";
        }
    }else{
        $_SESSION['loginStatus'] = "notok";
        echo " Kullanıcı Adı ve/veya Şifre Yanlış";
    }
}else{
    @session_destroy();
    die("ERROR");
    exit(1);
}