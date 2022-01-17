<?php
/* Smarty version 3.1.30, created on 2021-03-30 22:07:47
  from "D:\wamp64\www\okulProje\templates\supportList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_606377033b5f68_78939381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e821ae31e3f32bf2cbc3486b86b93c6e1804a9e9' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\supportList.tpl',
      1 => 1616617153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606377033b5f68_78939381 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Destek Talebleri</h5>
                </div>

                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Destek Numarası</th>
                            <th>Talebi Oluşturan</th>
                            <th>Konu</th>
                            <th>Açıklama</th>
                            <th>Oluşturma Zamanı</th>
                            <th>Durum</th>
                            <th class="text-center">İşlemler</th>
                            <th></th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php if (count($_smarty_tpl->tpl_vars['supportList']->value) > 0) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supportList']->value, 'sList');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sList']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['sList']->value['supportId'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['sList']->value['usersNameSurname'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['sList']->value['supportSubject'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['sList']->value['supportText'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['sList']->value['supportDate'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['sList']->value['supportStatus'];?>
</td>
                                    
                                    <?php if (isset($_smarty_tpl->tpl_vars['sList']->value['supportDetail'])) {?>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['sList']->value['supportDetail'])) {?>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['sList']->value['supportDetail'];?>
"><i class="icon-eye2"></i>Detay</a></li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                        </ul>
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

                            <?php } else { ?>
                                <tr>
                                    <td>
                                        Herhangi bir kayıt bulunamadı.
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                </table>
        </div>
        <!-- /control position --><?php }
}
