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
  <link href="<?php base_url(); ?>/css/style1.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
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
            <li><a href="#home" class="smoothscroll">Home</a></li>
            <li> <a href="#task" class="smoothscroll"> Task</a></li>
            <li> <a href="#blog" class="smoothscroll"> Blog</a></li>
            <li> <a href="#contact" class="smoothscroll"> Contact</a></li>
            <li> <a href="<?php echo base_url(); ?>/admin/dashboard"> Admin</a></li>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <!-- ==== HEADERWRAP ==== -->
  <div id="home"></div>
  <div id="headerwrap" name="home">
    <header class="clearfix">
      <h1><span class="icon icon-shield"></span></h1>
      <p>Jadwaler</p>
      <p>Kuliah CUI</p>
    </header>
  </div>
  <!-- /headerwrap -->

  <!-- ==== GREYWRAP ==== -->
  <div id="greywrap">
    <div class="row">
      <div class="col-lg-4 callout">
        <span class="icon icon-stack"></span>
        <h2>Tugas</h2>
        <p>yang wajib dikerjakan atau yang ditentukan untuk dilakukan; pekerjaan yang menjadi tanggung jawab seseorang; pekerjaan yang dibebankan. </p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4 callout">
        <span class="icon icon-eye"></span>
        <h2>Pantau Jadwal</h2>
        <p>Pantau terus tanggung jawab yang harus kamu kerjakan. </p>
      </div>
      <!-- col-lg-4 -->

      <div class="col-lg-4 callout">
        <span class="icon icon-heart"></span>
        <h2>Cintai Pekerjaanmu</h2>
        <p>Jangan berpikir bahwa anda salah jurusan setelah kuliah 6 semester. </p>
      </div>
      <!-- col-lg-4 -->
    </div>
    <!-- row -->
  </div>
  <!-- greywrap -->





  <!-- ==== SECTION DIVIDER3 -->
  <section class="section-divider textdivider divider3">
    <div class="container">
      <h1>Capek Nak Nugas!!</h1>
      <hr>
      <p>Tugas bejibun nak ngeluh pun susah, pikir-pikir pun nugas buat nambah pengetahuan ugakkan cuk.</p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <!-- ==== PORTFOLIO ==== -->
  <div class="container" id="task" name="task">
    <br>
    <div class="row">
      <br>
      <a href="<?php base_url(); ?>/home/pengumuman">
        <h1 class="centered">OUR TASKS</h1>
      </a>
      <hr>
      <br>
      <br>
    </div>
    <!-- /row -->
    <div class="container">
      <div class="row">

        <?php foreach ($data as $nilai) : ?>
          <!-- PORTFOLIO IMAGE 1 -->
          <div class="col-md-4 ">
            <div class="grid mask">
              <figure>
                <img width="200px" height="250px" src="img/thumbnail/<?php echo $nilai['thumbnail'] ?>" alt="">
                <figcaption>
                  <h5><?php echo $nilai['judul'] ?></h5>
                  <a data-toggle="modal" href="#myModal<?php echo $nilai['id'] ?>" class="btn btn-primary btn-lg">Take a Look</a>
                </figcaption>
                <!-- /figcaption -->
              </figure>
              <!-- /figure -->
            </div>
            <!-- /grid-mask -->
          </div>
          <!-- /col -->


          <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->

          <div class="modal fade" id="myModal<?php echo $nilai['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title"><?php echo $nilai['judul'] ?></h4>
                </div>
                <div class="modal-body">
                  <p><img class="img-responsive" src="img/thumbnail/<?php echo $nilai['thumbnail'] ?>" alt=""></p>
                  <p><?php echo $nilai['deskripsi'] ?></p>
                  <p><b><a target="_blank" href="<?php base_url() ?>/home/singlePost/<?= $nilai['id'] ?>">View More</a></b></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        <?php endforeach ?>

        <!-- /row -->
        <br>
        <br>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->

    <!-- ==== SECTION DIVIDER4 ==== -->
    <section class="section-divider textdivider divider4">
      <div class="container">
        <h1>Dengar Kalimat ini Boi</h1>
        <hr>
        <p>Orang hebat tidak dihasilkan dari kemudahan, kesenangan, dan kenyamanan. Mereka dibentuk melalui kesulitan, tantangan dan air mata.</p>
      </div>
      <!-- container -->
    </section>
    <!-- section -->

    <!-- ==== BLOG ==== -->
    <div class="container" id="blog" name="blog">
      <br>
      <div class="row">
        <br>
        <h1 class="centered">WE ARE STORYTELLERS</h1>
        <hr>
        <br>
        <br>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-lg-6 blog-bg">
          <div class="col-lg-4 centered">
            <br>
            <p><img class="img img-circle" src="<?php base_url(); ?>/img/user/pp.jpg" width="60px" height="60px"></p>
            <h4>IJK</h4>
            <h5>Published Mar 11.</h5>
          </div>
          <div class="col-lg-8 blog-content">
            <h2>Curhatan</h2>
            <p>Kenapa rata-rata teman saya memiliki mona sedangkan saya tidak? apa yang salah dengan kehokian saya.</p>
            <p>walaupun character merupakan hal utama, tetapi senjata juga penting untuk mensupport build character kita. </p><br><br><br><br>
            <br>
          </div>
        </div>
        <!-- /col -->

        <div class="col-lg-6 blog-bg">
          <div class="col-lg-4 centered">
            <br>
            <p><img class="img img-circle" src="img/team/team03.jpg" width="60px" height="60px"></p>
            <h4>Michele Lampa</h4>
            <h5>Published Aug 28.</h5>
          </div>
          <div class="col-lg-8 blog-content">
            <h2>A Beautiful Story</h2>
            <p>Armed with insight, we embark on designing the right brand experience that engages the audience. It encompasses both the strategic direction and creative execution that solves a business problem and brings the brand to life.</p>
            <p>In the create phase, the big idea is unleashed to the world through different media touchpoints. This is when we watch the audience fall in love all over again with our client’s brand.</p>
            <br>
          </div>
        </div>
        <!-- /col -->
      </div>
      <!-- /row -->
      <br>
      <br>
    </div>
    <!-- /container -->



    <div class="container" id="contact" name="contact">
      <div class="row">
        <br>
        <h1 class="centered">THANKS FOR VISITING US</h1>
        <hr>
        <br>
        <br>

        <div class="col-lg-4">
          <h3>About Us</h3>
          <p>Ini adalah web coba-coba yang berfungsi untuk menampung tugas-tugas kami di satu semester dan kelas. Mungkin nantinya akan kami kembangkan dilingkup yang lebih luas.</p>
          <h3>Newsletter</h3>
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label for="inputEmail1" class="col-lg-4 control-label"></label>
              <div class="col-lg-10">
                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="text1" class="col-lg-4 control-label"></label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="text1" placeholder="Your Name">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10">
                <button type="submit" class="btn btn-success">Sign in</button>
              </div>
            </div>
          </form>
        </div>
        <!-- col -->

        <div class="col-lg-3">
          <h3>Contact Information</h3>
          <p><span class="icon icon-home"></span> ------------<br />
            <span class="icon icon-phone"></span> ------------ <br />
            <span class="icon icon-mobile"></span> ------------ <br />
            <span class="icon icon-envelop"></span> <a href="#"> ------------</a> <br />
            <span class="icon icon-twitter"></span> <a href="#"> ------------ </a> <br />
            <span class="icon icon-facebook"></span> <a href="#"> ------------ </a> <br />
          </p>
        </div>
        <!-- col -->

        <div class="col-lg-5">
          <h3>Contact Form</h3>
          <p>Register to our newsletter and be updated with the latests information.</p>
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>

          </form>
        </div>
        <!-- col -->

      </div>
      <!-- row -->

    </div>
    <!-- container -->


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
        Don't Forget to Complete your Task!!</a>
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="<?php base_url(); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php base_url(); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php base_url(); ?>/lib/php-mail-form/validate.js"></script>
  <script src="<?php base_url(); ?>/lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php base_url(); ?>/js/main.js"></script>

</body>

</html>