<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 11:22:31
         compiled from "application\views\private\profesi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:28415581460a8679e98-10278984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '156e1ad55dd1393c446d4ba64cdb89adbf31d899' => 
    array (
      0 => 'application\\views\\private\\profesi\\list.html',
      1 => 1477732948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28415581460a8679e98-10278984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_581460a8f19119_66129806',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'profesi' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581460a8f19119_66129806')) {function content_581460a8f19119_66129806($_smarty_tpl) {?><section class="content-header">
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 $_from = $_smarty_tpl->tpl_vars['profesi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
.

/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_profesi'];?>
" title="Edit" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_profesi'];?>
" title="Hapus" class="btn btn-danger btn-flat" id_profesi="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id_profesi'];?>
" onclick="return konfirmasi_delete();">