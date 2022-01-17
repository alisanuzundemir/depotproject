<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$alert              = NULL;

$inventoryModul     = new inventory();
$stocksModul        = new stocks();
$whouseModul        = new whouse();
$depotinModul       = new inventory_inventoryIncoming();
$depotLiveModul     = new inventory_inventorylivedata();

// STOCKS NUMARASI GETİR
$inventoryId = intval($match["params"]["id"]);
$inventoryModul->inventoryId = $inventoryId;
$inventoryFind = $inventoryModul->find();
// STOCKS NUMARASI GETİR

$toplamGelen = 0;
$kalan = 0;

//TOPLAM HESAPLA
$total = 0;
$totalIncoming = $depotinModul->mixQuery("SELECT SUM(depotInAcceptQty) AS total FROM depotin WHERE inventoryId='".$inventoryId."' ");

if($totalIncoming && $totalIncoming[0]["total"] > 0){
    $toplamGelen = $totalIncoming[0]["total"];
    $kalan       = $inventoryFind["inventoryQty"] - $toplamGelen;

    $getTotal = $totalIncoming[0]["total"];
    $invTotal = $inventoryFind["inventoryQty"];
    if($getTotal >= $invTotal ){
        $miktarGecmis = true;
    }else{
        $miktarGecmis = false;
    }
}else{
    $miktarGecmis = false;
    $kalan = $inventoryFind["inventoryQty"];
}
//TOPLAM HESAPLA

if( isset($_POST["depotInAcceptQty"]) && !empty($_POST["depotCargoComp"]) ){

    if( !$miktarGecmis ) {
        $invVar = $depotinModul->variables;
        foreach ($_POST as $pKey => $pVal) {
            if (array_key_exists($pKey, $invVar)) {
                if (checkDateInValue($pKey)) {
                    $depotinModul->$pKey = makeUnixTimeFormat($pVal);
                } else {
                    $depotinModul->$pKey = $pVal;
                }
            }
        }
        $depotinModul->stocksId = $inventoryFind["stocksId"];
        $depotinModul->inventoryId = $inventoryId;
        $depotinModul->depotInAcceptDate = time();
        $depotinModul->depotInCreatedAt  = time();
        $depotinModul->depotInCreatedUser = $_SESSION["loginUserId"];

        $creater = $depotinModul->create();

        if ($creater) {
            //check first
            $dptLvMdl = new inventory_inventorylivedata();
            $dptLvMdl->stocksId   = $inventoryFind["stocksId"];
            $dptLvMdl->whouseId   = $_POST["whouseId"];
            $dptLvMdl->whouseAdId = $_POST["whouseAdId"];
            $result = $dptLvMdl->find();

            if($result && !empty($result) ){
                $topla = $result["depotLiveQty"] + $_POST["depotInAcceptQty"];

                $depotLiveModul->depotLiveId    = $result["depotLiveQty"];
                $depotLiveModul->stocksId       = $inventoryFind["stocksId"];
                $depotLiveModul->whouseId       = $_POST["whouseId"];
                $depotLiveModul->whouseAdId     = $_POST["whouseAdId"];
                $depotLiveModul->depotLiveQty   = $topla;
                $depotLiveModul->save();
            }else{
                $depotLiveModul->stocksId       = $inventoryFind["stocksId"];
                $depotLiveModul->whouseId       = $_POST["whouseId"];
                $depotLiveModul->whouseAdId     = $_POST["whouseAdId"];
                $depotLiveModul->depotLiveQty   = $_POST["depotInAcceptQty"];
                $depotLiveModul->create();
            }

            $alert = makeAlert("success");
        } else {
            $alert = makeAlert("danger");
        }
    }else{
        $alert = makeAlert("danger");
    }
}

$warehouse            = $whouseModul->search(array());

$smarty->assign("Alert",$alert);
$smarty->assign("inventoryDetail",$inventoryFind);
$smarty->assign("talepBirimi",$inventoryModul->invUnit);
$smarty->assign("whouseList",$warehouse);
$smarty->assign("toplamGelen",$toplamGelen);
$smarty->assign("kalan",$kalan);

$smarty->assign("FormUrl",$router->generate("Mal Kabul",array("id"=>$inventoryId)));

$smarty->display(templateFileDir.'inventoryIncoming.tpl');