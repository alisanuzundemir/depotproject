<?php
/* Smarty version 3.1.30, created on 2021-06-22 18:05:26
  from "/Applications/XAMPP/xamppfiles/htdocs/okulProje/templates/usersList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60d1fc368c08a0_17283716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd35c651d2061ae16d3eb5d3222eead5971d7f448' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/okulProje/templates/usersList.tpl',
      1 => 1616960588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d1fc368c08a0_17283716 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Kullanıcı Listele</h5>
                </div>

                <div class="panel-body">
                   Sistemde ki tüm kullanıcılar
                </div>

                <table class="table datatable-responsive-control-right">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th>Adı Soyadı</th>
                            <th>E-Posta</th>
                            <th>Telefonu</th>
                            <th>Departmanı</th>
                            <th>Durumu</th>
                            <th class="text-center">İşlemler</th>
                            <th></th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['UsersList']->value, 'userItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userItem']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['userItem']->value['usersId'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['userItem']->value['usersEmail'];?>
</td>
                                    <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['userItem']->value['usersEmail'];?>
"><?php echo $_smarty_tpl->tpl_vars['userItem']->value['usersEmail'];?>
</a></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['userItem']->value['usersTelephone'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['userItem']->value['usersDepartment'];?>
</td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['userItem']->value['usersStatus'] == "Aktif") {?>
                                            <span class="label label-success">Aktif</span>
                                        <?php } else { ?>
                                            <span class="label label-danger">Pasif</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if (isset($_smarty_tpl->tpl_vars['userItem']->value['usersEdit'])) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['userItem']->value['usersEdit'];?>
" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                                        <?php }?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['userItem']->value['usersDelete'])) {?>
                                            <a href="javascript:;" OnClick="deleteRecord('users','<?php echo $_smarty_tpl->tpl_vars['userItem']->value["usersId"];?>
','usersId');" class="btn btn-sm btn-danger float-left"><i class="icon-cross2"></i></a>
                                        <?php }?>
                                    </td>
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
