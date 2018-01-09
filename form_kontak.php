<?php

    include "connection.php";

    if(isset($_POST['kirim']))
    {
        $tgl_order = $_REQUEST["tgl_order"];
        $lokasi = $_REQUEST["lokasi"];
        $keluhan = $_REQUEST["keluhan"];

        $mysql = ("INSERT INTO data_order_keluhan (tgl_order,lokasi_alamat,keluhan) VALUE ('$tgl_order','$lokasi','$keluhan')");
        $query = mysqli_query($conn,$mysql);

        if(!$query)
        {
            echo "Koneksi Database Error" . mysqli_connect_error();
        }
    }
?>

<!DOCTYPE HTML>
<html lang="en">
        <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">

                <title>Servisnow</title>

                <!-- Bootstrap Core CSS -->
                <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

                <!-- Custom Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

                <!-- Plugin CSS -->
                <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">

                <!-- Theme CSS -->
                <link href="css/new-age.min.css" rel="stylesheet">

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
                <style>
                    .navbar-brand > img
                    {
                        margin-top: -10px;
                    }

                    .content
                    {
                        width: auto;
                        height: auto;
                        background-color: #42A5F5;
                        border: 1px;
                        margin: 75px 40px;
                        border-style: hidden;
                        border-radius: 10px;
                        padding: -50px;
                    }

                    .bg_first
                    {
                      background-color: #64B5F6;
                    }

                    .section-heading
                    {
                        color:#ffffff;
                    }

                    p
                    {
                        color:#ffffff;
                    }

                    h2
                    {
                       color:#ffffff;
                    }

                    .form-group
                    {
                       color:#ffffff;
                    }

                    #follow
                    {
                       background-color:#000;
                    }

                    .navigation
                    {
                        background-color:#fff;
                    }

                </style>
            </head>

      <body id="page-top">

        <nav class="navigation navbar navbar-fixed-top">
          <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header" style="color: #0277bd;">
                  <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo1" img width="130px" style="margin-top:-2px;"></a>
              </div>
          </div>
        </nav>

        <div class="bg_first">
            <section id="contact">
                <div class="content">
                    <div class="container">
                        <!-- order layanan -->
                        <div id="Service">
                            <h2 style=" padding-left: 20px; font-family:arial; text-align: center; font-size:35px;">Order Layanan Service Servisnow</h2>
                            <p align="center">Form ini bertujuan untuk memesan layanan Servisnow</p>
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                                    <form action="transaksi_berhasil.php" method="post">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                                <label for="name">Nama</label>
                                                <input type="text" class="form-control" placeholder="Nama" name="name" required>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                                <label for="email">Alamat Email</label>
                                                <input type="email" class="form-control" placeholder="Alamat Email" name="email" required>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                                <label for="phone">No. Telp</label>
                                                <input type="tel" class="form-control" placeholder="No. Telp" name="phone" required>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <br>
                                        <p align="center">
                                          <a href="index.php"><button type="button" name="kembali" value="back" class="btn btn-warning btn-lg">Batal</button></a>
                                          <button type="submit" name="kirim" value="submit" class="btn btn-success btn-lg">Order</button>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>

        <?php
            mysqli_close($conn);
        ?>

        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <style>
                    footer
                    {
                        background-color: #0D47A1;
                    }
                    </style>
                    <h2>Our Company</h2>
                    <h3>Servisnow Officer</h3>
                    <p>Villa Rivierra B4/27, Pakuwon City, Surabaya</p>
                                <p>Contact Person: (085) 1037 7117 6</p>
                    <p>&copy; 2017 Servisnow. All Rights Reserved.</p>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="lib/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/register_repairman.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/new-age.min.js"></script>

        <!-- Google Analythics -->
        <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-100600572-1', 'auto');
        ga('send', 'pageview');

        </script>

    </body>
</html>
