<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 12:02:13
         compiled from "application\views\private\administrator\detail_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:3247857ea43a5e1fac0-56539853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '137611ed4e4e07e6ead6f655df93ae4690e2e9c5' => 
    array (
      0 => 'application\\views\\private\\administrator\\detail_admin.html',
      1 => 1474198116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3247857ea43a5e1fac0-56539853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'rs' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea43a5e4aa42_40075497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea43a5e4aa42_40075497')) {function content_57ea43a5e4aa42_40075497($_smarty_tpl) {?>
 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
 <div class="container" id="modal-detail-admin<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_user'];?>
" style="display:none;" >

      <div class="row">

    

        <div class="col-xs-12  toppad" >

   

   

          <div class="panel panel-info">

            <div class="panel-heading">

              <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['rs']->value['admin_name'];?>
</h3>

            </div>

            <div class="panel-body">

              <div class="row">

                <div class="col-md-3 col-lg-3 " align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/admin/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_user'];?>
/<?php echo $_smarty_tpl->tpl_vars['rs']->value['photo'];?>
" height="100" class="img-circle img-responsive"> </div>

                

               

                <div class=" col-md-9 col-lg-9 "> 

                  <table class="table table-user-information">

                    <tbody>
                      <tr>

                        <td>Hak Akses</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['deskripsi'];?>
</td>

                      </tr>
                      <tr>

                        <td>Jabatan</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['jabatan'];?>
</td>

                      </tr>

                      <tr>

                        <td>Organisasi</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_asosiasi'];?>
</td>

                      </tr>

                    

                      

                      <tr>

                        <td>Email</td>

                        <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['rs']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['user_mail'];?>
</a></td>

                      </tr>

                       

                  
                       <tr>

                        <td>Telepon</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['no_telp'];?>
</td>

                      </tr>

                    


      
                        

                     

                    </tbody>

                  </table>

                  

                

                </div>

              </div>

            </div>

                 

            

          </div>

        </div>

      </div>

    </div>



<div id="modal-detail-admin-footer" style="display:none;">

  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</div>

<?php } ?>

<?php }} ?>
