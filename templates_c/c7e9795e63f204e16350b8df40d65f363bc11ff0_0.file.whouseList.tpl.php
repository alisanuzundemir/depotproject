<?php
/* Smarty version 3.1.30, created on 2021-04-09 17:21:19
  from "D:\wamp64\www\okulProje\templates\whouseList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607062df01d4b5_86156347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7e9795e63f204e16350b8df40d65f363bc11ff0' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\whouseList.tpl',
      1 => 1617097424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607062df01d4b5_86156347 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Depo Listele</h5>
            </div>

            <div class="panel-body">
                Sistemde ki tüm depolar
            </div>

            <table class="table datatable-responsive-control-right">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Depo Adı</th>
                    <th class="text-center">İşlemler</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['whouseList']->value, 'wListing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wListing']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['wListing']->value['whouseId'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wListing']->value['whouseName'];?>
</td>
                        <td class="text-center">
                            <?php if (isset($_smarty_tpl->tpl_vars['wListing']->value['whouseUpdate'])) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['wListing']->value['whouseUpdate'];?>
" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['wListing']->value['whouseDelete'])) {?>
                                <a href="javascript:;" OnClick="deleteRecord('whouse','<?php echo $_smarty_tpl->tpl_vars['wListing']->value["whouseDelete"];?>
','whouseId');" class="btn btn-sm btn-danger float-left"><i class="icon-cross2"></i></a>
                            <?php }?>
                        </td>
                        <td> </td>
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
