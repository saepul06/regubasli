<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 11:35:21
         compiled from "application\views\web\regulasi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2765657ea3d592e05b9-29046569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '475c64560e581f84a1032aa17f0e451da29c0ee8' => 
    array (
      0 => 'application\\views\\web\\regulasi\\list.html',
      1 => 1473302650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2765657ea3d592e05b9-29046569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_modul' => 0,
    'regulasi_list' => 0,
    'no' => 0,
    'rs' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3d5930b542_99484030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3d5930b542_99484030')) {function content_57ea3d5930b542_99484030($_smarty_tpl) {?><div class="col-md-9">
 
 $_from = $_smarty_tpl->tpl_vars['regulasi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>

"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>


" class="button-xs button-yellow">
