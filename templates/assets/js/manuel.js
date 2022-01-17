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
    var htmlText = '<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">';
        htmlText += '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Kapat</span></button>';
        htmlText += '<span class="text-semibold">Tebrikler!</span> İşlemi başarı ile gerçekleştirdiniz.</div>';
    
    var htmlTextError   = '<div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">';
        htmlTextError   = '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Kapat</span></button>';
        htmlTextError   = '<span class="text-semibold">HATA!</span> işlem sırasında hata oluştu.</div>';

/**
 * DOCUMENT READY FOR JQUERY PROC
 * @type type
 */
$(document).ready(function(){
    
    /* SELECT COUNTRY STATES OR CITY TREEFIELD FUNC */
    $(document).on("change","[id^=country_] , [id^=states_] , [id^=city_]",function(e){
        e.preventDefault();
        var ids             = $(this).attr("id");
        var spl             = ids.split('_');
        var selectedItem    = $("#"+ids+" :selected").val();
        var postingData     = $.param({ action: "countryRequest", from: spl[0], data: selectedItem });
        var returnCont      = "";
        
        if(spl[0] == "country"){
            returnCont      = "#states_"+spl[1];
        }else if(spl[0] == "states"){
            returnCont      = "#city_"+spl[1];
        }else if(spl[0] == "city"){
            return true;
        }
        
        ajaxPosted(ajaxProcUrl,postingData,returnCont); 
    });
    /* SELECT COUNTRY STATES OR CITY TREEFIELD FUNC */

    /* GET WAREHOUSE ADDRESS FUNC */
    $(document).on("change","#getwhouseDepot",function(e){
        e.preventDefault();
        var ids             = $(this).attr("id");
        var selectedItem    = $("#"+ids+" :selected").val();
        var postingData     = $.param({ action: "getwhouseAddress", data: selectedItem });
        var returnCont      = "#stocksAddressId";

        ajaxPosted(ajaxProcUrl,postingData,returnCont);
    });
    /* GET WAREHOUSE FUNC */

    /* GET WAREHOUSE WITH STOCK ADDRESS FUNC */
    $(document).on("change","#getwhouseDepotStock",function(e){
        e.preventDefault();
        var ids             = $(this).attr("id");
        var selectedItem    = $("#"+ids+" :selected").val();
        var stocksId       = $(this).attr("data-stock");
        var postingData     = $.param({ action: "getwhouseAddress", data: selectedItem, stockId: stocksId });
        var returnCont      = "#stocksAddressIdStock";

        ajaxPosted(ajaxProcUrl,postingData,returnCont);
    });
    /* GET WAREHOUSE WITH STOCK FUNC */

    /* GET WAREHOUSE WITH STOCK ADDRESS FUNC */
    $(document).on("change","#stocksAddressIdStock",function(e){
        e.preventDefault();
        var ids             = $(this).attr("id");
        var selectedItem    = $("#"+ids+" :selected").val();
        var stocksId       = $(this).attr("data-stock");
        var postingData     = $.param({ action: "getwhouseAdTotal", data: selectedItem, stockId: stocksId });
        var returnCont      = "#liveStockGetir";

        ajaxPosted(ajaxProcUrl,postingData,returnCont,"html");
    });
    /* GET WAREHOUSE WITH STOCK FUNC */

    /* GET TABLE COLUMNS FUNC FOR ADMIN APRROVAL */
    $("#tablename").on("change",function(e){
        e.preventDefault();
        var selectedItem    = $("#tablename :selected").val();
        var postingData     = $.param({ action: "getTables", tablename: selectedItem });
        var returnCont      = "#column_name";
        
        ajaxPosted(ajaxProcUrl,postingData,returnCont,"table2"); 
    });
    /* GET TABLE COLUMNS FUNC FOR ADMIN APRROVAL */

    
    /* FOR SHIPPING 
    $('input:radio').change(function(){
        var clsname = $( this ).parent().hasClass( "checked" );
        if ( clsname ) {
            $('input:radio').attr("checked",false);
            $( this ).attr( "checked", true );
        }else{
            $( this ).attr( "checked", false );
        }
    });
    /* FOR SHIPPING */
    
    /* GET SHIPMENT ADDRESS BY CUSTOMER */
    $("[id^=customer_]").on("change",function(e){
        e.preventDefault();
        var ids             = $(this).attr("id");
        var spl             = ids.split('_');
        var selectedItem    = $("#"+ids+" :selected").val();
        
        var postingData     = $.param({ action: "getAddressByCustomer", data: selectedItem });
        var returnCont      = "";

        returnCont = "#showAddress_"+spl[1];

        ajaxPosted(ajaxProcUrl,postingData,returnCont);
    });
    /* GET SHIPMENT ADDRESS BY CUSTOMER */

    
    /*ORDER DETAIL JQUERY*/
    
});

