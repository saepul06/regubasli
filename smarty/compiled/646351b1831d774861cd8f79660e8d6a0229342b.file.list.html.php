<?php /* Smarty version Smarty-3.1.17, created on 2016-10-05 12:01:54
         compiled from "application\views\web\beritaanggota\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1865957f4cf92b7f151-50162881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646351b1831d774861cd8f79660e8d6a0229342b' => 
    array (
      0 => 'application\\views\\web\\beritaanggota\\list.html',
      1 => 1473302644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1865957f4cf92b7f151-50162881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'berita_list' => 0,
    'rs' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57f4cf92e7cc01_92230549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4cf92e7cc01_92230549')) {function content_57f4cf92e7cc01_92230549($_smarty_tpl) {?><div class="row j-masonry b-col-default-indent">
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>



">
 
