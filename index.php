<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Servisnow - Teknisi ke Lokasi Anda</title>
    <link rel="shortcut icon" href="img/servisnow_logo.png"/>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   
    <style>
        @media screen and (max-width:1440px)
        {
            body
            {
                background-color: #1f87e6;
            }
            
            /*navbar and menu*/
            .navbar-brand img
            {
                width:20%;
                margin-top:-2px;
            }
            .navbar
            {
                background-color: #fff;; 
            }
            .icon-bar
            {
                background-color: #fff;
            }
            .navbar-header button
            {
                background-color: #03a9f5;
            }
            .board
            {
              width: auto;
              height: auto;
              background-color:#fff;
              border: 10px;
              margin: 10px 0px;
              border-style: hidden;
              padding: 10px 10px;
            }
            .area
            {
                top:70px; 
                left:-50px;
            }
            .jenis
            {
                top:70px; 
                left:-130px;
            }
            .order
            {
                left:450px;
                top:25px;
            }
            

            /*benefit*/
            .board-benefit
            {
              width: auto;
              height: auto;
              background-color: #42A5F5;
              border: 10px;
              margin: 60px 0px;
              border-style: hidden;
              padding: 10px 10px;
            }
            
            .location img
            {
                width:50%;
                margin-left:40px;
            }
            
            .sparepart img
            {
                width:75%;
                margin-left:15px;
            }
            
            .technisian img
            {
                width:80%;
                margin-left:15px;
                margin-top:10px;
            }
            
            .rating img
            {
                width:100%;
            }
            
            .reschedule img
            {
                width:55%;
                margin-left:30px;
            }
            
            .feature-item h3
            {
                font-size: 10px;
            }
            
            .feature-item p
            {
                width:120%;
            }
            
            .feature-item
            {
                margin:20px 0px;
            }
            
            .text-muted
            {
                color:#fff;
                height:auto;
                font-size: 18px;
            }

            /*article */
            .blog-article
            {
              width: auto;
              height: 750px;
              background-color: #42A5F5;
              border: 10px;
              margin: 30px 0px;
              border-style: hidden;
              padding-top: 30px;
            }
            
            .row h3
            {
                font-size: 35px;
                text-align: center;
            }
            .carousel-inner .blog2 img
            {
                width:1170px; 
                height:585px;
            }
            
            .carousel-inner .item .carousel-caption h2
            {
                font-size:40px;
                color:#fff;
                text-align:center;
            }

            /*testimonial*/
            .board-testimonial
            {
              width: auto;
              height: 500px;
              background-color: #42A5F5;
              padding-top: 5px;
              margin: 40px -20px;
            }
            
            .board-testimonial img
            {
                width:12%;
            }
            
            .board-testimonial h2
            {
                font-size:40px; 
                color:#fff;
            }
            
            .board-content p
            {
                font-size:25px; 
                color:#fff; 
                font-family: sans-serif;
            }
            
            .board-content
            {
              width: 750px;
              height: 350px;
              background-color: #1976d2;
              border-style: hidden;
              padding: 10px;
              margin-left:30px;
              margin-top:20px;
            }

            .col-sm-6
            {
                text-align:justify;
            }
            
            /*footer*/
            footer
            {
                background-color: #0D47A1;
                margin-top:50px;
            }

            .board-partner .row
            {
                text-align: center;
                margin: 0px 190px;
            }

            h3
            {
                color:#fff;
                font-size: 20px;
            }

            .col-md-2
            {
                margin:0px 15px;
            }
            
            .office
            {
                float:left;
            }
            
            .medsos
            {
                float:right;
            }
        }
        
        @media screen and (max-width:412px)
        {
            .navbar-brand img
            {
                width: 150px;
                margin-top:-10px;
            }
            .board
            {
                height:550px;
            }
            .area
            {
                left:0px;
            }
            .area select
            {
                width:340px;
            }
            .jenis
            {
                top:80px;
                left:0px;
            }
            .jenis select
            {
                width:340px;
            }
            .order
            {
                top:110px;
                left:-0px;
            }
            
            .collapse .navbar-collapse .nav .navbar-nav .navbar-right li a
            {
                text-align: center;
            }
            
            /*testimonial*/
            .board-testimonial
            {
                width:109%;
                height:352px;
                margin:0px -15px;
                padding:3px 10px;
            }
            .board-testimonial h2
            {
                font-size:30px; 
                color:#fff;
            }
            .board-content p
            {
                font-size:15px; 
                color:#fff; 
                font-family: sans-serif;
            }
            .board-content img
            {
                width:15%;
            }
            .board-content
            {
                width: 100%;
                height:265px;
                padding:0px 10px;
                margin:0px 0px;
            }
            
            /*benefit*/
            .location img
            {
                width:30%;
                margin-left:90px;
            }
            .sparepart img
            {
                width:40%;
                margin-left:78px;
            }
            .technisian img
            {
                width:45%;
                margin-left:78px;
                margin-top:10px;
            }
            .rating img
            {
                width:50%;
                margin-left:70px;
            }
            .reschedule img
            {
                width:35%;
                margin-left:80px;
            }
            .feature-item h3
            {
                text-align: center;
            }
            .feature-item p
            {
                width:100%;
            }
            .feature-item
            {
                margin:20px 0px;
            }
            
            /*article*/
            .blog-article
            {
                height:350px;
            }
            .row h3
            {
                font-size: 24px;
                text-align: center;
            }
            .carousel-inner .blog2 img
            {
                width:360px; 
                height:180px;
            }
            .carousel-inner .item .carousel-caption h2
            {
                font-size:18px;
                color:#fff;
                text-align:center;
            }

            /*footer*/
            .office
            {
                text-align:center;
                left:25px;
            }
            .medsos
            {
                text-align:center;
                right:25px;
            }
        }
        
    </style>

