<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 02:14:33
         compiled from "application/views/web/opini/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:184653809657ea0e4922cf22-57238784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f63b02e4254840d9e7780bae883c0218778ad511' => 
    array (
      0 => 'application/views/web/opini/detail.html',
      1 => 1473324248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184653809657ea0e4922cf22-57238784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'menu' => 0,
    'label' => 0,
    'opini_list' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea0e493dd083_87940131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea0e493dd083_87940131')) {function content_57ea0e493dd083_87940131($_smarty_tpl) {?><div class="col-md-9">



" style="max-width:100%;margin:0 10px 10px 0;">


">Download Lampiran

 $_from = $_smarty_tpl->tpl_vars['opini_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
"  alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">

"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>


">
