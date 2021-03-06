<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 23:23:04
         compiled from "application/views/private/sponsor/edit_iklan.html" */ ?>
<?php /*%%SmartyHeaderCode:207630943057edda989d5963-15467858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '098ed5fa270f68980698684012bc9c1fe3a843a5' => 
    array (
      0 => 'application/views/private/sponsor/edit_iklan.html',
      1 => 1474708038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207630943057edda989d5963-15467858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor' => 0,
    'url_private' => 0,
    'url_list' => 0,
    'url_list_iklan' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'image_iklan_indo' => 0,
    'image_iklan_eng' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57edda99343107_57953088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57edda99343107_57953088')) {function content_57edda99343107_57953088($_smarty_tpl) {?><section class="content-header">
  <h1>
    Iklan dari <b><?php echo $_smarty_tpl->tpl_vars['sponsor']->value['nama_sponsor'];?>
</b>
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">
        <i class="fa fa-home">
        </i> Home
      </a>
    </li>
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">
        <i class="fa ">
        </i>Data Sponsor
      </a>
    </li>
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list_iklan']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sponsor']->value['id_sponsor'];?>
">
        <i class="fa ">
        </i>List Iklan
      </a>
    </li>
    <li class="active">Tambah Iklan
    </li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- notification template -->
    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>
    <div class="col-md-12">
      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>
      <div class="alert alert-danger alert-dismissable">
        <i class="fa fa-ban">
        </i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>
        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.
      </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>
      <div class="alert alert-success alert-dismissable">
        <i class="fa fa-check">
        </i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>
        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.
      </div>
      <?php }?>
    </div>
    <?php }?>
    <div class="col-md-9">
      <!-- form update email-->
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Tambah Iklan
          </h3>
          <div class="box-body">
            <div class="btn-group pull-right">
              <a href="<?php echo $_smarty_tpl->tpl_vars['url_list_iklan']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sponsor']->value['id_sponsor'];?>
" title="List Foto" class="btn bg-olive btn-flat">
                <i class='fa fa-list'>
                </i> List Iklan
              </a>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <input type="hidden" name="id_sponsor" value="<?php echo $_smarty_tpl->tpl_vars['sponsor']->value['id_sponsor'];?>
">
            <input type="hidden" name="id_iklan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_iklan'];?>
">
            <div class="form-group">
              <label for="user_name_la">Judul *
              </label>
              <input type="text" name="judul" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
" size="100"  maxlength="255" />
            </div>
            <div class="form-group">
              <label for="user_name_la">Judul (
                <i>English
                </i>) *
              </label>
              <input type="text" name="judul_english" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul_english'];?>
" size="100" maxlength="255" />
            </div>
            <div class="form-group">
              <label for="user_name_la">Status
              </label>
              <select name="status" class="form-control" style="width:20%;">
                <option value="aktif"<?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='aktif') {?>selected="selected"<?php }?>>Aktif</option>
                <option value="nonaktif" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='nonaktif') {?>selected="selected"<?php }?>>Tidak Aktif</option>
              </select>
            </div>
              <br/>
              <div class="form-group">
                <label for="user_name_lama">Iklan Indonesia
                </label> 
                <span>
                  <input type="file" accept="image/*"  onchange="showMyImage(this)"
                         style="visibility:hidden; width: 1px;" 
                         name='iklan'  
                         onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> 
                  <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/> 
                  &nbsp;
                  <span  class="badge badge-important" >
                  </span>
                </span>
              </div>
              <img id="thumbnil" style="width:50%; margin-top:10px;"/>
              <div style="text-align:center;width:50%; margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['image_iklan_indo']->value;?>

              </div>
              <div class="form-group">
                <label for="user_name_lama">Iklan English
                </label> 
                <span>
                  <input type="file" accept="image/*" onchange="loadFile(event)" 
                         style="visibility:hidden; width: 1px;" 
                         name='iklan_english'  
                         onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> 
                  <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/> 
                  &nbsp;
                  <span  class="badge badge-important" >
                  </span>
                </span>
              </div>
              <img id="output" style="width:50%; margin-top:10px;"/>
              <div style="text-align:center;width:50%; margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['image_iklan_eng']->value;?>

            <!-- box tabel-->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-upload">
              </i>  Upload
            </button>
            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">
              <i class="fa fa-close">
              </i>  Batal
            </a>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<script type="text/javascript">
 //image indo
    function showMyImage(fileInput) {
      var files = fileInput.files;
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var imageType = /image.*/;
        if (!file.type.match(imageType)) {
          continue;
        }
        var img=document.getElementById("thumbnil");
        img.file = file;
        var reader = new FileReader();
        reader.onload = (function(aImg) {
          return function(e) {
            aImg.src = e.target.result;
          };
        }
                        )(img);
        reader.readAsDataURL(file);
      }
    }
    //image english
    var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

<?php }} ?>
