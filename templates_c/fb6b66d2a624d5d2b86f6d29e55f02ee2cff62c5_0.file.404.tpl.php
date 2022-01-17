<?php
/* Smarty version 3.1.30, created on 2021-06-22 18:05:11
  from "/Applications/XAMPP/xamppfiles/htdocs/okulProje/templates/404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60d1fc27354b26_19669715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb6b66d2a624d5d2b86f6d29e55f02ee2cff62c5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/okulProje/templates/404.tpl',
      1 => 1616617182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d1fc27354b26_19669715 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/css/colors.css" rel="stylesheet" type="text/css">
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/core/libraries/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/plugins/loaders/blockui.min.js"><?php echo '</script'; ?>
>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
assets/js/core/app.js"><?php echo '</script'; ?>
>
	<!-- /theme JS files -->

</head>

<body class="login-container">
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Error title -->
					<div class="text-center content-group">
						<h1 class="error-title">404</h1>
						<h5>Oops! Aradığını bulamadık :( !</h5>
					</div>
					<!-- /error title -->


					<!-- Error content -->
					<div class="row">
						<div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
							<form action="#" class="main-search">
								<div class="row">
									<div class="col-sm-12 text-center">
										<a href="<?php echo $_smarty_tpl->tpl_vars['loginPageUrl']->value;?>
" class="btn btn-primary btn-block content-group"><i class="icon-circle-left2 position-left"></i> Giriş Yap</a>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /error wrapper -->


					<!-- Footer -->
                                            <div class="footer text-muted">
                                                    &copy; 2017. <a href="#"> HAMZAGIL EMPRIME </a> by <a href="#" target="_blank">HAMZAGIL IT </a>
                                            </div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
<?php }
}
