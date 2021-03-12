<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pengumuman</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Favicons -->
    <link href="<?php base_url(); ?>/img/favicon.png" rel="icon">
    <link href="<?php base_url(); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php base_url(); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php base_url(); ?>/lib/icomoon/icomoon.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php base_url(); ?>/css/style1.css" rel="stylesheet">
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
            height: 1500px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
    <style>
        .conta {
            padding: 2px 16px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .flip-card {
            background-color: transparent;
            width: 180px;
            height: 180px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #e4cccb;
            color: black;
        }

        .flip-card-back {
            background-color: #2980b9;
            color: white;
            transform: rotateY(180deg);
        }
    </style>
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">
    <div id="navbar-main">
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
                    </button>
                    <a class="navbar-brand hidden-xs hidden-sm smoothscroll" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div><br><br><br>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2">

            </div>

            <div class="col-sm-8">
                <div class="row">
                    <?php foreach ($data as $row) : ?>
                        <div class="col-md-3"><br>
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <h1 style="font-size:80px"><?php echo date("d", strtotime($row['created_at']) + (60 * 60 * 13)); ?></h1>
                                        <h4><?php echo date("M Y", strtotime($row['created_at']) + (60 * 60 * 13)); ?></h4>
                                        <div class="conta">
                                            <p style="background-color:#e4b6cf"><?php echo date("H:i", strtotime($row['created_at']) + (60 * 60 * 13)) . ' WIB'; ?></p>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <h1 style="color:white">Date</h1>
                                        <h1 style="background-color: #4adbcf"><?= $row['startdate'] ?></h1>
                                        <h1 style="background-color: #fe4671"><?= $row['enddate'] ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">

                            <a href="<?php base_url(); ?>/home/singlePost/<?= $row['id'] ?>" target="_blank">
                                <h2><?= $row['judul'] ?></h2>
                            </a>
                            <h5><span class="glyphicon glyphicon-user"></span> Post by <?= $row['postby'] ?></h5>
                            <?php foreach ($matkul as $kunci) :

                                if ($kunci['id'] == $row['id_matkul']) {
                                    $nama = $kunci['matkul_nama'];
                                    $kode = $kunci['id']; ?>
                                    <h5><span class="label label-danger"><?= $kode ?></span> <span class="label label-primary"><?= $nama ?></span></h5><br>
                                <?php   }

                                ?>
                            <?php endforeach ?>
                            <p><?= $row['deskripsi'] ?></p>

                            <br><br>
                        </div>

                    <?php endforeach ?>

                </div>
            </div>
            <div class="col-sm-2">

            </div>
        </div>
    </div>


    <div id="copyrights">
        <div class="container">

            <div class="credits">
                <!--
        You are NOT allowed to delete the credit link to TemplateMag with free version.
        You can delete the credit link only if you bought the pro version.
        Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/shield-bootstrap-agency-template/
        Licensing information: https://templatemag.com/license/
      -->
                Don't Forget to Complete your Task!!
            </div>
        </div>
    </div>
    <!-- JavaScript Libraries -->
    <!-- JavaScript Libraries -->
    <script src="<?php base_url(); ?>/lib/jquery/jquery.min.js"></script>
    <script src="<?php base_url(); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php base_url(); ?>/lib/php-mail-form/validate.js"></script>
    <script src="<?php base_url(); ?>/lib/easing/easing.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php base_url(); ?>/js/main.js"></script>
</body>

</html>