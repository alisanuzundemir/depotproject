<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  /**
   * Description of crud
   *
   * @author coder
   */
  
  class crud {
      
    private $db;

    public $variables;

    private $_limit;

    private $_page;
	
    private $_total;
	
    public function __construct($data = array()) {
        $this->db =  new database();	
        $this->variables  = $data;
    }

    public function __set($name,$value){
        if(strtolower($name) === $this->pk) {
            $this->variables[$this->pk] = $value;
        }
        else {
            $this->variables[$name] = $value;
        }
    }

    public function __get($name)
    {	
        if(is_array($this->variables)) {
            if(array_key_exists($name,$this->variables)) {
                return $this->variables[$name];
            }
        }

        return null;
    }

    public function save($id = "0") {
        
        $this->variables[$this->pk] = (empty($this->variables[$this->pk])) ? $id : $this->variables[$this->pk];

        $fieldsvals = '';
        //$columns = array_keys($this->variables);
        
        $columns = array_keys(array_filter($this->variables, 'myFilter'));
        $values  = array_filter($this->variables, 'myFilter');
        
        foreach($columns as $column)
        {
            if($column !== $this->pk)
            $fieldsvals .= $column . " = :". $column . ",";
        }

        $fieldsvals = substr_replace($fieldsvals , '', -1);
        
        if(count($columns) > 1 ) {

            $sql = "UPDATE " . $this->table .  " SET " . $fieldsvals . " WHERE " . $this->pk . "= :" . $this->pk;

            if($id === "0" && $this->variables[$this->pk] === "0") { 
                unset($this->variables[$this->pk]);
                $sql = "UPDATE " . $this->table .  " SET " . $fieldsvals;
            }
            
            if(count($columns) != count($this->variables)){
                return $this->exec($sql,$values);
            }else{
                return $this->exec($sql);
            }
            
        }

        return null;
    } 

    public function create() { 
        $bindings   	= $this->variables;

        if(!empty($bindings)) {
            $fields     =  array_keys($bindings);
            $fieldsvals =  array(implode(",",$fields),":" . implode(",:",$fields));
            $sql        = "INSERT INTO ".$this->table." (".$fieldsvals[0].") VALUES (".$fieldsvals[1].")";
        }
        else {
            $sql = "INSERT INTO ".$this->table." () VALUES ()";
        }
        
        $this->exec($sql);
        
        return $this->db->lastInsertId();
    }
    /**
     * DELETE TABLE ONE ROW
     * @param type $id
     * @return type
     */
    public function delete($id = "") {
        
        $results = NULL;
        
        $id = (empty($this->variables[$this->pk])) ? $id : $this->variables[$this->pk];

        if(!empty($id)) {
            
            $sql = "DELETE FROM " . $this->table . " WHERE " . $this->pk . "= :" . $this->pk. " LIMIT 1" ;
            $results = $this->exec($sql, array($this->pk=>$id) );
            
        }else{
            
            $sql = "DELETE FROM " . $this->table;

            $bindings   = NULL;
            $bindings2  = $this->variables;

            foreach($bindings2 AS $bindK => $bindV){
                if(!empty($bindV) && strlen($bindV) > 0){
                    $bindings[$bindK] = $bindV;
                }
            }
            
            if (!empty($bindings)) {
                
                $fieldsvals = array();
                $columns = array_keys($bindings);
                
                foreach($columns as $column) {
                    $fieldsvals[] = $column . " = :". $column;
                }
                
                $sql .= " WHERE " . implode(" AND ", $fieldsvals)." LIMIT 1";
                
                $results = $this->exec($sql, $bindings);
                
            }
            
        }

        return $results;
    }
    /**
     * DELETE ALL TABLE DATA
     * @return type
     */
    public function deleteAll() {
        
        $results = NULL;
        
        $sql = "DELETE FROM " . $this->table;
        $results = $this->exec($sql);

        return $results;
    }
    /**
     *  FIND DATA RETURN ROW
     * @param type $id
     * @return type
     */
    public function find($id = "") {
        $id = (empty($this->variables[$this->pk])) ? $id : $this->variables[$this->pk];

        if(!empty($id)) {
            $sql = "SELECT * FROM " . $this->table ." WHERE " . $this->pk . "= :" . $this->pk . " LIMIT 1";	
            $result = $this->db->row($sql, array($this->pk=>$id));
            $this->variables = ($result != false) ? $result : null;
        }else{
            $sql = "SELECT * FROM " . $this->table;

            $bindings   = NULL;
            $bindings2  = $this->variables;

            foreach($bindings2 AS $bindK => $bindV){
                if(!empty($bindV) && strlen($bindV) > 0){
                    $bindings[$bindK] = $bindV;
                }
            }
            
            if (!empty($bindings)) {
                
                $fieldsvals = array();
                $columns = array_keys($bindings);
                
                foreach($columns as $column) {
                    $fieldsvals[] = $column . " = :". $column;
                }
                
                $sql .= " WHERE " . implode(" AND ", $fieldsvals)." LIMIT 1";

                $result = $this->db->row($sql, $bindings);
                $this->variables = ($result != false) ? $result : null;
            }
        }
        return $this->variables;
    }
    /**
    * @param array $fields.
    * @param array $sort.
    * @return array of Collection.
    * Example: $user = new User;
    * $found_user_array = $user->search(array('sex' => 'Male', 'age' => '18'), array('dob' => 'DESC'));
    * // Will produce: SELECT * FROM {$this->table_name} WHERE sex = :sex AND age = :age ORDER BY dob DESC;
    * // And rest is binding those params with the Query. Which will return an array.
    * // Now we can use for each on $found_user_array.
    * Other functionalities ex: Support for LIKE, >, <, >=, <= ... Are not yet supported.
    */
    public function search($fields = array(), $sort = array(), $pages = "", $show = "", $limit = "", $wanted = array(),$groupby= array() ) {
        
        $bindings   = NULL;
        $bindings2  = empty($fields) ? $this->variables : $fields;
        $whatiwant = NULL;
        
        foreach($bindings2 AS $bindK => $bindV){
            if( isset($bindV) && ($bindV === '0' || !empty($bindV) || strlen($bindV) > 0 ) ){
                $bindings[$bindK] = $bindV;
            }
        }
        
        if(!empty($wanted)){
            $whatiwant = implode(",",$wanted);
        }else{
            $whatiwant = "*";
        }
        
        $sql = "SELECT ".$whatiwant." FROM " . $this->table;
    
        if (!empty($bindings)) {
            $fieldsvals = array();
            $columns = array_keys($bindings);
            foreach($columns as $column) {
                    $fieldsvals[] = $column . " = :". $column;
            }
            $sql .= " WHERE " . implode(" AND ", $fieldsvals);
        }

        if (!empty($groupby)) {
            $groupvals = array();
            foreach ($groupby as $gkey) {
                    $groupvals[] = $gkey;
            }
            $sql .= " GROUP BY " . implode(", ", $groupvals);
        }
        
        if (!empty($sort)) {
            $sortvals = array();
            foreach ($sort as $key => $value) {
                    $sortvals[] = $key . " " . $value;
            }
            $sql .= " ORDER BY " . implode(", ", $sortvals);
        }
        
        if(!empty($show)){
            $show = intval($show);
            if( !empty($pages) ){
                    $start 	= (intval($show) * intval($pages)) - intval($show);
                    $sql .= " LIMIT ".$start.",".$show;
            }else{
                    $sql .= " LIMIT ".$show;
            }
        }

        if( empty($show) && !empty($limit) ){
            if(strstr($limit,"LIMIT")){
                    $sql .= $limit;
            }else{
                    $sql .= " LIMIT ".$limit;
            }
        }
        //echo $sql."<br/>";

        return $this->exec($sql,$bindings);
    }

    public function searchOr($fields = array(), $sort = array(), $pages = "", $show = "", $limit = "" ) {
        $bindings = empty($fields) ? $this->variables : $fields;

        $sql = "SELECT * FROM " . $this->table;

        if (!empty($bindings)) {
            $fieldsvals = array();
            $columns = array_keys($bindings);
            foreach($columns as $column) {
                    $fieldsvals[] = $column . " = :". $column;
            }
            $sql .= " WHERE " . implode(" OR ", $fieldsvals);
        }

        if (!empty($sort)) {
            $sortvals = array();
            foreach ($sort as $key => $value) {
                    $sortvals[] = $key . " " . $value;
            }
            $sql .= " ORDER BY " . implode(", ", $sortvals);
        }

        if(!empty($show)){
            $show = intval($show);
            if( !empty($pages) ){
                $start 	= intval($show) * intval($pages);
                $finish = ( intval($show) * intval($pages) ) + $show;
                $sql .= " LIMIT ".$start.",".$finish;
            }else{
                $sql .= " LIMIT ".$show;
            }
        }

        if( empty($show) && !empty($limit) ){
            if(strstr($limit,"LIMIT")){
                $sql .= $limit;
            }else{
                $sql .= " LIMIT ".$limit;
            }
        }

        return $this->exec($sql,$bindings);
    }
    
    public function searchLike($fields = array(), $sort = array(), $pages = "", $show = "", $limit = "" ) {
        $bindings = empty($fields) ? $this->variables : $fields;

        $sql = "SELECT * FROM " . $this->table;

        if (!empty($bindings)) {
            $fieldsvals = array();
            $columns = array_keys($bindings);
            foreach($columns as $column) {
                $fieldsvals[] = $column . " LIKE ? ";
            }
            $sql .= " WHERE " . implode(" AND ", $fieldsvals);
        }

        if (!empty($sort)) {
            $sortvals = array();
            foreach ($sort as $key => $value) {
                $sortvals[] = $key . " " . $value;
            }
            $sql .= " ORDER BY " . implode(", ", $sortvals);
        }

        if(!empty($show)){
            $show = intval($show);
            if( !empty($pages) ){
                $start 	= intval($show) * intval($pages);
                $finish = ( intval($show) * intval($pages) ) + $show;
                $sql .= " LIMIT ".$start.",".$finish;
            }else{
                $sql .= " LIMIT ".$show;
            }
        }

        if( empty($show) && !empty($limit) ){
            if(strstr($limit,"LIMIT")){
                $sql .= $limit;
            }else{
                $sql .= " LIMIT ".$limit;
            }
        }
        
        return $this->exec($sql,$bindings);
    }
    
    public function all(){
            return $this->db->query("SELECT * FROM " . $this->table);
    }

    public function min($field)  {
            if($field)
            return $this->db->single("SELECT min(" . $field . ")" . " FROM " . $this->table);
    }

    public function max($field)  {
            if($field)
            return $this->db->single("SELECT max(" . $field . ")" . " FROM " . $this->table);
    }

    public function avg($field)  {
            if($field)
            return $this->db->single("SELECT avg(" . $field . ")" . " FROM " . $this->table);
    }

    public function sum($field,$where=array())  {
        if(!empty($field)){
          $sql = "SELECT SUM(" . $field . ")" . " FROM " . $this->table;
          if (!empty($where)) {
              $fieldsvals = array();
              $columns = array_keys($where);
              foreach($columns as $column) {
                  $fieldsvals[] = $column . " = :". $column;
              }
              $sql .= " WHERE " . implode(" AND ", $fieldsvals);

              $returnData = $this->db->single($sql,$where);
            }else{
              $returnData = $this->db->single($sql);
            }
         return $returnData;
        }else{
          $returnData = NULL;
        }
        return $returnData;
    }

    public function count($field,$where=array())  {
        if(!empty($field)){
          $sql = "SELECT count( ". $field ." ) FROM ".$this->table;
          if (!empty($where)) {
              $fieldsvals = array();
              $columns = array_keys($where);
              foreach($columns as $column) {
                  $fieldsvals[] = $column . " = :". $column;
              }
              $sql .= " WHERE " . implode(" AND ", $fieldsvals);

              $returnData = $this->db->single($sql,$where);
            }else{
              $returnData = $this->db->single($sql);
            }
        }else{
          $returnData = NULL;
        }

        return $returnData;
    }	
	
    public function mixQuery($sql){
        return $this->exec($sql);
    }
    
    private function exec($sql, $array = null) {

        if($array !== null) { 
            // Get result with the DB object
            $result =  $this->db->query($sql, $array);
        }
        else {
            // Get result with the DB object
            $result =  $this->db->query($sql, $this->variables);	
        }
 
        return $result;  
    }
    
    public function getAllTables(){
        return $this->db->query("SELECT table_name FROM information_schema.tables WHERE `table_schema`='portal'");
    }
    
    public function __destruct() {
        // Empty bindings
        $this->variables = array(); 
    }

  }
  