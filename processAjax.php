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
if(isset($_POST)){

   $action = $_POST["action"];
   
   switch ($action){
        case 'countryRequest':
            if(isset($_POST["from"]) && $_POST["from"]=="country"){

                $statesModule = new states;
                $getStates = $statesModule->search(array("country_id"=>intval($_POST["data"])),array("name"=>"ASC"));

                if(!empty($getStates) && count($getStates) > 0){
                    echo json_encode($getStates,TRUE,JSON_UNESCAPED_UNICODE);
                }else{
                    echo json_encode(array());
                }

            }else if(isset($_POST["from"]) && $_POST["from"]=="states"){

                $setCities    = array();

                $citiesModule = new cities;
                $getCities    = $citiesModule->search(array("state_id"=>intval($_POST["data"])),array("name"=>"ASC"));

                if(!empty($getCities) && count($getCities) > 0){
                    echo json_encode($getCities,TRUE,JSON_UNESCAPED_UNICODE);
                }else{
                    echo json_encode(array());
                }

            }else{
                echo TRUE;
            }
        break;
        case 'getTables':
            if(isset($_POST['tablename']) && !empty($_POST['tablename'])){
                $data = new database;
                $show_q = $data->query("SHOW COLUMNS FROM `".$_POST['tablename']."` ");
                echo json_encode($show_q);
            }
        break;
        case 'deleteRecords':
            if( ( isset($_POST['tablename']) && isset($_POST['recordId']) ) && ( !empty($_POST['tablename']) && !empty($_POST['recordId']) ) ){
                $data = new database;
                $delete_q = $data->query("DELETE FROM `".$_POST["tablename"]."` WHERE ".$_POST['fieldName']."=".$_POST['recordId']." ");
                if($delete_q){
                    echo json_encode(array($delete_q));
                }
            }else{
                echo json_encode(array());
            }
        break;


        case 'getAddressByCustomer':
            $companyAddressModul = new companies_companiesaddress;
            $getAddress = $companyAddressModul->search(array("companiesId"=>intval($_POST["data"])),array("companiesAddressName"=>"ASC"));
            
            $setAddress = array();
            if(count($getAddress) > 0){
                foreach($getAddress AS $getAdres){
                    $setAddress[] = array(
                        "id"    => $getAdres["companiesAddressId"],
                        "name"  => $getAdres["companiesAddressName"],
                        "text"  => $getAdres["companiesAddressText"]
                    );
                }
            }else{
                $setAddress = array();
            }
            echo json_encode($setAddress);
        break;

        case 'getAuthFromCompany':
            $results = array();
            
            $companyAuthGet = new companies_authoritieslist;
            $getAuth        = $companyAuthGet->search(array("companiesAuthoritiesCompanyId"=>intval($_POST["data"])));
            if($getAuth && count($getAuth) > 0){
                foreach($getAuth AS $auths){
                    $results[] = array(
                        "id"    => $auths["companiesAuthoritiesId"],
                        "name"  => $auths["companiesAuthoritiesNameSurname"]
                        );
                }
            }
            
            echo json_encode($results);
        break;

       case 'getwhouseAddress':

           $results = array();

           $whouseAdModul   = new whouse_whouseaddress();
           $getAddress      = $whouseAdModul->search(array("whouseId"=>intval($_POST["data"])),array());
           if($getAddress && count($getAddress) > 0){
               foreach($getAddress AS $address){
                   $results[] = array(
                       "id"     => $address["whouseAdId"],
                       "name"   => $address["whouseAdName"]
                   );
               }
           }

           echo json_encode($results);
           break;

       case 'getwhouseDepotStock':

           $results     = array();
           $malOlanlar  = array();
           $idList      = array();

           $depotInModul    = new inventory_inventoryIncoming();
           $whouseAdModul   = new whouse_whouseaddress();


           $malOlanlar      = $depotInModul->mixQuery("SELECT depotInId,stocksId,whouseId,whouseAdId,depotInLiveStock FROM depotin WHERE stocksId = '".intval($_POST["stockId"])."' AND depotInLiveStock > 0 ");
           if($malOlanlar){
               foreach ($malOlanlar AS $mallar){
                   $idList[] = $mallar["whouseAdId"];
               }
           }

           if( count($idList) > 0 ){
               $whereAsk = " AND whouseAdId IN(".implode(",",array_values($idList)).") ";
           }else{
               $whereAsk = "";
           }

           $getAddress      = $whouseAdModul->mixQuery(" SELECT * FROM whouseaddress WHERE whouseId='".intval($_POST["data"])."' ".$whereAsk." ");
           if($getAddress && count($getAddress) > 0){
               foreach($getAddress AS $address){
                   $results[] = array(
                       "id"     => $address["whouseAdId"],
                       "name"   => $address["whouseAdName"]
                   );
               }
           }

           echo json_encode($results);
           break;

       case 'getwhouseAdTotal':

           //$whouseAdModul   = new whouse_whouseaddress();
           //$malOlanlar      = $whouseAdModul->mixQuery("SELECT SUM(depotInLiveStock) AS toplam,depotInAcceptQtyUnit FROM depotin WHERE stocksId = '".intval($_POST["stockId"])."' AND whouseAdId='".intval($_POST["data"])."' AND depotInLiveStock > 0 ");

           $results = array();
           $depotInModul    = new inventory_inventoryIncoming();
           $depotLiveModul  = new inventory_inventorylivedata();
           $malOlanlar      = $depotLiveModul->search(array("stocksId"=>intval($_POST["stockId"]),"whouseAdId"=>intval($_POST["data"])));

           $depotInModul->stocksId  = intval($_POST["stockId"]);
           $qtyResult               = $depotInModul->find();

           if($malOlanlar && count($malOlanlar) > 0){
               $results[] = array(
                   "quantity"       => $malOlanlar[0]["depotLiveQty"],
                   "quantityType"   => $depotInModul->depotUnit[$qtyResult["depotInAcceptQtyUnit"]]
               );
           }

           echo json_encode($results);
           break;

       default:
           echo json_encode(array("error"=>"CHECK YOUR SEND DATA!"));
           break;
   }
    
}


