<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                {$Alert}
                <form method="POST" action="{$FormUrl}">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Stok Düzenle</h5>
                            <div class="heading-elements">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-reading position-left"></i> Stok Bilgileri</legend>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Stok Adı<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="stocksName" value="{$detail["stocksName"]}" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Stok Numarası<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="stocksNumber" value="{$detail["stocksNumber"]}" readonly required="required" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Stok Barkod<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="stocksBarcode" value="{$detail["stocksBarcode"]}" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label"> Stok Açıklaması :</label>
                                            <input type="text" class="form-control" name="stocksDesc" value="{$detail["stocksDesc"]}" autocomplete="off">
                                        </div>

                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-truck position-left"></i>Varsayılan Depo Bilgileri</legend>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Varsayılan Depo :</label>
                                                    <select name="stocksWhouseId" id="getwhouseDepot" class="form-control">
                                                        <option>Seçiniz</option>
                                                        {foreach from=$whouseList item=whouse  }
                                                            <option {if $detail["stocksWhouseId"] == $whouse["whouseId"]} selected {/if} value="{$whouse["whouseId"]}">{$whouse["whouseName"]}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Varsayılan Depo Adresi :</label>
                                                    <select name="stocksAddressId" id="stocksAddressId" class="form-control">
                                                        <option>Seçiniz</option>
                                                        {foreach from=$whouseAdList item=whousead  }
                                                            <option {if $detail["stocksAddressId"] == $whousead["whouseAdId"]} selected {/if} value="{$whousead["whouseAdId"]}">{$whousead["whouseAdName"]}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
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
                <!-- /2 columns form -->
            </div>
        </div>
        <!-- /form centered -->