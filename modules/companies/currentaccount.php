<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$alert          = NULL;
$lists          = array();
$samplelists    = array();
$detail         = array();
$orderLists     = array();
$patternLists   = array();

/* Companies Detail */
$companies = new companies;
$companiesDetail = $companies->find($match["params"]["id"]);

$detail["name"]             = $companiesDetail["companiesName"];
$detail["sname"]            = $companiesDetail["companiesShortName"];
$detail["stockcode"]        = $companiesDetail["companiesStockCode"];
$detail["telephone"]        = $companiesDetail["companiesTel"];
$detail["fax"]              = $companiesDetail["companiesFax"];
$detail["email"]            = $companiesDetail["companiesEmail"];
$detail["web"]              = $companiesDetail["companiesWeb"];
$detail["tax"]              = $companiesDetail["companiesTaxAdmin"];
$detail["taxNumber"]        = $companiesDetail["companiesTaxNumber"];
$detail["note"]             = $companiesDetail["companiesNote"];
$detail["paydays"]          = (!empty($companiesDetail["companiesPayDays"]))?implode(",",array_values(json_decode($companiesDetail["companiesPayDays"],TRUE))):"Belirtilmemiş";
$detail["shipmentdays"]     = (!empty($companiesDetail["companiesShipmentDay"]))?implode(",",array_values(json_decode($companiesDetail["companiesShipmentDay"],TRUE))):"Belirtilmemiş";
/* Companies Detail */

/*Companies Pay Periods*/
if(isset($companies->payPeriods[$companiesDetail["companiesPayPeriods"]])){
    $detail["period"]   = $companies->payPeriods[$companiesDetail["companiesPayPeriods"]];
}else {
    $detail["period"]   = "Belirtilmemiş";
}
/*Companies Pay Periods*/

/* Companies Feature */
if( isset($companies->companiesFeatures[$companiesDetail["companiesFeature"]]) ){
    $detail["feature"]          = $companies->companiesFeatures[$companiesDetail["companiesFeature"]];
}else{
    $detail["feature"]          = "Belirtilmemiş";
}
/* Companies Feature */

/* Companies Type */
if( isset($companies->companiesType[$companiesDetail["companiesType"]]) ){
    $detail["type"]     = $companies->companiesType[$companiesDetail["companiesType"]];
}else{
    $detail["type"]     = "Belirtilmemiş";
}
/* Companies Type */

/* Auth List Start */
$companiesAuthModul = new companies_authoritieslist;
$companiesAuthList  = $companiesAuthModul->search(array("companiesAuthoritiesCompanyId"=>$match["params"]["id"]), array("companiesAuthoritiesId"=>"ASC"));

$authMission        = new authoritiesmissions;
$autMissonList      = $authMission->search();

$authMissons        = array();
foreach($autMissonList AS $authsMiss ){
    $authMissons[$authsMiss["authoritiesMissionsId"]] = $authsMiss["authoritiesMissionsName"];
}

foreach($companiesAuthList AS $companyAuths){
    $lists[$companyAuths['companiesAuthoritiesId']] = array(
        "id"        => $companyAuths['companiesAuthoritiesId'],
        "name"      => $companiesAuthModul->gender[$companyAuths['companiesAuthoritiesGender']]. " " .$companyAuths['companiesAuthoritiesNameSurname'],
        "email"     => $companyAuths['companiesAuthoritiesMail'],
        "mission"   => (!empty($authMissons[$companyAuths['companiesAuthoritiesMissionsId']]))?$authMissons[$companyAuths['companiesAuthoritiesMissionsId']]:"Belirtilmemiş",
    );
}
/* Auth List Start */

/* ADDRESS */
$listAddress        = array();
$companiesAddres    = new companies_companiesaddress;
$getCompanies       = $companiesAddres->search(array("companiesId"=>$match["params"]["id"]), array("companiesAddressId"=>"ASC"));

foreach($getCompanies AS $compAddress){
    
    $getCountry = array();
    $getCity    = array();
    $getStates  = array();
    
    if(!empty($compAddress["companiesAddressCountryId"])){
        $getCountry = getCountry("",$compAddress["companiesAddressCountryId"]);
    }else{
        $getCountry["name"] = "Belirtilmemiş";
    }
    if(!empty($compAddress["companiesAddressStateId"])){
        $getStates  = getState("", $compAddress["companiesAddressStateId"]);
    }else{
        $getStates["name"]  = "Belirtilmemiş";
    }
    if(!empty($compAddress["companiesAddressStateId"])){
        $getCity    = getCity("",$compAddress["companiesAddressCityId"]);
    }else{
        $getCity["name"]    = "Belirtilmemiş";
    }
    
    $listAddress[$compAddress["companiesAddressId"]] = array(
        "addressName"   => $compAddress["companiesAddressName"],
        "adressText"    => $compAddress["companiesAddressText"],
        "zipcode"       => $compAddress["companiesAddressZipCode"],
        "country"       => $getCountry["name"],
        "states"        => $getStates["name"],
        "city"          => $getCity["name"] 
        
    );
}

/* ADDRESS */
$smarty->assign("orderList",$orderLists);
$smarty->assign("sampleOrderList",$samplelists);
$smarty->assign("CompaniesAuthList",$lists);
$smarty->assign("listaddress",$listAddress);
$smarty->assign("Alert",$alert);
$smarty->assign("detail",$detail);
$smarty->display(templateFileDir.'currentaccount.tpl'); 