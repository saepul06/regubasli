<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 07:35:57
         compiled from "application\views\private\kecamatan\kecamatan-add.html" */ ?>
<?php /*%%SmartyHeaderCode:223935813eed39d90a6-20260324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1149f7757f85479e11c77b1fd1a28796e0029011' => 
    array (
      0 => 'application\\views\\private\\kecamatan\\kecamatan-add.html',
      1 => 1477719354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223935813eed39d90a6-20260324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5813eed3a5ddc4_05695177',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'kota' => 0,
    'result_kota' => 0,
    'kota_selected' => 0,
    'id_kecamatan' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813eed3a5ddc4_05695177')) {function content_5813eed3a5ddc4_05695177($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post">
 $_from = $_smarty_tpl->tpl_vars['kota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_kota']->key => $_smarty_tpl->tpl_vars['result_kota']->value) {
$_smarty_tpl->tpl_vars['result_kota']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['result_kota']->value['id']==$_smarty_tpl->tpl_vars['kota_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_kota']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['result_kota']->value['nama'];?>

 $_from = $_smarty_tpl->tpl_vars['id_kecamatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
"  id="id_kecamatan" class="form-control" maxlength="10" style="width:100px;" />
"  class="btn btn-primary">