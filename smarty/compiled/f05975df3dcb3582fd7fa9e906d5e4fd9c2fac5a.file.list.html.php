<?php /* Smarty version Smarty-3.1.17, created on 2016-10-05 13:16:30
         compiled from "application\views\private\regulasi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1252757ec944c504a36-45132529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f05975df3dcb3582fd7fa9e906d5e4fd9c2fac5a' => 
    array (
      0 => 'application\\views\\private\\regulasi\\list.html',
      1 => 1475658674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1252757ec944c504a36-45132529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec944c5c7f59_39692916',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit' => 1,
    'pagging' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec944c5c7f59_39692916')) {function content_57ec944c5c7f59_39692916($_smarty_tpl) {?>
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
" name="form-koleksi" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" />






/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_regulasi'];?>
" title="Edit" class="btn btn-success btn-flat">
<?php }?>