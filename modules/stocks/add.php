<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$alert              = NULL;
$stocksModul        = new stocks();
$whouseModul        = new whouse();

$warehouse          = $whouseModul->search(array());

if( isset($_POST["stocksName"]) && !empty($_POST["stocksNumber"]) ){

    $stocksVar      = $stocksModul->variables;
    
    foreach($_POST AS $pKey => $pVal){
        if( array_key_exists($pKey, $stocksVar) ){
            if(checkDateInValue($pKey)){
                $stocksModul->$pKey = makeUnixTimeFormat($pVal);
            }else{
                $stocksModul->$pKey = $pVal;
            }
        }
    }
    $stocksModul->stocksCreatedAt      = time();
    $stocksModul->stocksCreatedUser    = $_SESSION["loginUserId"];
    
    $creater = $stocksModul->create();
    if($creater){
        $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}

//Generating Stock Barcode
for($i=0;$i<=20;$i++){
    $numberS = uniqidReal();
    $checkCode = $stocksModul->search(array("stocksNumber"=>$numberS));
    if( !$checkCode && count($checkCode) < 1 ){
        break;
    }
}


$smarty->assign("Alert",$alert);
$smarty->assign("stocksNumbers",$numberS);
$smarty->assign("whouseList",$warehouse);
$smarty->assign("FormUrl",$router->generate("Stok Ekle"));

$smarty->display(templateFileDir.'stocksAdd.tpl');