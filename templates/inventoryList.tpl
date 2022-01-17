<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tedarik Listele</h5>
            </div>

            <div class="panel-body">
                Sistemde ki tüm tedarikler
            </div>

            <table class="table datatable-responsive-control-right">
                <thead>
                <tr>
                    <th>#</th>
                    <th> Tedarik Stok </th>
                    <th>Tedarik Firması </th>
                    <th>Tedarik Miktarı </th>
                    <th>Tedarik Zamanı </th>
                    <th class="text-center">İşlemler</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {foreach from=$inventoryList item=iListing }
                    <tr>
                        <td>{$iListing['inventoryId']}</td>
                        <td>{$iListing['stocks']}</td>
                        <td>{$iListing['companies']}</td>
                        <td>{$iListing['quantity']}</td>
                        <td>{$iListing['invDate']}</td>
                        <td class="text-center">
                            {if isset($iListing['inventoryDetail'])}
                                <a href="{$iListing['inventoryDetail']}" class="btn btn-sm btn-warning float-left"><i class="icon-eye"></i></a>
                            {/if}

                            {if isset($iListing['inventoryAccept'])}
                                <a href="{$iListing['inventoryAccept']}" class="btn btn-sm btn-success float-left"><i class="icon-plus22"></i></a>
                            {/if}
                        </td>
                        <td> </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
        <!-- /control position -->