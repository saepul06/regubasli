<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:10:19
         compiled from "application\views\private\sponsor\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2395757ec942bd52323-81674549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f140fe44a59c55ff3bdf842c02af08238c88da98' => 
    array (
      0 => 'application\\views\\private\\sponsor\\list.html',
      1 => 1474155028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2395757ec942bd52323-81674549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'start' => 0,
    'end' => 0,
    'total' => 0,
    'pagging' => 1,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit' => 1,
    'url_add_iklan' => 1,
    'url_list_iklan' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec942be01fd2_52864008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec942be01fd2_52864008')) {function content_57ec942be01fd2_52864008($_smarty_tpl) {?>
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 - <?php echo $_smarty_tpl->tpl_vars['end']->value;?>
</b> dari <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> data</span>
<?php }?>
" name="form-album" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" />
.

" width="100" />
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_sponsor'];?>
" title="Edit Nama Sponsor" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_sponsor'];?>
" title="Tambah Iklan" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_sponsor'];?>
" title="Lihat List Iklan" class="btn btn-success btn-flat">
<?php }?>