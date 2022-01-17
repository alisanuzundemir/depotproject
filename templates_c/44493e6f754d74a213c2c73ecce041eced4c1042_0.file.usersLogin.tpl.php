<?php
/* Smarty version 3.1.30, created on 2021-03-30 17:48:50
  from "D:\wamp64\www\okulProje\templates\usersLogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_606364827383a5_23888657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44493e6f754d74a213c2c73ecce041eced4c1042' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\usersLogin.tpl',
      1 => 1616617144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606364827383a5_23888657 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content area -->
        <div class="content">
            <!-- Simple login form -->
            <form method="POST" id="makeLogin" >
                    <div class="panel panel-body login-form">
                        <div id="error"></div>
                        <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                <h5 class="content-group">Hesabınıza giriş yapın <small class="display-block">STOK YÖNETİM</small></h5>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="text" name="username" class="form-control" placeholder="Kullanıcı Adı" autocomplete="off">
                                <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="password" class="form-control" name="password" placeholder="Şifre" autocomplete="off">
                                <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                </div>
                        </div>

                        <div class="form-group">
                                <button type="submit" id="btn-login" class="btn btn-primary btn-block">Giriş Yap <i class="icon-circle-right2 position-right"></i></button>
                        </div>
                    </div>
            </form>
            <!-- /simple login form -->
    
    <?php echo '<script'; ?>
>
        $('document').ready(function()
        { 
             /* validation */
            $("#makeLogin").validate({
                rules:
                {
                    password: {
                        required: true
                    },
                    username: {
                        required: true,
                        email: true
                    }
                },
                 messages:
                {
                    password:{
                        required:"Lütfen şifrenizi giriniz"
                    },
                    username: "lütfen kullanıcı adını giriniz"
                },
                submitHandler: submitForm 
            });  
            /* validation */

            /* login submit */
            function submitForm()
            {  
                var data = $("#makeLogin").serialize();
                //console.log(data);
                $.ajax({
                    type : 'POST',
                    url  : '<?php echo $_smarty_tpl->tpl_vars['loginCheckUrl']->value;?>
',
                    data : data,
                    beforeSend: function()
                    { 
                     $("#error").fadeOut();
                     $("#btn-login").html('Gönderiliyor..<i class="icon-spinner10 spinner"></i>');
                    },
                    success :  function(response)
                    {      
                        if(response == "ok"){
                         $("#btn-login").html('Giriş Yapılıyor..<i class="icon-spinner10 spinner"></i>');
                         setTimeout(' window.location.href = "<?php echo $_smarty_tpl->tpl_vars['homePageUrl']->value;?>
"; ',4000);
                        }
                        else{
                          $("#error").fadeIn(1000, function(){      
                              $("#error").html('<div class="alert bg-danger alert-styled-left">'+
                                  '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Kapat</span></button>'+
                                  '<span class="text-semibold">Hata!</span>'+response+'</div>');
                                  $("#btn-login").html('Giriş Yap <i class="icon-circle-right2 position-right"></i>');
                          });
                        }
                    }
                });
                return false;
            }
        });
    <?php echo '</script'; ?>
><?php }
}
