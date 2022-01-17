<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning alert-styled-right">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Kapat</span></button>
                    <span class="text-semibold"><i class="icon-spinner9 spinner position-left"></i>Çıkış Yaptınız!</span> Birazdan giriş sayfasına yönlendirileceksiniz.
                </div>
            </div>
        </div>
        <script>
        (function() {
            $(document).ready(function() {
                setTimeout(function () {
                   window.location.href= "{$URL}"; // the redirect goes here
                },2000);
            });
          })();   
        </script>