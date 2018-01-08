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

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
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
            <h2>Daftar sebagai Mitra Teknisi</h2>
            <p align="center">Form ini bertujuan mendaftar sebagai Mitra Teknisi</p>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="margin-left:270px;">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form action="daftar_berhasil.php" method="POST" id="daftar_mitra" enctype="multipart/form-data" align="center">
                        <div class="col-lg-5">
                            <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Diisi sesuai dengan identitas KTP" name="nama" required>
                            </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="birth">Tanggal Lahir</label>
                                    <input type="date" data-date="" data-date-format="dd mmmm yyyy" value="2017-11-21" class="form-control" name="tgl_lahir" id="datepicker" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" placeholder="Masukkan alamat email"
                                name="email" required>
                            </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="phone">No. Telp</label>
                                    <input type="tel" class="form-control" placeholder="Masukkan No. Telp yang bisa di akses"
                                    name="telephone" id="telephone" required>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 170px;">
                            <div class="col-md-3" align="center" style="margin-top:10px;">
                                <p align="center">
                                <a href="index.php">
                                    <button style="width:100px;" type="button" value="back" class="btn btn-warning btn-lg">Batal</button></a>
                                </p>
                            </div>
                            <div class="col-md-3" align="center" style="margin-top:10px;">
                                    <a href="transaksi_berhasil.php"></a>
                            </div>
                        </div>
                    </form>
                </div>
        </section>
    </div>
        
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
