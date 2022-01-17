 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Firmaları Listele</h5>
                </div>

                <div class="panel-body">
                   Sistemde ki tüm firmalar
                </div>

                <table class="table datatable-responsive-control-right">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Firma Adı</th>
                            <th>Firma Telefonu</th>
                            <th>Firma E-Posta</th>
                            <th>Firma Cari Kodu</th>
                            <th>Firma Tipi</th>
                            <th class="text-center">İşlemler</th>
                            <th></th>
                        </tr>
                    </thead>
                        <tbody>
                            {foreach from=$CompaniesList item=companiesItem }
                                <tr>
                                    <td>{$companiesItem['id']}</td>
                                    <td>{$companiesItem['name']}</td>
                                    <td>{$companiesItem['tel']}</td>
                                    <td><a href="mailto:{$companiesItem['email']}">{$companiesItem['email']}</a></td>
                                    <td>{$companiesItem['stockCode']}</td>
                                    <td>{$companiesItem['type']['companiesTypeName']}</td>
                                    
                                    {if isset($companiesItem['companiesEdit']) || isset($companiesItem['companiesDelete'])}
                                    <td class="text-center">
                                        {if isset($companiesItem['companiesEdit'])}
                                            <a href="{$companiesItem['companiesEdit']}" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                                        {/if}
                                        {if isset($companiesItem['companiesDelete'])}
                                            <a href="javascript:;" OnClick="deleteRecord('companies','{$companiesItem["id"]}','id');" class="btn btn-sm btn-danger float-left"><i class="icon-cross2"></i></a>
                                        {/if}
                                        {if isset($companiesItem['companiesView'])}
                                            <a href="{$companiesItem['companiesView']}" class="btn btn-sm btn-info float-left"><i class="icon-eye2"></i></a>
                                        {/if}
                                    </td>
                                    {else}
                                        <td class="text-center">İşlem yetkiniz yok.</td>
                                    {/if}
                                    <td></td>
                                </tr>
                            {/foreach}
                        </tbody>
                </table>
        </div>
        <!-- /control position -->