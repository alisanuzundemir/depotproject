<?php
/* Smarty version 3.1.30, created on 2021-04-20 17:22:11
  from "D:\wamp64\www\okulProje\templates\inventoryOutproduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607ee393decf77_68941386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8981fee1c727b57c32683c8774b6c774e8b099be' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\inventoryOutproduct.tpl',
      1 => 1618927338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607ee393decf77_68941386 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <h5 class="panel-title">Mal Çıkışı</h5>
                            <div class="heading-elements">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-reading position-left"></i> Çıkış Bilgileri</legend>
                                        <div class="row">
                                            <div class="form-group">

                                                <label>Gönderilen Firma :</label>
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

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gönderilen Kargo Firması :</label>
                                                    <input type="text" class="form-control" name="depotoutCargoComp" placeholder="xxx" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gönderilen İrsaliye Numarası:</label>
                                                    <input type="text" class="form-control" name="depotoutInvNumber" placeholder="Seri-Sıra" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gönderilen İrsaliye Tarihi :</label>
                                                    <input type="date" class="form-control" name="depotoutInvDate" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Satış Fiyatı :</label>
                                                    <input type="number" step="0.01" name="depotoutPrice" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Satış Fiyat Tipi :</label>
                                                    <select name="depotoutPriceType" class="form-control">
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
                                                    <label>Satış Fiyat Birimi :</label>
                                                    <select name="depotoutPriceUnit" class="form-control">
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
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-truck position-left"></i>Mamül Bilgileri</legend>

                                        <div class="row">
                                            <?php if (count($_smarty_tpl->tpl_vars['whouseList']->value) > 0) {?>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label> Stok Olan Depolar :</label>
                                                    <select name="whouseId" id="getwhouseDepotStock" data-stock="<?php echo $_smarty_tpl->tpl_vars['stocksId']->value;?>
" class="form-control">
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

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label> Stok Olan Depo Bölümü :</label>
                                                    <select name="whouseAdId" id="stocksAddressIdStock" data-stock="<?php echo $_smarty_tpl->tpl_vars['stocksId']->value;?>
" class="form-control">
                                                        <option>Seçiniz</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php } else { ?>
                                                <div class="col-md-10">
                                                    <span style="color:#ff0000"> Çıkış yapılacak stok depolar bulunamadı. </span>
                                                </div>
                                            <?php }?>
                                            <div class="col-md-2">
                                                <label> Depo daki Miktar :</label>
                                                <span id="liveStockGetir">  </span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Çıkış Miktarı :</label>
                                                    <input type="number" step="0.01" name="depotoutQty" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Çıkış Miktar Birimi :</label>
                                                    <select name="depotoutQtyUnit" class="form-control" readonly>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['talepBirimi']->value, 'birimVal', false, 'birimKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['birimKey']->value => $_smarty_tpl->tpl_vars['birimVal']->value) {
?>
                                                            <option  value="<?php echo $_smarty_tpl->tpl_vars['birimKey']->value;?>
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
