<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:35:44
         compiled from "application/views/web/regulasi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:13572092257ea05300f19b6-65610846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9497071aa91000cf5ebbea41b38ec4b2d7f12f8a' => 
    array (
      0 => 'application/views/web/regulasi/list.html',
      1 => 1473324250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13572092257ea05300f19b6-65610846',
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
  'unifunc' => 'content_57ea053049d442_69071088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea053049d442_69071088')) {function content_57ea053049d442_69071088($_smarty_tpl) {?><div class="col-md-9">
 
 $_from = $_smarty_tpl->tpl_vars['regulasi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>

"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>


" class="button-xs button-yellow">
