<?php
/* Smarty version 3.1.30, created on 2021-05-28 16:25:36
  from "D:\wamp64\www\okulProje\templates\authoritiesList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b0ef50561b74_06222168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c1c70346c3ed6fc186882eee1913ac02cba63c3' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\authoritiesList.tpl',
      1 => 1622208331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0ef50561b74_06222168 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Firmala Yetkili(leri) Listele</h5>
                </div>
                <!-- Bordered table -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title"></h5>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                   Sistemde ki tüm yetkililer
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Firma</th>
                                            <th>İsim Soyisim</th>
                                            <th>E-Posta</th>
                                            <th>Görevi</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CompaniesAuthList']->value, 'companiesAuth');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['companiesAuth']->value) {
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['companiesAuth']->value["id"];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['companiesAuth']->value["company"];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['companiesAuth']->value["name"];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['companiesAuth']->value["email"];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['companiesAuth']->value["mission"];?>
</td>
                                                <?php if (isset($_smarty_tpl->tpl_vars['companiesAuth']->value['companyAuthEdit']) || isset($_smarty_tpl->tpl_vars['companiesAuth']->value['companyAuthDelete'])) {?>
                                                <td class="text-center">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['companiesAuth']->value['companyAuthEdit'])) {?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['companiesAuth']->value['companyAuthEdit'];?>
" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                                                    <?php }?>

                                                    <?php if (isset($_smarty_tpl->tpl_vars['companiesAuth']->value['companyAuthDelete'])) {?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['companiesAuth']->value['companyAuthDelete'];?>
" class="btn btn-sm btn-success float-left"><i class="icon-minus3"></i></a>
                                                    <?php }?>
                                                </td>
                                                <?php } else { ?>
                                                    <td class="text-center">İşlem yetkiniz yok.</td>
                                                <?php }?>
                                            </tr>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /bordered table -->

        </div>
        <!-- /control position --><?php }
}
