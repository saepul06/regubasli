<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 05:01:21
         compiled from "application/views/private/profil/list.html" */ ?>
<?php /*%%SmartyHeaderCode:12430382057ea3561dee2e0-01240585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eab1fd400e431cf23df38325d49bd9840759e36c' => 
    array (
      0 => 'application/views/private/profil/list.html',
      1 => 1473324232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12430382057ea3561dee2e0-01240585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'data' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3561eb4037_79564108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3561eb4037_79564108')) {function content_57ea3561eb4037_79564108($_smarty_tpl) {?><section class="content-header">
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
.


/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
" title="Edit" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
" onclick="return konfirmasi_delete();">