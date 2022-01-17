<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of filesname
 *
 * @author Coder 
 */
class filesname extends crud {
    
    protected $table  = "filesname";
    protected $pk     = "filesNameId";
    
    public $variables = array(
        "depencies"             => "", 
        "filesNameOpinion"      => "",
        "filesNameGroup"        => ""
    );
    
    public  function __construct() {
       parent::__construct($this->variables);
    }
    
}
