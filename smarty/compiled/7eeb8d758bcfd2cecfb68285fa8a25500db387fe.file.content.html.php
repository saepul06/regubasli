<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 10:28:06
         compiled from "application\views\web\login\content.html" */ ?>
<?php /*%%SmartyHeaderCode:990158032033908ae7-69174252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eeb8d758bcfd2cecfb68285fa8a25500db387fe' => 
    array (
      0 => 'application\\views\\web\\login\\content.html',
      1 => 1476865680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '990158032033908ae7-69174252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_580320339184e4_53227867',
  'variables' => 
  array (
    'url_login_process' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580320339184e4_53227867')) {function content_580320339184e4_53227867($_smarty_tpl) {?>				<div class="container clearfix">

					<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

                        <div class="tab-container">

                            <div class="tab-content clearfix" id="tab-login">
                                <div class="panel panel-default nobottommargin">
                                	<div class="panel-body" style="padding: 40px;">
                                		<form id="login-form" name="login-form" class="nobottommargin" action="<?php echo $_smarty_tpl->tpl_vars['url_login_process']->value;?>
" method="post">

			                                <h3>Form Login.</h3>

			                                <div class="col_full">
			                                    <label for="login-form-username">Username:</label>
			                                    <input type="text" id="login-form-username" name="userid" value="" class="form-control" />
			                                </div>

			                                <div class="col_full">
			                                    <label for="login-form-password">Password:</label>
			                                    <input type="password" id="login-form-password" name="password" value="" class="form-control" />
			                                </div>

			                                <div class="col_full nobottommargin">
			                                    <button type="submit" class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
			                                    
			                                </div>

			                            </form>
                                	</div>
                                </div>
                                
              <?php if ($_smarty_tpl->tpl_vars['message']->value!='') {?>
              <div class="b-form-row">
              <div class="b-form-row">
                    <div class="b-alert-warning f-alert-warning">
                      <div class="b-right">
                        <i class="fa fa-times-circle-o"></i>
                      </div>
                      <div class="b-remaining">
                        <i class="fa fa-exclamation-triangle"></i><?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                      </div>
                    </div>
              
              </div>
              </div>
              <?php }?>
                            </div>

                        </div>

                    </div>

				</div>
<?php }} ?>
