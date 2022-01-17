<?php
/* Smarty version 3.1.30, created on 2021-03-30 22:06:42
  from "D:\wamp64\www\okulProje\templates\companiesAdd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_606376c2ccff11_09476956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00b5b1b8129e062138bc845bc786eef62b6926d7' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\companiesAdd.tpl',
      1 => 1617048468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606376c2ccff11_09476956 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                <?php echo $_smarty_tpl->tpl_vars['Alert']->value;?>

                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['FormUrl']->value;?>
">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Firma Ekle</h5>
                            <div class="heading-elements">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-reading position-left"></i> Firma Bilgileri</legend>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Firma Tam Adı<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="companiesName" placeholder="xxx AŞ LTD ŞTI" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Firma Kısa Adı<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="companiesShortName" placeholder="xxx" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">E-Posta Adresi<span class="text-danger">*</span> :</label>
                                            <input type="email" class="form-control" name="companiesEmail" placeholder="eposta@eposta.com" required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon Numarası<span class="text-danger">*</span> :</label>
                                            <input type="tel" class="form-control" name="companiesTel" placeholder="+9 999 999 999" required="required" data-mask="+99 999 999 9999">
                                        </div>
                                        <div class="form-group">
                                            <label>Faks Numarası:</label>
                                            <input type="tel" class="form-control" name="companiesFax" placeholder="+9 999 999 999" data-mask="+99 999 999 9999">
                                        </div>
                                        <div class="form-group">
                                            <label>Web Sitesi:</label>
                                            <input type="text" name="companiesWeb" placeholder="www.example.com" class="form-control" autocomplete="off">
                                        </div>  
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-truck position-left"></i> Vergi Bilgileri</legend>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vergi Dairesi:</label>
                                                    <input type="text" name="companiesTaxAdmin" placeholder="xxxx Company" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vergi Numarası:</label>
                                                    <input type="text" name="companiesTaxNumber" placeholder="9999999999" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Firma Cari Kodu:</label>
                                                    <input type="text" name="companiesStockCode" placeholder="xxxx-9999-xxxx" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Firma Ünvanı:</label>
                                                    <select name="companiesFeature" class="form-control">
                                                        <option>Seçiniz</option>
                                                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companiesFeatures']->value, 'featVal', false, 'featKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['featKey']->value => $_smarty_tpl->tpl_vars['featVal']->value) {
?>
                                                             <option value="<?php echo $_smarty_tpl->tpl_vars['featKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['featVal']->value;?>
</option>
                                                         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Firma Tipi:</label>
                                                    <select name="companiesType" class="form-control">
                                                        <option>Seçiniz</option>
                                                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companiesTypes']->value, 'typesVal', false, 'typesKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['typesKey']->value => $_smarty_tpl->tpl_vars['typesVal']->value) {
?>
                                                             <option value="<?php echo $_smarty_tpl->tpl_vars['typesKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['typesVal']->value;?>
</option>
                                                         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Ödeme Günleri :</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[1]" value="Pazartesi"> Pazartesi 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[2]" value="Salı"> Salı 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[3]" value="Çarşamba"> Çarşamba 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[4]" value="Perşembe"> Perşembe 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[5]" value="Cuma"> Cuma 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Ödeme Periyodu:</label>
                                                    <select name="companiesPayPeriods" class="form-control">
                                                        <option>Seçiniz</option>
                                                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PayPeriods']->value, 'payperV', false, 'payperK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payperK']->value => $_smarty_tpl->tpl_vars['payperV']->value) {
?>
                                                             <option value="<?php echo $_smarty_tpl->tpl_vars['payperK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['payperV']->value;?>
</option>
                                                         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Özel Mesaj:</label>
                                                    <textarea name="companiesNote" rows="6" cols="5" maxlength="255" class="form-control" placeholder="Firma ile ilgili özel mesajınız"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <legend class="text-semibold">
                                            <i class="icon-truck position-left"></i> Firma Adres Bilgileri
                                        </legend>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Firma Adres Adı:</label>
                                                        <input type="text" name="companyAddress[0][companiesAddressName]" placeholder="9999999999" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Firma Posta Kodu:</label>
                                                        <input type="text" name="companyAddress[0][companiesAddressZipCode]" placeholder="9999999999" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Ülke :</label>
                                                        <select name="companyAddress[0][companiesAddressCountryId]" id="country_1" class="form-control">
                                                            <option value="0">Seçiniz</option>
                                                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option>
                                                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Şehir / Eyalet :</label>
                                                        <select name="companyAddress[0][companiesAddressStateId]" id="states_1" class="form-control">
                                                            <option value="0">Seçiniz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>İlçe / Bölge:</label>
                                                        <select name="companyAddress[0][companiesAddressCityId]" id="city_1" class="form-control">
                                                            <option value="0">Seçiniz</option>
                                                        </select> 
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Adres:</label>
                                                <input type="text" id="inpt_00" class="form-control" name="companyAddress[0][companiesAddressText]" placeholder="Lorem ipsum dolor sit amet...." autocomplete="off">
                                            </div>
                                        </div>
                                    <!-- 2 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Firma Adres Adı:</label>
                                                        <input type="text" name="companyAddress[1][companiesAddressName]" placeholder="9999999999" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Firma Posta Kodu:</label>
                                                        <input type="text" name="companyAddress[1][companiesAddressZipCode]" placeholder="9999999999" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Ülke :</label>
                                                        <select name="companyAddress[1][companiesAddressCountryId]" id="country_2" class="form-control">
                                                            <option value="0">Seçiniz</option>
                                                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option>
                                                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Şehir / Eyalet :</label>
                                                        <select name="companyAddress[1][companiesAddressStateId]" id="states_2" class="form-control">
                                                            <option value="0">Seçiniz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>İlçe / Bölge:</label>
                                                        <select name="companyAddress[1][companiesAddressCityId]" id="city_2" class="form-control">
                                                            <option value="0">Seçiniz</option>
                                                        </select> 
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Adres:</label>
                                                <input type="text" class="form-control" name="companyAddress[1][companiesAddressText]" placeholder="Lorem ipsum dolor sit amet...." autocomplete="off">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="text-right">
                                    <a href="javascript:history.go(-1);" class="btn btn-warning"><i class="icon-arrow-left8"></i>Geri Dön</a>
                                    <button type="reset" class="btn btn-default">İptal Et <i class="icon-reload-alt position-right"></i></button>
                                    <button type="submit" class="btn btn-primary">Kaydet <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /2 columns form -->
    </div> 
</div>
<!-- /form centered --><?php }
}
