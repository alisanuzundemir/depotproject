<?php

/* 
 * The MIT License
 *
 * Copyright 2021 Alişan Uzundemir <alisan.uzundemir@hamzagil.com>.
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
 * GET BROWSER INFO
 * @return string
 */
function getBrowserSpecific(){
    if(extension_loaded("get_browser")){
        $browser = get_browser(null, true);
        $browserInfo = "Tarayıcı :".$browser["parent"]."  Platform :".$browser['platform'];
    }else{
        $browserInfo = $_SERVER['HTTP_USER_AGENT'];
    }
    return $browserInfo;
}

/**
 * ITS FUNCTION FOR CRYPT TEXT AND DECRYPT
 * @param type $string
 * @param type $action
 * @return type
 */
function makeCrypt( $string, $action = 'e' ) {
    $secret_key = 'okul_projesi_icin_sifreleme_yap';
    $secret_iv = '3452009871454654654hamzagil+%&fkdsalkiafgfg4332';
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
    return $output;
}

/**
 * GET CLIENT IP 
 * @return string
 */
function getClientIp() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])){
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    }else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else if(isset($_SERVER['HTTP_X_FORWARDED'])){
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    }else if(isset($_SERVER['HTTP_FORWARDED_FOR'])){
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    }else if(isset($_SERVER['HTTP_FORWARDED'])){
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    }else if(isset($_SERVER['REMOTE_ADDR'])){
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    }else{
        $ipaddress = 'UNKNOWN';
    }
    return $ipaddress;
}

/**
 * GENERATE GENERAL ALERT
 * @param type $type
 * @return string
 */
function makeAlert($type){
    $alertMessage = "";
    if($type=="success"){
        $alertMessage =' 
        <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
           <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Kapat</span></button>
           <span class="text-semibold">Tebrikler!</span> İşlemi başarı ile gerçekleştirdiniz.
        </div>';
    }else if ($type=="danger"){
        $alertMessage =' 
        <div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
           <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Kapat</span></button>
           <span class="text-semibold">Oppss!</span> Birşeyler yanlış gitti, tekrar deneyebilirsiniz.
        </div>';
    }else if ($type=="warning"){
        $alertMessage =' 
        <div class="alert alert-warning alert-styled-left alert-arrow-left alert-bordered">
           <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Kapat</span></button>
           <span class="text-semibold">Dikkat!</span> Dikkat etmeniz gereken yerler var, lütfen gözden geçiriniz.
        </div>';
    }
    return $alertMessage;
}
/**
 * FIND VALUE IN ARRAY 
 * @param type $search_value
 * @param type $array
 * @return type
 */
function findValueFromArray($whichArray,$whichKey,$search){
    // Generate a new array with 'keys' and values in 'name'
    $new = array_combine(array_keys($whichArray), array_column($whichArray, $whichKey));
    // Search in that new array
    $resultData = array_search($search, $new);
    return $resultData;
}

/**
 * UNIX FORMAT TO DATE FORMAT
 * @param type $data
 * @return type 
 */

function makeTimeFormat($data){
    $convertDate = NULL; 
    if(!empty($data) && strlen($data) > 4 && $data > 0 ){
        $convertDate = date(TIME_FORMAT,$data);
    }else{
        $convertDate = NULL;
    }
    return $convertDate;
}
 

/**
 * CONVERT DATE TO UNIXTIME  
 * @param type $data
 * @return type
 */
function makeUnixTimeFormat($data){
    if( strlen($data) > 4 && $data <=! 0 ){
        $dates = strtotime($data);
    }else{
        $dates = NULL;
    }
    return $dates;
}
/**
 * WE WILL FILTER REQUEST POST AND VARIABLES IS EQUAL?
 * @param type $postData
 * @param type $variables
 */
function postIsEmpty($postData,$variables){
    $returnDatas = array();
    foreach($variables AS $vKey => $vVal){
        if(isset($postData[$vKey]) && strlen($postData[$vKey]) > 0){
            $returnDatas[$vKey] = $vVal;
        }else{
            
        }
    }
}

/**
 * CHECK PARAM IS NEED CONVERT TRUE TIME FORMAT
 * @param type $data
 * @return boolean
 */
function checkDateInValue($data){
    preg_match("/date/i",$data,$match);    
    if($match === FALSE || count($match) < 1 ){
        return FALSE;
    }elseif($match !== FALSE && count($match) > 0){
        return TRUE;
    }else{
        return FALSE;
    }
}
/**
 * ASCII TO UTF8
 * @param type $values
 * @return type
 */
function ascii_to_utf8($values){

        $replaceCharset  = array("Ãž","Ã","Ãœ","Ã‡","??");
        $replacedCharset = array("Ş","İ","Ü","Ç","");

        if(mb_detect_encoding($values) == "ASCII"){
                $returnVal = iconv("UTF-8","ASCII//TRANSLIT",$values);
                //$returnVal = "aaaa";
        }elseif(mb_detect_encoding($values) == "UTF-8"){
                $values = utf8_encode($values);
                $returnVal = str_replace($replaceCharset,$replacedCharset,$values);
        }else{
                $returnVal = str_replace($replaceCharset,$replacedCharset,iconv('UTF-8', 'ASCII//TRANSLIT', $values));
                //$returnVal = mb_detect_encoding($values);
        }
        return $returnVal;
}
/**
 * UTF8 TO ASCII
 * @param type $values
 * @return type
 */
function utf8_to_ascii($values){

        if(mb_detect_encoding($values) == "UTF-8"){
            $returnVal = mb_convert_encoding( $values, 'ISO-8859-9', 'UTF-8');
            //$returnVal = iconv("ASCII","UTF-8",$values);
        }else{
            $returnVal = iconv(mb_detect_encoding($values),"ASCII//TRANSLIT",$values);
        }
        return $returnVal;
}

function myFilter($values){
    return ($values !== NULL && $values !== FALSE && $values != '' && strlen($values) > 0);
}

/**
 * 
 * @param type $userId
 * @param type $table
 * @param type $tableId
 * @param type $log
 * @return type
 */
function saveLog($userId,$table,$tableId,$log){
    
    $createLog = new usersactivity;
    
    $createLog->usersActivityReqIp  = getClientIp();
    $createLog->usersActivityUserId = $userId;
    $createLog->usersActivityTable  = $table;
    $createLog->usersActivityTableId= $tableId;
    $createLog->usersActivityLog    = $log;
    $createLog->usersActivityTime   = time();
    
    $returnVal = $createLog->create();
    
    return $returnVal;
}


/**
 * 2 ARRAY DIFF
 * @param type $oldData
 * @param type $newData
 * @return type
 */
function diff($oldData=array(),$newData=array()){
    $diffReturn = array();
    if( ( !empty($oldData) && !empty($newData) ) && ( count($oldData) > 0 && count($newData) > 0 ) ){
        foreach($newData AS $nwDK => $nwDV){
            if($nwDK != "filesNameId"){
                if(checkDateInValue($nwDK)){
                    $nwDV = makeUnixTimeFormat($nwDV); 
                }
                
                if(is_array($nwDV)){
                    $nwDV = implode(",",$nwDV);
                }
                
                if( strcasecmp($nwDV,$oldData[$nwDK]) != 0 ){
                    $diffReturn[$nwDK] = $nwDV;
                }
            }
        }        
    }
    return $diffReturn;
}

/**
 * MAKE UNIQ NUMBER FOR ME
 * @param int $lenght
 * @return false|string
 * @throws Exception
 */

function uniqidReal($lenght = 13) {
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($lenght / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $lenght);
}