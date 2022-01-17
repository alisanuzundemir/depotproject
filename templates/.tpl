<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                {$Alert}
                <form method="POST" action="{$FormUrl}" enctype="multipart/form-data">
                <!-- Basic setup -->
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title"><label class="text-semibold">XXXXX - Numaralı</label> Numune Siparişi Düzenle</h5>
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Müşteri : <span class="text-danger">*</span></label>
                                            <select name="sampleOrderCustomerId" class="form-control required">
                                                <option value="">Seçiniz</option>
                                                {foreach from=$companiesList item=cList }
                                                        <option value="{$cList['companiesId']}">{$cList['companiesName']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Asıl Müşteri : <span class="text-danger">*</span></label>
                                            <select name="sampleOrderCustomerId2" class="form-control required">
                                                <option value="">Seçiniz</option>
                                                {foreach from=$companiesList item=cList }
                                                        <option value="{$cList['companiesId']}">{$cList['companiesName']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Varyantçı :<span class="text-danger">*</span> </label>
                                            <select name="sampleOrderVaryanterId" class="form-control" required>
                                                <option value=""> Seçiniz </option>
                                                {foreach from=$variantMakerList item=vmList }
                                                    <option value="{$vmList['usersId']}">{$vmList['usersNameSurname']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Müşteri Siparişi Geçtiği Tarih :<span class="text-danger">*</span> </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                                        <input name="sampleOrderCustomerDate" type="text" class="form-control pickadate-selectors" placeholder="Tarih Seçiniz">
                                                    </div>
                                                </div>	
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Talep Edilen Sevk Tarihi : </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                                        <input name="sampleOrderDeadLineDate" type="text" class="form-control pickadate-selectors" placeholder="Tarih Seçiniz">
                                                    </div>
                                                </div>	
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Sipariş Türü :<span class="text-danger">*</span> </label>
                                            <select name="sampleOrderTypeId" id="sampleOrderType" class="form-control" required>
                                                <option value="">Seçiniz</option>
                                                <option value="1">Normal Sipariş</option>
                                                <option value="2">Kartelalık</option>
                                                <option value="3">Varyant Çalışması</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" id="quantity">
                                                <div class="form-group">
                                                    <label>Miktar / Adet :<span class="text-danger">*</span> </label>
                                                    <input type="number" min="0" name="sampleOrderDetailQuantity" class="form-control" placeholder="Adet Giriniz">
                                                </div>	
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group" id="quantityType">
                                                    <label>Birim : <span class="text-danger">*</span></label>
                                                    <select name="sampleOrderDetailQuantityType" class="form-control">
                                                        <option value="">Seçiniz</option>
                                                        <option value="1">Kg</option>
                                                        <option value="2">Mt</option>
                                                    </select>
                                                </div>	
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Dosya Tipi : </label>
                                                    <select name="filesNameId" class="form-control">
                                                        <option value=""> Seçiniz </option>
                                                        {foreach from=$sampleFilesName item=fileNameItem}
                                                            <option value="{$fileNameItem["id"]}">{$fileNameItem["name"]}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>	
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Dosya : </label>
                                                    <input type="file" name="sampleOrderFiles" class="file-styled">
                                                </div>	
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Desen : <span class="text-danger">*</span></label>
													<input type="text" name="sampleOrderDetailPattern" class="form-control" placeholder="Desen Numarası">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Kalite : </label>
													<select name="sampleOrderDetailQualityId" class="form-control">
														<option value=""> Seçiniz </option>
														{foreach from=$qualityList item=qList }
															<option value="{$qList['qualityId']}">{$qList['qualityName']}</option>
														{/foreach}
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Varyant : <span class="text-danger">*</span></label>
													<select name="sampleOrderDetailVaryantId" class="form-control">
														<option value=""> Seçiniz </option>
														{foreach from=$variantList item=vList }
															<option value="{$vList['variantId']}">{$vList['variantName']}</option>
														{/foreach}
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Varyant Numarası : </label>
													<input type="text" name="sampleOrderDetailVaryantNumber" class="form-control" placeholder="Varyant Numarası Giriniz">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>Not : </label>
											<textarea name="sampleOrderDetailNote" class="form-control" maxlength="255" placeholder="Notunuzu Giriniz"></textarea>
										</div>
										<div class="form-group">
											<label>Seçenekler : </label>
											
											{foreach from=$sampleOrderOptionList item=sampleOrderList }
												<div class="checkbox">
													<label>
														<input type="checkbox" class="styled" name="sampleOrderDetailOptions[{$sampleOrderList['sampleOrderOptionId']}]" value="{$sampleOrderList['sampleOrderOptionId']}"> {$sampleOrderList['sampleOrderOptionName']} 
													</label>
												</div>
											{/foreach}
										</div>
										<div class="form-group">
												<div class="text-right">
												<a href="javascript:history.go(-1);" class="btn btn-warning"><i class="icon-arrow-left8"></i>Geri Dön</a>
												<button type="reset" class="btn btn-default">İptal Et <i class="icon-reload-alt position-right"></i></button>
												<button type="submit" class="btn btn-primary">Düzenlemeyi Kaydet <i class="icon-arrow-right14 position-right"></i></button>
										</div>
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