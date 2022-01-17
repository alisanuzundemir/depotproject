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
class inventory_inventorylivedata extends crud {
    
    protected $table  = "depotLive";
    protected $pk     = "depotLiveId";
    
    public $variables = array(      
        "stocksId"              => "",
        "whouseId"              => "",
        "whouseAdId"            => "",
        "depotLiveQty"          => ""
    );

    public $depotLiveUnit = array(
        "1" => "Adet",
        "2" => "Kg",
        "3" => "M"
    );

    public  function __construct() {
       parent::__construct($this->variables);
    }
    
}
