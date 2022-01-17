<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usersdepartment
 *
 * @author Coder
 */
class users_usersdepartment extends crud {
    
    protected $table  = "usersDepartment";
    protected $pk     = "usersDepartmentId";
    
    public $variables = array(
        "usersDepartmentName",
        "usersDepartmentPermission"
    );
    
}
