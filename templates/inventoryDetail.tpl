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
                        <h2 class="panel-title">#{$detail["inventoryId"]} - Tedarik Detayı</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Tedarik Bilgileri</h6>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Tedarik Edilen Stok : </label>
                                            <span class="pull-right-sm">{$detail["stocksName"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Tedarik Edilen Firma : </label>
                                            <span class="pull-right-sm">{$detail["companyName"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Tedarik Tarihi : </label>
                                            <span class="pull-right-sm">{$detail["inventoryDate"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold"> Tedarik Miktarı : </label>
                                            <span class="pull-right-sm">{$detail["inventoryQty"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Tedarik Fiyatı : </label>
                                            <span class="pull-right-sm">{$detail["inventoryPrice"]}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tabbable nav-tabs-vertical nav-tabs-left">
                                <ul class="nav nav-tabs nav-tabs-highlight">
                                        <li class="active"><a href="#left-tab1" data-toggle="tab"><i class="icon-list-unordered position-left"></i> Alınan Stoklar </a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active has-padding" id="left-tab1">
                                        <table class="table datatable-responsive-control-right">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Depo Adı</th>
                                                    <th> Depo Bölümü </th>
                                                    <th> Depo Gelen Miktar </th>
                                                    <th> Depo Kabul Tarihi </th>
                                                    <th> Depo Gelen İrsaliye No </th>
                                                    <th>Gelen Kargo </th>

                                                    <th></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    {if count($depotAlls) > 0 }
                                                        {foreach from=$depotAlls item=depotItem }
                                                            <tr>
                                                                <td>{$depotItem['depoIntId']}</td>
                                                                <td>{$depotItem['depotName']}</td>
                                                                <td>{$depotItem['depotArea']}</td>
                                                                <td>{$depotItem['depotInAcceptQty']}</td>
                                                                <td>{$depotItem['depotInAcceptDate']}</td>
                                                                <td>{$depotItem['depotInvNumber']}</td>
                                                                <td>{$depotItem['depotCargoComp']}</td>
                                                                <td></td>
                                                            </tr>
                                                        {/foreach}
                                                    {else}
                                                        <tr>
                                                            <td colspan="7">Gelen Mal Bulunamamıştır.</td>
                                                        </tr>
                                                    {/if}
                                                </tbody>
                                        </table>
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