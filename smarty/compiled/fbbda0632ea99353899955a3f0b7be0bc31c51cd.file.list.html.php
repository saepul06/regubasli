<?php /* Smarty version Smarty-3.1.17, created on 2016-10-05 13:03:41
         compiled from "application\views\web\agenda\list.html" */ ?>
<?php /*%%SmartyHeaderCode:205857f4de0dcca4d5-55418974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbbda0632ea99353899955a3f0b7be0bc31c51cd' => 
    array (
      0 => 'application\\views\\web\\agenda\\list.html',
      1 => 1473302642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205857f4de0dcca4d5-55418974',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'agenda_list' => 0,
    'rs' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57f4de0ddbc816_15705935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4de0ddbc816_15705935')) {function content_57f4de0ddbc816_15705935($_smarty_tpl) {?><div class="row j-masonry b-col-default-indent">
 $_from = $_smarty_tpl->tpl_vars['agenda_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_agenda'];?>

 - <?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal_selesai'];?>


">
 
