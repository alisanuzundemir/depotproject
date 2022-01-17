 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        {$Alert}
        <!-- Control position -->
        <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Kullanıcı Listele</h5>
                </div>
                <div class="panel-body">
                   Sistemde ki tüm kullanıcılar
                </div>

                <table class="table datatable-responsive-control-right">
                    <thead>
                        <tr>
                            <th>Adı Soyadı</th>
                            <th>E-Posta</th>
                            <th>Telefonu</th>
                            <th>Departmanı</th>
                            <th>Durumu</th>
                            <th class="text-center">İşlemler</th>
                            <th></th>
                        </tr>
                    </thead>
                        <tbody>
                            {foreach from=$UsersList item=userItem }
                                <tr>
                                    <td>{$userItem['usersNameSurname']}</td>
                                    <td><a href="mailto:{$userItem['usersEmail']}">{$userItem['usersEmail']}</a></td>
                                    <td>{$userItem['usersTelephone']}</td>
                                    <td>{$userItem['usersDepartment']}</td>
                                    <td>
                                        {if $userItem['usersStatus'] == "Aktif"}
                                            <span class="label label-success">Aktif</span>
                                        {else}
                                            <span class="label label-danger">Pasif</span>
                                        {/if}
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    {if isset($userItem['usersEdit'])}
                                                        <li><a href="{$userItem['usersEdit']}"><i class="icon-pencil"></i>Düzenle</a></li>
                                                    {/if}
                                                    {if isset($userItem['usersDelete'])}
                                                        <li><a href="{$userItem['usersDelete']}"><i class="icon-cross2"></i>Sil</a></li>
                                                    {/if}
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                    <td></td>
                                </tr>
                            {/foreach}
                        </tbody>
                </table>
        </div>
        <!-- /control position -->