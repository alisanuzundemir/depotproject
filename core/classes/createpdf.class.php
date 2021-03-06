<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of createpdf
 *
 * @author Coder
 */
class createpdf{
    
    public $html    = NULL;
    public $type    = NULL;
    public $data    = array();
    public $filename= NULL;
    public $savePath= NULL;
    public $marginLeft  = 0;
    public $marginTop   = 0;
    public $marginRight = 0;
    public $marginHeader= 0;
    public $marginFooter= 0;
    public $pdf     = NULL;
    
    public $header  = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td align="center"><img src="'.imgUrl.'weblogo.png" width="400" valign="middle"></td>
                          </tr>
                        </tbody>
                      </table>';
    
    public $footer  = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td align="center"><img src="'.imgUrl.'adres.png" width="600"></td>
                          </tr>
                        </tbody>
                      </table>';
    
    public function __construct($type="supplies",$data,$filename,$savePath,$marginLeft=0,$marginTop=0,$marginRight=0,$marginHeader=0,$marginFooter=0){
        $this->type     = $type;
        $this->data     = $data;
        $this->filename = $filename;
        $this->savePath = $savePath;
        
        $this->pdf = new TCPDF("P", "mm", "A4", true, 'UTF-8', false);
        
        if($marginLeft !=0){ $this->marginLeft = $marginLeft; }
        else{ $this->marginLeft = PDF_MARGIN_LEFT; }

        if($marginTop !=0){ $this->marginTop = $marginTop; }
        else{ $this->marginTop = PDF_MARGIN_TOP; }        
        
        if($marginRight !=0){ $this->marginRight = $marginRight; }
        else{ $this->marginRight = PDF_MARGIN_RIGHT; }
        
        if($marginHeader !=0){ $this->marginHeader = $marginHeader; }
        else{ $this->marginHeader = PDF_MARGIN_HEADER; }
        
        if($marginFooter !=0){ $this->marginFooter = $marginFooter; }
        else{ $this->marginFooter = PDF_MARGIN_FOOTER; }
        
        $this->creater();
    }
    
