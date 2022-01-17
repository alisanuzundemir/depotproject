<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$stocksListesi     = array();

$stocksModul    = new stocks;
$stocksList     = $stocksModul->search(array(),array("stocksId"=>"DESC"),"","","",array(),array());

foreach($stocksList AS $sList){
    $whouseModul    = new whouse();
    $whouseAddres   = new whouse_whouseaddress();

    $getWhouse      = $whouseModul->find($sList["stocksWhouseId"]);
    $getWhoAdd      = $whouseAddres->find($sList["stocksAddressId"]);

    $stocksListesi[$sList["stocksId"]] = array(
        "stocksId"      => $sList["stocksId"],
        "stocksName"    => $sList["stocksName"],
        "stocksNumber"  => $sList["stocksNumber"],
        "stocksBarcode" => $sList["stocksBarcode"],
        "stocksLocation"=> $getWhouse["whouseName"]." / ".$getWhoAdd["whouseAdName"]
    );

    if(findValueFromArray($paths,"modulesName","Mal Çıkış")){
        $id = array("id"=>$sList['stocksId']);
        $stocksListesi[$sList['stocksId']]['outProduct'] = $router->generate("Mal Çıkış",$id);
    }

    if(findValueFromArray($paths,"modulesName","Stok Düzenle")){
        $id = array("id"=>$sList['stocksId']);
        $stocksListesi[$sList['stocksId']]['stocksEdit'] = $router->generate("Stok Düzenle",$id);
    }

    if(findValueFromArray($paths,"modulesName","Stok Detay")){
        $id = array("id"=>$sList['stocksId']);
        $stocksListesi[$sList['stocksId']]['stocksDetail'] = $router->generate("Stok Detay",$id);
    }

    if(findValueFromArray($paths,"modulesName","Stok Sil")){
        $id = array("id"=>$sList['stocksId']);
        $stocksListesi[$sList['stocksId']]['stocksDelete'] = $router->generate("Stok Sil",$id);
    }
}

$smarty->assign("stokcsList",$stocksListesi);
$smarty->display(templateFileDir.'stocksList.tpl');