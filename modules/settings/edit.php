<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$alert = NULL;
$createApp = FALSE;

$settingsModul = new settings;
$getTables = $settingsModul->getAllTables();

if( isset($_POST) && count($_POST) > 0 ){

    $approvalModul = new administrationapproval;
 
    foreach($_POST AS $key => $value){
        if(array_key_exists($key, $approvalModul->variables)){
            
            $approvalModul->$key = $value;
        }
    }
    
    if(count(array_filter($approvalModul->variables)) == count($approvalModul->variables)) {
        $createApp = $approvalModul->create();
    }
    
    if($createApp!== FALSE && $createApp > 0){
        $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}

$approvalModul2 = new administrationapproval;
$approvalModulGet = $approvalModul2->search(array(),array("administrationApprovalId"=>"ASC"));

//$smarty->assign("SuppliesList",$lists);

$smarty->assign("approvalList",$approvalModulGet);
$smarty->assign("tables",$getTables);
$smarty->assign("FormUrl",$router->generate("Ayarlar"));
$smarty->assign("Alert",$alert);
$smarty->display(templateFileDir.'settings.tpl'); 

