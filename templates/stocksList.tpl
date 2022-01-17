<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Stok Tanım Listele</h5>
            </div>

            <div class="panel-body">
                Sistemde ki tüm stoklar
            </div>

            <table class="table datatable-responsive-control-right">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Stok Tanımı</th>
                    <th>Stok Numarası</th>
                    <th>Stok Barkod</th>
                    <th>Varsayılan Stok Yeri</th>
                    <th class="text-center">İşlemler</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {foreach from=$stokcsList item=sListing }
                    <tr>
                        <td>{$sListing['stocksId']}</td>
                        <td>{$sListing['stocksName']}</td>
                        <td>{$sListing['stocksNumber']}</td>
                        <td>{$sListing['stocksBarcode']}</td>
                        <td>{$sListing['stocksLocation']}</td>
                        <td class="text-center">
                            {if isset($sListing['outProduct'])}
                                <a href="{$sListing['outProduct']}" class="btn btn-sm btn-info float-left"><i class="icon-minus3"></i></a>
                            {/if}
                            {if isset($sListing['stocksEdit'])}
                                <a href="{$sListing['stocksEdit']}" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                            {/if}
                            {if isset($sListing['stocksDetail'])}
                                <a href="{$sListing['stocksDetail']}" class="btn btn-sm btn-default float-left"><i class="icon-eye"></i></a>
                            {/if}
                            {if isset($sListing['stocksDelete'])}
                                <a href="javascript:;" OnClick="deleteRecord('stocks','{$sListing["stocksDelete"]}','stocksId');" class="btn btn-sm btn-danger float-left"><i class="icon-cross2"></i></a>
                            {/if}
                        </td>
                        <td> </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
        <!-- /control position -->