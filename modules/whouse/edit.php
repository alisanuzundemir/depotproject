<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$alert              = NULL;
$id                 = intval($match["params"]["id"]);
if( isset($_POST["whouseName"]) && !empty($_POST["whouseName"]) ){

    $whouseModul   = new whouse();
    $whousetVar    = $whouseModul->variables;

    foreach($_POST AS $pKey => $pVal){
        if( array_key_exists($pKey, $whousetVar) ){
            if(checkDateInValue($pKey)){
                $whouseModul->$pKey = makeUnixTimeFormat($pVal);
            }else{
                $whouseModul->$pKey = $pVal;
            }
        }
    }
    $whouseModul->whouseId  = $id;

    $creater = $whouseModul->save();
    if($creater){
        $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}

$gwhouseModul   = new whouse();
$detail         = $gwhouseModul->find($id);

$smarty->assign("Alert",$alert);
$smarty->assign("detail",$detail);
$smarty->assign("FormUrl",$router->generate("Depo Düzenle",array("id"=>$id)));

$smarty->display(templateFileDir.'whouseEdit.tpl');