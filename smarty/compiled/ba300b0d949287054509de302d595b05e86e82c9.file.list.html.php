<?php /* Smarty version Smarty-3.1.17, created on 2016-09-26 23:59:11
         compiled from "application/views/web/asosiasi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:170812731657e9ee8fdfef10-44842046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba300b0d949287054509de302d595b05e86e82c9' => 
    array (
      0 => 'application/views/web/asosiasi/list.html',
      1 => 1473324242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170812731657e9ee8fdfef10-44842046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_modul' => 0,
    'asosiasilist' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ee90075ab0_38073639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ee90075ab0_38073639')) {function content_57e9ee90075ab0_38073639($_smarty_tpl) {?><div class="row">

 $_from = $_smarty_tpl->tpl_vars['asosiasilist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo_asosiasi'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_asosiasi'];?>
" /></a>
 $_from = $_smarty_tpl->tpl_vars['asosiasilist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
">
" alt=""/>
" class="b-btn f-btn b-btn-light f-btn-light info">
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_asosiasi'];?>
