<?php
/* Smarty version 3.1.30, created on 2021-04-17 21:53:33
  from "D:\wamp64\www\okulProje\templates\inventoryList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607b2ead84c6f3_38076051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f554854949fe6c4ee109538a36e7bebfe369a50b' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\inventoryList.tpl',
      1 => 1618685611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607b2ead84c6f3_38076051 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tedarik Listele</h5>
            </div>

            <div class="panel-body">
                Sistemde ki tüm tedarikler
            </div>

            <table class="table datatable-responsive-control-right">
                <thead>
                <tr>
                    <th>#</th>
                    <th> Tedarik Stok </th>
                    <th>Tedarik Firması </th>
                    <th>Tedarik Miktarı </th>
                    <th>Tedarik Zamanı </th>
                    <th class="text-center">İşlemler</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inventoryList']->value, 'iListing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['iListing']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['iListing']->value['inventoryId'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['iListing']->value['stocks'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['iListing']->value['companies'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['iListing']->value['quantity'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['iListing']->value['invDate'];?>
</td>
                        <td class="text-center">
                            <?php if (isset($_smarty_tpl->tpl_vars['iListing']->value['inventoryDetail'])) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['iListing']->value['inventoryDetail'];?>
" class="btn btn-sm btn-warning float-left"><i class="icon-eye"></i></a>
                            <?php }?>

                            <?php if (isset($_smarty_tpl->tpl_vars['iListing']->value['inventoryAccept'])) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['iListing']->value['inventoryAccept'];?>
" class="btn btn-sm btn-success float-left"><i class="icon-plus22"></i></a>
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
