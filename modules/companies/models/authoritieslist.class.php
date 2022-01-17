<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of authoritieslist
 *
 * @author Coder
 */
class companies_authoritieslist extends crud {
    protected $table  = "companiesauthorities";
    protected $pk     = "companiesAuthoritiesId";
    
    public $variables = array(
        "companiesAuthoritiesCompanyId"         => "",
        "companiesAuthoritiesNameSurname"       => "",
        "companiesAuthoritiesMail"              => "",
        "companiesAuthoritiesGender"            => "",
        "companiesAuthoritiesMissionsId"        => ""
    );
    
    public $gender = array(
        "1" => "Bayan",
        "2" => "Bay"
    );
    
    public  function __construct() {
       parent::__construct($this->variables);
    }
}
