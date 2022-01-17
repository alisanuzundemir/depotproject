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

$companiesModul = new companies;
$companiesList = $companiesModul->search(array(), array("companiesName"=>"ASC"));
$companiesType = getCompaniesType();

foreach($companiesList AS $company){
    $lists[$company['companiesId']] = array(
        "id"        => $company['companiesId'],
        "name"      => (!empty($company['companiesShortName'])) ? $company['companiesShortName'] : $company['companiesName'],
        "tel"       => $company['companiesTel'],
        "email"     => $company['companiesEmail'],
        "stockCode" => $company['companiesStockCode'],
        "type"      => (empty($company['companiesType'])) ? array('companiesTypeName'=>"Yok") : getCompaniesType("",$company['companiesType'])
    );
    if(findValueFromArray($paths,"modulesName","Firma Düzenle")){
       $edit = array("id"=>$company['companiesId']);
       $lists[$company['companiesId']]['companiesEdit'] = $router->generate("Firma Düzenle",$edit); 
    }
    if(findValueFromArray($paths,"modulesName","Firma Sil")){
       $delete = array("id"=>$company['companiesId']);
       $lists[$company['companiesId']]['companiesDelete'] = $router->generate("Firma Sil",$delete); 
    }
    if(findValueFromArray($paths,"modulesName","Cari Görüntüle")){
       $view = array("id"=>$company['companiesId']);
       $lists[$company['companiesId']]['companiesView'] = $router->generate("Cari Görüntüle",$view); 
    }
}

$smarty->assign("CompaniesList",$lists);
$smarty->display(templateFileDir.'companiesList.tpl'); 