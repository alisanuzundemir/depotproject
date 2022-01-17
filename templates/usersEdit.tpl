 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                {$Alert}
                <form class="form-horizontal form-validate-jquery" method="POST" action="{$FormUrl}">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <h5 class="panel-title">Kullanıcı Düzenle</h5>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                                <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Ad Soyad: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <input type="text" name="usersNameSurname" class="form-control" required="required" placeholder="Ad Soyad" value="{$UsersInfo['usersNameSurname']}" autocomplete="off">
                                                        </div>
                                                </div>
                                            
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">E-Posta: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <input type="email" name="usersEmail" class="form-control" required="required" placeholder="noname@example.com" value="{$UsersInfo['usersEmail']}" autocomplete="off">
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Telefon:</label>
                                                        <div class="col-lg-9">
                                                            <input type="tel" name="usersTelephone" class="form-control" placeholder="Telefon Numarası" value="{$UsersInfo['usersTelephone']}" autocomplete="off">
                                                            <span class="help-block">(999) 999-9999</span>
                                                        </div>
                                                </div>
                                            
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Şifre: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <input type="password" name="usersPassword" class="form-control" placeholder="Şifre" autocomplete="off">
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Departman: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                                <select name="usersDepartmentId" data-placeholder="Departman" class="form-control" required="required">
                                                                    {foreach from=$Departments key=departmanK item=departmanV }
                                                                        <option {if $departmanK == $UsersInfo['usersDepartmentId']}selected{/if} value="{$departmanK}">{$departmanV}</option>
                                                                    {/foreach}
                                                                </select>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Durum: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <select name="usersStatus" class="form-control" required="required">
                                                                <option value="1" {if $UsersInfo['usersStatus'] == "1" }selected{/if} >Onaylı</option>
                                                                <option value="2" {if $UsersInfo['usersStatus'] == "2" }selected{/if}>Sisteme Giremez</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <h3>Kullanıcı İzinleri</h3>
                                                </div>
                                                    {foreach from=$Permissions['Parent'] key=PermissionParentKey item=PermissionParentVal}
                                                        <div class="form-group">
                                                            <label class="display-block text-semibold">{$PermissionParentVal}</label>
                                                            {if isset($Permissions['Sub'][{$PermissionParentKey}])}
                                                                {foreach from=$Permissions['Sub'][{$PermissionParentKey}] key=PermissionSubKey item=PermissionSubVal }
                                                                    <label class="col-md-3 checkbox-inline" style="margin-left: 0px;">
                                                                        <input type="checkbox" 
                                                                        {if isset($UsersInfo['usersPermissions'][$PermissionParentKey][$PermissionSubKey])} checked="checked" {/if} 
                                                                            name="usersPermissions[{$PermissionParentKey}][{$PermissionSubKey}]" class="styled">
                                                                            {$PermissionSubVal}
                                                                    </label>
                                                                {/foreach}
                                                            {/if}
                                                        </div>
                                                    {/foreach}      
                                                <div class="text-right">
                                                        <button type="submit" name="editUser" class="btn btn-primary">Düzenle <i class="icon-arrow-right14 position-right"></i></button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </form>
    </div>
</div>
                <!-- /form centered -->