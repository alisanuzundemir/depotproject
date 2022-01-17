<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$alert              = NULL;
$toplamGelen        = 0;
$kalan              = 0;
$total              = 0;
$liveDepot          = array();
$setDepotList       = array();
$warehouse          = array();
$stocksId           = intval($match["params"]["id"]);


$stocksModul        = new stocks();
$whouseModul        = new whouse();
$depotinModul       = new inventory_inventoryIncoming();
$depotoutModul      = new inventory_inventoryoutproduct();
$depotLiveModul     = new inventory_inventorylivedata();
$inventoryModul     = new inventory();
$companiesModul     = new companies();

// MAL OLAN DEPOLAR GETİR
$getLiveDepot = $depotLiveModul->search(array("stocksId"=>$stocksId));
if($getLiveDepot){
    foreach($getLiveDepot AS $getDep){
        if( $getDep["depotLiveQty"] > 0 ){

            $liveDepot[$getDep["depotLiveId"]] = array(
                "depotLiveId" => $getDep["depotLiveId"],
                "stocksId"  => $getDep["stocksId"],
                "whouseId"  => $getDep["whouseId"],
                "whouseAdId"=> $getDep["whouseAdId"],
                "depotLiveQty"=> $getDep["depotLiveQty"]
            );
            $setDepotList[] = $getDep["whouseId"];

        }
    }

    $warehouse            = $whouseModul->mixQuery("SELECT * FROM whouse WHERE whouseId IN (".implode(",",array_values($setDepotList)).") ");
}
// MAL OLAN DEPOLAR GETİR

if( isset($_POST["whouseId"]) && !empty($_POST["depotoutQty"]) ){
    $miktarGecmis   = true;

    $calculateModul = new inventory_inventorylivedata();
    $calculateModul->stocksId = intval($stocksId);
    $calculateModul->whouseAdId = intval($_POST["whouseAdId"]);
    $malOlanlar = $calculateModul->find();

    if($malOlanlar){
        $toplam = $malOlanlar["depotLiveQty"];
        $cikan  = (float)$_POST['depotoutQty'];
        if($cikan < $toplam){
            $miktarGecmis  = false;
        }else{
            $miktarGecmis   = true;
        }
    }

    if( !$miktarGecmis ) {
        $invVar = $depotoutModul->variables;
        foreach ($_POST as $pKey => $pVal) {
            if (array_key_exists($pKey, $invVar)) {
                if (checkDateInValue($pKey)) {
                    $depotoutModul->$pKey = makeUnixTimeFormat($pVal);
                } else {
                    $depotoutModul->$pKey = $pVal;
                }
            }
        }
        $depotoutModul->stocksId            = $stocksId;
        $depotoutModul->depotoutCreatedAt   = time();
        $depotoutModul->depotoutCreatedUser = $_SESSION["loginUserId"];

        $creater = $depotoutModul->create();

        if ($creater) {
            //check first
            $dptLvMdl = new inventory_inventorylivedata();
            $dptLvMdl->stocksId   = $stocksId;
            $dptLvMdl->whouseId   = $_POST["whouseId"];
            $dptLvMdl->whouseAdId = $_POST["whouseAdId"];
            $result = $dptLvMdl->find();

            if($result && !empty($result) ){
                $cikar = $result["depotLiveQty"] - $_POST["depotoutQty"];

                $depotLiveModul->depotLiveId    = $result["depotLiveId"];
                $depotLiveModul->depotLiveQty   = $cikar;
                $depotLiveModul->save();
            }

            $alert = makeAlert("success");
        } else {
            $alert = makeAlert("danger");
        }
    }else{
        echo "burdayım";
        exit;
        $alert = makeAlert("danger");
    }
}


$companies            = $companiesModul->search(array());

$smarty->assign("Alert",$alert);
$smarty->assign("fiyatTipi",$inventoryModul->priceType);
$smarty->assign("fiyatBirimi",$inventoryModul->priceUnit);
$smarty->assign("talepBirimi",$inventoryModul->invUnit);
$smarty->assign("companies",$companies);
$smarty->assign("whouseList",$warehouse);
$smarty->assign("stocksId",$stocksId);
$smarty->assign("FormUrl",$router->generate("Mal Çıkış",array("id"=>$stocksId)));

$smarty->display(templateFileDir.'inventoryOutproduct.tpl');