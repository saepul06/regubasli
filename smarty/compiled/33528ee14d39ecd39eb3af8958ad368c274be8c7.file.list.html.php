<?php /* Smarty version Smarty-3.1.17, created on 2016-10-16 08:40:53
         compiled from "application\views\private\profil\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1705757ebe9b6ae6b68-08830355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33528ee14d39ecd39eb3af8958ad368c274be8c7' => 
    array (
      0 => 'application\\views\\private\\profil\\list.html',
      1 => 1476582625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705757ebe9b6ae6b68-08830355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ebe9b6badf10_98759020',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'data' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ebe9b6badf10_98759020')) {function content_57ebe9b6badf10_98759020($_smarty_tpl) {?><section class="content-header">
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
.


/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
" title="Edit" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
" onclick="return konfirmasi_delete();">
').html(),$('#modal-detail-asosiasi-footer').html(),'medium');" title="Lihat Detail" class="btn btn-info btn-flat"><i class='fa fa-eye'></i></a>
