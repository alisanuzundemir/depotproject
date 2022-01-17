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
class support extends crud {
    
    protected $table  = "`support`";
    protected $pk     = "supportId";
    
    public $variables = array(      
        "supportParentId"   => 0,
        "supportUserId"     => "",
        "supportSubject"    => "",
        "supportText"       => "",
        "supportDate"       => "",
        "supportStatus"     => 1,
    );
    
    public $status  = array(
        "1"     => "Yeni",
        "2"     => "Okundu",
        "3"     => "Kapatıldı",
        "4"     => "Kullanıcı Cevapladı",
        "5"     => "Destek Cevapladı"
    );
    
    public  function __construct() {
       parent::__construct($this->variables);
    }
    
}
