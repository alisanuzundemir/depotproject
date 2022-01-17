<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$whouseList     = array();

$whouseModule   = new whouse();
$whouses        = $whouseModule->search(array(),array("whouseCreatedAt"=>"DESC"),"","","",array(),array());

foreach($whouses AS $whou){
    $whouseList[$whou["whouseId"]] = array(
        "whouseId"      => $whou["whouseId"],
        "whouseName"    => $whou["whouseName"],
    );
    
    if(findValueFromArray($paths,"modulesName","Depo Düzenle")){
        $id = array("id"=>$whou['whouseId']);
        $whouseList[$whou['whouseId']]['whouseUpdate'] = $router->generate("Depo Düzenle",$id);
    }
    if(findValueFromArray($paths,"modulesName","Depo Sil")){
        $delete = array("id"=>$whou['whouseId']);
        $whouseList[$whou['whouseId']]['whouseDelete'] = $router->generate("Depo Sil",$delete);
    }
}

$smarty->assign("whouseList",$whouseList);
$smarty->display(templateFileDir.'whouseList.tpl');