<?php
/* Smarty version 3.1.30, created on 2021-04-20 23:38:13
  from "D:\wamp64\www\okulProje\templates\stocksList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607f3bb5c415e4_50689519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '945e87829727674adb6b62f68545e88abcda6257' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\stocksList.tpl',
      1 => 1618951092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607f3bb5c415e4_50689519 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Stok Tanım Listele</h5>
            </div>

            <div class="panel-body">
                Sistemde ki tüm stoklar
            </div>

            <table class="table datatable-responsive-control-right">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Stok Tanımı</th>
                    <th>Stok Numarası</th>
                    <th>Stok Barkod</th>
                    <th>Varsayılan Stok Yeri</th>
                    <th class="text-center">İşlemler</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stokcsList']->value, 'sListing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sListing']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['stocksId'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['stocksName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['stocksNumber'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['stocksBarcode'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sListing']->value['stocksLocation'];?>
</td>
                        <td class="text-center">
                            <?php if (isset($_smarty_tpl->tpl_vars['sListing']->value['outProduct'])) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['sListing']->value['outProduct'];?>
" class="btn btn-sm btn-info float-left"><i class="icon-minus3"></i></a>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['sListing']->value['stocksEdit'])) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['sListing']->value['stocksEdit'];?>
" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['sListing']->value['stocksDetail'])) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['sListing']->value['stocksDetail'];?>
" class="btn btn-sm btn-default float-left"><i class="icon-eye"></i></a>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['sListing']->value['stocksDelete'])) {?>
                                <a href="javascript:;" OnClick="deleteRecord('stocks','<?php echo $_smarty_tpl->tpl_vars['sListing']->value["stocksDelete"];?>
','stocksId');" class="btn btn-sm btn-danger float-left"><i class="icon-cross2"></i></a>
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
