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
<?php if ($_valid && !is_callable('content_57ebe9b6badf10_98759020')) {function content_57ebe9b6badf10_98759020($_smarty_tpl) {?><section class="content-header">  <h1>    Profil Instansi    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li class="active">Profil Instansi    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-12">      <div class="box">        <div class="box-header">          <h3 class="box-title">Data Profil Instansi          </h3>          <div class="box-tools">            <div class="btn-group pull-right">              <a href="<?php echo $_smarty_tpl->tpl_vars['url_add']->value;?>
" title="Tambah Data" class="btn bg-olive btn-flat">                <i class='fa fa-plus'>                </i> Tambah Data              </a>            </div>          </div>        </div>        <!-- /.box-header -->        <div class="box-body table-responsive">          <table id="table_datagrid" class="table table-bordered table-striped">            <thead>              <tr>                <th width="15%" align="center">No Urutan                </th>                <th width="30%">Judul                </th>                <th width="30%">Jabatan                </th>                <th>                </th>              </tr>            </thead>            <tbody>              <?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>              <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>              <tr>                <td align="center"><?php echo $_smarty_tpl->tpl_vars['result']->value['order_num'];?>
.                </td>                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['nama'];?>
                                  </td>                 <td><?php echo $_smarty_tpl->tpl_vars['result']->value['jabatan'];?>
                                  </td>                <td align="center">                  <div class="btn-group">                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_edit']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
" title="Edit" class="btn btn-success btn-flat">                      <i class='fa fa-pencil'>                      </i>                    </a>&nbsp;                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_delete']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
" onclick="return konfirmasi_delete();">                      <i class='fa fa-trash'>                      </i>                    </a>                     <a href="javascript:void(0);" onClick="open_modal('Detail Profil',$('#modal-detail-profil<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
').html(),$('#modal-detail-asosiasi-footer').html(),'medium');" title="Lihat Detail" class="btn btn-info btn-flat"><i class='fa fa-eye'></i></a>                  </div>                 </td>              </tr>              <?php } ?>              <?php }?>            </tbody>          </table>        </div>        <!-- /.box-body -->      </div>      <!-- /.box -->    </div>  </div>  <!-- /.row -->  <?php echo $_smarty_tpl->getSubTemplate ("private/profil/detail_profil.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">                  <div class="modal-dialog">                    <div class="modal-content">                      <div class="modal-header">                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>                        <h4 class="modal-title" id="myModalLabel"></h4>                      </div>                      <div class="modal-body" id="modal-bodyku">                      </div>                      <div class="modal-footer" id="modal-footerq">                      </div>                    </div>                  </div>                </div>                <!-- end of modal ------------------------------></section><!-- /.content --><?php }} ?>
