<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:25:37
         compiled from "application/views/web/video/list.html" */ ?>
<?php /*%%SmartyHeaderCode:122497132357ecec21bda2e5-29015845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3221d599ff36a829f434f9b6dfad07be8770c06a' => 
    array (
      0 => 'application/views/web/video/list.html',
      1 => 1473848560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122497132357ecec21bda2e5-29015845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video_list' => 0,
    'rs' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ecec21c40070_66607264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecec21c40070_66607264')) {function content_57ecec21c40070_66607264($_smarty_tpl) {?><div class="row j-masonry b-col-default-indent">
 $_from = $_smarty_tpl->tpl_vars['video_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt=""/> 
" class="b-btn f-btn b-btn-light f-btn-light fancybox info fancybox.iframe" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
">

