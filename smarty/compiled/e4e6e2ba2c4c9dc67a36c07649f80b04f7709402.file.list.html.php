<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 13:39:58
         compiled from "application\views\web\informasi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:3105257ea5a8ec74e15-82286138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e6e2ba2c4c9dc67a36c07649f80b04f7709402' => 
    array (
      0 => 'application\\views\\web\\informasi\\list.html',
      1 => 1473838352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3105257ea5a8ec74e15-82286138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'informasi_list' => 0,
    'rs' => 0,
    'kategori' => 0,
    'act_lang' => 0,
    'result' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea5a8ed30641_57353269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea5a8ed30641_57353269')) {function content_57ea5a8ed30641_57353269($_smarty_tpl) {?><div class="l-inner-page-container">
 $_from = $_smarty_tpl->tpl_vars['informasi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
" class="f-primary-l f-title-big f-blog__title"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>

 $_from = $_smarty_tpl->tpl_vars['kategori']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>




" class="b-btn f-btn b-btn-md b-btn-default f-primary-b"><?php echo $_smarty_tpl->tpl_vars['label']->value['selengkapnya'];?>

