<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usersactivity
 *
 * @author Coder
 */
class usersactivity extends crud {
    protected $table  = "usersactivity";
    protected $pk     = "usersActivityId";
    
    public $variables = array(
        "usersActivityReqIp"    => "",
        "usersActivityUserId"   => "",
        "usersActivityTable"    => "",
        "usersActivityTableId"  => "",
        "usersActivityLog"      => "",
        "usersActivityTime"     => ""
    );
    
    public  function __construct() {
       parent::__construct($this->variables);
    }
}
