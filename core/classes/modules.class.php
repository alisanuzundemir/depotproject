<?php

/*
 * The MIT License
 *
 * Copyright 2017 Alişan Uzundemir <alisan.uzundemir@hamzagil.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/** 
 * Description of modules
 *
 * @author Alişan Uzundemir <alisan.uzundemir@hamzagil.com>
 */
class modules extends crud {
    
    protected $table  = "modules";
    protected $pk     = "modulesId";
    
    public $variables = array(
        "modulesName"        => "",
        "modulesPath"     => "",
        "modulesStatus"  => ""
    );
    /**
     * 
     * @param type $permission
     * @return type
     */
    public function setModulesRoute($permission){
        
        $returnData = array();
        foreach($permission AS $hk => $hv){
            if(is_array($hv)){
                foreach($hv AS $v){
                    $accepter   = array();
                    $this->modulesId = $v;
                    $this->modulesStatus = "1";
                    $getModules = $this->find();
                    
                    $method     = json_decode($getModules['modulesRequestMethod'],TRUE);
                    if(!empty($getModules['modulesAcceptData'])){
                        $acceptData = json_decode($getModules['modulesAcceptData'],TRUE);  
                        foreach($acceptData AS $acK => $acV){
                            $accepter[] = "[".$acK.":".$acV."]";
                        }
                    }else{
                        $accepter = array();
                    }
                   $returnData[] = array(
                       "modulesPath"    => $getModules["modulesPath"]."/".implode("/",$accepter),
                       "modulesFile"    => $getModules["modulesFile"],
                       "modulesName"    => $getModules["modulesName"],
                       "modulesMethod"  => (is_array($method))? implode("|",$method) : ""
                   );
                }
            }
        }
        return $returnData;
    }
    public function setModulesMenu($permission){
        
        if(count($permission) > 0){
            
            $perImp = array();
            
            foreach($permission AS $perk => $perv){
                $perImp[] = $perk;
                if(is_array($perv)){
                    foreach($perv AS $pvk => $pvv){
                        $perImp[] = $pvv;
                    }
                }
            }
            $setMenu = array();
            $menus = $this->search(array("modulesStatus"=>"1","modulesOnMenu"=>"1"),array("modulesOrder"=>"ASC"));

            foreach($menus AS $menu){
                if(in_array($menu["modulesId"], $perImp)){
                    $setMenu[] = $menu;
                }
            }
        }else{
            $setMenu = array();
        }
        
        return $setMenu;
    }
    public function getModulesForPer(){
        $data = array();
        
        $modules = $this->search(array("modulesStatus"=>"1"),array("modulesOrder"=>"ASC"));
        foreach($modules AS $mod){
            if($mod['modulesParentId']=="0"){
                $data['Parent'][$mod['modulesId']] = $mod['modulesName'];
            }else{
             $data['Sub'][$mod['modulesParentId']][$mod['modulesId']] = $mod['modulesName'];   
            }
        }
        return $data;
    }


}
