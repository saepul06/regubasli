<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 07:43:42
         compiled from "application\views\private\kecamatan\list.html" */ ?>
<?php /*%%SmartyHeaderCode:262835813ebcc9ae081-57775154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2251f8332edfe4487ab7e2090d7714cb213294c5' => 
    array (
      0 => 'application\\views\\private\\kecamatan\\list.html',
      1 => 1477719811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262835813ebcc9ae081-57775154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5813ebcd03c256_96858152',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'url_search' => 0,
    'kota' => 0,
    'result_kota' => 0,
    'kota_selected' => 0,
    'kecamatan' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_edit2' => 0,
    'url_delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813ebcd03c256_96858152')) {function content_5813ebcd03c256_96858152($_smarty_tpl) {?><section class="content-header">
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
" >
/' + this.value">
 $_from = $_smarty_tpl->tpl_vars['kota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_kota']->key => $_smarty_tpl->tpl_vars['result_kota']->value) {
$_smarty_tpl->tpl_vars['result_kota']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['result_kota']->value['id']==$_smarty_tpl->tpl_vars['kota_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_kota']->value['nama'];?>

 $_from = $_smarty_tpl->tpl_vars['kecamatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>



/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
"
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_kabupaten'];?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
"
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" onclick="return konfirmasi_delete();">