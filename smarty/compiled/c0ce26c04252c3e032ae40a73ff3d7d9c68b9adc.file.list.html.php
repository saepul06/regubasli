<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 03:00:36
         compiled from "application/views/web/sesebi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:188840527257ea19149ea0e0-98947210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ce26c04252c3e032ae40a73ff3d7d9c68b9adc' => 
    array (
      0 => 'application/views/web/sesebi/list.html',
      1 => 1473324250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188840527257ea19149ea0e0-98947210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sesebi_list' => 0,
    'rs' => 0,
    'page_modul' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea1914ae5552_00160942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea1914ae5552_00160942')) {function content_57ea1914ae5552_00160942($_smarty_tpl) {?><div class="l-inner-page-container">
 $_from = $_smarty_tpl->tpl_vars['sesebi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
" class="f-primary-l f-title-big f-blog__title"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>




" class="b-btn f-btn b-btn-md b-btn-default f-primary-b"><?php echo $_smarty_tpl->tpl_vars['label']->value['selengkapnya'];?>