/**
 * AJAX SEND DATA COMMON FUNC
 * @param {type} postUrl
 * @param {type} postData
 * @param {type} returnContainer
 * @param {type} returnIncType
 * @param {type} sendType
 * @returns {undefined}
 */
function ajaxPosted(postUrl,postData,returnContainer,returnIncType="append",sendType="post"){
    $.ajax({
        url: postUrl,
        dataType: 'json',
        type: sendType,
        data: postData,
        success: function( data, textStatus, jQxhr ){
            if(returnIncType=="append"){
                var toApp = "";

                if ( data.length == 0 ) {
                    toApp += '<option value="0"> BULUNAMADI! </option> ';
                }else{
                    toApp += '<option value=""> Seçiniz </option> ';
                    $.each(data,function(i,o){
                        toApp += '<option value="'+o.id+'" ';
                        if(typeof(o.text) != "undefined" && o.text !== null) {
                            toApp += 'data-text="'+o.text+'" ';
                        }
                        toApp += '>';
                        toApp += o.name;
                        toApp += '</option>';
                    });
                }
                $(returnContainer).empty();
                $(returnContainer).append(toApp);
            }else if(returnIncType=="table2"){
                var toApp = "";

                if ( data.length == 0 ) {
                    toApp += '<option value="0"> BULUNAMADI! </option> ';
                }else{
                    toApp += '<option value=""> Seçiniz </option> ';
                    $.each(data,function(i,o){
                        toApp += '<option value="'+o.Field+'">'+o.Field+'</option>';
                    });
                }
                $(returnContainer).empty();
                $(returnContainer).append(toApp);              
            }else if(returnIncType == "html"){
                
                var deger = {};
                
                if(data.length == 0){
                    $(returnContainer).html("Değer Bulunamadı.");
                }else{
                    $.each(data,function(i,o){
                       $(returnContainer).html(o.quantity+" "+o.quantityType);
                    });
                }
            }
        },
        error: function( jqXhr, textStatus, errorThrown ){
            new PNotify({
                title: 'HATA',
                text: errorThrown,
                icon: 'icon-blocked',
                type: 'error'
            });
            /*console.log( errorThrown );*/
        }
    });
}

/**
 * DELETE ANY RECORD BUT NOT DELETE JUST CHANGE STATUS
 * @param {type} tableNames
 * @param {type} tableRecordId
 * @param {type} autoIncrementId
 * @returns {undefined}
 */
function deleteRecord(tableNames,tableRecordId,autoIncrementId){

    bootbox.confirm({
        title: "Emin Misiniz?",
        message: tableRecordId + " numaralı kaydı silmek istediğinize emin misiniz ?",
        setLocale : "tr",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> İptal'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Onayla'
            }
        },
        callback: function (result) {
            if(result===true){
                var postingData     = $.param({ action: "deleteRecords", tablename: tableNames,recordId: tableRecordId,fieldName: autoIncrementId });
                $.ajax({
                    url: ajaxProcUrl,
                    dataType: 'json',
                    type: "POST",
                    data: postingData,
                    success: function( data, textStatus, jQxhr ){

                        if ( data.length == 0 ) {
                            $("form").prepend(htmlTextError);
                        }else{
                            $("form").prepend(htmlText);
                            $("html, body").animate({ scrollTop: 0 }, "slow");
                            window.setTimeout(function(){location.reload()},2000);
                        }
                    },
                    error: function( jqXhr, textStatus, errorThrown ){
                        console.log( errorThrown );
                    }
                });
            }
        }
    });
}

/**
 * Get Company Authirition Name
 * @returns {append to select}
 */
function getAuthFromComp(){
    var selectedVal = $("#companySelect").find("option:selected").val();
    var postingData     = $.param({ action: "getAuthFromCompany", data: selectedVal });
    var returnCont      = "";
    returnCont = "#companyAuthorities";

    ajaxPosted(ajaxProcUrl,postingData,returnCont); 
}
