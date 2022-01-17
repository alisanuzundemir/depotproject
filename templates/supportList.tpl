 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Destek Talebleri</h5>
                </div>

                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Destek Numarası</th>
                            <th>Talebi Oluşturan</th>
                            <th>Konu</th>
                            <th>Açıklama</th>
                            <th>Oluşturma Zamanı</th>
                            <th>Durum</th>
                            <th class="text-center">İşlemler</th>
                            <th></th>
                        </tr>
                    </thead>
                        <tbody>
                            {if count($supportList) > 0 }
                            {foreach from=$supportList item=sList }
                                <tr>
                                    <td>{$sList['supportId']}</td>
                                    <td>{$sList['usersNameSurname']}</td>
                                    <td>{$sList['supportSubject']}</td>
                                    <td>{$sList['supportText']}</td>
                                    <td>{$sList['supportDate']}</td>
                                    <td>{$sList['supportStatus']}</td>
                                    
                                    {if isset($sList['supportDetail']) }
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    {if isset($sList['supportDetail'])}
                                                        <li><a href="{$sList['supportDetail']}"><i class="icon-eye2"></i>Detay</a></li>
                                                    {/if}
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                    {else}
                                        <td class="text-center">İşlem yetkiniz yok.</td>
                                    {/if}
                                    <td></td>
                                </tr>
                            {/foreach}
                            {else}
                                <tr>
                                    <td>
                                        Herhangi bir kayıt bulunamadı.
                                    </td>
                                </tr>
                            {/if}
                        </tbody>
                </table>
        </div>
        <!-- /control position -->