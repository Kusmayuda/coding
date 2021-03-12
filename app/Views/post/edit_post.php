<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Edit Content</title>

  <!-- Bootstrap CSS -->
  <link href="<?php base_url(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php base_url(); ?>/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php base_url(); ?>/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php base_url(); ?>/css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?php base_url(); ?>/css/daterangepicker.css" rel="stylesheet" />
  <link href="<?php base_url(); ?>/css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="<?php base_url(); ?>/css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="<?php base_url(); ?>/css/style.css" rel="stylesheet">
  <link href="<?php base_url(); ?>/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>

  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?= $this->include('templates/header'); ?>
    <?= $this->include('templates/aside'); ?>


    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Edit Task Content</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Tasks</li>
              <li><i class="fa fa-file-text-o"></i>Post</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Edit Task Content
              </header>
              <?php if (session()->getFlashdata('gagal')) : ?>
                <div class="alert alert-danger" role="alert">
                  <?= session()->getFlashdata('gagal'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php endif; ?>
              <?php foreach ($edit as $key) { ?>


                <div class="panel-body">
                  <form class="form-horizontal " method="post" action="<?php base_url(); ?>/admin/post/editPost_content/<?= $key['id'] ?>" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul" maxlength="19" value="<?= $key['judul'] ?>">
                      </div>
                    </div>
                    <?php
                    $db = \Config\Database::connect();
                    $query   = $db->query("SELECT * from matkul order by id");
                    $results = $query->getResultArray();
                    ?>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Mata Kuliah</label>
                      <div class="col-sm-10">
                        <select id="matkul" name="matkul">
                          <?php foreach ($results as $option) {
                            if ($key['id_matkul'] == $option['id']) { ?>
                              <option value="<?= $key['id_matkul'] ?>"><?= $option['matkul_nama'] ?></option>
                          <?php   }
                          } ?>

                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="sampul">Thumbnail</label>
                      <div class="col-sm-10">
                        <div class="custom-file">
                          <input type="file" id="sampul" name="thumbnail" onchange=" previewImg()">
                          <label for="sampul" class="custom-file-label" for="sampul">Choose Photo</label>
                        </div>
                        <img src="<?= base_url('/'); ?>/img/thumbnail/<?= $key['thumbnail'] ?>" class="img-preview" style="width:20%;height:20%; display: block; margin-left: auto; margin-right: auto;">


                      </div>
                    </div>



                    <div class="form-group">
                      <label class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <input type="text" value="<?= $key['deskripsi'] ?>" class="form-control" name="deskripsi" maxlength="170">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2">Start Date</label>
                      <div class="col-sm-10">
                        <input name="startdate" id="dp1" type="text" value="<?= $key['startdate'] ?>" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2">End Date</label>
                      <div class="col-sm-10">
                        <input name="enddate" id="dp4" type="text" value="<?= $key['enddate'] ?>" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Post By</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="disabledInput" type="text" placeholder='<?= session()->get('username') ?>' value='<?= session()->get('username') ?>' disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea name="textarea"><?= $key['content'] ?></textarea>
                      <script src="<?php base_url(); ?>/ckeditor/ckeditor.js"></script>
                      <script>
                        CKEDITOR.replace('textarea', {
                          height: 300,
                          filebrowserUploadUrl: "/ckeditor/ajaxfile.php?type=file",
                          filebrowserImageUploadUrl: "/ckeditor/ajaxfile.php?type=image",
                        });
                      </script>

                    </div>
                    <input name="postby" class="form-control" id="disabledInput" type="hidden" value='<?= session()->get('username') ?>'>
                    <input name="thumbnails" class="form-control" id="disabledInput" type="hidden" value='<?= $key['thumbnail'] ?>'>
                    <button class="btn btn-primary" style="margin-right:4px">
                      Submit
                    </button>
                  </form>
                </div>
              <?php } ?>

            </section>

          </div>
        </div>
        <!-- Basic Forms & Horizontal Forms-->


        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
        Designed by IJK</a>
      </div>
    </div>
  </section>
  <script>
    function previewImg() {
      //console.log('tes');
      const sampul = document.querySelector('#sampul');
      const sampulLabel = document.querySelector('.custom-file-label');
      const imgPreview = document.querySelector('.img-preview');

      sampulLabel.textContent = sampul.files[0].name;

      const fileSampul = new FileReader();
      fileSampul.readAsDataURL(sampul.files[0]);

      fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
  </script>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="<?php base_url(); ?>/js/jquery.js"></script>
  <script src="<?php base_url(); ?>/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?php base_url(); ?>/js/jquery.scrollTo.min.js"></script>
  <script src="<?php base_url(); ?>/js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="<?php base_url(); ?>/js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="<?php base_url(); ?>/js/ga.js"></script>
  <!--custom switch-->
  <script src="<?php base_url(); ?>/js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="<?php base_url(); ?>/js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="<?php base_url(); ?>/js/jquery.hotkeys.js"></script>
  <script src="<?php base_url(); ?>/js/bootstrap-wysiwyg.js"></script>
  <script src="<?php base_url(); ?>/js/bootstrap-wysiwyg-custom.js"></script>
  <script src="<?php base_url(); ?>/js/moment.js"></script>
  <script src="<?php base_url(); ?>/js/bootstrap-colorpicker.js"></script>
  <script src="<?php base_url(); ?>/js/daterangepicker.js"></script>
  <script src="<?php base_url(); ?>/js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="<?php base_url(); ?>/assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="<?php base_url(); ?>/js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="<?php base_url(); ?>/js/scripts.js"></script>


</body>

</html>