<?php
/* Smarty version 3.1.30, created on 2021-04-19 11:09:11
  from "D:\wamp64\www\okulProje\templates\currentaccount.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607d3aa72d2b91_76170895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac5bf1aea6e2f809b152b0fcc2c1f0fe9d50142c' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\currentaccount.tpl',
      1 => 1617049555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d3aa72d2b91_76170895 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                <?php echo $_smarty_tpl->tpl_vars['Alert']->value;?>

                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h2 class="panel-title"><?php if ($_smarty_tpl->tpl_vars['detail']->value["sname"] != '') {
echo $_smarty_tpl->tpl_vars['detail']->value["sname"];
} else {
echo $_smarty_tpl->tpl_vars['detail']->value["name"];
}?> - Firma Carisi Görüntüle</h2>
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
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["name"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Firma Kısa Adı : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["sname"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Firma Ünvanı : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["feature"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Firma Tipi : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["type"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Telefon : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["telephone"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Faks : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["fax"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Web Sitesi : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["web"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Kargo Kabul Günleri : </label>
                                            <span class="pull-right-sm"> <?php echo $_smarty_tpl->tpl_vars['detail']->value["shipmentdays"];?>
 </span>
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
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["tax"];?>
 / <?php echo $_smarty_tpl->tpl_vars['detail']->value["taxNumber"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Ödeme Günleri : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["paydays"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Ödeme Periyodu : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["period"];?>
</span>
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
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderList']->value, 'orderItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['orderItem']->value) {
?>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['orderId'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['customerName'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['customerOrderId'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['qualityName'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['pattern'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['orderVaryant'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['quantity'];?>
 <?php echo $_smarty_tpl->tpl_vars['orderItem']->value['quantityType'];?>
 <?php echo $_smarty_tpl->tpl_vars['orderItem']->value['orderType'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['orderDate'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['orderDeadLine'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['orderPressType'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['orderItem']->value['orderStatus'];?>
</td>

                                                            <?php if (isset($_smarty_tpl->tpl_vars['orderItem']->value['orderEdit']) || isset($_smarty_tpl->tpl_vars['orderItem']->value['orderDelete']) || isset($_smarty_tpl->tpl_vars['orderItem']->value['orderDetail'])) {?>
                                                            <td class="text-center">
                                                                <ul class="icons-list">
                                                                    <li class="dropdown">
                                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                            <i class="icon-menu9"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                                            <?php if (isset($_smarty_tpl->tpl_vars['orderItem']->value['orderDetail'])) {?>
                                                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['orderItem']->value['orderDetail'];?>
"><i class="icon-eye2"></i>Detay</a></li>
                                                                            <?php }?>
                                                                            <?php if (isset($_smarty_tpl->tpl_vars['orderItem']->value['orderEdit'])) {?>
                                                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['orderItem']->value['orderEdit'];?>
"><i class="icon-pencil"></i>Düzenle</a></li>
                                                                            <?php }?>
                                                                            <?php if (isset($_smarty_tpl->tpl_vars['orderItem']->value['orderDelete'])) {?>
                                                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['orderItem']->value['orderDelete'];?>
"><i class="icon-cross2"></i>Sil</a></li>
                                                                            <?php }?>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <?php } else { ?>
                                                                <td class="text-center">İşlem yetkiniz yok.</td>
                                                            <?php }?>
                                                            <td></td>
                                                        </tr>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                                    <?php if (count($_smarty_tpl->tpl_vars['CompaniesAuthList']->value) > 0) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CompaniesAuthList']->value, 'companiesAuth');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['companiesAuth']->value) {
?>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['companiesAuth']->value["name"];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['companiesAuth']->value["email"];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['companiesAuth']->value["mission"];?>
</td>
                                                        </tr>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    <?php } else { ?>
                                                        <tr>
                                                            <td colspan="3">Yetkili Bulunamamıştır.</td>
                                                        </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane active has-padding" id="left-tab6">
                                        <div class="row">
                                            <?php if (count($_smarty_tpl->tpl_vars['listaddress']->value) > 0) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaddress']->value, 'listadd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['listadd']->value) {
?>
                                                <div class="col-md-6">
                                                    <div class="panel panel-default border-grey">
                                                        <div class="panel-heading">
                                                            <h6 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['listadd']->value["addressName"];?>
</h6>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="form-group mt-5">
                                                                <label class="text-semibold">Ülke : </label>
                                                                <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['listadd']->value["country"];?>
</span>
                                                            </div>
                                                            <div class="form-group mt-5">
                                                                <label class="text-semibold">Bölge / Eyalet : </label>
                                                                <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['listadd']->value["states"];?>
</span>
                                                            </div>
                                                            <div class="form-group mt-5">
                                                                <label class="text-semibold">Vilayet : </label>
                                                                <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['listadd']->value["city"];?>
</span>
                                                            </div>
                                                            <div class="form-group mt-5">
                                                                <label class="text-semibold">Posta Kodu : </label>
                                                                <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['listadd']->value["zipcode"];?>
</span>
                                                            </div>
                                                            <div class="form-group mt-5">
                                                                <label class="text-semibold">Adres : </label>
                                                                <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['listadd']->value["adressText"];?>
</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php } else { ?>
                                            <center><h3>Kayıt Bulunamadı!.</h3></center>
                                        <?php }?>
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
        </div><?php }
}
