<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 10:48:56
         compiled from "application\views\web\informasi\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:517357ea5a92c1ca66-60349740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db1f0731a776afe05955f2c1aeaae44cc99a72c9' => 
    array (
      0 => 'application\\views\\web\\informasi\\detail.html',
      1 => 1476694135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '517357ea5a92c1ca66-60349740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea5a92d16aa8_44756887',
  'variables' => 
  array (
    'data' => 0,
    'BASEURL' => 0,
    'berita' => 0,
    'brt' => 0,
    'url_detail_berita' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea5a92d16aa8_44756887')) {function content_57ea5a92d16aa8_44756887($_smarty_tpl) {?>
                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix">

                        <div class="single-post nobottommargin">

                            <!-- Single Post
                            ============================================= -->
                            <div class="entry clearfix">

                                <!-- Entry Title
                                ============================================= -->
                                <div class="entry-title">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
</h2>
                                </div><!-- .entry-title end -->

                                <!-- Entry Meta
                                ============================================= -->
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> <?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal'];?>
</li>
                                    <li><a href="#"><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['data']->value['nama_anggota'];?>
</a></li>
                                </ul><!-- .entry-meta end -->

                                <!-- Entry Content
                                ============================================= -->
                                <div class="entry-content notopmargin">

                                    <!-- Entry Image
                                    ============================================= -->
                                    <div class="entry-image alignleft">
                                        <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" alt="Blog Single"></a>
                                        <p><h6><i><?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan_gambar'];?>
</i></h6></p>
                                    </div><!-- .entry-image end -->

                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

                                    <!-- Post Single - Content End -->

                                    <div class="clear"></div>

                                    <!-- Post Single - Share
                                    ============================================= -->
                                    <div class="si-share noborder clearfix">
                                        <span>Bagikan:</span>
                                        <div>
                                            <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
index.php/public/berita/detail/<?php echo $_smarty_tpl->tpl_vars['data']->value['id_berita'];?>
" target="_blank" class="social-icon si-borderless si-facebook">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="http://twitter.com/share?url=<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
index.php/public/berita/detail/<?php echo $_smarty_tpl->tpl_vars['data']->value['id_berita'];?>
&text=<?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
" target="_blank" class="social-icon si-borderless si-twitter">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="//pinterest.com/pin/create/link/?url=<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
index.php/public/berita/detail/<?php echo $_smarty_tpl->tpl_vars['data']->value['id_berita'];?>
" target="_blank" class="social-icon si-borderless si-pinterest">
                                                <i class="icon-pinterest"></i>
                                                <i class="icon-pinterest"></i>
                                            </a>
                                            <a href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
index.php/public/berita/detail/<?php echo $_smarty_tpl->tpl_vars['data']->value['id_berita'];?>
" target="_blank" class="social-icon si-borderless si-gplus">
                                                <i class="icon-gplus"></i>
                                                <i class="icon-gplus"></i>
                                            </a>
                                        </div>
                                    </div><!-- Post Single - Share End -->

                                </div>
                            </div><!-- .entry end -->

                            <h4>Berita Lainnya :</h4>

                            <div class="related-posts clearfix">
                                <div class="row">
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['berita']->value!='') {?>
                                    <?php  $_smarty_tpl->tpl_vars['brt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brt']->key => $_smarty_tpl->tpl_vars['brt']->value) {
$_smarty_tpl->tpl_vars['brt']->_loop = true;
?>
                                    <div class="col-md-6 bottommargin">
                                        <div class="mpost clearfix">
                                            <div class="entry-image">
                                                <a href="#"><img src="http://<?php echo $_smarty_tpl->tpl_vars['brt']->value['alamat_website'];?>
/doc/berita/<?php echo $_smarty_tpl->tpl_vars['brt']->value['id_berita'];?>
/<?php echo $_smarty_tpl->tpl_vars['brt']->value['gambar'];?>
" alt="Blog Single"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="<?php echo $_smarty_tpl->tpl_vars['url_detail_berita']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['brt']->value['id_berita'];?>
"><?php echo $_smarty_tpl->tpl_vars['brt']->value['judul'];?>
</a></h4>
                                                </div>
                                                <ul class="entry-meta clearfix">
                                                    <li><i class="icon-calendar3"></i> <?php echo $_smarty_tpl->tpl_vars['brt']->value['tanggal'];?>
</li>
                                                </ul>
                                                <div class="entry-content"><?php echo $_smarty_tpl->tpl_vars['brt']->value['intro'];?>
</div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php }?>

                                </div>
                            </div>

                                <div class="clear"></div>
                               
                        </div>

                    </div><!-- .postcontent end -->
<?php }} ?>
