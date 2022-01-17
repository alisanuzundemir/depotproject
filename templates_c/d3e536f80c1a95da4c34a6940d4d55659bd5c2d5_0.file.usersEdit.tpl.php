<?php
/* Smarty version 3.1.30, created on 2021-03-30 21:00:43
  from "D:\wamp64\www\okulProje\templates\usersEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6063674bf14fe9_16441798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3e536f80c1a95da4c34a6940d4d55659bd5c2d5' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\usersEdit.tpl',
      1 => 1616960665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6063674bf14fe9_16441798 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                <?php echo $_smarty_tpl->tpl_vars['Alert']->value;?>

                <form class="form-horizontal form-validate-jquery" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['FormUrl']->value;?>
">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <h5 class="panel-title">Kullanıcı Düzenle</h5>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                                <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Ad Soyad: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <input type="text" name="usersNameSurname" class="form-control" required="required" placeholder="Ad Soyad" value="<?php echo $_smarty_tpl->tpl_vars['UsersInfo']->value['usersNameSurname'];?>
" autocomplete="off">
                                                        </div>
                                                </div>
                                            
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">E-Posta: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <input type="email" name="usersEmail" class="form-control" required="required" placeholder="noname@example.com" value="<?php echo $_smarty_tpl->tpl_vars['UsersInfo']->value['usersEmail'];?>
" autocomplete="off">
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Telefon:</label>
                                                        <div class="col-lg-9">
                                                            <input type="tel" name="usersTelephone" class="form-control" placeholder="Telefon Numarası" value="<?php echo $_smarty_tpl->tpl_vars['UsersInfo']->value['usersTelephone'];?>
" autocomplete="off">
                                                            <span class="help-block">(999) 999-9999</span>
                                                        </div>
                                                </div>
                                            
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Şifre: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <input type="password" name="usersPassword" class="form-control" placeholder="Şifre" autocomplete="off">
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Departman: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                                <select name="usersDepartmentId" data-placeholder="Departman" class="form-control" required="required">
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Departments']->value, 'departmanV', false, 'departmanK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['departmanK']->value => $_smarty_tpl->tpl_vars['departmanV']->value) {
?>
                                                                        <option <?php if ($_smarty_tpl->tpl_vars['departmanK']->value == $_smarty_tpl->tpl_vars['UsersInfo']->value['usersDepartmentId']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['departmanK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['departmanV']->value;?>
</option>
                                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                                </select>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Durum: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <select name="usersStatus" class="form-control" required="required">
                                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['UsersInfo']->value['usersStatus'] == "1") {?>selected<?php }?> >Onaylı</option>
                                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['UsersInfo']->value['usersStatus'] == "2") {?>selected<?php }?>>Sisteme Giremez</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <h3>Kullanıcı İzinleri</h3>
                                                </div>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Permissions']->value['Parent'], 'PermissionParentVal', false, 'PermissionParentKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PermissionParentKey']->value => $_smarty_tpl->tpl_vars['PermissionParentVal']->value) {
?>
                                                        <div class="form-group">
                                                            <label class="display-block text-semibold"><?php echo $_smarty_tpl->tpl_vars['PermissionParentVal']->value;?>
</label>
                                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['PermissionParentKey']->value;
$_prefixVariable1=ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['Permissions']->value['Sub'][$_prefixVariable1])) {?>
                                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['PermissionParentKey']->value;
$_prefixVariable2=ob_get_clean();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Permissions']->value['Sub'][$_prefixVariable2], 'PermissionSubVal', false, 'PermissionSubKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PermissionSubKey']->value => $_smarty_tpl->tpl_vars['PermissionSubVal']->value) {
?>
                                                                    <label class="col-md-3 checkbox-inline" style="margin-left: 0px;">
                                                                        <input type="checkbox" 
                                                                        <?php if (isset($_smarty_tpl->tpl_vars['UsersInfo']->value['usersPermissions'][$_smarty_tpl->tpl_vars['PermissionParentKey']->value][$_smarty_tpl->tpl_vars['PermissionSubKey']->value])) {?> checked="checked" <?php }?> 
                                                                            name="usersPermissions[<?php echo $_smarty_tpl->tpl_vars['PermissionParentKey']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['PermissionSubKey']->value;?>
]" class="styled">
                                                                            <?php echo $_smarty_tpl->tpl_vars['PermissionSubVal']->value;?>

                                                                    </label>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                            <?php }?>
                                                        </div>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
      
                                                <div class="text-right">
                                                        <button type="submit" name="editUser" class="btn btn-primary">Düzenle <i class="icon-arrow-right14 position-right"></i></button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </form>
    </div>
</div>
                <!-- /form centered --><?php }
}
