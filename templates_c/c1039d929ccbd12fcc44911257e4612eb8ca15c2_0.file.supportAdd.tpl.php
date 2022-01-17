<?php
/* Smarty version 3.1.30, created on 2021-03-30 22:07:42
  from "D:\wamp64\www\okulProje\templates\supportAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_606376fe502526_92047248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1039d929ccbd12fcc44911257e4612eb8ca15c2' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\supportAdd.tpl',
      1 => 1616617160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606376fe502526_92047248 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <h6 class="panel-title">Destek Talebi Oluştur</h6>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Destek Talebinde Bulunan : <span class="text-danger">*</span></label>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['supportUserName']->value;?>
" class="form-control" readonly >
                                        <input type="hidden" name="supportUserId" class="form-control" readonly value="<?php echo $_smarty_tpl->tpl_vars['supportUserId']->value;?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Destek Talebi Konusu : <span class="text-danger">*</span></label>
                                        <input type="text" name="supportSubject" placeholder="Konuyu giriniz" class="form-control" maxlength="250" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Destek Talebi : <span class="text-danger">*</span></label>
                                        <textarea name="supportText" class="form-control required" placeholder="Lütfen anlaşılır bir şekilde yazınız" maxlength="500"></textarea>
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
