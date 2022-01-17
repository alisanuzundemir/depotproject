<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($match["params"]["action"]) && !empty($match["params"]["action"])){
    
    $action = $match["params"]["action"];
    $printPage = FALSE;

    switch($action){
        case 'shipmentBillPrint':
            if( isset($match["params"]["id"]) ){
                
                $id                 = intval($match["params"]["id"]);
                $shipmentModul      = new shipment;
                $getShipment        = array();
                
                $shipmentBillModul  = new shipment_shipmentbill;
                $getShipmentData    = $shipmentBillModul->find($id);

                $getShipment = $shipmentModul->find($getShipmentData["shipmentId"]);
                
                $getOrderData   = array(); 
                $orderViewModul = new order_orderview;
                $orderViewModul->orderId    = $getShipment["shipmentOrderId"];
                $getOrderData               = $orderViewModul->find();
               
                
                $shipmentBillDecode = json_decode($getShipmentData["shipmentBillDetail"],JSON_UNESCAPED_UNICODE);
                
                $printItem = array();
                $k = 1;
                foreach($shipmentBillDecode AS $shipmentBillList){
                    $printItem[] = "<tr>
                        <td height=\"20\"  colspan=\"3\" id=\"stok_kodu\" style=\" padding-left:8px;\">".$shipmentBillList["StokKodu"]."</td>
                        <td>&nbsp;</td>
                        <td align=\"center\" style=\"padding-right:20px\" id=\"miktar_mt\">".$shipmentBillList["GönderilenMiktarMt"]."</td>
                        <td>&nbsp;</td>
                        <td align=\"right\" style=\"padding-right:10px\" id=\"miktar_kg\">".$shipmentBillList["GönderilenMiktarKg"]."&nbsp;&nbsp;&nbsp;</td>
                    </tr>"; 
                $k++;  
                }
                
                if($k < 11){
                    $s = 11 - $k;
                    for($d=1;$d<=$s;$d++){
                        $printItem[] = "<tr>
                            <td width=\"30\">&nbsp;</td>
                            <td height=\"20\" colspan=\"2\">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>";                        
                    }
                }
                
                $getFile = file_get_contents(modulesDir."shipment/waybill.html");
                $getFile = trim(preg_replace('/\s+/', ' ', $getFile));
                $showing = sprintf($getFile,
                        $getOrderData["musteri_firma_adi"],
                        $getOrderData["musteri_firma_adresi"],
                        $getOrderData["musteri_vergi_dairesi"],
                        $getOrderData["musteri_vergi_numarasi"],
                        makeTimeFormat($getShipmentData["shipmentBillPrintDate"]),
                        makeTimeFormat($getShipmentData["shipmentBillPrintDate"]),
                        implode("",$printItem),
                        nl2br($getShipmentData["shipmentBillNote"])
                        );
                
                echo $showing;
                
                $printPage = TRUE;
                
            }
        break;
        case 'createStf':
            $lang   = strtolower($match["params"]["another"]);
            $ids    = $match["params"]["id"];
            $orderIds   = array();
            
            if(strpos($ids, ';') !== false){
                $orderIds = explode(";",$ids);
            }else{
                $orderIds = array($ids);
            }
            
            $orderModul = new order;
            $getCompId  = $orderModul->find($orderIds[0]);
            
            $companyModul   = new companies;
            $companyCont    = $companyModul->find($getCompId["orderCustomerId"]);

            $z =  date("z", strtotime(date('d-m-Y H:i')));
            $hi =  date("Hi", strtotime(date('d-m-Y H:i')));
            $saniye = substr(date("s",strtotime(date('d-m-Y H:i'))),-1);
            $yil = substr(date("Y",strtotime(date('d-m-Y H:i'))),-2);

            $orderInfo  = array();
            $companyName= "";
            $compAddress= "";
            $compAddText= "";
            $compOrdNo  = "";
            $documentNo = rand(0,9999).$yil.$z.$hi.$saniye;
            $orderDate  = "";
            $paymentInfo= "";

            $orderFields = "";

            foreach($orderIds AS $oId){
                $paymentInst= "";
                
                $viewModul  = new order_orderview;
                $viewModul->orderId = $oId;
                $getView    = $viewModul->find();
                
                $companyName = $getView["musteri_firma_adi"];
                $compAddress = $getView["companiesAddressName"];
                $compAddText = $getView["companiesAddressText"];
                $compOrdNo   = $getView["paymentCustomerOrderId"];
                $orderDate   = makeTimeFormat($getView["orderDate"]);

                if( $getView["paymentTypeId"] != "11" ){
                    if( !empty(trim($getView["paymentInstallment"])) && strlen($getView["paymentInstallment"]) > 1 ){
                        $paymentInst = $getView["paymentInstallment"] . ($lang == "tr")?" Gün":" Day"; 
                    }else{
                        $paymentInst = "";
                    }
                }
                
                if($lang == "en"){
                    $paymentInfo = $getView["paymentTypeNameEn"] . $paymentInst;
                }else{
                    $paymentInfo = $getView["paymentTypeName"] . $paymentInst;
                }

                $orderFields .= "<tr>";
                $orderFields .= "<td align=\"center\" style=\"border:1px #000 solid;\"> ".$getView["orderId"]." </td><!-- SİPARİŞ NUMARASI -->";
                $orderFields .= "<td align=\"center\" style=\"border:1px #000 solid;\"> ".$getView["qualityName"]." </td><!-- KALİTE -->";
                $orderFields .= "<td align=\"center\" style=\"border:1px #000 solid;\"> ".$getView["productionPattern"]." - ".$getView["variantName"].".".$getView["productionVaryantNumber"]." </td><!-- DESEN VARYANT -->";
                $orderFields .= "<td align=\"center\" style=\"border:1px #000 solid;\"> ".$getView["productionApprovalWidh"]." </td><!-- TEYİT EDİLEN EN -->";
                $orderFields .= "<td align=\"center\" style=\"border:1px #000 solid;\"> ".$getView["productionApprovalWeight"]." </td><!-- TEYİT EDİLEN GRAM -->";
                $orderFields .= "<td align=\"center\" style=\"font-family:Arial Helvetica!important;border:1px #000 solid;\"> ".$getView["productionFinishNote"]." </td><!-- FİNİSH BİLGİSİ -->";
                $orderFields .= "<td align=\"center\" style=\"border:1px #000 solid;\"> ".$getView["productionQuantity"]." ".$viewModul->quantityType[$getView["productionQuantityType"]]." </td> <!-- MİKTAR MİKTAR TİP -->";
                $orderFields .= "<td align=\"center\" style=\"border:1px #000 solid;\"> ".makeTimeFormat($getView["orderCustomerDeadLineDate"])." </td><!-- TERMİN TARİHİ -->";
                $orderFields .= "<td align=\"center\" style=\"border:1px #000 solid;\"> ".$getView["paymentPrice"]." ".$viewModul->priceType[$getView["paymentCurrencyType"]]." / ".$viewModul->priceUnit[$getView["paymentUnitPrice"]]." </td><!-- MİKTAR TİP / MİKTAR FİYAT -->";
                $orderFields .= "</tr>";

            }
            
            $getFile = file_get_contents(modulesDir."order/stf_". $lang.".html");
            $getFile = trim(preg_replace('/\s+/', ' ', $getFile));
            $showing = sprintf($getFile,
                    $companyName,
                    $documentNo,
                    $compAddress,
                    $compOrdNo,
                    $paymentInfo,
                    $orderDate,
                    "",
                    "",
                    $orderFields,
                    $companyCont["companiesContract"],
                    url.'defaultImages/weblogo.png',
                    url.'defaultImages/adres.png'
                    );
            
            echo $showing;
            $printPage = TRUE;

        break;
    }
    if($printPage){
	echo '<script type="text/javascript" src="'.url.'templates/assets/js/core/libraries/jquery.min.js"></script>';
        echo '<script type="text/javascript" src="'.url.'templates/assets/js/core/libraries/jquery_ui/jquery-ui.js"></script>';
	echo '<script type="text/javascript" src="'.url.'templates/assets/js/core/libraries/bootstrap.min.js"></script>';
        echo '<script>';
        
        echo '  $(window).load(function() {
                    printing();
                }); ';
        echo 'function printing(){  window.print(); window.close(); }';
        
        echo '</script>';
    }
}