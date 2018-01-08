<?php
    include "connection.php";

    if(isset($_POST['kirim']))
    {
        $area = $_POST["area"];
        $jenis_kerusakan = $_REQUEST["jenis_kerusakan"];

        $mysql = ("INSERT INTO data (area,jenis_kerusakan) VALUE ('$area','$jenis_kerusakan')");
        $query = mysqli_query($conn,$mysql);

        if(!$query)
        {
            echo "Koneksi Database Gagal" .mysqli_connect_error();
        }
    }
    else if(isset($_POST['kembali']))
    {
        header("location:index.php");
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
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .form-group
            {
               color:#ffffff;
            }
            
            h2
            {
                padding-left: 20px; 
                font-family:arial; 
                text-align: center; 
                font-size:35px;
            }
            
            body
            {
                background-color: #1e88e5;
            }
            
            .form-data
            {
                background-color:#42a5f5;    
            }
            
            section
            {
                width: auto;
                height: auto;
                background-color: #42A5F5;
                border: 1px;
                margin: 75px 40px;
                border-style: hidden;
                border-radius: 10px;
                padding: 30px 10px;
            }

            .navigation
            {
                background-color:#fff;
            }
        </style>
    </head>

  <body>

    <nav class="navigation navbar navbar-fixed-top">
      <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header" style="color: #0277bd;">
              <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo1" img width="130px" style="margin-top:-2px;"></a>
          </div>
      </div>
    </nav>

    <div class="container-fluid form-daftar">
        <section>
            <h2 style="padding-left: 20px; font-family:arial; text-align: center; font-size:30px;">Order Layanan Service Servisnow</h2>
                <p align="center">Form ini bertujuan untuk memesan layanan Servisnow</p>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2" style="margin-left:270px;">
                        <form action="form_kontak.php" method="get">
                            <div class="col-md-5" style="margin-top:33px;">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label for="merek">Merek Laptop</label>
                                        <select class="btn btn-primary btn-md">
                                            <option value="Asus">Asus</option>
                                            <option value="Lenovo">Lenovo</option>
                                            <option value="Sony">Sony</option>
                                            <option value="Acer">Acer</option>
                                            <option value="Fujitsu">Fujitsu</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="MSI">MSI</option>
                                            <option value="Merek Lain">Merek Lain</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="tanggalOrder">Tanggal Pemesanan Order</label>
                                    <input type="datetime-local" data-datetime="" data-datetime-format="dd MMMM yyyy hh mm" value="2017-11-21 08:30" class="form-control" name="tgl_order" required>
                                </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label for="location">Lokasi Customer</label>
                                        <input type="text" class="form-control" placeholder="Lokasi alamat posisi anda" name="lokasi" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label for="keterangan">Keterangan Keluhan.</label>
                                        <label style="font-size:10px">cat: Sertakan juga merk dan seri laptop yang anda ingin diperbaiki</label>
                                        <textarea rows="5" class="form-control" placeholder="Dimohon memasukkan keluhan mengenai gadget anda (max 200 kata) dengan menyertakan merk dan seri laptop (contoh: Lenovo G405)" name="keluhan" required maxlength="200" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row" style="margin-left: 170px;">
                                <div class="col-md-3" align="center" style="margin-top:10px;">
                                    <p align="center">
                                    <a href="index.php">
                                        <button style="width:100px;" type="button" value="back" class="btn btn-warning btn-lg">Batal</button></a>
                                    </p>
                                </div>
                                <div class="col-md-3" align="center" style="margin-top:10px;">
                                        <button style="width: 100px;" type="submit" name="kirim" value="submit" class="btn btn-success btn-lg">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
        </section>
      </div>

        <?php
            mysqli_close($conn);
        ?>

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
