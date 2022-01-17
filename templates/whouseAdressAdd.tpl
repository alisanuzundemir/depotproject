 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                {$Alert}
                <form action="{$FormUrl}" method="POST">
                    <!-- Basic setup -->
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h6 class="panel-title">Depo Oluştur</h6>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Hangi Depo : <span class="text-danger">*</span></label>
                                        <select name="whouseId" class="form-control" required="required">
                                            <option value> Seçiniz </option>
                                            {foreach from=$whouseList item=wList }
                                                <option value="{$wList["whouseId"]}">{$wList["whouseName"]}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Depo Adres Adı : <span class="text-danger">*</span></label>
                                        <input type="text" name="whouseAdName" placeholder="Depo Adı" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Depo Adres Açıklaması : </label>
                                        <input type="text" name="whouseAdDesc" placeholder="Depo Açıklaması" class="form-control"  >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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
                <!-- /basic setup -->
            </div> 
        </div>
        <!-- /form centered -->