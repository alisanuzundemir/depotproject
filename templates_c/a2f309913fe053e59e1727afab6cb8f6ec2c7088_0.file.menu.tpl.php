<?php
/* Smarty version 3.1.30, created on 2021-06-22 18:05:10
  from "/Applications/XAMPP/xamppfiles/htdocs/okulProje/templates/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60d1fc26f18f04_83147953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2f309913fe053e59e1727afab6cb8f6ec2c7088' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/okulProje/templates/menu.tpl',
      1 => 1617112899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d1fc26f18f04_83147953 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">   
        
        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/images/user_logo.png" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                            <span class="media-heading text-semibold"><?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->
        
        <!-- Main navigation -->
            <div class="sidebar-category sidebar-category-visible">
                <div class="category-content no-padding">
                    <ul class="navigation navigation-main navigation-accordion">
                        <!-- Main -->
                        <li class="navigation-header"><span>MENU</span> <i class="icon-menu" title="Main pages"></i></li>
                        <li <?php echo $_smarty_tpl->tpl_vars['parentMomActive']->value;?>
 ><a href="<?php echo $_smarty_tpl->tpl_vars['homePageUrl']->value;?>
"><i class="icon-home4"></i> <span>ANASAYFA</span></a></li>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuHtmls']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
                            <?php if (isset($_smarty_tpl->tpl_vars['menu']->value['Parent'])) {?>
                                <li <?php echo $_smarty_tpl->tpl_vars['menu']->value['Parent']['isActive'];?>
>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;
echo $_smarty_tpl->tpl_vars['menu']->value['Parent']['ModulUrl'];?>
"><i class="icon-<?php echo $_smarty_tpl->tpl_vars['menu']->value['Parent']['ModulIcon'];?>
"></i> <span><?php echo $_smarty_tpl->tpl_vars['menu']->value['Parent']['ModulAdi'];?>
</span></a>
                            <?php }?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['menu']->value['Sub'])) {?>
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['Sub'], 'SubMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SubMenu']->value) {
?>
                                                <li <?php echo $_smarty_tpl->tpl_vars['SubMenu']->value['isActive'];?>
><a href="<?php echo $_smarty_tpl->tpl_vars['SubMenu']->value['ModulUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['SubMenu']->value['ModulAdi'];?>
</a></li>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </ul>
                                    <?php }?>
                                </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </div>
            </div>
        <!-- /main navigation -->
    </div>
</div>
    <!-- /main sidebar -->
<?php }
}