</head>

<body>

    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/servisnow_blue.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="tentang.php">Tentang Kami</a></li>
                    <li><a href="#">Saran dan Masukkan</a></li>
                    <li><a href="FAQ.php">FAQ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
 <!-- order area -->
    <section style="margin-top:-20px;">
      <div class="board">
          <div class="row">
              <div class="col-md-5" style="margin-left:10px;">
                  <h2 style="color:#0277bd; font-size:40px;">Bingung mau order servis dimana?</h2>
                  <h3 style="color:#0277bd; text-align: left;">Isi disini saja, kami akan proses secepatnya</h3>
                  <h3 style="color:#0277bd; text-align: left; font-size:20px">Coming Soon in February 2018</h3>
              </div>
              
              <div class="col-md-3 area" >
                  <select class="btn btn-primary btn-lg" type="button" style="text-align: center;" disabled>
                    <option value="#" class="disable">Area Lokasi</option>
                    <option value="sby timur">Surabaya Timur</option>
                    <option value="sby utara">Surabaya Utara</option>
                    <option value="sby barat">Surabaya Barat</option>
                  </select>  
              </div>
              <div class="col-md-3 jenis">
                  <select class="btn btn-primary btn-lg" type="button" style="text-align:center;" disabled>
                    <option value="#" class="disable">Jenis Kerusakan</option>
                    <option value="GSO" class="disable">Gangguan Sistem Operasi</option>
                    <option value="KFL" class="disable">Kerusakan Fisik Laptop</option>
                    <option value="GLMT" class="disable">Gangguan Laptop Mati Total</option>
                  </select>
              </div>
              
              <div class="col-md-3 order">
                  <p align="center"><a href="https://goo.gl/forms/aKwUcfMT9Qx9c2Li1"><button class="btn btn-primary btn-lg" style="padding: 10px 10px;">Order Layanan</button></a></p>
              </div>
          </div>
      </div>
    </section>
    
        
     <!-- article -->
    <section>
        <div class="blog-article">
          <div class="container" >
            <div class="row">
              <h3 style="color:#fff; padding: 0px 10px;">Artikel dan Blog</h3>
                <br>
              <div id="carousel" class="carousel slide" data-ride="carousel">
                  <!-- indicators -->
                  <ol class="carousel-indicators">
                      <li class="#carousel" data-slide-to="0" class="active"></li>
                      <li class="#carousel" data-slide-to="1"></li>
                  </ol>
                  
                  <!-- content -->
                  <div class="carousel-inner" role="listbox">
                      <div class="item active blog1">
                          <img src="img/artikel1.png">
                          <div class="carousel-caption">
                              <a href="blog1.php"><h2>5 Hal Penting Untuk Merawat Laptop Kesayanganmu</h2></a>
                          </div>
                      </div>
                      <div class="item blog2">
                          <img src="img/artikel2.png">
                          <div class="carousel-caption">
                              <a href="blog2.php"><h2>5 Aksesoris Buat Laptop Kamu Jadi Kekinian</h2></a>
                          </div>
                      </div>
                  </div>
                  
                  <!-- button -->
                  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
            </div>
          </div>
        </div>
    </section>
        
    <!-- feature -->
    <section>
        <div class="board-benefit">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-heading">
                            <h2 style="font-size:40px; color:#fff;">Apa saja keunggulan dari layanan Servisnow ini?</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="feature-item location">
                                <img src="img/icon-location.png">
                                <h3>Reparasi di Lokasi</h3>
                                <p class="text-muted">Khawatir anda tidak dapat keluar? Teknisi kami yang akan datang ke lokasi</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="feature-item sparepart">
                                <img src="img/icon-doc.png">
                                <h3>Informasi Sparepart yang Jelas</h3>
                                <p class="text-muted">Mahal karna informasi harga sparepart tidak spesifik? Kami akan memberikan info harga sparepart sesuai harga pasar yang jelas</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="feature-item technisian">
                                <img src="img/icon-people.png">
                                <h3>Komunitas para Teknisi</h3>
                                <p class="text-muted">Kami juga membentuk sebuah komunitas untuk para tukang servis gadget freelance yang berpengalaman.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="feature-item rating">
                                <img src="img/icon-bintang.png">
                                <h3>Sistem Rating</h3>
                                <p class="text-muted">Baik teknisi ataupun customer berhak memberi rating dan komentar</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="feature-item reschedule">
                                <img src="img/icon-reschedule.png">
                                <h3>Waktu yang Fleksibel</h3>
                                <p class="text-muted">Tiba-tiba anda ada acara mendadak? ubah saja jadwal anda sehingga teknisi bisa mengatur jadwal ulang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container-fluid">
            <div class="board-testimonial">
                <h2 align="center">Testimonial</h2> 
                <div class="board-content">
                    <p align="justify">"Jasa Servisnow sangat memudahkan saya dalam memperbaiki barang elektronik yang rusak
                    Kebetulan kemarin ganti LCD. Saya nggak usah datang ke toko untuk servis, teknisi tinggal
                    datang dan bawa sparepartnya. Ga ada 1 jam sudah kelar, biaya servisnya pun lebih murah dari
                    tempat servis pada umumnya. Great Job!"
                    <br><br>
                    <img src="img/testimoni/testimoni1.png"> Audi. Co-Founder Riliv.co
                </div>
                <br>
            </div>
        </div>
    </section>
        
    <section class="background">
      <div class="board1">
          <div class="container">
            <div class="board-partner">
              <div class="row" style="float:left;">
                  <h2 align="center" style="color:#fff; font-size:40px;">Ingin bergabung sebagai mitra Servisnow?</h2>
                  <h3 align="center" style="color:#000"><br>
                      <a href="https://goo.gl/forms/itzIILVpYkfckgeE2" style="margin-left:-10px; padding: 0px 1px;"><button class="btn btn-primary btn-lg" style="border-radius:10px;">Daftar sebagai Mitra</button></a></h3>
                </div>
            </div>
          </div>
        </div>
    </section>

    <footer class="text-justify" id="help">
	     <div class="container-fluid">
      		<div class="row" style="color:#fff;">
      			<div class="col-md-3 office">
                    <h2>Our Office</h2>
                    <p>Villa Rivierra B4/27, Pakuwon City, Surabaya</p>
                    <p>Contact Person: (085) 1037 7117 6</p>
                    <p>&copy; 2017 Servisnow. All Rights Reserved.</p>
                </div>
      			<div class="col-md-3 medsos">
                    <h2>Media Social</h2>
                    <p>Facebook: <a href="https://www.facebook.com/iniservisnow" style="color:#fff;">www.facebook.com/iniservisnow</a></p>
                    <p style="color:#fff;">Instagram: Coming Soon....</p>
                </div>
      		</div>
	      </div>
    </footer>

    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    
    <!-- Google Analythics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-100600572-1', 'auto');
      ga('send', 'pageview');

    </script>

    <script type="text/javascript">
    (function(d,s,id){var z=d.createElement(s);z.type="text/javascript";z.id=id;z.async=true;z.
    src="//static.zotabox.com/a/1/a15154652508c827968b9464ffce7450/widgets.js";
    var sz=d.getElementsByTagName(s)[0];sz.parentNode.insertBefore(z,sz)}(document,"script","zb-embed-code"));
    </script>

</body>

</html>
