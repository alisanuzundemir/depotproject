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
$companiesList = $companiesModul->search(array(),array("companiesName"=>"ASC"));

if(isset($_POST['companiesAuthoritiesCompanyId']) && isset($_POST['companiesAuthoritiesNameSurname'])){

    $auths = new companies_authoritieslist;
    
    foreach($_POST AS $pKey => $pVal){
        $auths->$pKey = $pVal;
    }
    
    $create = $auths->create();

    if($create !== FALSE && strlen($create) > 0){
       $alert = makeAlert("success");
    }else{
        $alert = makeAlert("danger");
    }
}

$smarty->assign("FormUrl",$router->generate("Yetkili Ekle"));
$smarty->assign("authoritiesMissions", getAuthoritiesMissions());
$smarty->assign("companiesList", $companiesList);
$smarty->assign("Alert",$alert);

$smarty->display(templateFileDir.'authoritiesAdd.tpl');
