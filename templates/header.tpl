<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{$TITLE}</title>

	<!-- Global stylesheets -->
	<link href="{$PATH}assets/css/Roboto.css" rel="stylesheet" type="text/css">
	<link href="{$PATH}assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{$PATH}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{$PATH}assets/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="{$PATH}assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{$PATH}assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{$PATH}assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/core/libraries/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/validation/validate.min.js"></script>

    <!-- Theme JS files -->
    <script type="text/javascript" src="{$PATH}assets/js/core/libraries/jasny_bootstrap.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/inputs/touchspin.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/inputs/autosize.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/inputs/formatter.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/inputs/passy.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/inputs/maxlength.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/styling/switch.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

    <script type="text/javascript" src="{$PATH}assets/js/core/app.js"></script>
    {if $CLASS != "login-container" }
        {if $CLASS == "dashboard"}
            <script type="text/javascript" src="{$PATH}assets/js/pages/dashboard.js"></script>
        {/if}
    <script type="text/javascript" src="{$PATH}assets/js/pages/datatables_responsive.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/pages/form_validation.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/pages/form_layouts.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/notifications/bootbox.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/notifications/pnotify.min.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="{$PATH}assets/js/manuel.js"></script>
    <!-- WE WILL SET DEFINE JAVASCRIPT VALUES -->
    {literal}
    <script>
        var ajaxProcUrl = "{/literal}{$ajaxProcUrl}{literal}";
        var printingUrl = "{/literal}{$printingUrl}{literal}";
    </script>
    {/literal}
    {/if}
	<!-- /theme JS files -->
</head>

<body class="{$CLASS}" >
 {if $CLASS != "login-container" }
    <!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="{$homePageUrl}">
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
                                            <span>{$UserName}</span>
                                            <i class="caret"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{$logoutPageUrl}"><i class="icon-switch2"></i> Çıkış Yap</a></li>
                                    </ul>
                            </li>
                    </ul>
		</div>
	</div>
    <!-- /main navbar -->
    {/if}
    
    <!-- Page container -->
    <div class="page-container">
        <!-- Page content -->
        <div class="page-content">
    
