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
$alert      = "";
$userInfo   = array();

$usersModul = new users;
$usersDepartment =  new users_usersdepartment;
$departmanlar = $usersDepartment->search(array(),array("usersDepartmentName"=> "ASC"));
$kullaniciDurum = $usersModul->userStatus;

$departmans = array();
foreach($departmanlar AS $departman){
    $departmans[$departman["usersDepartmentId"]] = $departman["usersDepartmentName"];
}

if(isset($match['params']) && !empty($match['params']['id'])){
    if(isset($_POST['editUser'])){
        
        unset($_POST['editUser']);

        $usersModul->usersId = $match['params']['id'];
        foreach($_POST AS $pKey => $pVal){
            if( $pKey == "usersPassword" ){
                if(!empty($pVal) && strlen($pVal) > 2){
                    $usersModul->usersPassword = password_hash($pVal,PASSWORD_BCRYPT,$options=array("cost"=>12));
                }else{
                    unset($usersModul->usersPassword,$usersModul->variables["usersPassword"]);
                }
            }else if($pKey == "usersPermissions"){
                $data = array();
                foreach($pVal AS $permisK => $permisV){
                    $data[$permisK] = array_keys($permisV);
                }
                $usersModul->usersPermissions = json_encode($data,TRUE);
            }else{
                $usersModul->$pKey = $pVal;
            }
        }
        $save = $usersModul->save();

        if($save !== FALSE && strlen($save) > 0){
           $alert = makeAlert("success");
        }else{
            $alert = makeAlert("danger");
        }
        $usersModul->usersId = intval($match['params']['id']);
        $getUsers = $usersModul->find();
        foreach($getUsers AS $getUserKey => $getUserVal){
            $datalar = array();
            if($getUserKey == "usersPermissions"){
                $datalar = json_decode($getUserVal,TRUE);
                foreach($datalar AS $dKey => $dVal){
                    if(is_array($dVal)){
                        $userInfo[$getUserKey][$dKey] = array_flip($dVal);
                    }
                }
            }else{
                $userInfo[$getUserKey] = $getUserVal;
            }
            
        }
         $smarty->assign("UsersInfo",$userInfo);
    }else{
        $usersModul->usersId = intval($match['params']['id']);
        $getUsers = $usersModul->find();
        foreach($getUsers AS $getUserKey => $getUserVal){
            $datalar = array();
            if($getUserKey == "usersPermissions"){
                $datalar = json_decode($getUserVal,TRUE);
                foreach($datalar AS $dKey => $dVal){
                    if(is_array($dVal)){
                        $userInfo[$getUserKey][$dKey] = array_flip($dVal);
                    }
                }
            }else{
                $userInfo[$getUserKey] = $getUserVal;
            }
            
        }
    }
    $smarty->assign("UsersInfo",$userInfo);

}

$smarty->assign("FormUrl",$router->generate("Kullanıcı Düzenle",array("id"=>$match['params']['id'])));
$smarty->assign("Alert",$alert);
$smarty->assign("Permissions",$modules->getModulesForPer()); 
$smarty->assign("Departments",$departmans);

$smarty->display(templateFileDir.'usersEdit.tpl');