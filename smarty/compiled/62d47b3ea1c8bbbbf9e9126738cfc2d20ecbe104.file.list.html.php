<?php /* Smarty version Smarty-3.1.17, created on 2016-09-30 02:17:51
         compiled from "application/views/private/asosiasi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:202814631857ee038f2c93e4-60805421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62d47b3ea1c8bbbbf9e9126738cfc2d20ecbe104' => 
    array (
      0 => 'application/views/private/asosiasi/list.html',
      1 => 1474286260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202814631857ee038f2c93e4-60805421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'asosiasi' => 0,
    'no' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_delete' => 0,
    'url_anggota' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ee038f3cef28_83852044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee038f3cef28_83852044')) {function content_57ee038f3cef28_83852044($_smarty_tpl) {?>
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 $_from = $_smarty_tpl->tpl_vars['asosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
.




/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
" title="Edit" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['no_regmus'];?>
" onclick="return konfirmasi_delete();">
').html(),$('#modal-detail-asosiasi-footer').html(),'medium');" title="Lihat Detail" class="btn btn-info btn-flat"><i class='fa fa-eye'></i></a>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
" class="btn btn-success btn-flat"> 
