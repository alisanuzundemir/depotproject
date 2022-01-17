 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                {$Alert}
                <form method="POST" action="{$FormUrl}">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Ayarlar</h5>
                            <div class="heading-elements">
                            </div>
                        </div>
                        <!-- Highlighted tabs -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Genel Sistem Ayarları</h6>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                                <li><a data-action="close"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs nav-tabs-highlight">
                                                <li class="active"><a href="#email_settings" data-toggle="tab">E-Posta Ayarları</a></li>
                                                <li><a href="#admin_approvals" data-toggle="tab">Yönetim Onayları</a></li>
                                                <li><a href="#admin_approval_settings" data-toggle="tab">Yönetim Onay Ayarları</a></li>
                                            </ul>

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="email_settings">
                                                        Highlight top border of the active tab by adding <code>.nav-tabs-highlight</code> class.
                                                </div>

                                                <div class="tab-pane" id="admin_approvals">

                                                </div>

                                                <div class="tab-pane" id="admin_approval_settings">
                                                    <div class="form-group">
                                                        <label class="control-label">Tablo Adı<span class="text-danger">*</span> :</label>
                                                        <select id="tablename" name="administrationApprovaltableName" class="form-control">
                                                            <option value="">Seçiniz</option>
                                                            {foreach from=$tables item=table }
                                                                <option value="{$table['table_name']}">{$table['table_name']}</option>
                                                            {/foreach}
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Sütun Adı<span class="text-danger">*</span> :</label>
                                                        <select id="column_name" name="administrationApprovaltableColumn" class="form-control">
                                                            <option value="">Seçiniz</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Görünecek Sütun Adı<span class="text-danger">*</span> :</label>
                                                        <input type="text" name="administrationApprovaltableColumnText" placeholder="Onay Ekranın da görünecek sütun adı ?" class="form-control"/>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Tablo Adı</th>
                                                                    <th>Sütun Adı</th>
                                                                    <th>Görünecek Değer</th>
                                                                    <th>İşlemler</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {foreach from=$approvalList item=approvalItem }
                                                                    <tr>
                                                                        <td>{$approvalItem["administrationApprovalId"]}</td>
                                                                        <td>{$approvalItem["administrationApprovaltableName"]}</td>
                                                                        <td>{$approvalItem["administrationApprovaltableColumn"]}</td>
                                                                        <td>{$approvalItem["administrationApprovaltableColumnText"]}</td>
                                                                        <td><button type="button" id="delete" OnClick="deleteRecord('administrationapproval',{$approvalItem["administrationApprovalId"]},'administrationApprovalId');"><i class=" icon-cross2"></i></button>  </td>
                                                                    </tr>
                                                                {/foreach}
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right" style="margin-top:20px;">
                                            <a href="javascript:history.go(-1);" class="btn btn-warning"><i class="icon-arrow-left8"></i>Geri Dön</a>
                                            <button type="reset" class="btn btn-default">İptal Et <i class="icon-reload-alt position-right"></i></button>
                                            <button type="submit" class="btn btn-primary">Kaydet <i class="icon-arrow-right14 position-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                    </div>
                                </div> 
                            </div>
                        </div>
    <!-- /highlighted tabs -->
                    </div>
                </form>
                </div>
            <!-- /2 columns form -->
            </div>
        </div>
    <!-- /form centered -->