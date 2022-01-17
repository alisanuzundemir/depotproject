<?php
/* Smarty version 3.1.30, created on 2021-04-19 11:09:08
  from "D:\wamp64\www\okulProje\templates\companiesList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607d3aa4374ce6_21233973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6f443755df23fb458e71fbd5e13be8c70b6baa9' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\companiesList.tpl',
      1 => 1617049038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d3aa4374ce6_21233973 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Firmaları Listele</h5>
                </div>

                <div class="panel-body">
                   Sistemde ki tüm firmalar
                </div>

                <table class="table datatable-responsive-control-right">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Firma Adı</th>
                            <th>Firma Telefonu</th>
                            <th>Firma E-Posta</th>
                            <th>Firma Cari Kodu</th>
                            <th>Firma Tipi</th>
                            <th class="text-center">İşlemler</th>
                            <th></th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CompaniesList']->value, 'companiesItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['companiesItem']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['companiesItem']->value['id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['companiesItem']->value['name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['companiesItem']->value['tel'];?>
</td>
                                    <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['companiesItem']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['companiesItem']->value['email'];?>
</a></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['companiesItem']->value['stockCode'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['companiesItem']->value['type']['companiesTypeName'];?>
</td>
                                    
                                    <?php if (isset($_smarty_tpl->tpl_vars['companiesItem']->value['companiesEdit']) || isset($_smarty_tpl->tpl_vars['companiesItem']->value['companiesDelete'])) {?>
                                    <td class="text-center">
                                        <?php if (isset($_smarty_tpl->tpl_vars['companiesItem']->value['companiesEdit'])) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['companiesItem']->value['companiesEdit'];?>
" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                                        <?php }?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['companiesItem']->value['companiesDelete'])) {?>
                                            <a href="javascript:;" OnClick="deleteRecord('companies','<?php echo $_smarty_tpl->tpl_vars['companiesItem']->value["id"];?>
','id');" class="btn btn-sm btn-danger float-left"><i class="icon-cross2"></i></a>
                                        <?php }?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['companiesItem']->value['companiesView'])) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['companiesItem']->value['companiesView'];?>
" class="btn btn-sm btn-info float-left"><i class="icon-eye2"></i></a>
                                        <?php }?>
                                    </td>
                                    <?php } else { ?>
                                        <td class="text-center">İşlem yetkiniz yok.</td>
                                    <?php }?>
                                    <td></td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                </table>
        </div>
        <!-- /control position --><?php }
}
