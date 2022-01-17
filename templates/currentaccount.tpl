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
                        <h2 class="panel-title">{if $detail["sname"]!=""}{$detail["sname"]}{else}{$detail["name"]}{/if} - Firma Carisi Görüntüle</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-default border-grey">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Firma Öz Bilgileri</h6>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Firma Tam Adı : </label>
                                            <span class="pull-right-sm">{$detail["name"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Firma Kısa Adı : </label>
                                            <span class="pull-right-sm">{$detail["sname"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Firma Ünvanı : </label>
                                            <span class="pull-right-sm">{$detail["feature"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Firma Tipi : </label>
                                            <span class="pull-right-sm">{$detail["type"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Telefon : </label>
                                            <span class="pull-right-sm">{$detail["telephone"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Faks : </label>
                                            <span class="pull-right-sm">{$detail["fax"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Web Sitesi : </label>
                                            <span class="pull-right-sm">{$detail["web"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Kargo Kabul Günleri : </label>
                                            <span class="pull-right-sm"> {$detail["shipmentdays"]} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default border-grey">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Firma Ödeme Bilgileri</h6>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Firma Borcu : </label>
                                            <span class="pull-right-sm">150.000 TL</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Firma Alacak : </label>
                                            <span class="pull-right-sm">10.000 TL</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Firma Risk : </label>
                                            <span class="pull-right-sm">1.00%</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Vergi Dairesi / Numarası : </label>
                                            <span class="pull-right-sm">{$detail["tax"]} / {$detail["taxNumber"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Ödeme Günleri : </label>
                                            <span class="pull-right-sm">{$detail["paydays"]}</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Ödeme Periyodu : </label>
                                            <span class="pull-right-sm">{$detail["period"]}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tabbable nav-tabs-vertical nav-tabs-left">
                                <ul class="nav nav-tabs nav-tabs-highlight">
                                        <li><a href="#left-tab1" data-toggle="tab"><i class="icon-list-unordered position-left"></i> Alınan Stoklar </a></li>
                                        <li><a href="#left-tab5" data-toggle="tab"><i class="icon-user-tie position-left"></i> Yetkilileri</a></li>
                                        <li class="active"><a href="#left-tab6" data-toggle="tab"><i class="icon-vcard position-left"></i> Adresleri</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane has-padding" id="left-tab1">
                                        <table class="table datatable-responsive-control-right">
                                            <thead>
                                                <tr>
                                                    <th>Sipariş No</th>
                                                    <th>Firma Adı</th>
                                                    <th>Karşı Order</th>
                                                    <th>Kalite</th>
                                                    <th>Desen</th>
                                                    <th>Varyant</th>
                                                    <th>Miktar</th>
                                                    <th>Sipariş Tarihi</th>
                                                    <th>Termin Tarihi</th>
                                                    <th>Üretim Tipi</th>
                                                    <th>Durum</th>
                                                    <th class="text-center">İşlemler</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    {foreach from=$orderList item=orderItem }
                                                        <tr>
                                                            <td>{$orderItem['orderId']}</td>
                                                            <td>{$orderItem['customerName']}</td>
                                                            <td>{$orderItem['customerOrderId']}</td>
                                                            <td>{$orderItem['qualityName']}</td>
                                                            <td>{$orderItem['pattern']}</td>
                                                            <td>{$orderItem['orderVaryant']}</td>
                                                            <td>{$orderItem['quantity']} {$orderItem['quantityType']} {$orderItem['orderType']}</td>
                                                            <td>{$orderItem['orderDate']}</td>
                                                            <td>{$orderItem['orderDeadLine']}</td>
                                                            <td>{$orderItem['orderPressType']}</td>
                                                            <td>{$orderItem['orderStatus']}</td>

                                                            {if isset($orderItem['orderEdit']) || isset($orderItem['orderDelete']) || isset($orderItem['orderDetail']) }
                                                            <td class="text-center">
                                                                <ul class="icons-list">
                                                                    <li class="dropdown">
                                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="icon-menu9"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                                            {if isset($orderItem['orderDetail'])}
                                                                                <li><a href="{$orderItem['orderDetail']}"><i class="icon-eye2"></i>Detay</a></li>
                                                                            {/if}
                                                                            {if isset($orderItem['orderEdit'])}
                                                                                <li><a href="{$orderItem['orderEdit']}"><i class="icon-pencil"></i>Düzenle</a></li>
                                                                            {/if}
                                                                            {if isset($orderItem['orderDelete'])}
                                                                                <li><a href="{$orderItem['orderDelete']}"><i class="icon-cross2"></i>Sil</a></li>
                                                                            {/if}
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            {else}
                                                                <td class="text-center">İşlem yetkiniz yok.</td>
                                                            {/if}
                                                            <td></td>
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
                                                        <th>İsim Soyisim</th>
                                                        <th>E-posta</th>
                                                        <th>Görevi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {if count($CompaniesAuthList) > 0 }
                                                    {foreach from=$CompaniesAuthList item=companiesAuth }
                                                        <tr>
                                                            <td>{$companiesAuth["name"]}</td>
                                                            <td>{$companiesAuth["email"]}</td>
                                                            <td>{$companiesAuth["mission"]}</td>
                                                        </tr>
                                                    {/foreach}
                                                    {else}
                                                        <tr>
                                                            <td colspan="3">Yetkili Bulunamamıştır.</td>
                                                        </tr>
                                                    {/if}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane active has-padding" id="left-tab6">
                                        <div class="row">
                                            {if count($listaddress) > 0 }
                                            {foreach from=$listaddress item=listadd }
                                                <div class="col-md-6">
                                                    <div class="panel panel-default border-grey">
                                                        <div class="panel-heading">
                                                            <h6 class="panel-title">{$listadd["addressName"]}</h6>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="form-group mt-5">
                                                                <label class="text-semibold">Ülke : </label>
                                                                <span class="pull-right-sm">{$listadd["country"]}</span>
                                                            </div>
                                                            <div class="form-group mt-5">
                                                                <label class="text-semibold">Bölge / Eyalet : </label>
                                                                <span class="pull-right-sm">{$listadd["states"]}</span>
                                                            </div>
                                                            <div class="form-group mt-5">
                                                                <label class="text-semibold">Vilayet : </label>
                                                                <span class="pull-right-sm">{$listadd["city"]}</span>
                                                            </div>
                                                            <div class="form-group mt-5">
                                                                <label class="text-semibold">Posta Kodu : </label>
                                                                <span class="pull-right-sm">{$listadd["zipcode"]}</span>
                                                            </div>
                                                            <div class="form-group mt-5">
                                                                <label class="text-semibold">Adres : </label>
                                                                <span class="pull-right-sm">{$listadd["adressText"]}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {/foreach}
                                        {else}
                                            <center><h3>Kayıt Bulunamadı!.</h3></center>
                                        {/if}
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