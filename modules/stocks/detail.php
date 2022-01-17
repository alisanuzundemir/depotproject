<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$inventory      = array();
$liveStock      = array();
$detail         = array();
$alert          = "";
$id             = intval($match["params"]["id"]);

$stocksModul    = new stocks();
$whouseModul    = new whouse();
$whouseAddres   = new whouse_whouseaddress();
$liveStocksModul= new inventory_inventorylivedata();
$inventoryModul = new inventory();
$inventoryOutModul = new inventory_inventoryoutproduct();

if( $id ){
    $getDetail  = $stocksModul->find($id);

    $getWhouse      = $whouseModul->find($getDetail["stocksWhouseId"]);
    $getWhoAdd      = $whouseAddres->find($getDetail["stocksAddressId"]);

    $detail     = array(
        "stocksId"      => $getDetail["stocksId"],
        "stocksName"    => $getDetail["stocksName"],
        "stocksNumber"  => $getDetail["stocksNumber"],
        "stocksBarcode" => $getDetail["stocksBarcode"],
        "stocksLocation"=> $getWhouse["whouseName"]." / ".$getWhoAdd["whouseAdName"],
    );

    $getLiveData = $liveStocksModul->search(array("stocksId"=>$getDetail["stocksId"]),array("depotLiveQty"=>"DESC"));
    if( !empty($getLiveData) && count($getLiveData) > 0 ){
        foreach( $getLiveData AS $glivedata ){

            $whModul    = new whouse();
            $whAdModul  = new whouse_whouseaddress();

            $getDepot   = $whModul->find($glivedata["whouseId"]);
            $getAdDepot = $whAdModul->find($glivedata["whouseAdId"]);

            $liveStock[$glivedata["depotLiveId"]] = array(
                "depotLiveId"   => $glivedata["depotLiveId"],
                "depotName"     => $getWhouse["whouseName"]." / ".$getWhoAdd["whouseAdName"],
                "depotQty"      => $glivedata["depotLiveQty"]
            );
        }
    }

    $getInventoryData = $inventoryModul->search(array("stocksId"=>$id),array("inventoryDate"=>"ASC"));
    if( !empty($getInventoryData) && count($getInventoryData) > 0 ){

        foreach($getInventoryData AS $setInv){
            $cmpn   = new companies();
            $getCmpn  = $cmpn->find($setInv["companiesId"]);

            $inventory[$setInv["inventoryId"]] = array(
                "inventoryId"   => $setInv["inventoryId"],
                "companies"     => $getCmpn["companiesName"],
                "quantity"      => $setInv["inventoryQty"]. " / ".$inventoryModul->invUnit[$setInv["inventoryQtyUnit"]],
                "price"         => $setInv["inventoryPrice"]."- ". $inventoryModul->priceType[$setInv["inventoryPriceType"]] ." / ".$inventoryModul->invUnit[$setInv["inventoryPriceUnit"]],
                "invDate"       => makeTimeFormat($setInv["inventoryDate"]),
            );
        }
    }

    $getSellerData = $inventoryOutModul->search(array("stocksId"=>$id),array("depotoutInvDate"=>"ASC"));
    if( !empty($getSellerData) && count($getSellerData) > 0 ){

        foreach($getSellerData AS $setOut){
            $cmpn   = new companies();
            $getCmpn  = $cmpn->find($setOut["companiesId"]);

            $selles[$setOut["depotoutId"]] = array(
                "depotoutId"   => $setOut["depotoutId"],
                "companies"     => $getCmpn["companiesName"],
                "quantity"      => $setOut["depotoutQty"]. " / ".$inventoryModul->invUnit[$setOut["depotoutQtyUnit"]],
                "price"         => $setOut["depotoutPrice"]."- ". $inventoryModul->priceType[$setOut["depotoutPriceType"]] ." / ".$inventoryModul->invUnit[$setOut["depotoutPriceUnit"]],
                "invDate"       => makeTimeFormat($setOut["depotoutCreatedAt"]),
                "selNo"         => $setOut["depotoutInvNumber"],
            );
        }
    }

}

$smarty->assign("detail",$detail);
$smarty->assign("livestocks",$liveStock);
$smarty->assign("inventory",$inventory);
$smarty->assign("selling",$selles);
$smarty->assign("Alert",$alert);
$smarty->assign("FormUrl",$router->generate("Stok Detay",array("id"=>$match["params"]["id"])));

$smarty->display(templateFileDir.'stocksDetail.tpl');