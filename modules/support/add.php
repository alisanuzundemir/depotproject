<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$whoWantSupport     = $_SESSION["loginUserName"];
$whoWantSupportId   = $_SESSION["usersId"];
$alert              = NULL;

if( isset($_POST["supportUserId"]) && !empty($_POST["supportSubject"]) ){
    
    $supportModul   = new support;
    $supportVar     = $supportModul->variables;
    
    foreach($_POST AS $pKey => $pVal){
        if( array_key_exists($pKey, $supportVar) ){
            if(checkDateInValue($pKey)){ 
                $supportModul->$pKey = makeUnixTimeFormat($pVal); 
            }else{
                $supportModul->$pKey = $pVal;
            }
        }
    }
    $supportModul->supportDate      = time();
    $supportModul->supportStatus    = 1;
    
    $creater = $supportModul->create();
    if($creater){
        $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}

$smarty->assign("Alert",$alert);
$smarty->assign("supportUserName",$whoWantSupport);
$smarty->assign("supportUserId",$whoWantSupportId);
$smarty->assign("FormUrl",$router->generate("Destek Talebi Oluştur"));

$smarty->display(templateFileDir.'supportAdd.tpl'); 