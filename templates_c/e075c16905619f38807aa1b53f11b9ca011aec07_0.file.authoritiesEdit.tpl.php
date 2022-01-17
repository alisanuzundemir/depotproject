<?php
/* Smarty version 3.1.30, created on 2021-05-28 16:19:52
  from "D:\wamp64\www\okulProje\templates\authoritiesEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b0edf8be17b7_26989152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e075c16905619f38807aa1b53f11b9ca011aec07' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\authoritiesEdit.tpl',
      1 => 1579176599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0edf8be17b7_26989152 (Smarty_Internal_Template $_smarty_tpl) {
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
                                    <h5 class="panel-title">Yetkili Düzenle</h5>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <input type="hidden" name="companiesAuthoritiesId" value="<?php echo $_smarty_tpl->tpl_vars['authoritiesDetail']->value["companiesAuthoritiesId"];?>
" readonly />
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Firma : <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <select name="companiesAuthoritiesCompanyId" class="form-control">
                                                <option name=""> Seçiniz </option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companiesList']->value, 'companiesItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['companiesItem']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['companiesItem']->value["companiesId"];?>
" <?php if ($_smarty_tpl->tpl_vars['authoritiesDetail']->value["companiesAuthoritiesCompanyId"] == $_smarty_tpl->tpl_vars['companiesItem']->value["companiesId"]) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['companiesItem']->value["companiesName"];?>
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
                                        <label class="col-lg-3 control-label">Ad Soyad : <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="companiesAuthoritiesNameSurname" class="form-control" required="required" placeholder="Ad Soyad" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['authoritiesDetail']->value["companiesAuthoritiesNameSurname"];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">E-Posta : <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="email" name="companiesAuthoritiesMail" class="form-control" required="required" placeholder="noname@example.com" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['authoritiesDetail']->value["companiesAuthoritiesMail"];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Görevi ( Departman ) : <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <select name="companiesAuthoritiesMissionsId" data-placeholder="Departman" class="form-control" required="required">
                                                <option value=""> Seçiniz </option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authoritiesMissions']->value, 'missionsItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['missionsItem']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['missionsItem']->value["authoritiesMissionsId"];?>
" <?php if ($_smarty_tpl->tpl_vars['authoritiesDetail']->value["companiesAuthoritiesMissionsId"] == $_smarty_tpl->tpl_vars['missionsItem']->value["authoritiesMissionsId"]) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['missionsItem']->value["authoritiesMissionsName"];?>
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
                                        <label class="col-lg-3 control-label">Cinsiyeti: <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <select name="companiesAuthoritiesGender" class="form-control" required="required">
                                                <option value=""> Seçiniz </option>
                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['authoritiesDetail']->value["companiesAuthoritiesGender"] == "2") {?> selected="selected" <?php }?>>Bay</option>
                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['authoritiesDetail']->value["companiesAuthoritiesGender"] == "1") {?> selected="selected" <?php }?>>Bayan</option>
                                            </select>
                                        </div>
                                    </div>    
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
            </div>
        </div>
        <!-- /form centered --><?php }
}
