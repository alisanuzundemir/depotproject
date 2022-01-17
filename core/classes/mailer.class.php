<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mailer
 *
 * @author Hamzagil Bim
 */
class mailer extends PHPMailer {    

    public $hostname        = "";
    
    public $username        = "";
    
    public $password        = "";
    
    public $port            = "";
    
    public function __construct() {
        
        $settingsModul  = new settings();
        $getSettings    = $settingsModul->search(array(), array(), "", "", "", array("EMAIL_HOST","EMAIL_USER","EMAIL_PASSWORD","EMAIL_PORT"));
        if( $getSettings && count($getSettings) > 0 ){
            
            parent::__construct(true);
            
            $this->name     = "Hamzagil Emprime";
            $this->hostname = $getSettings[0]["EMAIL_HOST"];
            $this->username = $getSettings[0]["EMAIL_USER"];
            $this->password = $getSettings[0]["EMAIL_PASSWORD"];
            $this->port     = $getSettings[0]["EMAIL_PORT"];
        }
        
    }
    
    public function sendingMail($to, $cc, $bcc, $mailSubject, $mailBody,$mailAltBody="",$mailAttach=array() ){
     
        //Server settings
        $this->SMTPDebug    = 2;                                 
        $this->isSMTP();                                      
        $this->Host         = $this->hostname;  
        $this->SMTPAuth     = true;
        $this->Username     = $this->username;
        $this->Password     = $this->password;
        $this->SMTPSecure   = 'tls';                            
        $this->Port         = $this->port;                                    
        $this->CharSet      = "UTF-8";
        //Recipients
        $this->setFrom($this->username, $this->name);
        
        if( count($to) > 0 && !empty($to)){
            if(is_array($to)){
                foreach(array_filter($to) AS $toName => $toValue){
                    $this->addAddress($toName, $toValue);
                }
            }else{
                $this->addAddress($to);
            }
        }
        
        if( count($cc) > 0 && !empty($cc)){
            if(is_array($cc)){
                foreach(array_filter($cc) AS $ccMail => $ccName ){
                    $this->addCC($ccMail,$ccName);
                }
            }else{
                $this->addCC($cc);
            }
        }
        
        if( count($bcc) > 0 && !empty($bcc)){
            if(is_array($bcc)){
                foreach(array_filter($bcc) AS $bccMail ){
                    $this->addBCC($bccMail);
                }
            }else{
                $this->addBCC($bcc);
            }
        }
        
        if( count($mailAttach) > 0 && !empty($mailAttach) ){
            if(is_array($mailAttach)){
                foreach(array_filter($mailAttach) AS $attachName => $attachValue ){
                    $this->addAttachment($attachValue, $attachName);
                }
            }else{
                $this->addAttachment($mailAttach);
            }            
        }
        
        //Content
        $this->isHTML(true);
        $this->Subject = $mailSubject;
        $this->Body    = $mailBody;
        $this->AltBody = $mailAltBody;

        if($this->send()){
            
            $this->copyToFolder("Sent");
            return TRUE;
            
        }else{
            return FALSE;
        }
    }
    
    public function copyToFolder($folderPath = null) {

        $message = $this->MIMEHeader . $this->MIMEBody;
        $path = "INBOX" . (isset($folderPath) && !is_null($folderPath) ? ".".$folderPath : ""); // Location to save the email
        $imapStream = imap_open("{" . $this->Host . "/tls/novalidate-cert/norsh/service=imap/user=" . $this->Username . "}" . $path , $this->Username, $this->Password);
        imap_append($imapStream, "{" . $this->Host . "}" . $path, $message);
        imap_close($imapStream);
    }
    
}
