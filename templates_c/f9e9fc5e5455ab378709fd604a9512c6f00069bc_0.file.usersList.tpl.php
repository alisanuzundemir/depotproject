<?php
/* Smarty version 3.1.30, created on 2021-03-30 21:00:41
  from "D:\wamp64\www\okulProje\templates\usersList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60636749538db1_41823327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e9fc5e5455ab378709fd604a9512c6f00069bc' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\usersList.tpl',
      1 => 1616960588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60636749538db1_41823327 (Smarty_Internal_Template $_smarty_tpl) {
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
