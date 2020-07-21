<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Komunitas Embun Pagi</title>
        <link rel="icon" type="image/x-icon" href="assets/images/logo-embun.png"/>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="../assets/css/responsive.css" />

        <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

        <!-- Add jQuery library -->
        <script type="text/javascript" src="../assets/galeri/lib/jquery-1.10.1.min.js"></script>

        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="../assets/galeri/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="../assets/galeri/source/jquery.fancybox.css?v=2.1.5" media="screen" />

        <script type="text/javascript">
          $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();
          });
        </script>
        <style type="text/css">
          .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
          }
        </style>

    </head>
    <body data-spy="scroll" data-target="#main-navbar">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div>	
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" style="text-align: center;" href=""><img src="../assets/images/logo3.png" /></a>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </div>

        <header id="beranda" class="sections2 beranda">
            <div>
                <div class="slider-area">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="assets/images/slider1.jpg" alt="" />
                                <div class="carousel-caption home-tengah">
                                    <h1 style="font-family: trajan pro;">Program Taman Pendidikan <br>Al Qur'an Embun Pagi</h1>
                                    <h3 style="font-family: calibri;">Pemberian pengajaran Al Qur'an sejak usia dini</h3>
                                    <div><a class="btn btn-4" data-toggle="modal" data-target="#donasi"><h4 style="font-family: calibri;margin: 5px;">DONASI SEKARANG</h4></a></div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="assets/images/slider2.jpg" alt="" />
                                <div class="carousel-caption home-tengah">
                                    <h1 style="font-family: trajan pro;">Program Taman Baca <br> Embun Pagi</h1>
                                    <h3 style="font-family: calibri;">Menyediakan bahan bacaan islami dan menumbuhkan minat baca kepada masyarakat</h3>
                                    <div><a class="btn btn-4" data-toggle="modal" data-target="#donasi"><h4 style="font-family: calibri;margin: 5px;">DONASI SEKARANG</h4></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
          </div>
      </div>  
        </header>
        
        <!-- Sections -->
        <section id="kabar" class="sections">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <div class="title text-center arrow-left">
                            <img class="hidden-xs" src="assets/images/left-arrow.png" alt="" />
                            <h4 class="">News</h4>
                        </div>
                    </div>
                <?php 
                    include 'system/koneksi.php';
                    $sql = "SELECT * FROM tb_posting ORDER BY id DESC LIMIT 3";
                    $result = mysqli_query($connect,$sql);
                    while($data = mysqli_fetch_array($result))
                {?>
                    <!-- Example row of columns -->
                    <div class="portfolio-wrap">
                        <div class="portfolio">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img src="assets/images/berita/<?php echo $data['path'] ?>" style="width: 416px; height: 252px;" class="img-responsive img-thumbnail" alt="Responsive image"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <h4><?php echo $data['judul']; ?></h4>
                                    <h6>[<?php echo $data['waktu'] ?>]</h6>
                                    <p align="justify">
                                        <?php 
                                            $jml = 300;
                                            $cetak = substr($data['isi'],0,$jml)."...";
                                            echo $cetak;
                                         ?>
                                    </p>
                                    <a class="btn pt-btn btn-primary" href="system/view_news.php">View More</a>
                                </div>
                            </div>
                        </div>
                    </div><br>
                <?php }
                ?>
                </div>
            </div>
            <!-- /container -->       
        </section>

        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="socio-copyright">
                        <div class="social">
                            <a target="_blank" href="https://www.facebook.com/EmbunPagiID/"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://www.instagram.com/embunpagi_id/"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                        <p>Made with <i class="fa fa-heart"></i> by <strong>Div Pustikom Komunitas Embun Pagi</strong> 2017. All rights reserved.</p>
                    </div>
                </div>	
            </div>
        </footer>

        <script type="text/javascript" src="../assets/js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/js/main.js"></script>
  </script>
    </body>
</html>