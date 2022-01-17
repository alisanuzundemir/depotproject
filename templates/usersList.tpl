<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
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
                            <th> # </th>
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
                                    <td>{$userItem['usersId']}</td>
                                    <td>{$userItem['usersEmail']}</td>
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
                                        {if isset($userItem['usersEdit'])}
                                            <a href="{$userItem['usersEdit']}" class="btn btn-sm btn-warning float-left"><i class="icon-pencil"></i></a>
                                        {/if}
                                        {if isset($userItem['usersDelete'])}
                                            <a href="javascript:;" OnClick="deleteRecord('users','{$userItem["usersId"]}','usersId');" class="btn btn-sm btn-danger float-left"><i class="icon-cross2"></i></a>
                                        {/if}
                                    </td>
                                    <td></td>
                                </tr>
                            {/foreach}
                        </tbody>
                </table>
        </div>
        <!-- /control position -->