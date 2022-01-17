<?php
/* Smarty version 3.1.30, created on 2021-04-17 15:07:28
  from "D:\wamp64\www\okulProje\templates\whouseAdressAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607acf805e4e54_93821285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2201ee71f10716fc26b0b327b06e625f68a2e10f' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\whouseAdressAdd.tpl',
      1 => 1617108099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607acf805e4e54_93821285 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                <?php echo $_smarty_tpl->tpl_vars['Alert']->value;?>

                <form action="<?php echo $_smarty_tpl->tpl_vars['FormUrl']->value;?>
" method="POST">
                    <!-- Basic setup -->
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h6 class="panel-title">Depo Oluştur</h6>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Hangi Depo : <span class="text-danger">*</span></label>
                                        <select name="whouseId" class="form-control" required="required">
                                            <option value> Seçiniz </option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['whouseList']->value, 'wList');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wList']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['wList']->value["whouseId"];?>
"><?php echo $_smarty_tpl->tpl_vars['wList']->value["whouseName"];?>
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Depo Adres Adı : <span class="text-danger">*</span></label>
                                        <input type="text" name="whouseAdName" placeholder="Depo Adı" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Depo Adres Açıklaması : </label>
                                        <input type="text" name="whouseAdDesc" placeholder="Depo Açıklaması" class="form-control"  >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-right">
                                        <a href="javascript:history.go(-1);" class="btn btn-warning"><i class="icon-arrow-left8"></i>Geri Dön</a>
                                        <button type="reset" class="btn btn-default">İptal Et <i class="icon-reload-alt position-right"></i></button>
                                        <button type="submit" class="btn btn-primary">Kaydet <i class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </form>
                <!-- /basic setup -->
            </div> 
        </div>
        <!-- /form centered --><?php }
}
