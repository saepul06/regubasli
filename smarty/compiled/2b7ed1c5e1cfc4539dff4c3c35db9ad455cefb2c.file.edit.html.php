<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 13:09:24
         compiled from "application\views\private\administrator\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2683857ea43a8478336-13002487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b7ed1c5e1cfc4539dff4c3c35db9ad455cefb2c' => 
    array (
      0 => 'application\\views\\private\\administrator\\edit.html',
      1 => 1474974562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2683857ea43a8478336-13002487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea43a8524164_73377531',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'data_asosiasi' => 0,
    'result_as' => 0,
    'data_auth' => 0,
    'result_auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea43a8524164_73377531')) {function content_57ea43a8524164_73377531($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post" nctype="multipart/form-data">
">
" maxlength="100" id="admin_name" class="form-control" />
 $_from = $_smarty_tpl->tpl_vars['data_asosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_as']->key => $_smarty_tpl->tpl_vars['result_as']->value) {
$_smarty_tpl->tpl_vars['result_as']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['id_asosiasi']==$_smarty_tpl->tpl_vars['result_as']->value['id_asosiasi']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_as']->value['nama_asosiasi'];?>

 $_from = $_smarty_tpl->tpl_vars['data_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_auth']->key => $_smarty_tpl->tpl_vars['result_auth']->value) {
$_smarty_tpl->tpl_vars['result_auth']->_loop = true;
?>
"<?php if ($_smarty_tpl->tpl_vars['data']->value['id_auth']==$_smarty_tpl->tpl_vars['result_auth']->value['id_auth']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_auth']->value['auth_name'];?>

" maxlength="100"  class="form-control" />
" maxlength="30"  class="form-control" />
"  class="btn btn-primary">
" maxlength="100" id="user_name" class="form-control" />
" maxlength="100" id="user_pass" class="form-control" />
" maxlength="100" id="user_mail" class="form-control" />