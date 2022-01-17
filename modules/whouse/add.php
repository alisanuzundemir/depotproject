<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$alert              = NULL;

if( isset($_POST["whouseName"]) && !empty($_POST["whouseName"]) ){
    
    $whouseModul   = new whouse();
    $whousetVar    = $whouseModul->variables;
    
    foreach($_POST AS $pKey => $pVal){
        if( array_key_exists($pKey, $whousetVar) ){
            if(checkDateInValue($pKey)){
                $whouseModul->$pKey = makeUnixTimeFormat($pVal);
            }else{
                $whouseModul->$pKey = $pVal;
            }
        }
    }
    $whouseModul->whouseCreatedAt      = time();
    $whouseModul->whouseCreatedUser    = $_SESSION["usersId"];
    
    $creater = $whouseModul->create();
    if($creater){
        $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}

$smarty->assign("Alert",$alert);
$smarty->assign("FormUrl",$router->generate("Depo Ekle"));

$smarty->display(templateFileDir.'whouseAdd.tpl');