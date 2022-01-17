<?php
/* Smarty version 3.1.30, created on 2021-05-28 16:56:26
  from "D:\wamp64\www\okulProje\templates\supportDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b0f68a4e1d17_05290937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09bbe1e4d8fb21947c791bcffb71177d66a1c521' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\supportDetail.tpl',
      1 => 1622210180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0f68a4e1d17_05290937 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
	<div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                <?php echo $_smarty_tpl->tpl_vars['Alert']->value;?>

                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title">#<?php echo $_smarty_tpl->tpl_vars['detail']->value["supportId"];?>
 - Talep Detayları ( <?php echo $_smarty_tpl->tpl_vars['detail']->value["supportStatusName"];?>
 )</h5>
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
                        <a href="#"> <?php echo $_smarty_tpl->tpl_vars['detail']->value["supportUser"];?>
 </a> Yeni bir talep ekledi
                        <span class="text-muted"> <?php echo $_smarty_tpl->tpl_vars['detail']->value["supportDate"];?>
 </span>
                    </div>
                    <div class="panel panel-flat timeline-content">
                        <div class="panel-heading">
                            <h6 class="panel-title"> <?php echo $_smarty_tpl->tpl_vars['detail']->value["supportSubject"];?>
 </h6>
                        </div>
                        <div class="panel-body">
                            <a href="#" class="display-block content-group">
                                <img src="assets/images/demo/cover3.jpg" class="img-responsive content-group" alt="">
                            </a>

                            <h6 class="content-group">
                                <i class="icon-comment-discussion position-left"></i>
                                <a href="#"> <?php echo $_smarty_tpl->tpl_vars['detail']->value["supportUser"];?>
 </a> talebini gönderdi :
                            </h6>
                            <blockquote>
                                <?php echo $_smarty_tpl->tpl_vars['detail']->value["supportText"];?>

                            </blockquote>
                        </div>
                    </div>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['supportList']->value) > 0) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supportList']->value, 'sList');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sList']->value) {
?>
                        <div class="timeline-row">
                            <div class="timeline-icon">
                                <img src="assets/images/demo/users/face12.jpg" alt="">
                            </div>
                            <div class="timeline-time">
                                <a href="#"> <?php echo $_smarty_tpl->tpl_vars['sList']->value["usersNameSurname"];?>
 </a>Talebe cevap verdi
                                <span class="text-muted"> <?php echo $_smarty_tpl->tpl_vars['sList']->value["supportDate"];?>
 </span>
                            </div>
                            <div class="panel panel-flat timeline-content">
                                <div class="panel-heading">
                                    <h6 class="panel-title"> <?php echo $_smarty_tpl->tpl_vars['sList']->value["supportSubject"];?>
 </h6>
                                </div>
                                <div class="panel-body">
                                    <a href="#" class="display-block content-group">
                                        <img src="assets/images/demo/cover3.jpg" class="img-responsive content-group" alt="">
                                    </a>

                                    <h6 class="content-group">
                                        <i class="icon-comment-discussion position-left"></i>
                                        <a href="#"> <?php echo $_smarty_tpl->tpl_vars['sList']->value["usersNameSurname"];?>
 </a> cevabını gönderdi :
                                    </h6>
                                    <blockquote>
                                        <?php echo $_smarty_tpl->tpl_vars['sList']->value["supportText"];?>

                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php }?>
            </div>
            
            <?php if ($_smarty_tpl->tpl_vars['detail']->value["supportStatus"] != "3") {?>
            <div class="timeline-row post-full">
                <div class="panel panel-flat timeline-content">
                    <div class="panel-heading">
                        <h6 class="panel-title">Cevap Yazınız</h6>
                    </div> 
                    <div class="panel-body">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['FormUrl']->value;?>
" method="POST">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label">Cevaplayan : <span class="text-danger">*</span></label>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['supportUserName']->value;?>
" class="form-control" readonly >
                                        <input type="hidden" name="supportUserId" class="form-control" readonly value="<?php echo $_smarty_tpl->tpl_vars['supportUserId']->value;?>
">
                                    </div>					
                                </div>
                               <?php if ($_smarty_tpl->tpl_vars['supportUserDepartment']->value == 3 || $_smarty_tpl->tpl_vars['supportUserDepartment']->value == 6) {?>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="control-label">Talep Durumu : <span class="text-danger">*</span></label>
                                            <select name="supportStatus" class="form-control required">
                                                <option value="">Seçiniz</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supportStatus2']->value, 'sVal', false, 'sKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sKey']->value => $_smarty_tpl->tpl_vars['sVal']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['sKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sVal']->value;?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                        </div>				
                                    </div>
                                <?php }?>
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
            <?php }?>
        </div> <?php }
}
