<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$whouseList     = array();

$whouseAdModule   = new whouse_whouseaddress();
$whousesAd        = $whouseAdModule->search(array(),array("whouseAdCreatedAt"=>"DESC"),"","","",array(),array());

foreach($whousesAd AS $whou){

    $nameGet          = array();
    $whouseModule     = new whouse();
    $nameGet          = $whouseModule->find($whou["whouseId"]);

    $whouseList[$whou["whouseAdId"]] = array(
        "whouseAdId"    => $whou["whouseAdId"],
        "whouseName"    => $nameGet["whouseName"],
        "whouseAdName"  => $whou["whouseAdName"]
    );
    
    if(findValueFromArray($paths,"modulesName","Depo Adres Düzenle")){
        $id = array("id"=>$whou['whouseAdId']);
        $whouseList[$whou['whouseAdId']]['whouseUpdate'] = $router->generate("Depo Adres Düzenle",$id);
    }
    if(findValueFromArray($paths,"modulesName","Depo Adres Sil")){
        $delete = array("id"=>$whou['whouseAdId']);
        $whouseList[$whou['whouseAdId']]['whouseDelete'] = $router->generate("Depo Adres Sil",$delete);
    }
}

$smarty->assign("whouseList",$whouseList);
$smarty->display(templateFileDir.'whouseAddressList.tpl');