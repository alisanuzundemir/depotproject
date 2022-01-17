<?php
/* Smarty version 3.1.30, created on 2021-05-28 16:25:56
  from "D:\wamp64\www\okulProje\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b0ef6491b024_68429167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6656dd56ff2580abdce8b05568626eea21106582' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\header.tpl',
      1 => 1622208354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0ef6491b024_68429167 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>

	<!-- Global stylesheets -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/Roboto.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

    <!-- Core JS files -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/loaders/pace.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/core/libraries/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/core/libraries/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/loaders/blockui.min.js"><?php echo '</script'; ?>
>
    <!-- /core JS files -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/validation/validate.min.js"><?php echo '</script'; ?>
>

    <!-- Theme JS files -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/core/libraries/jasny_bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/inputs/touchspin.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/tables/datatables/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/tables/datatables/extensions/responsive.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/selects/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/styling/uniform.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/inputs/autosize.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/inputs/formatter.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/inputs/passy.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/inputs/maxlength.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/visualization/d3/d3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/visualization/d3/d3_tooltip.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/styling/switch.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/styling/switchery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/selects/bootstrap_multiselect.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/core/app.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['CLASS']->value != "login-container") {?>
        <?php if ($_smarty_tpl->tpl_vars['CLASS']->value == "dashboard") {?>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/pages/dashboard.js"><?php echo '</script'; ?>
>
        <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/pages/datatables_responsive.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/pages/form_validation.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/pages/form_layouts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/notifications/bootbox.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/notifications/pnotify.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/forms/selects/bootstrap_multiselect.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/manuel.js"><?php echo '</script'; ?>
>
    <!-- WE WILL SET DEFINE JAVASCRIPT VALUES -->
    
    <?php echo '<script'; ?>
>
        var ajaxProcUrl = "<?php echo $_smarty_tpl->tpl_vars['ajaxProcUrl']->value;?>
";
        var printingUrl = "<?php echo $_smarty_tpl->tpl_vars['printingUrl']->value;?>
";
    <?php echo '</script'; ?>
>
    
    <?php }?>
	<!-- /theme JS files -->
</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
" >
 <?php if ($_smarty_tpl->tpl_vars['CLASS']->value != "login-container") {?>
    <!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['homePageUrl']->value;?>
">
                STOK YÖNETİMİ
            </a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav">
                        <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown dropdown-user">
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="assets/images/placeholder.jpg" alt="">
                                            <span><?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
</span>
                                            <i class="caret"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['logoutPageUrl']->value;?>
"><i class="icon-switch2"></i> Çıkış Yap</a></li>
                                    </ul>
                            </li>
                    </ul>
		</div>
	</div>
    <!-- /main navbar -->
    <?php }?>
    
    <!-- Page container -->
    <div class="page-container">
        <!-- Page content -->
        <div class="page-content">
    
<?php }
}
