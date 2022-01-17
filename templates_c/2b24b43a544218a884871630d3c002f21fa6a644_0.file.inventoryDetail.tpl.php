<?php
/* Smarty version 3.1.30, created on 2021-04-19 15:49:35
  from "D:\wamp64\www\okulProje\templates\inventoryDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607d7c5f76c187_33171605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b24b43a544218a884871630d3c002f21fa6a644' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\inventoryDetail.tpl',
      1 => 1618836572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d7c5f76c187_33171605 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h2 class="panel-title">#<?php echo $_smarty_tpl->tpl_vars['detail']->value["inventoryId"];?>
 - Tedarik Detayı</h2>
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
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["stocksName"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Tedarik Edilen Firma : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["companyName"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Tedarik Tarihi : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["inventoryDate"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold"> Tedarik Miktarı : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["inventoryQty"];?>
</span>
                                        </div>
                                        <div class="form-group mt-5">
                                            <label class="text-semibold">Tedarik Fiyatı : </label>
                                            <span class="pull-right-sm"><?php echo $_smarty_tpl->tpl_vars['detail']->value["inventoryPrice"];?>
</span>
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
                                                    <?php if (count($_smarty_tpl->tpl_vars['depotAlls']->value) > 0) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['depotAlls']->value, 'depotItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['depotItem']->value) {
?>
                                                            <tr>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['depotItem']->value['depoIntId'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['depotItem']->value['depotName'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['depotItem']->value['depotArea'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['depotItem']->value['depotInAcceptQty'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['depotItem']->value['depotInAcceptDate'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['depotItem']->value['depotInvNumber'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['depotItem']->value['depotCargoComp'];?>
</td>
                                                                <td></td>
                                                            </tr>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    <?php } else { ?>
                                                        <tr>
                                                            <td colspan="7">Gelen Mal Bulunamamıştır.</td>
                                                        </tr>
                                                    <?php }?>
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
        </div><?php }
}
