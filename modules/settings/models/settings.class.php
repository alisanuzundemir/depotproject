<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of settings
 *
 * @author Coder
 */
class settings extends crud {
    
    protected $table  = "settings";
    protected $pk     = "settingsId";
    
    public $variables = array(
        "settingsKey"           => "",
        "settingsValue"         => "",
        "settingsIsChangeble"   => "",
    );
    
    public  function __construct() {
       parent::__construct($this->variables);
    }
    
    public function getTables(){
        
        $show_q = $this->db->query("SHOW COLUMNS FROM ".$_POST['tableNames']."");
        return $show_q;
        
    }
}