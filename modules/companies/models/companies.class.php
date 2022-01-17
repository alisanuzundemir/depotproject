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

/**
 * Description of companies
 *
 * @author Alişan Uzundemir <alisan.uzundemir@hamzagil.com>
 */
class companies extends crud{
    
    protected $table  = "companies";
    protected $pk     = "companiesId";
    
    public $variables = array(
        "companiesName"          => "",
        "companiesShortName"     => "",
        "companiesStockCode"     => "",
        "companiesTel"           => "",
        "companiesFax"           => "",
        "companiesEmail"         => "",
        "companiesWeb"           => "",
        "companiesTaxAdmin"      => "",
        "companiesTaxNumber"     => "",
        "companiesNote"          => "",
        "companiesPayDays"       => "",
        "companiesFeature"       => "",
        "companiesType"          => "",
        "companiesPayPeriods"    => "",
        "companiesShipmentDay"   => "",
        "companiesContract"      => ""
    );
    /**
     * companies Feature
     * @array
     */
    public $companiesFeatures = array(
        "1" => "Anonim Şirketi",
        "2" => "Limited Şirketi",
        "3" => "Şahış Firması"
    );
    /**
     * companies pay periods
     * @array 
     */
    public $payPeriods = array(
        "1" => "Hafta da Bir",
        "2" => "İki Hafta da Bir",
        "3" => "Üç Hafta da Bir",
        "4" => "Dört Hafta da Bir",
    );
    /**
     * companies Type
     * @array
     */
    public $companiesTypes = array(
        "1" => "Kumaş Tedarik",
        "2" => "Desen Tedarik",
        "3" => "Kimyasal Tedarik",
        "4" => "Çoklu Tedarik",
        "5" => "Kargo Firması",
        "6" => "Müşteri",
        "7" => "Stüdyo"
    );
    
    public  function __construct() {
       parent::__construct($this->variables);
    }
    
}
