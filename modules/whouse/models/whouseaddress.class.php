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
class whouse_whouseaddress extends crud
{

    protected $table = "whouseaddress";
    protected $pk    = "whouseAdId";

    public $variables = array(
        "whouseId"              => "",
        "whouseAdName"          => "",
        "whouseAdDesc"          => "",
        "whouseAdCreatedAt"     => "",
        "whouseAdCreatedUser"   => ""
    );

    public function __construct()
    {
        parent::__construct($this->variables);
    }

}
