<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of companiesaddress
 *
 * @author Coder
 */
class companies_companiesaddress extends crud {
    
    protected $table  = "`companiesAddress`";
    protected $pk     = "companiesAddressId";
    
    public $variables = array(
        "companiesId"                   => "", 
        "companiesAddressName"          => "",
        "companiesAddressCountryId"     => "", 
        "companiesAddressStateId"       => "",
        "companiesAddressCityId"        => "",
        "companiesAddressZipCode"       => "",
        "companiesAddressText"          => ""
    );
    
    public  function __construct() {
       parent::__construct($this->variables);
    }
    
}
