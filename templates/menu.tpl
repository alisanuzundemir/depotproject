 <!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">   
        
        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{$PATH}assets/images/user_logo.png" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                            <span class="media-heading text-semibold">{$UserName}</span>
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
                        <li {$parentMomActive} ><a href="{$homePageUrl}"><i class="icon-home4"></i> <span>ANASAYFA</span></a></li>
                        {foreach from=$menuHtmls item=menu}
                            {if isset($menu['Parent'])}
                                <li {$menu['Parent']['isActive']}>
                                    <a href="{$URL}{$menu['Parent']['ModulUrl']}"><i class="icon-{$menu['Parent']['ModulIcon']}"></i> <span>{$menu['Parent']['ModulAdi']}</span></a>
                            {/if}
                                    {if isset($menu['Sub'])}
                                        <ul>
                                            {foreach from=$menu['Sub'] item=SubMenu}
                                                <li {$SubMenu['isActive']}><a href="{$SubMenu['ModulUrl']}">{$SubMenu['ModulAdi']}</a></li>
                                            {/foreach}
                                        </ul>
                                    {/if}
                                </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        <!-- /main navigation -->
    </div>
</div>
    <!-- /main sidebar -->
