<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Firmala Yetkili(leri) Listele</h5>
                </div>
                <!-- Bordered table -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title"></h5>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                   Sistemde ki tüm yetkililer
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Firma</th>
                                            <th>İsim Soyisim</th>
                                            <th>E-Posta</th>
                                            <th>Görevi</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {foreach from=$CompaniesAuthList item=companiesAuth }
                                            <tr>
                                                <td>{$companiesAuth["id"]}</td>
                                                <td>{$companiesAuth["company"]}</td>
                                                <td>{$companiesAuth["name"]}</td>
                                                <td>{$companiesAuth["email"]}</td>
                                                <td>{$companiesAuth["mission"]}</td>
                                                {if isset($companiesAuth['companyAuthEdit']) || isset($companiesAuth['companyAuthDelete'])}
                                                <td class="text-center">
                                                    {if isset($companiesAuth['companyAuthEdit'])}
                                                        <a href="{$companiesAuth['companyAuthEdit']}" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                                                    {/if}

                                                    {if isset($companiesAuth['companyAuthDelete'])}
                                                        <a href="{$companiesAuth['companyAuthDelete']}" class="btn btn-sm btn-success float-left"><i class="icon-minus3"></i></a>
                                                    {/if}
                                                </td>
                                                {else}
                                                    <td class="text-center">İşlem yetkiniz yok.</td>
                                                {/if}
                                            </tr>
                                        {/foreach}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /bordered table -->

        </div>
        <!-- /control position -->