<?php
/* Smarty version 3.1.30, created on 2021-04-19 11:09:22
  from "D:\wamp64\www\okulProje\templates\companiesEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_607d3ab2e7f4e8_99833894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b51e86e6eb181c74399b668d0985d3cb86220241' => 
    array (
      0 => 'D:\\wamp64\\www\\okulProje\\templates\\companiesEdit.tpl',
      1 => 1616964833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d3ab2e7f4e8_99833894 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <!-- Centered forms -->
        <div class="row">
            <div class="col-md-12">
                <?php echo $_smarty_tpl->tpl_vars['Alert']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['companyData']->value != '') {?>
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
                                                    <label class="control-label">Firma Tam Ad??<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="companiesName" placeholder="xxx A?? LTD ??TI" value="<?php echo $_smarty_tpl->tpl_vars['companyData']->value["companiesName"];?>
" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Firma K??sa Ad??<span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control" name="companiesShortName" placeholder="xxx" value="<?php echo $_smarty_tpl->tpl_vars['companyData']->value["companiesShortName"];?>
" required="required" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">E-Posta Adresi<span class="text-danger">*</span> :</label>
                                            <input type="email" class="form-control" name="companiesEmail" placeholder="eposta@eposta.com" value="<?php echo $_smarty_tpl->tpl_vars['companyData']->value["companiesEmail"];?>
" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefon Numaras??<span class="text-danger">*</span> :</label>
                                            <input type="tel" class="form-control" name="companiesTel" placeholder="+9 999 999 999" value="<?php echo $_smarty_tpl->tpl_vars['companyData']->value["companiesTel"];?>
" required="required" data-mask="+99 999 999 9999">
                                        </div>
                                        <div class="form-group">
                                            <label>Faks Numaras??:</label>
                                            <input type="tel" class="form-control" name="companiesFax" placeholder="+9 999 999 999" value="<?php echo $_smarty_tpl->tpl_vars['companyData']->value["companiesFax"];?>
" data-mask="+99 999 999 9999">
                                        </div>
                                        <div class="form-group">
                                            <label>Web Sitesi:</label>
                                            <input type="text" name="companiesWeb" placeholder="www.example.com" value="<?php echo $_smarty_tpl->tpl_vars['companyData']->value["companiesWeb"];?>
" class="form-control" autocomplete="off">
                                        </div>                                        
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="text-semibold"><i class="icon-truck position-left"></i> Kargo / Vergi Bilgileri</legend>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vergi Dairesi:</label>
                                                    <input type="text" name="companiesTaxAdmin" placeholder="xxxx Company" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['companyData']->value["companiesTaxAdmin"];?>
" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Vergi Numaras??:</label>
                                                    <input type="text" name="companiesTaxNumber" placeholder="9999999999" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['companyData']->value["companiesTaxNumber"];?>
" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Firma Cari Kodu:</label>
                                                    <input type="text" name="companiesStockCode" placeholder="xxxx-9999-xxxx" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['companyData']->value["companiesStockCode"];?>
" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Firma ??nvan??:</label>
                                                    <select name="companiesFeature" class="form-control">
                                                        <option>Se??iniz</option>
                                                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companiesFeatures']->value, 'featVal', false, 'featKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['featKey']->value => $_smarty_tpl->tpl_vars['featVal']->value) {
?>
                                                             <option <?php if ($_smarty_tpl->tpl_vars['companyData']->value["companiesFeature"] == $_smarty_tpl->tpl_vars['featKey']->value) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['featKey']->value;?>
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
                                                        <option>Se??iniz</option>
                                                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companiesTypes']->value, 'typesVal', false, 'typesKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['typesKey']->value => $_smarty_tpl->tpl_vars['typesVal']->value) {
?>
                                                             <option <?php if ($_smarty_tpl->tpl_vars['companyData']->value["companiesType"] == $_smarty_tpl->tpl_vars['typesKey']->value) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['typesKey']->value;?>
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
                                                    <label>??deme G??nleri :</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[1]" <?php if ($_smarty_tpl->tpl_vars['companyData']->value["payDays"] && in_array("Pazartesi",$_smarty_tpl->tpl_vars['companyData']->value["payDays"])) {?> checked="checked" <?php }?> value="Pazartesi"> Pazartesi 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[2]" <?php if ($_smarty_tpl->tpl_vars['companyData']->value["payDays"] && in_array("Sal??",$_smarty_tpl->tpl_vars['companyData']->value["payDays"])) {?> checked="checked" <?php }?> value="Sal??"> Sal?? 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[3]" <?php if ($_smarty_tpl->tpl_vars['companyData']->value["payDays"] && in_array("??ar??amba",$_smarty_tpl->tpl_vars['companyData']->value["payDays"])) {?> checked="checked" <?php }?> value="??ar??amba"> ??ar??amba 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[4]" <?php if ($_smarty_tpl->tpl_vars['companyData']->value["payDays"] && in_array("Per??embe",$_smarty_tpl->tpl_vars['companyData']->value["payDays"])) {?> checked="checked" <?php }?> value="Per??embe"> Per??embe 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" name="companiesPayDays[5]" <?php if ($_smarty_tpl->tpl_vars['companyData']->value["payDays"] && in_array("Cuma",$_smarty_tpl->tpl_vars['companyData']->value["payDays"])) {?> checked="checked" <?php }?> value="Cuma"> Cuma 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>??deme Periyodu:</label>
                                                    <select name="companiesPayPeriods" class="form-control">
                                                        <option>Se??iniz</option>
                                                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PayPeriods']->value, 'payperV', false, 'payperK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payperK']->value => $_smarty_tpl->tpl_vars['payperV']->value) {
?>
                                                             <option value="<?php echo $_smarty_tpl->tpl_vars['payperK']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['companyData']->value["companiesPayPeriods"] == $_smarty_tpl->tpl_vars['payperK']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['payperV']->value;?>
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
                                                    <label>??zel Mesaj:</label>
                                                    <textarea name="companiesNote" rows="6" cols="5" maxlength="255" class="form-control" placeholder="Firma ile ilgili ??zel mesaj??n??z"><?php echo $_smarty_tpl->tpl_vars['companyData']->value["companiesNote"];?>
</textarea>
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
                                        <?php $_smarty_tpl->_assignInScope('val', 0);
?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setAddressData']->value, 'setAddV', false, 'setAddK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['setAddK']->value => $_smarty_tpl->tpl_vars['setAddV']->value) {
?>
                                            <input type="hidden" name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressId]" value="<?php echo $_smarty_tpl->tpl_vars['setAddV']->value["companiesAddressId"];?>
" readonly /> 
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Firma Adres Ad??:</label>
                                                            <input type="text" name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressName]" placeholder="9999999999" value="<?php echo $_smarty_tpl->tpl_vars['setAddV']->value["companiesAddressName"];?>
" class="form-control" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Firma Posta Kodu:</label>
                                                            <input type="text" name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressZipCode]" placeholder="9999999999" value="<?php echo $_smarty_tpl->tpl_vars['setAddV']->value["companiesAddressZipCode"];?>
" class="form-control" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>??lke :</label>
                                                            <select name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressCountryId]" id="country_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="form-control">
                                                                <option>Se??iniz</option>
                                                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                                                     <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['setAddV']->value["companiesAddressCountryId"] == $_smarty_tpl->tpl_vars['country']->value["id"]) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
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
                                                            <label>??ehir / Eyalet :</label>
                                                            <select name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressStateId]" id="states_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="form-control">
                                                                <option>Se??iniz</option>
                                                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setAddV']->value["states"], 'state');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
?>
                                                                     <option value="<?php echo $_smarty_tpl->tpl_vars['state']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['setAddV']->value["companiesAddressStateId"] == $_smarty_tpl->tpl_vars['state']->value["id"]) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['state']->value['name'];?>
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
                                                            <label>??l??e / B??lge:</label>
                                                            <select name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressCityId]" id="city_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="form-control">
                                                                <option>Se??iniz</option>
                                                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setAddV']->value["city"], 'cities');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cities']->value) {
?>
                                                                     <option value="<?php echo $_smarty_tpl->tpl_vars['cities']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['setAddV']->value["companiesAddressCityId"] == $_smarty_tpl->tpl_vars['cities']->value["id"]) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['cities']->value['name'];?>
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
                                                <div class="form-group">
                                                    <label>Adres:</label>
                                                    <input type="text" class="form-control" name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressText]" value="<?php echo $_smarty_tpl->tpl_vars['setAddV']->value["companiesAddressText"];?>
" placeholder="Lorem ipsum dolor sit amet...." autocomplete="off">
                                                </div>
                                            </div>
                                            <?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['val']->value+1);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    <!-- 2 -->
                                    <?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['val']->value+1);
?>
                                        <input type="hidden" name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressId]" value="0" readonly /> 
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Firma Adres Ad??:</label>
                                                        <input type="text" name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressName]" placeholder="9999999999" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Firma Posta Kodu:</label>
                                                        <input type="text" name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressZipCode]" placeholder="9999999999" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>??lke :</label>
                                                        <select name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressCountryId]" id="country_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="form-control">
                                                            <option>Se??iniz</option>
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
                                                        <label>??ehir / Eyalet :</label>
                                                        <select name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressStateId]" id="states_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="form-control">
                                                            <option>Se??iniz</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>??l??e / B??lge:</label>
                                                        <select name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressCityId]" id="city_<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" class="form-control">
                                                            <option>Se??iniz</option>
                                                        </select> 
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Adres:</label>
                                                <input type="text" class="form-control" name="companyAddress[<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
][companiesAddressText]" placeholder="Lorem ipsum dolor sit amet...." autocomplete="off">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="text-right">
                                    <a href="javascript:history.go(-1);" class="btn btn-warning"><i class="icon-arrow-left8"></i>Geri D??n</a>
                                    <button type="reset" class="btn btn-default">??ptal Et <i class="icon-reload-alt position-right"></i></button>
                                    <button type="submit" class="btn btn-primary">Kaydet <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            <?php }?>
                <!-- /2 columns form -->
    </div> 
</div>
<!-- /form centered -->

    <?php echo '<script'; ?>
>
        $(document).ready(function(){
            // Full featured editor
            CKEDITOR.replace( 'editor-full', {
                height: '400px',
                extraPlugins: 'forms'
            });
        });
    <?php echo '</script'; ?>
>    
<?php }
}
