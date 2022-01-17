<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$supListExp     = array();
$supportList    = array();
$supportDetail  = array();
$detail         = array();
$alert          = "";

$id                 = intval($match["params"]["id"]);
$whoWantSupport     = $_SESSION["loginUserName"];
$whoWantSupportId   = $_SESSION["usersId"];

$usersModul     = new users;
$usersModul->usersId = intval($_SESSION["usersId"]);
$department     = $usersModul->find();

// GET MAIN SUPPORT DETAIL
$supportModul   = new support;
$supportDetail  = $supportModul->find($id);

$findUser       = new users;
$detUser        = $findUser->find($supportDetail["supportUserId"]);

$detail         = array(
    "supportId"         => $supportDetail["supportId"],
    "supportUser"       => $detUser["usersNameSurname"],
    "supportSubject"    => $supportDetail["supportSubject"],
    "supportText"       => $supportDetail["supportText"],
    "supportDate"       => makeTimeFormat($supportDetail["supportDate"]),
    "supportStatusName" => $supportModul->status[$supportDetail["supportStatus"]],
    "supportStatus"     => $supportDetail["supportStatus"]
);
// GET MAIN SUPPORT DETAIL

if( isset($_POST["supportUserId"]) && !empty($_POST["supportText"]) ){
    
    // CREATE SUPPORT ANSWER
    $supportModul   = new support;
    $supportVar     = $supportModul->variables;
    
    $supportStatus  = $_POST["supportStatus"];
    unset($_POST["supportStatus"]);
    
    foreach($_POST AS $pKey => $pVal){
        if( array_key_exists($pKey, $supportVar) ){
            if(checkDateInValue($pKey)){ 
                $supportModul->$pKey = makeUnixTimeFormat($pVal); 
            }else{
                $supportModul->$pKey = $pVal;
            }
        }
    }
    $supportModul->supportParentId  = intval($match["params"]["id"]);
    $supportModul->supportDate      = time();
    $creater = $supportModul->create();
    // CREATE SUPPORT ANSWER
    
    if($creater){
        $alert = makeAlert("success");
        
        // UPDATE THIS SUPPORT
        $supportModulSave = new support;
        $supportModulSave->supportId    = intval($match["params"]["id"]);
        $supportModulSave->supportStatus= $supportStatus;
        $supportModulSave->save();
        // UPDATE THIS SUPPORT
        
    }else{
        $alert = makeAlert("danger");
    }
}

// LIST SUPPORT ANSWER
$supportListModul = new support;
$supportList    = $supportListModul->search(array("supportParentId"=>intval($match["params"]["id"])),array("supportDate"=>"ASC"));
foreach($supportList AS $supList){
    $supListExp[$supList["supportId"]] = array(
        "supportId"     => $supList["supportId"],
        "supportSubject"=>$supList["supportSubject"],
        "supportText"   => $supList["supportText"],
        "supportDate"   => makeTimeFormat($supList["supportDate"]),
        "supportStatus" => $supportModul->status[$supList["supportStatus"]]
    );
    
    $userInfo   = array();
    $users      = new users;
    $users->usersId = intval($supList["supportUserId"]);
    $userInfo   = $users->find();
    $supListExp[$supList["supportId"]]["usersNameSurname"] = $userInfo["usersNameSurname"];
}
// LIST SUPPORT ANSWER

$smarty->assign("supportUserName",$whoWantSupport);
$smarty->assign("supportUserId",$whoWantSupportId);
$smarty->assign("supportStatus",$supportModul->status);
$smarty->assign("supportUserDepartment",$department["usersDepartmentId"]);
$smarty->assign("detail",$detail);
$smarty->assign("Alert",$alert);
$smarty->assign("FormUrl",$router->generate("Destek Detayı",array("id"=>$match["params"]["id"])));
$smarty->assign("supportList",$supListExp); 

$smarty->display(templateFileDir.'supportDetail.tpl'); 