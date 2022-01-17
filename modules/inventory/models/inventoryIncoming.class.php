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
class inventory_inventoryIncoming extends crud {
    
    protected $table  = "depotin";
    protected $pk     = "depotInId";
    
    public $variables = array(      
        "stocksId"              => "",
        "inventoryId"           => "",
        "whouseId"              => "",
        "whouseAdId"            => "",
        "depotInInvNumber"      => "",
        "depotInInvDate"        => "",
        "depotCargoComp"        => "",
        "depotInAcceptDate"     => "",
        "depotInAcceptQty"      => "",
        "depotInAcceptQtyUnit"  => "",
        "depotInCreatedAt"      => "",
        "depotInCreatedUser"    => ""
    );

    public $depotUnit = array(
        "1" => "Adet",
        "2" => "Kg",
        "3" => "M"
    );

    public  function __construct() {
       parent::__construct($this->variables);
    }
    
}
