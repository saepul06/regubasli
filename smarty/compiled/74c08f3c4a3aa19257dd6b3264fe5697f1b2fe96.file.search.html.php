<?php /* Smarty version Smarty-3.1.17, created on 2016-10-02 22:01:50
         compiled from "application/views/web/pencarian/search.html" */ ?>
<?php /*%%SmartyHeaderCode:120881823157f1bc0ebd31d6-16606437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74c08f3c4a3aa19257dd6b3264fe5697f1b2fe96' => 
    array (
      0 => 'application/views/web/pencarian/search.html',
      1 => 1473324248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120881823157f1bc0ebd31d6-16606437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keyword' => 0,
    'data' => 0,
    'rs' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57f1bc0ec47b74_76699788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f1bc0ec47b74_76699788')) {function content_57f1bc0ec47b74_76699788($_smarty_tpl) {?><p>
"
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">

"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>



">

