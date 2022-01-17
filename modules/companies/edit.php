<?php

/* 
 * The MIT License
 *
 * Copyright 2017 Alişan Uzundemir <alisan.uzundemir@hamzagil.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
 
$alert = "";
$companiesModul         = new companies;
$companiesAddressModul  = new companies_companiesaddress;

/* EDIT IF UPDATE HAVE */
if(isset($_POST['companiesName']) && isset($_POST['companiesEmail'])){
    
    /* COMPANY DATA UPDATE */
    $companiesVariables = $companiesModul->variables;
        
    foreach($_POST AS $pKey => $pVal){
        if(isset($companiesVariables[$pKey])){
            if($pKey=="companiesPayDays"){
                $companiesModul->$pKey = json_encode($pVal,JSON_UNESCAPED_UNICODE);
            }else{
                $companiesModul->$pKey = $pVal;
            }
        }
    }
    $companiesModul->companiesId = intval($match["params"]["id"]);
    $save = $companiesModul->save();
    /* COMPANY DATA UPDATE */
    
    /* COMPANY ADDRESS DATA UPDATE OR CREATE */
    $compAddPost    = ( isset($_POST["companyAddress"]) && count($_POST["companyAddress"]) > 0 ) ? $_POST["companyAddress"] : array();
    if(is_array($compAddPost) && count($compAddPost) > 0){
        foreach($compAddPost AS $compAddPKey){
            if( strlen($compAddPKey["companiesAddressName"]) > 3){
                $companiesAddres    = "";
                $companiesAddres    = new companies_companiesaddress;
                $companiesAddres->companiesId = $match["params"]["id"];

                foreach($compAddPKey AS $cpKey => $cpVal){
                    if($cpKey == "companiesAddressId" && $cpVal != "0"){
                        $companiesAddres->$cpKey = $cpVal;
                    }else if($cpVal!="0"){
                        $companiesAddres->$cpKey = $cpVal;
                    }
                }

                if($compAddPKey["companiesAddressId"]!="0"){
                    $create2 = $companiesAddres->save($compAddPKey["companiesAddressId"]);
                }else{
                    $create2 = $companiesAddres->create();
                }
            }
        }
    }
    
    /* COMPANY ADDRESS DATA UPDATE OR CREATE */

    if($save !== FALSE){
       $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}
/* EDIT IF UPDATE HAVE */

/* GET DATA FOR JUST COMPANY TABLE */
$getCompanyData = $companiesModul->find(intval($match["params"]["id"]));
/* GET DATA FOR JUST COMPANY TABLE */

/* GET COUNTRY DATA */
$country = new country;
$countries = $country->search(array(),array("name"=>"ASC"));
/*GET COUNTRY DATA*/

if(!empty($getCompanyData) && count($getCompanyData) > 0){
    $getCompanyData["payDays"] = json_decode($getCompanyData["companiesPayDays"],TRUE);
    
    $setAddressData = array();
    $getAddressData = new companies_companiesaddress;
    $searchAddress  = $getAddressData->search(array("companiesId"=>$match["params"]["id"]),array("companiesAddressId"=>"ASC"));
    if(!empty($searchAddress) && count($searchAddress) > 0 ){
        
        foreach($searchAddress AS $forAdd){

            /* GET STATES DATA */
            if( isset($forAdd["companiesAddressCountryId"]) && !empty($forAdd["companiesAddressCountryId"]) ){
                $states = new states;
                $getStates = $states->search(array("country_id"=>$forAdd["companiesAddressCountryId"]),array("name"=>"ASC"));
            }else{
                $getStates[0] = array("id"=>"0","name"=>"Seçiniz");
            }
            /* GET STATES DATA */
            
            /* GET CITY DATA */
            if(isset($forAdd["companiesAddressStateId"]) && !empty($forAdd["companiesAddressStateId"])){
                $cities = new cities;
                $getCities = $cities->search(array("state_id"=>$forAdd["companiesAddressStateId"]),array("name"=>"ASC"));   
            }else{
                $getCities[0] = array("id"=>"0","name"=>"Seçiniz");
            }
            /* GET CITY DATA */
            
            $setAddressData[] = array(
                "companiesAddressId"        => $forAdd["companiesAddressId"],
                "companiesAddressName"      => $forAdd["companiesAddressName"],
                "companiesAddressCountryId" => $forAdd["companiesAddressCountryId"],
                "companiesAddressStateId"   => $forAdd["companiesAddressStateId"],
                "companiesAddressCityId"    => $forAdd["companiesAddressCityId"],
                "companiesAddressZipCode"   => $forAdd["companiesAddressZipCode"],
                "states"                    => $getStates,
                "city"                      => $getCities,
                "companiesAddressText"      => $forAdd["companiesAddressText"]
            );   
        }
    }else{
        $setAddressData[] = array();
    }
    
    $smarty->assign("countries",$countries);
    $smarty->assign("setAddressData",$setAddressData);
    $smarty->assign("companyData",$getCompanyData);
}else{
    $smarty->assign("companyData","");
    $smarty->assign("setAddressData",array());
    $smarty->assign("Alert",makeAlert("danger"));
}

$smarty->assign("FormUrl",$router->generate("Firma Düzenle",array("id"=>$match['params']['id'])));
$smarty->assign("PayPeriods",$companiesModul->payPeriods);
$smarty->assign("companiesFeatures",$companiesModul->companiesFeatures);
$smarty->assign("companiesTypes", getCompaniesType());
$smarty->assign("Alert",$alert);

$smarty->display(templateFileDir.'companiesEdit.tpl');
