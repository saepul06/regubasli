<?php /* Smarty version Smarty-3.1.17, created on 2016-10-16 05:55:04
         compiled from "application\views\web\base-layout\document-home.html" */ ?>
<?php /*%%SmartyHeaderCode:2193457ea3c05dfabe0-35747611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e584dfc9ac799c50e1e10ed2bda24d2f8c38762' => 
    array (
      0 => 'application\\views\\web\\base-layout\\document-home.html',
      1 => 1476428255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2193457ea3c05dfabe0-35747611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3c05e73d87_81118274',
  'variables' => 
  array (
    'LOADJS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3c05e73d87_81118274')) {function content_57ea3c05e73d87_81118274($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="stretched">
    
    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">
                
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                
            </div>

        </section><!-- #content end -->

        <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- javascript loaded -->
    <?php echo $_smarty_tpl->tpl_vars['LOADJS']->value;?>

    <!-- end of loaded javascript -->

</body>
</html>
<?php }} ?>