    public function creater(){
        
        switch($this->type){
            
            case 'supplies':
                $this->html .= $this->header;
                
                /* FIRST TABLE */
                $this->html .= '<table width="100%" height="150px" border="0" cellspacing="5" cellpadding="0">';
                $this->html .= '<tbody>';
                
                $this->html .= '<tr>';
                $this->html .= '<td><strong>G??NDEREN</strong></td>';
                $this->html .= '<td>'.$this->data["RequestName"].'</td>';
                $this->html .= '<td>&nbsp;</td>';
                $this->html .= '<td><strong>ALICI</strong></td>';
                $this->html .= '<td>'.$this->data["SuppCompAuth"].'</td>';
                $this->html .= '</tr>';
                
                $this->html .= '<tr>';
                $this->html .= '<td><strong>F??RMA</strong></td>';
                $this->html .= '<td>'.$this->data["RequestComp"].'</td>';
                $this->html .= '<td>&nbsp;</td>';
                $this->html .= '<td><strong>F??RMA</strong></td>';
                $this->html .= '<td>'.$this->data["SuppCompany"].'</td>';
                $this->html .= '</tr>';
                
                $this->html .= '<tr>';
                $this->html .= '<td><strong>E-POSTA</strong></td>';
                $this->html .= '<td>'.$this->data["RequestEmail"].'</td>';
                $this->html .= '<td>&nbsp;</td>';
                $this->html .= '<td><strong>E-POSTA</strong></td>';
                $this->html .= '<td>'.$this->data["SuppCompAuthE"].'</td>';
                $this->html .= '</tr>';
                
                $this->html .= '</body>';
                $this->html .= '</table>';
                /* FIRST TABLE */
                
                /* SECOND TABLE */
                $this->html .= '<table align="right" width="100%" height="100px" border="0" cellspacing="0" cellpadding="0">';
                $this->html .= '<tbody>';
                $this->html .= '<tr>';
                $this->html .= '<td width="33%">&nbsp;</td>';
                $this->html .= '<td width="33%"><strong>S??PAR???? NO</strong></td>';
                $this->html .= '<td width="33%">'.$this->data["SuppOrderNo"].'</td>';
                $this->html .= '</tr>';
                $this->html .= '<tr>';
                $this->html .= '<td width="33%"> &nbsp; </td>';
                $this->html .= '<td width="33%" ><strong>S??PAR???? TAR??H??</strong></td>';
                $this->html .= '<td width="33%">'.$this->data["SuppReqDate"].'</td>';
                $this->html .= '</tr>';
                $this->html .= '</tbody>';
                $this->html .= '</table>';
                /* SECOND TABLE */
                
                /* THIRD TABLE */
                $this->html .= '<table width="100%" border="1" cellspacing="0" cellpadding="0">';
                $this->html .= '<tbody>';
                
                $this->html .= '<tr height="40px">';
                $this->html .= '<td align="center"><b>KAL??TE</b></td>';
                $this->html .= '<td align="center"><b>M??KTAR</b></td>';
                $this->html .= '<td align="center"><b>TERM??N</b></td>';
                $this->html .= '<td align="center"><b>F??YAT</b></td>';
                $this->html .= '<td align="center"><b>??DEME</b></td>';
                $this->html .= '</tr>';
                
                $this->html .= '<tr height="80px">';
                $this->html .= '<td align="center">'.$this->data["SuppReqQuality"].'</td>';
                $this->html .= '<td align="center">'.$this->data["SuppReqQty"].'</td>';
                $this->html .= '<td align="center">'.$this->data["SuppReqDead"].'</td>';
                $this->html .= '<td align="center">'.$this->data["SuppReqPrice"].'</td>';
                $this->html .= '<td align="center">'.$this->data["SuppReqInst"].'</td>';
                $this->html .= '</tr>';
                
                $this->html .= '<tr>';
                $this->html .= '<td style="padding-left: 10px;" height="75px" colspan="5" valign="top"><br><b>HAMZAG??L EMPR??ME S??PAR??????D??R. <br>  </b></td>';
                $this->html .= '</tr>';
                
                $this->html .= '</tbody>';
                $this->html .= '</table>';
                
                /* THIRD TABLE */
                
                /*FOURTH TABLE*/
                $this->html .= '<table width="100%" border="1" cellspacing="0" cellpadding="0">';
                $this->html .= '<tbody>';
                
                $this->html .= '<tr>';
                $this->html .= '<td><b>&nbsp;HAM DE??ERLER</b></td>';
                $this->html .= '<td><b>&nbsp;En</b></td>';
                $this->html .= '<td>&nbsp;:______ cm</td>';
                $this->html .= '<td><b>&nbsp;Gramaj</b></td>';
                $this->html .= '<td>&nbsp;:______ gr/m2</td>';
                $this->html .= '</tr>';
                
                $this->html .= '<tr>';
                $this->html .= '<td><b>&nbsp;FINISHTE ??STENEN</b></td>';
                $this->html .= '<td><b>&nbsp;En</b></td>';
                $this->html .= '<td>&nbsp;: '.$this->data["SuppReqFinWi"].' cm</td>';
                $this->html .= '<td><b>&nbsp;Gramaj</b></td>';
                $this->html .= '<td>&nbsp;: '.$this->data["SuppReqFinGr"].' gr/m2</td>';
                $this->html .= '</tr>';
                
                $this->html .= '</tbody>';
                $this->html .= '</table>';
                
                /*FOURTH TABLE*/
                
                /* FIFTH TABLE */
                $this->html .= '<table width="100%" border="1" cellspacing="5" cellpadding="0">';
                $this->html .= '<tbody>';
                $this->html .= '
                      <tr>
                        <td align="center"><b>UYARILAR</b></td>
                      </tr>
                      <tr>
                        <td aling="justify">1) Mal?? sevk ederken irsaliyeye sipari?? numaras??, lot numaras?? ve makine mutlaka harfit ile kuma?? y??z??ne ya da tersine, ok ile belirtilmelidir !</td>
                      </tr>
                      <tr>
                        <td aling="justify">2) Toplar??n ??zerinde mutlaka firma ad??, iplik lotu, makine numaras?? ve kuma????n cinsi top ba????ndan 20 cm i??eriye harfit ile yaz??lmal??d??r !</td>
                      </tr>
                      <tr>
                        <td aling="justify">3) Kuma??lar po??etli olmal??d??r !</td>
                      </tr>
                      <tr>
                        <td aling="justify">4) Kalite kontrol?? yap??lm???? kuma??lar yeniden sar??ld?????? i??in, ??rg?? y??n?? mutlaka harfit ile kuma?? y??z??ne ya da tersine, ok ile belirtilmelidir.</td>
                      </tr>
                      <tr>
                        <td aling="justify">5) Yukar??daki maddelere uygun olmayan kuma??lar teslim al??nmayacakt??r. Kar??????kl????a yol a??mamas?? ad??na, l??tfen t??m uyar??lar?? dikkate al??n??z.</td>
                      </tr>
                      <tr>
                        <td aling="justify">6) Kuma?? yaz??l?? olarak teyitle??ilmi?? ??zelliklerde olmal??d??r.</td>
                      </tr>
                      <tr>
                        <td aling="justify">7) Sipari?? edilen miktar??n %5 inden fazlas?? taraf??m??zdan onay al??nmadan sevk edilmemelidir.</td>
                      </tr>
                      <tr>
                        <td aling="justify">8) Kuma????n gecikmesinden kaynakl?? ya??anabilecek problemler taraf??n??za yans??t??lacakt??r.</td>
                      </tr>
                      <tr>
                        <td aling="justify">9) Kuma????n sevk tarihinde ya??anabilecek gecikmeler en az 3 g??n ??ncesinden bildirilmelidir.</td>
                      </tr>
                      <tr>
                        <td aling="justify">10) Sat??n alan firma ile sat??c?? firma ??al????anlar?? aras??nda ger??ekle??en fax, mail vb yaz????malar hukuken ge??erlidir.</td>
                      </tr>
                      <tr>
                        <td aling="justify">11) Firmam??za g??nderilecek kuma??lara ait irsaliyelere de, Hamzagil Sipari?? Numaras?? yaz??lmas?? gerekmektedir.</td>
                      </tr>
                      <tr>
                        <td aling="justify">12) S??zle??meden do??an t??m ihtilaflarda Bursa Mahkemeleri yetkilidir.</td>
                      </tr>
                      <tr>
                        <td aling="justify">13) Yukar??daki ??artlar?? ta????mayan kuma??lar taraf??m??zdan kabul edilmeyecektir.</td>
                      </tr>';
                $this->html .= '</tbody>';
                $this->html .= '</table>';
                /* FIFTH TABLE */
              $this->html .= $this->footer;
              
            break;
            case 'orderstf':
                $this->html = "";
                
                $this->html .= $this->data;
                
            break;
        default:
            echo "WRONG CREATE PDF REQUEST";
            exit;
        break;
        }
        $this->generatePDF();
    }
    
    public function generatePDF(){
        
        //$pdf = new TCPDF("P", "mm", "A4", true, 'UTF-8', false);
        
        // set default monospaced font
        $this->pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        
        $this->pdf->SetPrintHeader(false);
        $this->pdf->SetPrintFooter(false);
        
        // set margins
        $this->pdf->SetMargins($this->marginLeft, $this->marginTop, $this->marginRight);
        $this->pdf->SetHeaderMargin($this->marginHeader);
        $this->pdf->SetFooterMargin($this->marginFooter);

        // set auto page breaks
        $this->pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $this->pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        
        // set font
        $this->pdf->SetFont('dejavusans', '', 11);
        // add a page
        $this->pdf->AddPage();
        
        $this->pdf->writeHTML($this->html, true, false, true, false, '');
        
        // reset pointer to the last page
        $this->pdf->lastPage();

        //Close and output PDF document
        $datas = $this->pdf->Output($this->savePath.$this->filename.".pdf", 'F');
        
        if($datas===TRUE){
            return $datas;
        }else{
            return false;
        }
        
    }
    
}
