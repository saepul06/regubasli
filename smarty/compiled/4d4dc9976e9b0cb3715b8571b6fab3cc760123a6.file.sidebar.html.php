<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:14:07
         compiled from "application/views/web/base-layout/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:60556923157e9edd3d7bfd7-21872285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d4dc9976e9b0cb3715b8571b6fab3cc760123a6' => 
    array (
      0 => 'application/views/web/base-layout/sidebar.html',
      1 => 1474529440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60556923157e9edd3d7bfd7-21872285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9edd3ee35c3_06741784',
  'variables' => 
  array (
    'url_search_base' => 0,
    'key' => 0,
    'act_lang' => 0,
    'berita_sidebar' => 1,
    'rs' => 0,
    'baseurl' => 1,
    'kegiatanfooter' => 1,
    'profil_side' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9edd3ee35c3_06741784')) {function content_57e9edd3ee35c3_06741784($_smarty_tpl) {?><div class="col-md-3">
" name="form-search"> <input  class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" placeholder="Masukan kata pencarian"/></form>
 $_from = $_smarty_tpl->tpl_vars['berita_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
">
php_helpers/timthumb.php?src=<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
&amp;w=50&amp;h=50&amp;zc=0" alt=""/>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>

 
 $_from = $_smarty_tpl->tpl_vars['kegiatanfooter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
"><img data-retina src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
php_helpers/timthumb.php?src=<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
&amp;w=50&amp;h=50&amp;zc=0" alt=""/></a> </div>-->
"><?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_english'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_agenda'];?>
<?php }?>
 - <?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal_selesai'];?>
 
 $_from = $_smarty_tpl->tpl_vars['profil_side']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
