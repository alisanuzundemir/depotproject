<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$alert              = NULL;

if( isset($_POST["whouseId"]) && !empty($_POST["whouseAdName"]) ){
    
    $whouseAdModul   = new whouse_whouseaddress();
    $whouseAdsetVar    = $whouseAdModul->variables;
    
    foreach($_POST AS $pKey => $pVal){
        if( array_key_exists($pKey, $whouseAdsetVar) ){
            if(checkDateInValue($pKey)){
                $whouseAdModul->$pKey = makeUnixTimeFormat($pVal);
            }else{
                $whouseAdModul->$pKey = $pVal;
            }
        }
    }
    $whouseAdModul->whouseAdCreatedAt      = time();
    $whouseAdModul->whouseAdCreatedUser    = $_SESSION["usersId"];
    
    $creater = $whouseAdModul->create();

    if($creater){
        $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}

$whouseModul    = new whouse();
$whouseList     = $whouseModul->search(array(),array("whouseName"=>"ASC"));

$smarty->assign("Alert",$alert);
$smarty->assign("whouseList",$whouseList);
$smarty->assign("FormUrl",$router->generate("Depo Bolum Ekle"));

$smarty->display(templateFileDir.'whouseAdressAdd.tpl');