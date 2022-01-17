<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of support
 *
 * @author Alişan Uzundemir
 */
class whouse extends crud {
    
    protected $table  = "whouse";
    protected $pk     = "whouseId";
    
    public $variables = array(      
        "whouseName"        => "",
        "whouseDesc"        => "",
        "whouseCreatedAt"   => "",
        "whouseCreatedUser" => "",
    );

    public  function __construct() {
       parent::__construct($this->variables);
    }
    
}
