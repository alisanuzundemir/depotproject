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
                                    <h5 class="panel-title">Kullanıcı Ekle</h5>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                                <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Ad Soyad: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <input type="text" name="usersNameSurname" class="form-control" required="required" placeholder="Ad Soyad" autocomplete="off">
                                                        </div>
                                                </div>
                                            
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">E-Posta: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <input type="email" name="usersEmail" class="form-control" required="required" placeholder="noname@example.com" autocomplete="off">
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Telefon:</label>
                                                        <div class="col-lg-9">
                                                            <input type="tel" name="usersTelephone" class="form-control" placeholder="Telefon Numarası" autocomplete="off">
                                                            <span class="help-block">(999) 999-9999</span>
                                                        </div>
                                                </div>
                                            
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Şifre: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <input type="password" name="usersPassword" class="form-control" placeholder="Şifre" autocomplete="off" required="required">
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Departman: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                                <select name="usersDepartmentId" data-placeholder="Departman" class="form-control" required="required">
                                                                    {foreach from=$Departments item=departmanV }
                                                                        <option {if $departmanV["usersDepartmentId"] == "1"}selected{/if} value="{$departmanV["usersDepartmentId"]}">{$departmanV["usersDepartmentName"]}</option>
                                                                    {/foreach}
                                                                </select>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Durum: <span class="text-danger">*</span></label>
                                                        <div class="col-lg-9">
                                                            <select name="usersStatus" class="form-control" required="required">
                                                                <option value="1" selected>Onaylı</option>
                                                                <option value="2">Sisteme Giremez</option>
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
                                                                        <input type="checkbox" name="usersPermissions[{$PermissionParentKey}][{$PermissionSubKey}]" class="styled">
                                                                            {$PermissionSubVal}
                                                                    </label>
                                                                {/foreach}
                                                            {/if}
                                                        </div>
                                                    {/foreach}      
                                                <div class="text-right">
                                                    <a href="javascript:history.go(-1);" class="btn btn-warning"><i class="icon-arrow-left8"></i>Geri Dön</a>
                                                    <button type="reset" class="btn btn-default">İptal Et <i class="icon-reload-alt position-right"></i></button>
                                                    <button type="submit" class="btn btn-primary">Kaydet <i class="icon-arrow-right14 position-right"></i></button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </form>
    </div>
</div>
                <!-- /form centered -->