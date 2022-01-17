 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
	<div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                {$Alert}
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title">#{$detail["supportId"]} - Talep Detayları ( {$detail["supportStatusName"]} )</h5>
                    </div>  
                </div>
            </div>
        </div>
        <div class="timeline timeline-center">
            <div class="timeline-container">
                <!-- Blog post -->
                <div class="timeline-row">
                    <div class="timeline-icon">
                        <img src="assets/images/demo/users/face12.jpg" alt="">
                    </div>
                    <div class="timeline-time">
                        <a href="#"> {$detail["supportUser"]} </a> Yeni bir talep ekledi
                        <span class="text-muted"> {$detail["supportDate"]} </span>
                    </div>
                    <div class="panel panel-flat timeline-content">
                        <div class="panel-heading">
                            <h6 class="panel-title"> {$detail["supportSubject"]} </h6>
                        </div>
                        <div class="panel-body">
                            <a href="#" class="display-block content-group">
                                <img src="assets/images/demo/cover3.jpg" class="img-responsive content-group" alt="">
                            </a>

                            <h6 class="content-group">
                                <i class="icon-comment-discussion position-left"></i>
                                <a href="#"> {$detail["supportUser"]} </a> talebini gönderdi :
                            </h6>
                            <blockquote>
                                {$detail["supportText"]}
                            </blockquote>
                        </div>
                    </div>
                </div>
                {if count($supportList) > 0 }
                    {foreach from=$supportList item=sList }
                        <div class="timeline-row">
                            <div class="timeline-icon">
                                <img src="assets/images/demo/users/face12.jpg" alt="">
                            </div>
                            <div class="timeline-time">
                                <a href="#"> {$sList["usersNameSurname"]} </a>Talebe cevap verdi
                                <span class="text-muted"> {$sList["supportDate"]} </span>
                            </div>
                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title"> {$sList["supportSubject"]} </h6>
                                </div>
                                <div class="panel-body">
                                    <a href="#" class="display-block content-group">
                                        <img src="assets/images/demo/cover3.jpg" class="img-responsive content-group" alt="">
                                    </a>

                                    <h6 class="content-group">
                                        <i class="icon-comment-discussion position-left"></i>
                                        <a href="#"> {$sList["usersNameSurname"]} </a> cevabını gönderdi :
                                    </h6>
                                    <blockquote>
                                        {$sList["supportText"]}
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                {/if}
            </div>
            
            {if $detail["supportStatus"] != "3"}
            <div class="timeline-row post-full">
                <div class="panel panel-flat timeline-content">
                    <div class="panel-heading">
                        <h6 class="panel-title">Cevap Yazınız</h6>
                    </div> 
                    <div class="panel-body">
                        <form action="{$FormUrl}" method="POST">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label">Cevaplayan : <span class="text-danger">*</span></label>
                                        <input type="text" value="{$supportUserName}" class="form-control" readonly >
                                        <input type="hidden" name="supportUserId" class="form-control" readonly value="{$supportUserId}">
                                    </div>					
                                </div>
                               {if $supportUserDepartment == 3 || $supportUserDepartment == 6}
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="control-label">Talep Durumu : <span class="text-danger">*</span></label>
                                            <select name="supportStatus" class="form-control required">
                                                <option value="">Seçiniz</option>
                                                {foreach from=$supportStatus2 key=sKey item=sVal }
                                                    <option value="{$sKey}">{$sVal}</option>
                                                {/foreach}
                                            </select>
                                        </div>				
                                    </div>
                                {/if}
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label">Talep Cevabı : <span class="text-danger">*</span></label>
                                        <textarea name="supportText" class="form-control required" maxlength="500" placeholder="Lütfen anlaşılır bir şekilde yazınız"></textarea>
                                    </div>					
                                </div>
                                <div class="row">
                                    <div class="text-right">
                                        <a href="javascript:history.go(-1);" class="btn btn-warning"><i class="icon-arrow-left8"></i>Geri Dön</a>
                                        <button type="reset" class="btn btn-default">İptal Et <i class="icon-reload-alt position-right"></i></button>
                                        <button type="submit" class="btn btn-primary">Kaydet <i class="icon-arrow-right14 position-right"></i></button>
                                    </div>					
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {/if}
        </div> 