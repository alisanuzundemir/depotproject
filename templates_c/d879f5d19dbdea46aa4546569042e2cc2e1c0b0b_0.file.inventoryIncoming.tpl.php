<?php
/* Smarty version 3.1.30, created on 2021-04-19 14:08:29
  from "D:\wamp64\www\okulProje\templates\inventoryIncoming.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607d64ad2ac843_16136063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd879f5d19dbdea46aa4546569042e2cc2e1c0b0b' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\inventoryIncoming.tpl',
      1 => 1618830491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d64ad2ac843_16136063 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                <?php echo $_smarty_tpl->tpl_vars['Alert']->value;?>

                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['FormUrl']->value;?>
">
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
                                                    <label>Gelen Miktar : <small>(Toplam Gelen: <?php echo $_smarty_tpl->tpl_vars['toplamGelen']->value;?>
 )</small></label>
                                                    <input type="number" step="0.01" name="depotInAcceptQty" class="form-control" max="<?php echo $_smarty_tpl->tpl_vars['kalan']->value;?>
" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Gelen Miktar Birimi :</label>
                                                    <select name="depotInAcceptQtyUnit" class="form-control" readonly>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['talepBirimi']->value, 'birimVal', false, 'birimKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['birimKey']->value => $_smarty_tpl->tpl_vars['birimVal']->value) {
?>
                                                            <option <?php if ($_smarty_tpl->tpl_vars['birimKey']->value == $_smarty_tpl->tpl_vars['inventoryDetail']->value["inventoryQtyUnit"]) {?> selected <?php } else { ?> disabled <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['birimKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['birimVal']->value;?>
</option>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['whouseList']->value, 'whouse');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['whouse']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['whouse']->value["whouseId"];?>
"><?php echo $_smarty_tpl->tpl_vars['whouse']->value["whouseName"];?>
</option>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
        <!-- /form centered --><?php }
}
