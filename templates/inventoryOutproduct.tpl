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
                            <h5 class="panel-title">Mal Çıkışı</h5>
                            <div class="heading-elements">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-reading position-left"></i> Çıkış Bilgileri</legend>
                                        <div class="row">
                                            <div class="form-group">

                                                <label>Gönderilen Firma :</label>
                                                <select name="companiesId" class="form-control">
                                                    <option>Seçiniz</option>
                                                    {foreach from=$companies item=company  }
                                                        <option value="{$company["companiesId"]}">{$company["companiesShortName"]}</option>
                                                    {/foreach}
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gönderilen Kargo Firması :</label>
                                                    <input type="text" class="form-control" name="depotoutCargoComp" placeholder="xxx" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gönderilen İrsaliye Numarası:</label>
                                                    <input type="text" class="form-control" name="depotoutInvNumber" placeholder="Seri-Sıra" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gönderilen İrsaliye Tarihi :</label>
                                                    <input type="date" class="form-control" name="depotoutInvDate" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Satış Fiyatı :</label>
                                                    <input type="number" step="0.01" name="depotoutPrice" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Satış Fiyat Tipi :</label>
                                                    <select name="depotoutPriceType" class="form-control">
                                                        <option>Seçiniz</option>
                                                        {foreach from=$fiyatTipi key=tipKey item=tipVal  }
                                                            <option value="{$tipKey}">{$tipVal}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Satış Fiyat Birimi :</label>
                                                    <select name="depotoutPriceUnit" class="form-control">
                                                        <option>Seçiniz</option>
                                                        {foreach from=$fiyatBirimi key=birimKey item=birimVal  }
                                                            <option value="{$birimKey}">{$birimVal}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-truck position-left"></i>Mamül Bilgileri</legend>

                                        <div class="row">
                                            {if count($whouseList) > 0 }
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label> Stok Olan Depolar :</label>
                                                    <select name="whouseId" id="getwhouseDepotStock" data-stock="{$stocksId}" class="form-control">
                                                        <option>Seçiniz</option>
                                                        {foreach from=$whouseList item=whouse  }
                                                            <option value="{$whouse["whouseId"]}">{$whouse["whouseName"]}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label> Stok Olan Depo Bölümü :</label>
                                                    <select name="whouseAdId" id="stocksAddressIdStock" data-stock="{$stocksId}" class="form-control">
                                                        <option>Seçiniz</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {else}
                                                <div class="col-md-10">
                                                    <span style="color:#ff0000"> Çıkış yapılacak stok depolar bulunamadı. </span>
                                                </div>
                                            {/if}
                                            <div class="col-md-2">
                                                <label> Depo daki Miktar :</label>
                                                <span id="liveStockGetir">  </span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Çıkış Miktarı :</label>
                                                    <input type="number" step="0.01" name="depotoutQty" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Çıkış Miktar Birimi :</label>
                                                    <select name="depotoutQtyUnit" class="form-control" readonly>
                                                        {foreach from=$talepBirimi key=birimKey item=birimVal  }
                                                            <option  value="{$birimKey}">{$birimVal}</option>
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