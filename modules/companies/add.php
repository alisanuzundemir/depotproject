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
$companiesModul = new companies;

if(isset($_POST['companiesName']) && isset($_POST['companiesEmail'])){
    
    $companiesVariables = $companiesModul->variables;
    
    $compAddPost    = ( isset($_POST["companyAddress"]) && count($_POST["companyAddress"]) > 0 ) ? $_POST["companyAddress"] : array();
    unset($_POST["companyAddress"]);
    $compPost       = $_POST;
    
    foreach($compPost AS $pKey => $pVal){
        if(isset($companiesVariables[$pKey])){
            if($pKey=="companiesPayDays"){
                $companiesModul->$pKey = json_encode($pVal,JSON_UNESCAPED_UNICODE);
            }else{
                $companiesModul->$pKey = $pVal;
            }
        }
    }
    
    $create = $companiesModul->create();
    
    if(is_array($compAddPost) && count($compAddPost) > 0){
        
        foreach($compAddPost AS $compAddPKey){
            $companiesAddres    = "";
            $companiesAddres    = new companies_companiesaddress;
            $companiesAddres->companiesId = $create;
             
            foreach($compAddPKey AS $cpKey => $cpVal){
                $companiesAddres->$cpKey = $cpVal;
            }
            $create2 = $companiesAddres->create();
        }
    }
    
    if( ($create !== FALSE && strlen($create) > 0) && ($create2 !== FALSE && strlen($create2) > 0) ){
       $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}



//GET COUNTRY DATA
$country = new country;
$countries = $country->search(array(),array("name"=>"ASC"));

$smarty->assign("FormUrl",$router->generate("Firma Ekle"));
$smarty->assign("PayPeriods",$companiesModul->payPeriods);
$smarty->assign("companiesFeatures",$companiesModul->companiesFeatures);
$smarty->assign("companiesTypes", getCompaniesType());
$smarty->assign("Alert",$alert);
$smarty->assign("countries",$countries);

$smarty->display(templateFileDir.'companiesAdd.tpl');
