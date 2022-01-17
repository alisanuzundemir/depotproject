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
                            <h5 class="panel-title">Mal Kabulü</h5>
                            <div class="heading-elements">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-reading position-left"></i> Tedarik Bilgileri</legend>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gelen Kargo Firması :</label>
                                                    <input type="text" class="form-control" name="depotCargoComp" placeholder="xxx" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gelen İrsaliye Numarası:</label>
                                                    <input type="text" class="form-control" name="depotInInvNumber" placeholder="Seri-Sıra" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gelen İrsaliye Tarihi :</label>
                                                    <input type="date" class="form-control" name="depotInInvDate" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-truck position-left"></i>Depo ve Miktar Bilgileri</legend>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Gelen Miktar : <small>(Toplam Gelen: {$toplamGelen} )</small></label>
                                                    <input type="number" step="0.01" name="depotInAcceptQty" class="form-control" max="{$kalan}" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Gelen Miktar Birimi :</label>
                                                    <select name="depotInAcceptQtyUnit" class="form-control" readonly>
                                                        {foreach from=$talepBirimi key=birimKey item=birimVal  }
                                                            <option {if $birimKey == $inventoryDetail["inventoryQtyUnit"]} selected {else} disabled {/if} value="{$birimKey}">{$birimVal}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Kabul Edilen Depo :</label>
                                                    <select name="whouseId" id="getwhouseDepot" class="form-control">
                                                        <option>Seçiniz</option>
                                                        {foreach from=$whouseList item=whouse  }
                                                            <option value="{$whouse["whouseId"]}">{$whouse["whouseName"]}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Kabul Edilen Depo Bölümü :</label>
                                                    <select name="whouseAdId" id="stocksAddressId" class="form-control">
                                                        <option>Seçiniz</option>
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