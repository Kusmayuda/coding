<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jadwaler</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <link href="<?php echo base_url() ?>/theme/css/style.css" rel="stylesheet">
    <link href="<?php base_url(); ?>/css/style1.css" rel="stylesheet">

    <!-- =======================================================
 pengumuman
  ======================================================= -->

    <!-- Bootstrap CSS -->
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <!-- Simple Line Font -->
    <!-- Main CSS -->
</head>
<style>
    .flip-card {
        background-color: transparent;
        width: 300px;
        height: 128px;
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
        background-color: #bbb;
        color: black;
    }



    .flip-card-back {
        background-color: green;
        color: white;
        transform: rotateY(180deg);
    }
</style>

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
                        <li><a href="<?php echo base_url() ?>" class="smoothscroll">Home</a></li>

                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <section class="events">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="event-title">Pengumuman</h2>
                </div>
                <div class="col-md-8">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item nav-tab1">
                            <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Pengumuman Terbaru </a>
                        </li>

                    </ul>
                </div>
            </div>
            <br>

            <div class="row">
                <!-- Tab panes -->
                <div class="col-md-2">

                    <div class="tab-content">

                        <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                            <?php foreach ($data as $row) : ?>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="flip-card">
                                                <div class="flip-card-inner">
                                                    <div class="flip-card-front">
                                                        <div class="event-date">
                                                            <h4><?php echo date("d", strtotime($row['created_at']) + (60 * 60 * 13)); ?></h4> <span><?php echo date("M Y", strtotime($row['created_at']) + (60 * 60 * 13)); ?></span>
                                                        </div>
                                                        <span class="event-time"><?php echo date("H:i", strtotime($row['created_at']) + (60 * 60 * 13)) . ' WIB'; ?></span>
                                                    </div>
                                                    <div class="flip-card-back">
                                                        <h1><?= $row['startdate'] ?></h1>
                                                        <h1 style="background-color: red"><?= $row['enddate'] ?></h1>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="event-heading">
                                                <h3><?php echo $row['judul']; ?></h3>
                                                <p><?php echo $row['deskripsi'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="event-underline">

                                </div>
                            <?php endforeach; ?>

                            <div class="col-md-12 text-center">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->
    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url() ?>/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/lib/php-mail-form/validate.js"></script>
    <script src="<?php echo base_url() ?>/lib/easing/easing.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url() ?>/js/main.js"></script>

    <script src="<?php echo base_url() ?>/theme/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/theme/js/tether.min.js"></script>
    <script src="<?php echo base_url() ?>/theme/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() ?>/theme/js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>/theme/js/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>/theme/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>/theme/js/validate.js"></script>
    <script src="<?php echo base_url() ?>/theme/js/tweetie.min.js"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() ?>/theme/js/subscribe.js"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() ?>/theme/js/script.js"></script>
</body>

</html>