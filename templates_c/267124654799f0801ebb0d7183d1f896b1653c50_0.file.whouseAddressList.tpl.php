<?php
/* Smarty version 3.1.30, created on 2021-04-19 11:32:01
  from "D:\wamp64\www\okulProje\templates\whouseAddressList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607d4001b7fbc5_23915406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '267124654799f0801ebb0d7183d1f896b1653c50' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\whouseAddressList.tpl',
      1 => 1617109203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d4001b7fbc5_23915406 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Depo Adres Listele</h5>
            </div>

            <div class="panel-body">
                Sistemde ki tüm depo adres listeleri
            </div>

            <table class="table datatable-responsive-control-right">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Depo Adı</th>
                    <th>Depo Adres Adı</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['wListing']->value['whouseAdId'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wListing']->value['whouseName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wListing']->value['whouseAdName'];?>
</td>
                        <td class="text-center">
                            <?php if (isset($_smarty_tpl->tpl_vars['wListing']->value['whouseUpdate'])) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['wListing']->value['whouseUpdate'];?>
" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['wListing']->value['whouseDelete'])) {?>
                                <a href="javascript:;" OnClick="deleteRecord('whouseaddress','<?php echo $_smarty_tpl->tpl_vars['wListing']->value["whouseDelete"];?>
','whouseAdId');" class="btn btn-sm btn-danger float-left"><i class="icon-cross2"></i></a>
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
