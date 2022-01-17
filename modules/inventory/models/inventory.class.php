<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inventory
 *
 * @author Alişan Uzundemir
 */
class inventory extends crud {
    
    protected $table  = "inventory";
    protected $pk     = "inventoryId";
    
    public $variables = array(      
        "stocksId"              => "",
        "companiesId"           => "",
        "inventoryQty"          => "",
        "inventoryQtyUnit"      => "",
        "inventoryDate"         => "",
        "inventoryPrice"        => "",
        "inventoryPriceType"    => "",
        "inventoryPriceUnit"    => "",
        "inventoryCreatedAt"    => "",
        "inventoryCreatedUser"  => ""
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

    public $invUnit = array(
        "1" => "Adet",
        "2" => "Kg",
        "3" => "M"
    );

    public  function __construct() {
       parent::__construct($this->variables);
    }
    
}
