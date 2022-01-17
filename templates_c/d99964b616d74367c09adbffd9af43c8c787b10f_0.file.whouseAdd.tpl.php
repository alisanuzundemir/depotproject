<?php
/* Smarty version 3.1.30, created on 2021-04-17 15:07:24
  from "D:\wamp64\www\okulProje\templates\whouseAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607acf7c40e572_07883078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd99964b616d74367c09adbffd9af43c8c787b10f' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\whouseAdd.tpl',
      1 => 1617093133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607acf7c40e572_07883078 (Smarty_Internal_Template $_smarty_tpl) {
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
                                        <label class="control-label">Depo Adı : <span class="text-danger">*</span></label>
                                        <input type="text" name="whouseName" placeholder="Depo Adı" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Depo Açıklaması : </label>
                                        <input type="text" name="whouseDesc" placeholder="Depo Açıklaması" class="form-control"  >
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
