<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$tedarikListesi = array();

$inventoryModul = new inventory();
$stocksModul    = new stocks;
$companiesModul = new companies();

$inventoryList  = $inventoryModul->search(array(),array("inventoryDate"=>"DESC"),"","","",array(),array());

foreach ($inventoryList AS $invList){

    $stcks  = new stocks();
    $cmpn   = new companies();

    $getStcks = $stcks->find($invList["stocksId"]);
    $getCmpn  = $cmpn->find($invList["companiesId"]);

    $tedarikListesi[$invList["inventoryId"]] = array(
        "inventoryId"   => $invList["inventoryId"],
        "stocks"        => $getStcks["stocksName"],
        "companies"     => $getCmpn["companiesName"],
        "quantity"      => $invList["inventoryQty"]. " / ".$inventoryModul->invUnit[$invList["inventoryQtyUnit"]],
        "invDate"       => makeTimeFormat($invList["inventoryDate"]),
    );

    if(findValueFromArray($paths,"modulesName","Tedarik Detay")){
        $id = array("id"=>$invList['inventoryId']);
        $tedarikListesi[$invList['inventoryId']]['inventoryDetail'] = $router->generate("Tedarik Detay",$id);
    }

    if(findValueFromArray($paths,"modulesName","Mal Kabul")){
        $id = array("id"=>$invList['inventoryId']);
        $tedarikListesi[$invList['inventoryId']]['inventoryAccept'] = $router->generate("Mal Kabul",$id);
    }

}

$smarty->assign("inventoryList",$tedarikListesi);
$smarty->display(templateFileDir.'inventoryList.tpl');