<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 05:56:25
         compiled from "application\views\web\home\content.html" */ ?>
<?php /*%%SmartyHeaderCode:202465802fa19103f11-69857447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7df63b2d972c8a947d0f54967fb70bb80d6f0f' => 
    array (
      0 => 'application\\views\\web\\home\\content.html',
      1 => 1477713383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202465802fa19103f11-69857447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5802fa19190934_71676942',
  'variables' => 
  array (
    'informasi_list' => 0,
    'rs' => 0,
    'berita_list' => 0,
    'album_list' => 0,
    'foto_list' => 0,
    'rs_album' => 0,
    'video_list' => 0,
    'datasosmed' => 0,
    'BASEURL' => 0,
    'informasi_list_side' => 0,
    'berita_list_side' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802fa19190934_71676942')) {function content_5802fa19190934_71676942($_smarty_tpl) {?>

                <div class="container clearfix">

                    <div class="row">

                        <div class="col-md-8 bottommargin">

                            <div class="col_full bottommargin-lg">
                                <div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
                                    <div class="flexslider">
                                        <div class="slider-wrap" >
                                         <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informasi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                            <div class="slide" data-thumb="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" >

                                                <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" width="640px" height="360px" alt="">
                                                    <div class="overlay">
                                                        <div class="text-overlay">
                                                            <div class="text-overlay-title">
                                                                <h3><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</h3>
                                                            </div>
                                                            <div class="text-overlay-meta">
                                                                <span><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php } ?>
                                             
                                              
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                            <div class="col_full nobottommargin clearfix">

                                <div class="fancy-title title-border">
                                    <h3>|BERITA RELAWAN GREEN JAKARTA</h3>
                                </div>
                            

                            <div id="berita" class="owl-carousel portfolio-carousel">
                            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                <div class="oc-item">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" width="400px" height="300px" alt="Image Berita">
                                            </a>
                                           
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h3>
                                            <span><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            </div><!-- .berita-carousel end -->

                   
                                <div class="clear"></div>

                                

                            </div>
                            <div class="fancy-title title-border">
                                <h3>FOTO</h3>
                            </div>

                          
                            <div id="foto" class="owl-carousel portfolio-carousel">
                            <?php if ($_smarty_tpl->tpl_vars['album_list']->value!='') {?>
                                <?php  $_smarty_tpl->tpl_vars['rs_album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs_album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs_album']->key => $_smarty_tpl->tpl_vars['rs_album']->value) {
$_smarty_tpl->tpl_vars['rs_album']->_loop = true;
?>
                       <article class="portfolio-item pf-graphics pf-illustrations">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                        <?php if ($_smarty_tpl->tpl_vars['foto_list']->value!='') {?>
                                            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foto_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['rs']->value['id_album']==$_smarty_tpl->tpl_vars['rs_album']->value['id_album']) {?>
                                            <div class="slide"><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['foto'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['foto'];?>
" alt="Shake It"></a></div>
                                            <?php }?>
                                            <?php } ?>
                                        <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                 <?php if ($_smarty_tpl->tpl_vars['foto_list']->value!='') {?>
                                <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foto_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                  <?php if ($_smarty_tpl->tpl_vars['rs']->value['id_album']==$_smarty_tpl->tpl_vars['rs_album']->value['id_album']) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['foto'];?>
" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <?php }?>
                                 <?php } ?>
                                 <?php }?>
                                </div>
                            </div>
                          <div class="portfolio-desc">
                                <h3><?php echo $_smarty_tpl->tpl_vars['rs_album']->value['nama_album'];?>
</h3>
                                <span>Published : <?php echo $_smarty_tpl->tpl_vars['rs_album']->value['tanggal'];?>
</span>
                            </div>
                        </article>
                        <?php } ?>
                        <?php }?>

                            </div><!-- .foto-carousel end -->


                            <!-- video -->

                         <div class="fancy-title title-border">
                                <h3>VIDEO</h3>
                            </div>

                          
                            <div id="video" class="owl-carousel portfolio-carousel">
                            <?php if ($_smarty_tpl->tpl_vars['video_list']->value!='') {?>
                                <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                <article class="portfolio-item pf-graphics pf-uielements">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['video_image'];?>
" alt="Mac Sunglasses">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_play'];?>
" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                           
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_video'];?>
</h3>
                                    </div>
                                </article>
                                <?php } ?>
                                <?php }?>

                            </div><!-- .foto-carousel end -->

                          
                        </div>



                        <div class="col-md-4">

                            <div class="line hidden-lg hidden-md"></div>

                            <div class="sidebar-widgets-wrap clearfix">

                                <div class="widget clearfix">
                                   <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <div class="col_one_third nobottommargin">

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
" class="social-icon si-dark  nobottommargin" style="margin-right: 10px;">
                                            <i class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"></i>
                                            <i class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"></i>
                                        </a>
                                        <small style="display: block; margin-top: 3px;"><strong><div class="counter counter-inherit"><span data-from="1000" data-to="<?php echo $_smarty_tpl->tpl_vars['rs']->value['pengikut'];?>
" data-refresh-interval="100" data-speed="3000" data-comma="true"></span></div></strong>Pengikut</small>
                                    </div>
                                    <?php } ?>

                                    
                                </div>

                                  <div class="widget clearfix">
                                    <img class="aligncenter" src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/home/stiker.png" alt="" width="70%" height="70%">
                                </div>
                                <!-- twiiter -->
                              <div class="widget clearfix">
                                    <a class="twitter-timeline" data-lang="id" data-width="450" data-height="370" data-theme="light" href="https://twitter.com/RelawanGreenJkt">Tweets by RelawanGreenJkt</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                                </div>
                                <!-- facebook -->
                                <div class="widget clearfix">
                                <div class="fb-page" data-href="https://www.facebook.com/RelawanRahmatSumut/" data-tabs="timeline" data-width="450" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/RelawanRahmatSumut/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RelawanRahmatSumut/">Relawan Green Jakarta</a></blockquote></div>
                                </div>

                            <div class="widget clearfix">

                                    <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                        <ul class="tab-nav clearfix">
                                            <li><a href="#tabs-1">Berita Cagub-Cawagub</a></li>
                                            <li><a href="#tabs-2">Berita Relawan</a></li>
                                            
                                        </ul>

                                        <div class="tab-container">

                                            <div class="tab-content clearfix" id="tabs-1">
                                                <div id="popular-post-list-sidebar">

                                                     <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informasi_list_side']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="nobg"><img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt=""></a>
                                                        </div>
                                                        <div class="entry-c">
                                                            <div class="entry-title">
                                                                <h4><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h4>
                                                            </div>
                                                            <ul class="entry-meta">
                                                                <li><i class="icon-calendar3"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                   
                                                </div>
                                            </div>
                                            <div class="tab-content clearfix" id="tabs-2">
                                                <div id="recent-post-list-sidebar">

                                                   <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list_side']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="nobg"><img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt=""></a>
                                                        </div>
                                                        <div class="entry-c">
                                                            <div class="entry-title">
                                                                <h4><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h4>
                                                            </div>
                                                            <ul class="entry-meta">
                                                                <li><i class="icon-calendar3"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                           
                                        </div>

                                    </div>

                                </div>
                        </div><!-- end berita -->
                        <div class="line"></div>
                         <div class="col-md-6">
                        <!-- Histats.com  START (html only)-->
                            <a href="/" alt="page hit counter" target="_blank" >
                            <embed src="http://s10.histats.com/30.swf"  flashvars="jver=1&acsid=3626944&domi=4"  quality="high"  width="130" height="80" name="30.swf"  align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" /></a>
                            <img  src="//sstatic1.histats.com/0.gif?3626944&101" alt="free page hit counter" border="0">
                        <!-- Histats.com  END  -->
                       </div>
                       
                    </div>

                </div>
</div>

<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=146631999110903";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php }} ?>
