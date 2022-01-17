<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$alert              = NULL;

$inventoryModul     = new inventory();
$stocksModul        = new stocks();
$companiesModul     = new companies();

if( isset($_POST["stocksId"]) && !empty($_POST["inventoryQty"]) ){

    $invVar      = $inventoryModul->variables;
    
    foreach($_POST AS $pKey => $pVal){
        if( array_key_exists($pKey, $invVar) ){
            if(checkDateInValue($pKey)){
                $inventoryModul->$pKey = makeUnixTimeFormat($pVal);
            }else{
                $inventoryModul->$pKey = $pVal;
            }
        }
    }
    $inventoryModul->inventoryCreatedAt      = time();
    $inventoryModul->inventoryCreatedUser    = $_SESSION["loginUserId"];
    
    $creater = $inventoryModul->create();

    if($creater){
        $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}

$companies            = $companiesModul->search(array());
$stocks               = $stocksModul->search(array());

$smarty->assign("Alert",$alert);
$smarty->assign("companies",$companies);
$smarty->assign("stocks",$stocks);
$smarty->assign("fiyatTipi",$inventoryModul->priceType);
$smarty->assign("fiyatBirimi",$inventoryModul->priceUnit);
$smarty->assign("talepBirimi",$inventoryModul->invUnit);
$smarty->assign("FormUrl",$router->generate("Tedarik Ekle"));

$smarty->display(templateFileDir.'inventoryAdd.tpl');