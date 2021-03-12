<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

</head>

<body>

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

    <div class="container text-center">
        <?php foreach ($data as $nilai) : ?>
            <div class="row">
                <div class="col-sm-3 well">
                    <div class="well">
                        <h4>
                            <p><?= $nilai['judul'] ?></p>
                        </h4>
                        <img width="90%" height="95%" src="<?php base_url() ?>/img/thumbnail/<?php echo $nilai['thumbnail'] ?>" alt="<?php echo $nilai['thumbnail'] ?>">
                    </div>
                    <div class="well">
                        <p><a href="#">Info</a></p>
                        <p>
                            <?php foreach ($matkul as $kunci) :
                                if ($nilai['id_matkul'] == $kunci['id']) { ?>
                                    <span class="label label-primary"><?= $kunci['id'] ?></span>
                                    <span class="label label-danger"><?= $kunci['matkul_nama'] ?></span>
                                <?php   }
                                ?>

                            <?php endforeach ?>
                        </p>
                    </div>
                    <div class="alert alert-success fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p><strong>Ey!</strong></p>
                        People are looking at your profile. Find out who.
                    </div>
                    <p><a href="#">Link</a></p>
                    <p><a href="#">Link</a></p>
                    <p><a href="#">Link</a></p>
                </div>
                <div class="col-sm-7">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default text-left">
                                <div class="panel-body">
                                    <p contenteditable="true">Content</p>

                                    <h5><span class="glyphicon glyphicon-user"></span> Post by <?= $nilai['postby'] ?></h5>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="well">
                                <p><?php echo $nilai['content'] ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <style>
                    .conta {
                        padding: 2px 16px;
                    }

                    body {
                        font-family: Arial, Helvetica, sans-serif;
                    }

                    .flip-card {
                        background-color: transparent;
                        width: 100%;
                        height: 100%;
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
                <div class="col-sm-2 well">
                    <div class="thumbnail">
                        <p>Post At:</p>
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h1 style="font-size:80px"><?php echo date("d", strtotime($nilai['created_at']) + (60 * 60 * 13)); ?></h1>
                                    <h4><?php echo date("M Y", strtotime($nilai['created_at']) + (60 * 60 * 13)); ?></h4>
                                    <div class="conta">
                                        <p style="background-color:#e4b6cf"><?php echo date("H:i", strtotime($nilai['created_at']) + (60 * 60 * 13)) . ' WIB'; ?></p>
                                    </div>
                                </div>
                                <div class="flip-card-back"><br><br><br><br>
                                    <h5 style="background-color: #4adbcf"><?= $nilai['startdate'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sampai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $nilai['enddate'] ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="well" style="border:none">

                    </div>
                    <div class="well" style="border:none">

                    </div>
                    <div class="well" style="border:none">

                    </div>
                </div>
            </div>
        <?php endforeach ?>
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

</body>

</html>