<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$detail         = array();
$alert          = "";
$stocksModul    = new stocks();
$whouseModul    = new whouse();
$whouseAdModul  = new whouse_whouseaddress();

$id             = intval($match["params"]["id"]);

if(isset($_POST["stocksName"]) && isset($_POST["stocksBarcode"]) && !empty($_POST["stocksName"]) && !empty($_POST["stocksBarcode"]) ){

    $stocksModul->stocksId          = $id;
    $stocksModul->stocksName        = $_POST["stocksName"];
    $stocksModul->stocksBarcode     = $_POST["stocksBarcode"];
    $stocksModul->stocksDesc        = $_POST["stocksDesc"];
    $stocksModul->stocksWhouseId    = $_POST["stocksWhouseId"];
    $stocksModul->stocksAddressId   = $_POST["stocksAddressId"];
    if($stocksModul->save()){
        $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}

$gstocksModul   = new stocks();
$detail         = $gstocksModul->find($id);

$warehouse            = $whouseModul->search(array());
$warehouseAd          = $whouseAdModul->search(array("whouseId"=>$detail["stocksWhouseId"]));

$smarty->assign("FormUrl",$router->generate("Stok Düzenle",array("id"=>$match["params"]["id"])));
$smarty->assign("detail",$detail);
$smarty->assign("whouseList",$warehouse);
$smarty->assign("whouseAdList",$warehouseAd);
$smarty->assign("Alert",$alert);
$smarty->display(templateFileDir.'stocksEdit.tpl');