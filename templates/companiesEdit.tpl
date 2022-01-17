 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                {$Alert}
                {if $companyData !=""}
                <form method="POST" action="{$FormUrl}">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Firma Ekle</h5>
                            <div class="heading-elements">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-reading position-left"></i> Firma Bilgileri</legend>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Firma Tam Adı<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="companiesName" placeholder="xxx AŞ LTD ŞTI" value="{$companyData["companiesName"]}" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Firma Kısa Adı<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="companiesShortName" placeholder="xxx" value="{$companyData["companiesShortName"]}" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">E-Posta Adresi<span class="text-danger">*</span> :</label>
                                            <input type="email" class="form-control" name="companiesEmail" placeholder="eposta@eposta.com" value="{$companyData["companiesEmail"]}" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon Numarası<span class="text-danger">*</span> :</label>
                                            <input type="tel" class="form-control" name="companiesTel" placeholder="+9 999 999 999" value="{$companyData["companiesTel"]}" required="required" data-mask="+99 999 999 9999">
                                        </div>
                                        <div class="form-group">
                                            <label>Faks Numarası:</label>
                                            <input type="tel" class="form-control" name="companiesFax" placeholder="+9 999 999 999" value="{$companyData["companiesFax"]}" data-mask="+99 999 999 9999">
                                        </div>
                                        <div class="form-group">
                                            <label>Web Sitesi:</label>
                                            <input type="text" name="companiesWeb" placeholder="www.example.com" value="{$companyData["companiesWeb"]}" class="form-control" autocomplete="off">
                                        </div>                                        
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-truck position-left"></i> Kargo / Vergi Bilgileri</legend>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vergi Dairesi:</label>
                                                    <input type="text" name="companiesTaxAdmin" placeholder="xxxx Company" class="form-control" value="{$companyData["companiesTaxAdmin"]}" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vergi Numarası:</label>
                                                    <input type="text" name="companiesTaxNumber" placeholder="9999999999" class="form-control" value="{$companyData["companiesTaxNumber"]}" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Firma Cari Kodu:</label>
                                                    <input type="text" name="companiesStockCode" placeholder="xxxx-9999-xxxx" class="form-control" value="{$companyData["companiesStockCode"]}" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Firma Ünvanı:</label>
                                                    <select name="companiesFeature" class="form-control">
                                                        <option>Seçiniz</option>
                                                         {foreach from=$companiesFeatures key="featKey" item=featVal }
                                                             <option {if $companyData["companiesFeature"] == $featKey} selected {/if} value="{$featKey}">{$featVal}</option>
                                                         {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Firma Tipi:</label>
                                                    <select name="companiesType" class="form-control">
                                                        <option>Seçiniz</option>
                                                         {foreach from=$companiesTypes key="typesKey" item=typesVal }
                                                             <option {if $companyData["companiesType"] == $typesKey} selected {/if} value="{$typesKey}">{$typesVal}</option>
                                                         {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Ödeme Günleri :</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[1]" {if $companyData["payDays"] && in_array("Pazartesi",$companyData["payDays"])} checked="checked" {/if} value="Pazartesi"> Pazartesi 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[2]" {if $companyData["payDays"] && in_array("Salı",$companyData["payDays"])} checked="checked" {/if} value="Salı"> Salı 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[3]" {if $companyData["payDays"] && in_array("Çarşamba",$companyData["payDays"])} checked="checked" {/if} value="Çarşamba"> Çarşamba 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[4]" {if $companyData["payDays"] && in_array("Perşembe",$companyData["payDays"])} checked="checked" {/if} value="Perşembe"> Perşembe 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[5]" {if $companyData["payDays"] && in_array("Cuma",$companyData["payDays"])} checked="checked" {/if} value="Cuma"> Cuma 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Ödeme Periyodu:</label>
                                                    <select name="companiesPayPeriods" class="form-control">
                                                        <option>Seçiniz</option>
                                                         {foreach from=$PayPeriods key=payperK item=payperV }
                                                             <option value="{$payperK}" {if $companyData["companiesPayPeriods"]==$payperK} selected {/if}>{$payperV}</option>
                                                         {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Özel Mesaj:</label>
                                                    <textarea name="companiesNote" rows="6" cols="5" maxlength="255" class="form-control" placeholder="Firma ile ilgili özel mesajınız">{$companyData["companiesNote"]}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <legend class="text-semibold">
                                            <i class="icon-truck position-left"></i> Firma Adres Bilgileri
                                        </legend>
                                        {assign var=val value=0}
                                        {foreach from=$setAddressData key=setAddK item=setAddV }
                                            <input type="hidden" name="companyAddress[{$val}][companiesAddressId]" value="{$setAddV["companiesAddressId"]}" readonly /> 
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Firma Adres Adı:</label>
                                                            <input type="text" name="companyAddress[{$val}][companiesAddressName]" placeholder="9999999999" value="{$setAddV["companiesAddressName"]}" class="form-control" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Firma Posta Kodu:</label>
                                                            <input type="text" name="companyAddress[{$val}][companiesAddressZipCode]" placeholder="9999999999" value="{$setAddV["companiesAddressZipCode"]}" class="form-control" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Ülke :</label>
                                                            <select name="companyAddress[{$val}][companiesAddressCountryId]" id="country_{$val}" class="form-control">
                                                                <option>Seçiniz</option>
                                                                 {foreach from=$countries item=country }
                                                                     <option value="{$country['id']}" {if $setAddV["companiesAddressCountryId"] == $country["id"]} selected {/if}>{$country['name']}</option>
                                                                 {/foreach}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Şehir / Eyalet :</label>
                                                            <select name="companyAddress[{$val}][companiesAddressStateId]" id="states_{$val}" class="form-control">
                                                                <option>Seçiniz</option>
                                                                 {foreach from=$setAddV["states"] item=state }
                                                                     <option value="{$state['id']}" {if $setAddV["companiesAddressStateId"] == $state["id"]} selected {/if}>{$state['name']}</option>
                                                                 {/foreach}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>İlçe / Bölge:</label>
                                                            <select name="companyAddress[{$val}][companiesAddressCityId]" id="city_{$val}" class="form-control">
                                                                <option>Seçiniz</option>
                                                                 {foreach from=$setAddV["city"] item=cities }
                                                                     <option value="{$cities['id']}" {if $setAddV["companiesAddressCityId"] == $cities["id"]} selected {/if}>{$cities['name']}</option>
                                                                 {/foreach}
                                                            </select> 
                                                       </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Adres:</label>
                                                    <input type="text" class="form-control" name="companyAddress[{$val}][companiesAddressText]" value="{$setAddV["companiesAddressText"]}" placeholder="Lorem ipsum dolor sit amet...." autocomplete="off">
                                                </div>
                                            </div>
                                            {assign var=val value=$val+1}
                                        {/foreach}
                                    <!-- 2 -->
                                    {assign var=val value=$val+1}
                                        <input type="hidden" name="companyAddress[{$val}][companiesAddressId]" value="0" readonly /> 
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Firma Adres Adı:</label>
                                                        <input type="text" name="companyAddress[{$val}][companiesAddressName]" placeholder="9999999999" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Firma Posta Kodu:</label>
                                                        <input type="text" name="companyAddress[{$val}][companiesAddressZipCode]" placeholder="9999999999" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Ülke :</label>
                                                        <select name="companyAddress[{$val}][companiesAddressCountryId]" id="country_{$val}" class="form-control">
                                                            <option>Seçiniz</option>
                                                             {foreach from=$countries item=country }
                                                                 <option value="{$country['id']}">{$country['name']}</option>
                                                             {/foreach}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Şehir / Eyalet :</label>
                                                        <select name="companyAddress[{$val}][companiesAddressStateId]" id="states_{$val}" class="form-control">
                                                            <option>Seçiniz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>İlçe / Bölge:</label>
                                                        <select name="companyAddress[{$val}][companiesAddressCityId]" id="city_{$val}" class="form-control">
                                                            <option>Seçiniz</option>
                                                        </select> 
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Adres:</label>
                                                <input type="text" class="form-control" name="companyAddress[{$val}][companiesAddressText]" placeholder="Lorem ipsum dolor sit amet...." autocomplete="off">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="text-right">
                                    <a href="javascript:history.go(-1);" class="btn btn-warning"><i class="icon-arrow-left8"></i>Geri Dön</a>
                                    <button type="reset" class="btn btn-default">İptal Et <i class="icon-reload-alt position-right"></i></button>
                                    <button type="submit" class="btn btn-primary">Kaydet <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            {/if}
                <!-- /2 columns form -->
    </div> 
</div>
<!-- /form centered -->
{literal}
    <script>
        $(document).ready(function(){
            // Full featured editor
            CKEDITOR.replace( 'editor-full', {
                height: '400px',
                extraPlugins: 'forms'
            });
        });
    </script>    
{/literal}