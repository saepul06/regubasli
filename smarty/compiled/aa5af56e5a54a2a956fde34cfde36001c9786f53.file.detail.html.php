<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 00:22:46
         compiled from "application/views/web/profil/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:97499524957e9f41654e952-67335548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa5af56e5a54a2a956fde34cfde36001c9786f53' => 
    array (
      0 => 'application/views/web/profil/detail.html',
      1 => 1473861180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97499524957e9f41654e952-67335548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'page_modul' => 0,
    'profil_list' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9f41675a2e4_19315129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9f41675a2e4_19315129')) {function content_57e9f41675a2e4_19315129($_smarty_tpl) {?><div class="col-md-9">


 
 $_from = $_smarty_tpl->tpl_vars['profil_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
