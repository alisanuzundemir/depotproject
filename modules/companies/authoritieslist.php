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

$lists          = array();

$company            = new companies;

$companiesAuthModul = new companies_authoritieslist;
$companiesAuthList  = $companiesAuthModul->search(array(), array("companiesAuthoritiesId"=>"ASC"));

$authMission        = new authoritiesmissions;
$autMissonList      = $authMission->search();

$authMissons        = array();
foreach($autMissonList AS $authsMiss ){
    $authMissons[$authsMiss["authoritiesMissionsId"]] = $authsMiss["authoritiesMissionsName"];
}

foreach($companiesAuthList AS $companyAuths){
    $companiess = array();
    $company->companiesId = $companyAuths["companiesAuthoritiesCompanyId"];
    $companiess = $company->find();

    $lists[$companyAuths['companiesAuthoritiesId']] = array(
        "id"        => $companyAuths['companiesAuthoritiesId'],
        "name"      => $companiesAuthModul->gender[$companyAuths['companiesAuthoritiesGender']]. " " .$companyAuths['companiesAuthoritiesNameSurname'],
        "email"     => $companyAuths['companiesAuthoritiesMail'],
        "mission"   => (!empty($companyAuths['companiesAuthoritiesMissionsId']))?$authMissons[$companyAuths['companiesAuthoritiesMissionsId']]:"Tanımlanmamış",
        "company"   => $companiess["companiesName"]
    );
    if(findValueFromArray($paths,"modulesName","Yetkili Düzenle")){
       $edit = array("id"=>$companyAuths['companiesAuthoritiesId']);
       $lists[$companyAuths['companiesAuthoritiesId']]['companyAuthEdit'] = $router->generate("Yetkili Düzenle",$edit); 
    }
    if(findValueFromArray($paths,"modulesName","Yetkili Sil")){
       $delete = array("id"=>$companyAuths['companiesId']);
       $lists[$companyAuths['companiesAuthoritiesId']]['companyAuthDelete'] = $router->generate("Yetkili Sil",$delete); 
    }
}

$smarty->assign("CompaniesAuthList",$lists);
$smarty->display(templateFileDir.'authoritiesList.tpl'); 