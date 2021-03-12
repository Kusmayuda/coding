<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>View Post</title>

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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/toast/jquery.toast.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css" integrity="sha512-C7hOmCgGzihKXzyPU/z4nv97W0d9bv4ALuuEbSf6hm93myico9qa0hv4dODThvCsqQUmKmLcJmlpRmCaApr83g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js" integrity="sha512-hZf9Qhp3rlDJBvAKvmiG+goaaKRZA6LKUO35oK6EsM0/kjPK32Yw7URqrq3Q+Nvbbt8Usss+IekL7CRn83dYmw==" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i>View Contents</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="<?php echo base_url() ?>">Home</a></li>
                            <li><i class="icon_document_alt"></i>Tasks</li>
                            <li><i class="fa fa-file-text-o"></i>View</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                View Contents
                            </header>
                            <?php if (session()->getFlashdata('msg')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('msg'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="panel-body">
                                <?php
                                $db = \Config\Database::connect();
                                $query   = $db->query("SELECT * from post order by id");
                                $results = $query->getResultArray();
                                ?>
                                <button style="color:white;background-color:gray" data-toggle="modal" data-target="#ModalGrafik">Lihat Grafik</button>
                                <table id="example1" class="table table-striped" style="font-size:13px;">
                                    <thead>
                                        <tr>
                                            <th style="width:100px;">#</th>
                                            <th>Tugas</th>
                                            <th>Status</th>
                                            <th style="text-align:right;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $no = 0;
                                        foreach ($results as $nilai) :
                                            $no++;
                                            $id = $nilai['id'];
                                            $ind = '';
                                            $ind1 = '';
                                            if ($nilai['status'] == 1) {
                                                $status = '<button style="color:white;background-color:green" data-toggle="modal" data-target=#ModalOnOff' . $id . '>ON</button>';
                                                $ind = 'ON';
                                                $ind1 = 'OFF';
                                            } else {
                                                $status = '<button style="color:white;background-color:red" data-toggle="modal" data-target=#ModalOnOff' . $id . '>OFF</button>';
                                                $ind1 = 'ON';
                                                $ind = 'OFF';
                                            }
                                            $judul = $nilai['judul'];
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $judul; ?></td>
                                                <td><?php echo $status; ?></td>

                                                <td style="text-align:right;">
                                                    <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id; ?>"><span class="fa fa-pencil"></span></a>
                                                    <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>"><span class="fa fa-trash-o fa-lg"></span></a>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="ModalEdit<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Edit Tugas</h4>
                                                        </div>
                                                        <form class="form-horizontal" action="<?php base_url(); ?>/admin/post/editPost" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                                                                <p>Apakah Anda ingin mensunting Tugas? <b><?php echo $judul; ?></b> ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Hapus Tugas</h4>
                                                        </div>
                                                        <form class="form-horizontal" action="<?php base_url(); ?>/admin/post/hapusPost" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                                                                <p>Apakah Anda yakin mau menghapus Tugas <b><?php echo $judul; ?></b> ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="ModalOnOff<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Switch</h4>
                                                        </div>
                                                        <form class="form-horizontal" action="<?php base_url(); ?>/admin/post/ubahStatus" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                                                                <input type="hidden" name="status" value="<?php echo $ind1; ?>" />
                                                                <p>Apakah Anda yakin ingin mengubah Status <b><?= $ind ?></b> menjadi <b><?php echo $ind1; ?></b> ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Ubah</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>

                            </div>
                        </section>

                    </div>
                </div>
                <!-- Basic Forms & Horizontal Forms-->
                <div class="modal fade" id="ModalGrafik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <canvas id="myChart"></canvas>
                            <script>
                                var ctx = document.getElementById('myChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'pie', //line,pie,bar,horizontalBar
                                    data: {
                                        // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                        labels: [
                                            <?php
                                            if (count($nama_matkul) > 0) {
                                                for ($co = 0; $co < count($nama_matkul); $co++) {
                                                    echo "'" . $nama_matkul[$co] . "',";
                                                }
                                            }


                                            ?>
                                        ],
                                        datasets: [{
                                            label: '# of Votes',
                                            //data: [12, 19, 3, 5, 2, 3],
                                            data: [
                                                <?php
                                                if (count($jumlah_tugas) > 0) {
                                                    for ($co = 0; $co < count($jumlah_tugas); $co++) {
                                                        echo $jumlah_tugas[$co] . ",";
                                                    }
                                                }


                                                ?>
                                            ],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>

                        </div>
                    </div>
                </div>


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
    <script src="<?php base_url(); ?>/js/jquery.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <!-- container section end -->
    <!-- javascripts -->

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