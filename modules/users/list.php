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

$usersModul = new users;
$usersDepartment =  new users_usersdepartment;
$departmanlar = $usersDepartment->search(array(),array("usersDepartmentName"=> "ASC"));
$kullaniciDurum = $usersModul->userStatus;

$departmans = array();
foreach($departmanlar AS $departman){
    $departmans[$departman["usersDepartmentId"]] = $departman["usersDepartmentName"];
}

$lists = array();

$allUsers = $usersModul->search(array(),array("usersId"=>"ASC"));
if(count($allUsers) > 0){
    foreach($allUsers AS $allUser){
        $lists[$allUser['usersId']] = array(
            "usersId"           => $allUser['usersId'],
            "usersEmail"        => $allUser['usersEmail'],
            "usersNameSurname"  => $allUser['usersNameSurname'],
            "usersDepartment"   => (!isset($departmans[$allUser['usersDepartmentId']]))? 'Yok' : $departmans[$allUser['usersDepartmentId']],
            "usersTelephone"    => $allUser['usersTelephone'],
            "usersStatus"       => $kullaniciDurum[$allUser['usersStatus']],
        );
        if(findValueFromArray($paths,"modulesName","Kullanıcı Düzenle")){
            $edit = array("id"=>$allUser['usersId']);
           $lists[$allUser['usersId']]['usersEdit'] = $router->generate("Kullanıcı Düzenle",$edit); 
        }
        if(findValueFromArray($paths,"modulesName","Kullanıcı Sil")){
           $delete = array("id"=>$allUser['usersId']);
           $lists[$allUser['usersId']]['usersDelete'] = $router->generate("Kullanıcı Sil",$delete); 
        }        
    }
}

$smarty->assign("UsersList",$lists);
$smarty->display(templateFileDir.'usersList.tpl');