<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:17:21
         compiled from "application/views/private/dashboard/grafik.html" */ ?>
<?php /*%%SmartyHeaderCode:55962779357ea036dd5d001-89027527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0df2f5f34892e8d5068721a3b2df45e456ef62a9' => 
    array (
      0 => 'application/views/private/dashboard/grafik.html',
      1 => 1474963236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55962779357ea036dd5d001-89027527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea036ddb2df4_26863718',
  'variables' => 
  array (
    'url_private' => 0,
    'total_foto' => 0,
    'total_album' => 0,
    'total_video' => 0,
    'url_video' => 0,
    'total_informasi' => 0,
    'url_opini' => 0,
    'url_sesebi' => 0,
    'berita' => 0,
    'berita_anggota' => 0,
    'event' => 0,
    'event_anggota' => 0,
    'data_tahun_tbs' => 0,
    'r' => 0,
    'url_data_grafik_tbs' => 0,
    'url_data_tabel_tbs' => 0,
    'data_tahun_cpo' => 0,
    'url_data_grafik_cpo_domes' => 0,
    'url_data_tabel_cpo' => 0,
    'data_tahun_ekspor' => 0,
    'url_data_grafik_pasarglobal' => 0,
    'url_data_tabel_ekspor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea036ddb2df4_26863718')) {function content_57ea036ddb2df4_26863718($_smarty_tpl) {?><section class="content-header">
">
 dari <?php echo $_smarty_tpl->tpl_vars['total_album']->value;?>
 Album

" class="small-box-footer">

" class="small-box-footer">
" class="small-box-footer">




 $_from = $_smarty_tpl->tpl_vars['data_tahun_tbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
</option>
" />
" />
 $_from = $_smarty_tpl->tpl_vars['data_tahun_cpo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
</option>
" />
" />
 $_from = $_smarty_tpl->tpl_vars['data_tahun_ekspor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
</option>
" />
" />