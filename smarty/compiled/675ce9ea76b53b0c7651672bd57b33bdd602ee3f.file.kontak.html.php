<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:04:34
         compiled from "application/views/web/kontak/kontak.html" */ ?>
<?php /*%%SmartyHeaderCode:73243253257e9fde295ed25-86239648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '675ce9ea76b53b0c7651672bd57b33bdd602ee3f' => 
    array (
      0 => 'application/views/web/kontak/kontak.html',
      1 => 1474034950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73243253257e9fde295ed25-86239648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'label' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'datasosmed' => 0,
    'rs' => 0,
    'url_captcha' => 0,
    'kontakinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9fde2cd56b1_39784507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9fde2cd56b1_39784507')) {function content_57e9fde2cd56b1_39784507($_smarty_tpl) {?><section class="b-google-map map-theme b-bord-box" data-location-set="contact-us">
themes/default/img/google-map-marker-default.png" data-label="" class="marker-template hidden" />


 


 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
">

"> <?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
</a>
" />


" target="_blank"><?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['website'];?>

