<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$detail         = array();
$depotAll       = array();

$alert          = "";
$id             = intval($match["params"]["id"]);

$stockModul     = new stocks();
$companyModul   = new companies();
$inventoryModul = new inventory();
$depotModul     = new inventory_inventoryIncoming();

$inventoryModul->inventoryId = $id;
$getInvDetail   = $inventoryModul->find();

if($getInvDetail){

    $stockModul->stocksId = $getInvDetail["stocksId"];
    $getStock = $stockModul->find();

    $companyModul->companiesId = $getInvDetail["companiesId"];
    $getCompany = $companyModul->find();

    $detail = array(
        "inventoryId"   => $getInvDetail["inventoryId"],
        "stocksName"    => $getStock["stocksName"],
        "companyName"   => $getCompany["companiesName"],
        "inventoryDate" => makeTimeFormat($getInvDetail["inventoryDate"]),
        "inventoryQty"  => $getInvDetail["inventoryQty"]. " " .$inventoryModul->invUnit[$getInvDetail["inventoryQtyUnit"]],
        "inventoryPrice"=> $getInvDetail["inventoryPrice"]. " ".$inventoryModul->priceType[$getInvDetail["inventoryPriceType"]]. " / ".$inventoryModul->priceUnit[$getInvDetail["inventoryPriceUnit"]],
    );
}

$getAllDepot = $depotModul->search(array("inventoryId" => $getInvDetail["inventoryId"]),array("depotInAcceptDate" => "ASC"));
if( $getAllDepot ){
    foreach($getAllDepot AS $setDepot){
        $whouseModul  = new whouse();
        $whouseAdModul= new whouse_whouseaddress();

        $whouseModul->whouseId = $setDepot["whouseId"];
        $getwhouse  = $whouseModul->find();

        $whouseAdModul->whouseAdId = $setDepot["whouseAdId"];
        $getwhouseAd = $whouseAdModul->find();

        $depotAll[$setDepot["depotInId"]] = array(
            "depoIntId" => $setDepot["depotInId"],
            "depotName"  => $getwhouse["whouseName"],
            "depotArea"  => $getwhouseAd["whouseAdName"],
            "depotCargoComp"    => $setDepot["depotCargoComp"],
            "depotInvNumber"    => $setDepot["depotInInvNumber"],
            "depotInAcceptDate" => makeTimeFormat($setDepot["depotInAcceptDate"]),
            "depotInAcceptQty"  => $setDepot["depotInAcceptQty"]. " " . $inventoryModul->invUnit[$setDepot["depotInAcceptQtyUnit"]]
        );

    }
}



$smarty->assign("detail",$detail);
$smarty->assign("depotAlls",$depotAll);
$smarty->assign("Alert",$alert);
$smarty->assign("FormUrl",$router->generate("Tedarik Detay",array("id"=>$match["params"]["id"])));

$smarty->display(templateFileDir.'inventoryDetail.tpl');