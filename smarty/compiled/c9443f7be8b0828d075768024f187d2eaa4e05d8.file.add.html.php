<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 12:10:45
         compiled from "application\views\private\administrator\add.html" */ ?>
<?php /*%%SmartyHeaderCode:521157ea45a5942983-46623982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9443f7be8b0828d075768024f187d2eaa4e05d8' => 
    array (
      0 => 'application\\views\\private\\administrator\\add.html',
      1 => 1474970631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '521157ea45a5942983-46623982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'data_asosiasi' => 0,
    'result_asosiasi' => 0,
    'data_auth' => 0,
    'result_auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea45a59f2632_35143031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea45a59f2632_35143031')) {function content_57ea45a59f2632_35143031($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post" nctype="multipart/form-data">
" maxlength="100" id="admin_name" class="form-control" />
 $_from = $_smarty_tpl->tpl_vars['data_asosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_asosiasi']->key => $_smarty_tpl->tpl_vars['result_asosiasi']->value) {
$_smarty_tpl->tpl_vars['result_asosiasi']->_loop = true;
?>
" ><?php echo $_smarty_tpl->tpl_vars['result_asosiasi']->value['nama_asosiasi'];?>

 $_from = $_smarty_tpl->tpl_vars['data_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_auth']->key => $_smarty_tpl->tpl_vars['result_auth']->value) {
$_smarty_tpl->tpl_vars['result_auth']->_loop = true;
?>
" ><?php echo $_smarty_tpl->tpl_vars['result_auth']->value['auth_name'];?>

" maxlength="100"  class="form-control" />
" maxlength="30"  class="form-control" />
"  class="btn btn-primary">
" maxlength="100" id="user_name" class="form-control" />
" maxlength="100" id="user_pass" class="form-control" />
" maxlength="100" id="user_mail" class="form-control" />