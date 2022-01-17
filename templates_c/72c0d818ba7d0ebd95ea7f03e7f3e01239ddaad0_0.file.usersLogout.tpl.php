<?php
/* Smarty version 3.1.30, created on 2021-03-30 21:00:59
  from "D:\wamp64\www\okulProje\templates\usersLogout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6063675b7a9d73_41882473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72c0d818ba7d0ebd95ea7f03e7f3e01239ddaad0' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\usersLogout.tpl',
      1 => 1616617136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6063675b7a9d73_41882473 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning alert-styled-right">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Kapat</span></button>
                    <span class="text-semibold"><i class="icon-spinner9 spinner position-left"></i>Çıkış Yaptınız!</span> Birazdan giriş sayfasına yönlendirileceksiniz.
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
>
        (function() {
            $(document).ready(function() {
                setTimeout(function () {
                   window.location.href= "<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
"; // the redirect goes here
                },2000);
            });
          })();   
        <?php echo '</script'; ?>
><?php }
}
