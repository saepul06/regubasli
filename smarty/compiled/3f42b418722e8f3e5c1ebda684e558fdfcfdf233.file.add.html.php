<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 02:58:22
         compiled from "application/views/private/harga/add.html" */ ?>
<?php /*%%SmartyHeaderCode:162153479057ea16fb02db77-94469335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f42b418722e8f3e5c1ebda684e558fdfcfdf233' => 
    array (
      0 => 'application/views/private/harga/add.html',
      1 => 1474959470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162153479057ea16fb02db77-94469335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea16fb3eb104_35257309',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'id_katharga' => 0,
    'subkatharga' => 0,
    'rs_subkatharga' => 0,
    'data' => 0,
    'bulan' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea16fb3eb104_35257309')) {function content_57ea16fb3eb104_35257309($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post" enctype="multipart/form-data">
" />
 $_from = $_smarty_tpl->tpl_vars['subkatharga']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs_subkatharga']->key => $_smarty_tpl->tpl_vars['rs_subkatharga']->value) {
$_smarty_tpl->tpl_vars['rs_subkatharga']->_loop = true;
?>
"><?php echo $_smarty_tpl->tpl_vars['rs_subkatharga']->value['sub_katharga'];?>
</option>
" id="tahun" class="form-control" size="10" maxlength="10" style="width:150px;" />
 $_from = $_smarty_tpl->tpl_vars['bulan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['rs']->value['id_bulan']==$_smarty_tpl->tpl_vars['data']->value['id_bulan']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['rs']->value['lengkap'];?>

" class="form-control" size="10" maxlength="10" style="width:250px;" />
" class="form-control" size="10" maxlength="10" style="width:250px;" />
" class="form-control">
"  class="btn btn-primary">