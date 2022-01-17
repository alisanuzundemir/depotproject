<?php
/* Smarty version 3.1.30, created on 2021-04-20 23:45:16
  from "D:\wamp64\www\okulProje\templates\whouseEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607f3d5c3086d2_46770699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1628eb6d68562498a01b3357e8862c838f68a93' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\whouseEdit.tpl',
      1 => 1618951506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607f3d5c3086d2_46770699 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <h6 class="panel-title">Depo Düzenle</h6>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Depo Adı : <span class="text-danger">*</span></label>
                                        <input type="text" name="whouseName" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value["whouseName"];?>
" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Depo Açıklaması : </label>
                                        <input type="text" name="whouseDesc" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value["whouseDesc"];?>
" class="form-control">
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
