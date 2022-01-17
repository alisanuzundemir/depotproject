<?php
/* Smarty version 3.1.30, created on 2021-04-17 21:02:09
  from "D:\wamp64\www\okulProje\templates\inventoryAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607b22a14da634_83504742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3a1ce6fe8d13f423450fbcc762cb1025d6b5809' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\inventoryAdd.tpl',
      1 => 1618682525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607b22a14da634_83504742 (Smarty_Internal_Template $_smarty_tpl) {
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
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stocks']->value, 'stock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['stock']->value["stocksId"];?>
"><?php echo $_smarty_tpl->tpl_vars['stock']->value["stocksName"];?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Tedarik Firması :</label>
                                            <select name="companiesId" class="form-control">
                                                <option>Seçiniz</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value["companiesId"];?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value["companiesShortName"];?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['talepBirimi']->value, 'birimVal', false, 'birimKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['birimKey']->value => $_smarty_tpl->tpl_vars['birimVal']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['birimKey']->value;?>
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
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiyatTipi']->value, 'tipVal', false, 'tipKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tipKey']->value => $_smarty_tpl->tpl_vars['tipVal']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['tipKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tipVal']->value;?>
</option>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Fiyat Birimi :</label>
                                                    <select name="inventoryPriceUnit" class="form-control">
                                                        <option>Seçiniz</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fiyatBirimi']->value, 'birimVal', false, 'birimKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['birimKey']->value => $_smarty_tpl->tpl_vars['birimVal']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['birimKey']->value;?>
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
