<?php

/* 
 * The MIT License
 *
 * Copyright 2021 Alişan Uzundemir <uzundemiralian1@gmail.com>.
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

/**
 * GET CURRENCIES TYPE
 * @param type $which
 * @return type
 */
function getCurrencies($which=""){
    $getCur = new currencies;
    if(empty($which)){
        $setCur = $getCur->search(array(), array("currenciesId"=>"ASC"));
    }else{
        $getCur->currenciesName = $which;
        $setCur = $getCur->find();
    }
    return $setCur;
}

/**
 * GET COMPANY TYPE
 * @param type $which
 * @param type $id
 * @return type
 */
function getCompaniesType($which="",$id=""){
    $getType = new companiestype;
    if(!empty($which) && empty($id) ){
        $getType->companiesTypeName = $which;
        $setType = $getType->find();
    }else if(empty($which) && !empty($id)){
        $setType = $getType->find(intval($id));        
    }else{
        $setType2 = $getType->search(array(), array("companiesTypeId"=>"ASC"));
        foreach($setType2 AS $ssType){
            $setType[$ssType["companiesTypeId"]] = $ssType["companiesTypeName"];
        }
    }
    return $setType;    
}

/**
 * GET COMPANY AUTH MISSION
 * @param type $which
 * @param type $id
 * @return type
 */
function getAuthoritiesMissions($which="",$id=""){
    $getMissions = new authoritiesmissions;
    if( !empty($which) && empty($id)){
        $getMissions->authoritiesMissionsNames = $which;
        $setMissions = $getMissions->find();
    }else if( empty($which) && !empty($id) ){
        $setMissions = $getMissions->find(intval($id));        
    }else{
        $setMissions = $getMissions->search(array(),array("authoritiesMissionsId"=>"ASC"));
    }
    return $setMissions;
}


/**
 * Check administration approval
 * @param type $table
 * @param type $column
 * @return type
 */
function findAdminApproval($table,$column){
    
    $result = array();
    
    $approvalModul = new administrationapproval;
    $results = $approvalModul->search(array("administrationApprovaltableName"=>$table,"administrationApprovaltableColumn"=>$column));
    if(!empty($results) && count($results)){
        foreach($results AS $res){
            $result[$res["administrationApprovaltableColumn"]] = array(
                "text" => $res["administrationApprovaltableColumnText"]
            );
        }
    }else{
        $result = NULL;
    }
    
    return $result;
}

/**
 * GET ALL COUNTRY
 * @param type $which
 * @param type $id
 * @return type array
 */
function getCountry($which="",$id=""){
    $countries  = array(); 
    $getCountry = new country;
    
    if( !empty($which) && empty($id)){
        $getCountry->name   = $which;
        $countries          = $getCountry->find();
    }else if( empty($which) && !empty($id) ){
        $countries          = $getCountry->find(intval($id));
    }else{
        $countries          = $getCountry->search(array(),array("id"=>"ASC"));
    }
    return $countries;
}

/**
 * GET ALL STATES
 * @param type $which
 * @param type $id
 * @param type $countryid
 * @return type array
 */
function getState($which="",$id="",$countryid=""){
 
    $states  = array(); 
    $getStat = new states;
    
    if( !empty($which) && empty($id)){
        $getStat->name   = $which;
        $states          = $getStat->find();
    }else if( empty($which) && !empty($id) ){
        $states          = $getStat->find(intval($id));
    }else if( empty($which) && empty($id) && !empty($countryid) ){
        $states          = $getStat->search(array("country_id"=>$countryid),array("id"=>"ASC"));
    }else{
        $states          = $getStat->search(array(),array("id"=>"ASC"));
    }
    return $states;
    
}
/**
 * GET ALL CITY
 * @param type $which
 * @param type $id
 * @param type $stateid
 * @return type array
 */
function getCity($which="",$id="",$stateid=""){

    $cities  = array(); 
    $getCity = new cities;
    
    if( !empty($which) && empty($id)){
        $getCity->name   = $which;
        $cities          = $getCity->find();
    }else if( empty($which) && !empty($id) ){
        $cities          = $getCity->find(intval($id));
    }else if( empty($which) && empty($id) && !empty($stateid) ){
        $cities          = $getCity->search(array("state_id"=>$stateid),array("id"=>"ASC"));
    }else{
        $cities          = $getCity->search(array(),array("id"=>"ASC"));
    }
    return $cities;
}