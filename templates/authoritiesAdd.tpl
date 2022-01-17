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
                                    <h5 class="panel-title">Yetkili Ekle</h5>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Firma : <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <select name="companiesAuthoritiesCompanyId" class="form-control">
                                                <option name=""> Seçiniz </option>
                                                {foreach from=$companiesList item=companiesItem }
                                                    <option value="{$companiesItem["companiesId"]}">{$companiesItem["companiesName"]}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Ad Soyad : <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="companiesAuthoritiesNameSurname" class="form-control" required="required" placeholder="Ad Soyad" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">E-Posta : <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="email" name="companiesAuthoritiesMail" class="form-control" required="required" placeholder="noname@example.com" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Görevi ( Departman ) : <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <select name="companiesAuthoritiesMissionsId" data-placeholder="Departman" class="form-control" required="required">
                                                <option value=""> Seçiniz </option>
                                                {foreach from=$authoritiesMissions item=missionsItem }
                                                    <option value="{$missionsItem["authoritiesMissionsId"]}">{$missionsItem["authoritiesMissionsName"]}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Cinsiyeti: <span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <select name="companiesAuthoritiesGender" class="form-control" required="required">
                                                <option value=""> Seçiniz </option>
                                                <option value="2">Bay</option>
                                                <option value="1">Bayan</option>
                                            </select>
                                        </div>
                                    </div>    
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