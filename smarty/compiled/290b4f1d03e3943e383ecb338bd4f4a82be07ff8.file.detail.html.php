<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 00:03:26
         compiled from "application/views/web/beritaanggota/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:55998031357e9ef8e8b50b2-65497997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '290b4f1d03e3943e383ecb338bd4f4a82be07ff8' => 
    array (
      0 => 'application/views/web/beritaanggota/detail.html',
      1 => 1473324244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55998031357e9ef8e8b50b2-65497997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'act_lang' => 0,
    'berita_list' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ef8e980d06_45615603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ef8e980d06_45615603')) {function content_57e9ef8e980d06_45615603($_smarty_tpl) {?><div class="col-md-9">
  <!--start detail desc-->
  <div class="b-article-box">
    <div class="f-article_title f-primary-l b-title-b-hr">
      <?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>

    </div>
    <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b">
      <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>
      Category :
      <?php } else { ?>
      Kategori :
      <?php }?>
      <a href="#" class="f-more">Berita Anggota
      </a>
      Posted : <?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal'];?>

    </div>
    <div class="b-article__description">
      <?php if ($_smarty_tpl->tpl_vars['data']->value['image']!='') {?>
      <div class="col-md-6" style="float:left;margin:0 10px 10px 0;">
        <img data-retina src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" style="max-width:100%;margin:0 10px 10px 0;">
        <?php if ($_smarty_tpl->tpl_vars['data']->value['keterangan_gambar']!='') {?>
        <p>
        <h6>
          <i><?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan_gambar'];?>

          </i>
        </h6>
        </p><?php }?>
    </div>
    <?php }?>
    <p class="justify"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </p>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['data']->value['file_berita']!='') {?>
  <div class="b-article__social-info">
    <ul>
      <li>
        <div class="b-article__tag">
          <span class="b-article__social-info-name f-article__social-info-name">
            <i class="fa fa-download">
            </i> 
          </span>
          <a class="f-tag b-tag" href="<?php echo $_smarty_tpl->tpl_vars['data']->value['file_berita'];?>
">Download Lampiran
          </a>
        </div>
      </li>
    </ul>
  </div>
  <?php }?>
</div>

<div class="b-hr">
</div>
<script type="text/javascript">var switchTo5x=true;
</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js">
</script>
<script type="text/javascript">stLight.options({
    publisher: "a4abca36-32a8-4c45-9716-281f17242f3b", doNotHash: false, doNotCopy: false, hashAddressBar: false}
                                              );
</script>

<h5>
  <b>Bagikan
  </b>
</h5>
<br/>
<span class='st_sharethis_large' displayText='ShareThis'>
</span>
<span class='st_facebook_large' displayText='Facebook'>
</span>
<span class='st_twitter_large' displayText='Tweet'>
</span>
<span class='st_linkedin_large' displayText='LinkedIn'>
</span>
<span class='st_pinterest_large' displayText='Pinterest'>
</span>
<span class='st_email_large' displayText='Email'>
</span>
<!--end detail -->
<div class="b-hr">
</div>
<h4>
  <b>RELATED POST
  </b>
</h4>
<div class="b-hr">
</div>
<div class="container">
  <div class="row j-masonry b-col-default-indent">
    <div class="masonry-gridSizer col-xs-12 col-sm-6 col-md-3">
    </div>
    <?php if ($_smarty_tpl->tpl_vars['berita_list']->value!='') {?>
    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
    <div class="j-masonry-item col-xs-12 col-sm-6 col-md-3">
      <div class="b-blog-preview">
        <div class="b-blog-preview__img view view-sixth">
          <img data-retina="" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
"  alt="">
          <div class="b-item-hover-action f-center mask">
            <div class="b-item-hover-action__inner">
              <div class="b-item-hover-action__inner-btn_group">
                <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="b-btn f-btn b-btn-light f-btn-light info">
                  <i class="fa fa-link">
                  </i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="b-blog-preview__content b-diagonal-line-bg-light">
          <div class="b-blog-preview__content-padding_box">
            <p class="f-primary-b f-more">
            <h6>Berita Anggota
            </h6>
            </p>
          <br/>
          <p class="f-blog-preview__content-title f-primary-b">
            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>

            </a>
          </p>
          <p class="f-blog-preview__content-date f-primary-it"><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>

          </p>
        </div>
        <div class="b-footer-mini b-alternative-bg">
          <a class="f-footer-mini__link f-more f-primary-b" href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">
            <i class="fa fa-angle-double-right">
            </i> Selengkapnya
          </a>
        </div>
      </div>
    </div>
    <!--b blog preview-->
  </div>
  <!--j-masonry-item-->
  <?php } ?>
  <?php }?>
</div>
<!--row j-masonry-->
</div>
<!--container-->
</div>
<!--end col 9-->
<?php }} ?>
