<?php /* Smarty version Smarty-3.1.17, created on 2016-10-28 12:49:48
         compiled from "application\views\private\propinsi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1277058130ab9e1e026-09942754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c97429f50310a9e2b05750dfe1077d81faa357bb' => 
    array (
      0 => 'application\\views\\private\\propinsi\\list.html',
      1 => 1477651786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1277058130ab9e1e026-09942754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58130aba066505_09503671',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'propinsi' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58130aba066505_09503671')) {function content_58130aba066505_09503671($_smarty_tpl) {?><section class="content-header">
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 $_from = $_smarty_tpl->tpl_vars['propinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
.

/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" title="Edit" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" onclick="return konfirmasi_delete();">