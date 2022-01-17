<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of stocks
 *
 * @author Alişan Uzundemir
 */
class stocks extends crud {
    
    protected $table  = "stocks";
    protected $pk     = "stocksId";
    
    public $variables = array(      
        "stocksName"        => "",
        "stocksDesc"        => "",
        "stocksNumber"      => "",
        "stocksBarcode"     => "",
        "stocksAddressId"   => "",
        "stocksWhouseId"    => "",
        "stocksCreatedAt"   => "",
        "stocksCreatedUser" => ""
    );

    public $priceType= array(
        "1" => "TRY",
        "2" => "USD",
        "3" => "EUR",
        "4" => "GBP"
    );

    public $priceUnit = array(
        "1" => "Adet",
        "2" => "Kg",
        "3" => "M"
    );

    public  function __construct() {
       parent::__construct($this->variables);
    }
    
}
