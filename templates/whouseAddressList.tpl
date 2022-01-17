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
                {foreach from=$whouseList item=wListing }
                    <tr>
                        <td>{$wListing['whouseAdId']}</td>
                        <td>{$wListing['whouseName']}</td>
                        <td>{$wListing['whouseAdName']}</td>
                        <td class="text-center">
                            {if isset($wListing['whouseUpdate'])}
                                <a href="{$wListing['whouseUpdate']}" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                            {/if}
                            {if isset($wListing['whouseDelete'])}
                                <a href="javascript:;" OnClick="deleteRecord('whouseaddress','{$wListing["whouseDelete"]}','whouseAdId');" class="btn btn-sm btn-danger float-left"><i class="icon-cross2"></i></a>
                            {/if}
                        </td>
                        <td> </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
        <!-- /control position -->