<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$supListExp     = array();

$supportList    = array();
$conditions     = array();

$usersModul     = new users;
$usersModul->usersId = intval($_SESSION["usersId"]);
$department     = $usersModul->find();

if( $department["usersDepartmentId"] != 3 ){
    $conditions = array("supportUserId"=>intval($_SESSION["usersId"]),"supportParentId"=>"0");
}else{
    $conditions = array("supportParentId"=>"0");
}

$supportModul   = new support;
$supportList    = $supportModul->search($conditions,array("supportDate"=>"DESC"),"","","",array(),array());

foreach($supportList AS $supList){
    $supListExp[$supList["supportId"]] = array(
        "supportId"     => $supList["supportId"],
        "supportSubject"=>$supList["supportSubject"],
        "supportText"   => mb_substr($supList["supportText"], 0,100),
        "supportDate"    => makeTimeFormat($supList["supportDate"]),
        "supportStatus" => $supportModul->status[$supList["supportStatus"]]
    );
    
    $userInfo   = array();
    $users      = new users;
    $users->usersId = intval($supList["supportUserId"]);
    $userInfo   = $users->find();
    $supListExp[$supList["supportId"]]["usersNameSurname"] = $userInfo["usersNameSurname"];
    
    if(findValueFromArray($paths,"modulesName","Destek Detayı")){
        $id = array("id"=>$supList['supportId']);
        $supListExp[$supList['supportId']]['supportDetail'] = $router->generate("Destek Detayı",$id); 
    }
}

$smarty->assign("supportList",$supListExp); 
$smarty->display(templateFileDir.'supportList.tpl'); 