<?php
/* Smarty version 3.1.30, created on 2021-06-22 18:07:13
  from "/Applications/XAMPP/xamppfiles/htdocs/okulProje/templates/stocksAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60d1fca12b6054_63923893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6f897f0aac5774f266a04ed68666d5553cdfd9e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/okulProje/templates/stocksAdd.tpl',
      1 => 1617129199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d1fca12b6054_63923893 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <h5 class="panel-title">Stok Tanımı Ekle</h5>
                            <div class="heading-elements">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-reading position-left"></i> Stok Bilgileri</legend>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Stok Adı<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="stocksName" placeholder="xxx" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Stok Numarası<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="stocksNumber" value="<?php echo $_smarty_tpl->tpl_vars['stocksNumbers']->value;?>
" readonly required="required" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Stok Barkod<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="stocksBarcode" placeholder="EAN13" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label"> Stok Açıklaması :</label>
                                            <input type="text" class="form-control" name="stocksDesc" autocomplete="off">
                                        </div>

                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-truck position-left"></i>Varsayılan Depo Bilgileri</legend>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Varsayılan Depo :</label>
                                                    <select name="stocksWhouseId" id="getwhouseDepot" class="form-control">
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
                                                    <label> Varsayılan Depo Adresi :</label>
                                                    <select name="stocksAddressId" id="stocksAddressId" class="form-control">
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
