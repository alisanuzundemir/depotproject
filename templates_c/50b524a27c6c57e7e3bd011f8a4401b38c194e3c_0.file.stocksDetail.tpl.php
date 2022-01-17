<?php
/* Smarty version 3.1.30, created on 2021-05-28 17:12:01
  from "D:\wamp64\www\okulProje\templates\stocksDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b0fa318cc792_57502039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b524a27c6c57e7e3bd011f8a4401b38c194e3c' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\stocksDetail.tpl',
      1 => 1622211114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0fa318cc792_57502039 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['detail']->value["stocksName"];?>
 Görüntüle</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group mt-5">
                                <label class="text-semibold">Stok Adı : </label>
                                <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["stocksName"];?>
</span>
                            </div>
                            <div class="form-group mt-5">
                                <label class="text-semibold">Stok Numarası : </label>
                                <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["stocksNumber"];?>
</span>
                            </div>
                            <div class="form-group mt-5">
                                <label class="text-semibold">Stok Barkod : </label>
                                <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["stocksBarcode"];?>
</span>
                            </div>
                            <div class="form-group mt-5">
                                <label class="text-semibold">Varsayılan Depo / Bölüm : </label>
                                <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["stocksLocation"];?>
</span>
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
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['livestocks']->value, 'lStocks');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lStocks']->value) {
?>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['lStocks']->value['depotLiveId'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['lStocks']->value['depotName'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['lStocks']->value['depotQty'];?>
</td>
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
                                                        <th> # </th>
                                                        <th> Tedarik Firması </th>
                                                        <th> Tedarik Miktarı </th>
                                                        <th> Tedarik Fiyatı </th>
                                                        <th> Tedarik Zamanı </th>
                                                        <th> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inventory']->value, 'iListing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['iListing']->value) {
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['iListing']->value['inventoryId'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['iListing']->value['companies'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['iListing']->value['quantity'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['iListing']->value['price'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['iListing']->value['invDate'];?>
</td>
                                                        <td> </td>
                                                    </tr>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selling']->value, 'sListing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sListing']->value) {
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['depotoutId'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['companies'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['quantity'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['price'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['selNo'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['invDate'];?>
</td>
                                                        <td> </td>
                                                    </tr>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
        </div><?php }
}
