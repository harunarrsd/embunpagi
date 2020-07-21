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

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

        <!-- Add jQuery library -->
        <script type="text/javascript" src="assets/galeri/lib/jquery-1.10.1.min.js"></script>

        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="assets/galeri/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="assets/galeri/source/jquery.fancybox.css?v=2.1.5" media="screen" />

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
                        <a class="navbar-brand" href=""><img src="assets/images/logo3.png" /></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#beranda">Home</a></li>
                            <li><a href="#sejarah">Profile</a></li>
                            <li><a href="#kabar">News</a></li>
                            <li><a href="#galeri">Article</a></li>
                            <li><a href="#team">Team</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!--Home page style-->
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

        <!-- donasi -->
        <div class="modal fade" id="donasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document" style="color:#000;">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Donasi</h3>
                <h4 style="text-align: center;">Kirimkan Donasi Anda Melalui <br>Bank Rakyat Indonesia Syariah di 
                  <br> No. Rekening : 1022688088
                  <br> Atas Nama : Himma Syahida</h4>
              </div>
              <div class="modal-body">
                <form action="system/donasi.php" method="POST">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Nama Lengkap</label>
                      <input type="txt" name="nama" class="form-control" placeholder="Muhammad Al Fatih" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Alamat</label>
                      <textarea type="text" name="alamat" class="form-control" placeholder="Jalan Nusa Indah . . ." required></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Pekerjaan</label>
                      <input type="text" name="pekerjaan" class="form-control" placeholder="Guru, Pilot, TNI, dll." required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Nomor Handphone</label>
                      <input type="text" name="no_hp" class="form-control" placeholder="08961516xxxx" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Pilihan Donatur</label>
                      <select class="form-control" name="donatur">
                        <option value=""></option>
                        <option value="donatur tetap">Donatur Tetap</option>
                        <option value="donatur tidak tetap">Donatur Tidak Tetap</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Nominal</label>
                      <input type="text" name="nominal" class="form-control" placeholder="1000000" required>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <section id="sejarah" class="sections">
            <div class="container">
                <div class="row">
                  <div class="heading">
                        <div class="title text-center arrow-right">
                            <h4 class="">Profile</h4>
                            <img class="hidden-xs" src="assets/images/right-arrow.png" alt="" />
                        </div>
                    </div>
                    <div class="main-history">
                        <div class="col-md-12">
                            <div class="history-wrapper">
                                <div class="history-heading">
                                    <h5 class="our-history">Sejarah Embun Pagi</h5>
                                </div>
                                <div class="history-content">
                                    <p align="justify";>
                                      Sebuah nama yang memfilosofikan kesejukan bagi hati yang merindukan ketenangan. Seperti embun yang tidak pernah memilih di daun mana butiran - butirannya
                                      akan terbentuk, bentuknya yang sederhana dan memberikan kesejukan.
                                    </p>
                                    <p align="justify";>
                                      Kehadirannya bukan hanya untuk menjangkau pepohonan yang tinggi saja, melainkan ia mampu menghadirkan dirinya hingga ke rerumputan, membasahi
                                      seluas - luasnya bumi dengan adil dan merata.
                                    </p>
                                    <p align="justify";>
                                      Komunitas Embun Pagi terbentuk dari ketertarikan hati dan dorongan untuk menjadi komunitas yang ikut berperan aktif dalam membangun sebuah
                                      peradaban yang lebih baik. Tugas membangun inilah yang kami coba ambil. Karena sebuah peradaban mulia tidak akan pernah terbangun kokoh ketika
                                      tidak dibangun dan dibina sejak dini.
                                    </p>
                                    <p align="justify";>
                                      Membangun dan membina bukan hanya tugas bagi seorang guru, dosen, ustadz, atau semisalnya, yang mungkin identik dengan pendidikan saja. Melanikan
                                      ini adalah tugas untuk kita semua, dimulai dari diri kita. Kitalah yang dapat membangun peradaban mulia tersebut. Kita yang menjalankannya sesuai
                                      dengan perannya masing - masing.
                                    </p>
                                    <p align="justify";>
                                      Karena kalau bukan kita yang mencoba mengambil peran, lantas siapa lagi? Ketika yang lain bergerak mengambil perannya masing - masing, namun kita
                                      masih diam, tidak bisa berbuat apa apa. Yang pada akhirnya, peran - peran tersebut akan tergantikan oleh sosok - sosok manusia yang lebih baik dari kita.
                                    </p>
                                    <p align="justify";>
                                      Filosofi Embun Pagi mengajarkan kita untuk bisa memberikan kesejukan di hati orang - orang yang berada di sekitar kita. Dan mensucikan tujuan karena Allah
                                      Rabbul Izati. Seperti bening dan sucinya Embun Pagi.
                                    </p>
                                </div>
                            </div>
                            <br />
                            <div class="history-wrapper">
                                <div class="history-heading">
                                  <div class="row">
                                  <div class="col-md-2 col-md-offset-2 panel panel-default animated infinite bounce" style="background-color: rgba(0, 149, 220, 0.61); width: 100px; height: 100px; border-radius: 50px;">
                                    <div class="panel-body" style="margin-top: 20px;color: #fff;">
                                      <h4>Visi</h4>
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-md-offset-2 panel panel-default animated infinite bounce" style="background-color: rgba(0, 149, 220, 0.61); width: 100px; height: 100px; border-radius: 50px;">
                                    <div class="panel-body" style="text-align: center;margin-top: 5px;color: #fff;">
                                      <h4>Misi 1</h4>
                                    </div>
                                  </div>
                                  <div class="col-md-2 col-md-offset-2 panel panel-default animated infinite bounce" style="background-color: rgba(0, 149, 220, 0.61); width: 100px; height: 100px; border-radius: 50px;">
                                    <div class="panel-body" style="text-align: center;margin-top: 5px;color: #fff;">
                                      <h4>Misi 2</h4>
                                    </div>
                                  </div>
                                </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-2 col-md-offset-2">
                                    <p style="margin-left: -85px;">Menjadi komunitas yang berperan dalam mencerdaskan masyarakat</p>
                                  </div>
                                  <div class="col-md-2 col-md-offset-2">
                                    <p style="margin-left: -190px;">Berperan dalam membantu pemenuhan 
                                      <br>pendidikan bagi masyarakat yang membutuhkan</p>
                                  </div>
                                  <div class="col-md-2 col-md-offset-2">
                                    <p style="margin-left: -225px;">Sebagai Fasilitator <br>Pendidikan bagi masyarakat</p>
                                  </div>
                                </div>
                                <div class="col-md-5 col-md-offset-5">
                                  <button class="btn pt-btn btn-primary" data-toggle="modal" data-target="#myModal">Gabung</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document" style="color:#000;">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Pendaftaran Komunitas Embun Pagi</h4>
              </div>
              <div class="modal-body">
                <form action="system/daftar.php" method="POST">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Nama Lengkap</label>
                      <input type="txt" name="nama" class="form-control" placeholder="Muhammad Al Fatih" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Tempat/Tanggal Lahir</label>
                      <input type="text" name="ttl" class="form-control" placeholder="Bogor, 14 Januari 1999" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Domisili</label>
                      <input type="text" name="domisili" class="form-control" placeholder="Depok" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Aktivitas</label>
                      <input type="text" name="aktivitas" class="form-control" placeholder="Kerja, Kuliah dll" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Instansi</label>
                      <input type="text" name="instansi" class="form-control" placeholder="Sekolah, Universitas dll" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Social Media</label>
                      <input type="text" name="socmed" class="form-control" placeholder="Instagram, Line dll" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Motto Hidup</label>
                      <input type="text" name="motto" class="form-control" placeholder="Maju Terus Pantang Mundur" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Nomor Whatsapp</label>
                      <input type="text" name="no" class="form-control" placeholder="081867589xxx" required>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Daftar</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                </div>
              </form>
            </div>
          </div>
        </div>

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

        <section id="galeri" class="sections">
            <div class="container">
                    <div class="heading">
                        <div class="title text-center arrow-right">
                            <h4 class="">Article</h4>
                            <img class="hidden-xs" src="assets/images/right-arrow.png" alt="" />
                        </div>
                    </div>
                    <?php 
                    include 'system/koneksi.php';
                    $sql = "SELECT * FROM tb_post_artikel ORDER BY id DESC LIMIT 3";
                    $result = mysqli_query($connect,$sql);
                    while($data = mysqli_fetch_array($result))
                {?>
                    <!-- Example row of columns -->
                    <div class="portfolio-wrap">
                        <div class="portfolio">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img src="assets/images/artikel/<?php echo $data['path'] ?>" style="width: 416px; height: 252px;" class="img-responsive img-thumbnail" alt="Responsive image"/>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="portfolio-item">
                                    <h4><?php echo $data['judul']; ?></h4>
                                    <h6>[<?php echo $data['waktu'] ?>]</h6>
                                    <p align="justify">
                                        <?php 
                                            $jml = 300;
                                            $cetak = substr($data['deskripsi'],0,$jml)."...";
                                            echo $cetak;
                                         ?>
                                    </p>
                                    <button class="btn pt-btn btn-primary">View More</button>
                                </div>
                            </div>
                        </div>
                    </div><br>
                <?php }
                ?>
                
            </div>
        </section>

        <section id="team" class="sections">
            <div class="container">
                <div class="heading">
                    <div class="title text-center arrow-left">
                        <img class="hidden-xs" src="assets/images/left-arrow.png" alt="" />
                        <h4 class="">Our Team</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid project-bg">
                <div class="row">
                    <div class="main-team text-center">
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="team-member">
                              <img class="img-circle" src="assets/images/team/Iqbal.jpg" alt="" />
                              <h5>Muhammad Iqbal</h5>
                              <p>"ketua komunitas"</p>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="team-member">
                              <img class="img-circle" src="assets/images/team/Naufal.jpg" alt="" />
                              <h5>Ahmad Naufal Rambu</h5>
                              <p>"Kepala Div. Pustikom"</p>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="team-member">
                              <img class="img-circle" src="assets/images/team/Aida.jpg" alt="" />
                              <h5>Aida Safitri</h5>
                              <p>"Wakil Kepala div. pustikom"</p>
                          </div>
                      </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img class="img-circle" src="assets/images/team/Harun.jpg" alt="" />
                                <h5>Harun</h5>
                                <p>"#ManusiaBiasa"</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img class="img-circle" src="assets/images/team/Ocha.jpg" alt="" />
                                <h5>Rozami Rohimin</h5>
                                <p>"Penanggung Jawab artikel"</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img class="img-circle" src="assets/images/team/Arifin.jpg" alt="" />
                                <h5>Akhmad Arifin</h5>
                                <p>"Anggota Div. Pustikom"</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img class="img-circle" src="assets/images/team/Iskandar.jpg" alt="" />
                                <h5>Iskandar Nurrahman</h5>
                                <p>"Anggota Div. Pustikom"</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img class="img-circle" src="assets/images/team/Chaca.jpg" alt="" />
                                <h5>Annisa Rinjani</h5>
                                <p>"Anggota Div. Pustikom"</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="saran" class="sections">
            <div class="container">
                <div class="heading">
                    <div class="title text-center arrow-right">
                        <h4 class="">Criticism and Suggestions</h4>
                        <img class="hidden-xs" src="assets/images/right-arrow.png" alt="" />
                    </div>
                </div>
                <!-- Example row of columns -->
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 panel panel-default">
                    <div class="panel-heading"></div>
                      <div class="panel-body">
                        <form action="system/saran.php" method="POST">
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                          </div>
                          <div class="form-group">
                            <label>Kritik</label>
                            <textarea class="form-control" name="kritik" rows="3" placeholder="Kritik" required></textarea>
                          </div>
                          <div class="form-group">
                            <label>Saran</label>
                            <textarea class="form-control" name="saran" rows="3" placeholder="Saran" required></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary" name="krisar">Submit</button>
                        </form>
                      </div>
                  </div>
                </div>
            </div> <!-- /container -->       
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

        <script type="text/javascript" src="assets/js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
  </script>
    </body>
</html>