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
                            <h5 class="panel-title">Tedarik Ekle</h5>
                            <div class="heading-elements">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-6 col-lg-offset-3 col-md-offset-3">
                                    <fieldset>
                                        <legend class="text-semibold"> <i class="icon-reading position-left"></i> Tedarik Bilgileri </legend>

                                        <div class="form-group">
                                            <label>Stok :</label>
                                            <select name="stocksId" class="form-control">
                                                <option>Seçiniz</option>
                                                {foreach from=$stocks item=stock  }
                                                    <option value="{$stock["stocksId"]}">{$stock["stocksName"]}</option>
                                                {/foreach}
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tedarik Firması :</label>
                                            <select name="companiesId" class="form-control">
                                                <option>Seçiniz</option>
                                                {foreach from=$companies item=company  }
                                                    <option value="{$company["companiesId"]}">{$company["companiesShortName"]}</option>
                                                {/foreach}
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tedarik Talep Tarihi :</label>
                                            <input type="date" name="inventoryDate" class="form-control">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tedarik Miktarı :</label>
                                                    <input type="text" name="inventoryQty" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tedarik Birimi :</label>
                                                    <select name="inventoryQtyUnit" class="form-control">
                                                        <option>Seçiniz</option>
                                                        {foreach from=$talepBirimi key=birimKey item=birimVal  }
                                                            <option value="{$birimKey}">{$birimVal}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Tedarik Fiyatı :</label>
                                                    <input type="text" name="inventoryPrice" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Fiyat Tipi :</label>
                                                    <select name="inventoryPriceType" class="form-control">
                                                        <option>Seçiniz</option>
                                                        {foreach from=$fiyatTipi key=tipKey item=tipVal  }
                                                            <option value="{$tipKey}">{$tipVal}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Fiyat Birimi :</label>
                                                    <select name="inventoryPriceUnit" class="form-control">
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