 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                {$Alert}
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h2 class="panel-title">{$detail["stocksName"]} Görüntüle</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group mt-5">
                                <label class="text-semibold">Stok Adı : </label>
                                <span class="pull-right-sm">{$detail["stocksName"]}</span>
                            </div>
                            <div class="form-group mt-5">
                                <label class="text-semibold">Stok Numarası : </label>
                                <span class="pull-right-sm">{$detail["stocksNumber"]}</span>
                            </div>
                            <div class="form-group mt-5">
                                <label class="text-semibold">Stok Barkod : </label>
                                <span class="pull-right-sm">{$detail["stocksBarcode"]}</span>
                            </div>
                            <div class="form-group mt-5">
                                <label class="text-semibold">Varsayılan Depo / Bölüm : </label>
                                <span class="pull-right-sm">{$detail["stocksLocation"]}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tabbable nav-tabs-vertical nav-tabs-left">
                                <ul class="nav nav-tabs nav-tabs-highlight">
                                    <li class="active"><a href="#left-tab1" data-toggle="tab"><i class="icon-list-unordered position-left"></i> Mevcut Stoklar </a></li>
                                    <li><a href="#left-tab5" data-toggle="tab"><i class="icon-user-tie position-left"></i> Tedarikler </a></li>
                                    <li><a href="#left-tab6" data-toggle="tab"><i class="icon-user-tie position-left"></i> Mal Çıkışları </a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active has-padding" id="left-tab1">
                                        <table class="table datatable-responsive-control-right">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Depo / Bölüm Adı </th>
                                                    <th> Depoda ki Miktar </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    {foreach from=$livestocks item=lStocks }
                                                        <tr>
                                                            <td>{$lStocks['depotLiveId']}</td>
                                                            <td>{$lStocks['depotName']}</td>
                                                            <td>{$lStocks['depotQty']}</td>
                                                        </tr>
                                                    {/foreach}
                                                </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane has-padding" id="left-tab5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> # </th>
                                                        <th> Tedarik Firması </th>
                                                        <th> Tedarik Miktarı </th>
                                                        <th> Tedarik Fiyatı </th>
                                                        <th> Tedarik Zamanı </th>
                                                        <th> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                {foreach from=$inventory item=iListing }
                                                    <tr>
                                                        <td>{$iListing['inventoryId']}</td>
                                                        <td>{$iListing['companies']}</td>
                                                        <td>{$iListing['quantity']}</td>
                                                        <td>{$iListing['price']}</td>
                                                        <td>{$iListing['invDate']}</td>
                                                        <td> </td>
                                                    </tr>
                                                {/foreach}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane has-padding" id="left-tab6">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Satılan Firma </th>
                                                    <th> Satış Miktarı </th>
                                                    <th> Satış Fiyatı </th>
                                                    <th> Satış İrsaliye No </th>
                                                    <th> Satış Zamanı </th>
                                                    <th> </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {foreach from=$selling item=sListing }
                                                    <tr>
                                                        <td>{$sListing['depotoutId']}</td>
                                                        <td>{$sListing['companies']}</td>
                                                        <td>{$sListing['quantity']}</td>
                                                        <td>{$sListing['price']}</td>
                                                        <td>{$sListing['selNo']}</td>
                                                        <td>{$sListing['invDate']}</td>
                                                        <td> </td>
                                                    </tr>
                                                {/foreach}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-right">
                            <a href="javascript:history.go(-1);" class="btn btn-warning"><i class="icon-arrow-left8"></i>Geri Dön</a>
                        </div>
                </div>
            </div>
        </div>