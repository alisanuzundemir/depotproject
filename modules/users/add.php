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

$alert = "";

$usersModul = new users;
$usersDepartment =  new users_usersdepartment;
$departmanlar = $usersDepartment->search(array(),array("usersDepartmentName"=> "ASC"));

if(isset($_POST['usersNameSurname']) && isset($_POST['usersEmail'])){
    $usersModul->usersEmail = $_POST['usersEmail'];
    $check = $usersModul->find();
    if( is_null($check) || count($check) < 1){
        foreach($_POST AS $pKey => $pVal){
            if($pKey == "usersPassword"){
                $usersModul->usersPassword = password_hash($pVal,PASSWORD_BCRYPT,$options=array("cost"=>12));
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
        $create = $usersModul->create();

        if($create !== FALSE && strlen($create) > 0){
           $alert = makeAlert("success");
        }else{
            $alert = makeAlert("danger");
        }
    }else{
        $alert = makeAlert("danger");
    }
}

$smarty->assign("FormUrl",$router->generate("Kullanıcı Ekle"));
$smarty->assign("Departments",$departmanlar);
$smarty->assign("Alert",$alert);

$smarty->assign("Permissions",$modules->getModulesForPer());

$smarty->display(templateFileDir.'usersAdd.tpl');

