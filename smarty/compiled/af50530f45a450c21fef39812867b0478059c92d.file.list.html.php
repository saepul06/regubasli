<?php /* Smarty version Smarty-3.1.17, created on 2016-10-25 04:39:11
         compiled from "application\views\web\berita\list.html" */ ?>
<?php /*%%SmartyHeaderCode:20696580ea66cad6d50-61013238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af50530f45a450c21fef39812867b0478059c92d' => 
    array (
      0 => 'application\\views\\web\\berita\\list.html',
      1 => 1477363146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20696580ea66cad6d50-61013238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_580ea66cb3c662_15614626',
  'variables' => 
  array (
    'berita_list' => 0,
    'rs' => 0,
    'page_modul' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580ea66cb3c662_15614626')) {function content_580ea66cb3c662_15614626($_smarty_tpl) {?>

              

                <div class="container clearfix">

               

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix">

                        <!-- Posts
                        ============================================= -->
                        <div id="posts" class="small-thumbs">
      
                             <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                            <div class="entry clearfix">
                                <div class="entry-image">
                                  
                                          
                                                <img class="image_fade" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="Standard Post with Gallery">
                                               
                                           
                                       
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> <?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</li>
                                        <li><i class="icon-folder-open"></i> <?php echo $_smarty_tpl->tpl_vars['page_modul']->value;?>
</li>
                                       
                                    </ul>
                                    <div class="entry-content">
                                        <p><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
</p>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"class="more-link">Selengkapnya...</a>
                                    </div>
                                </div>
                            </div>

                         <?php } ?>


                        </div><!-- #posts end -->

                        <!-- Pagination
                        ============================================= -->
                        <?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?>

                        <ul class="pager nomargin">
                            <?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>

                        </ul><!-- .pager end -->
                        <?php }?>

                </div>
<?php }} ?>
