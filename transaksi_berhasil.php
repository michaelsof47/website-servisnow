<?php
    include "connection.php";

    if(isset($_POST['kirim']))
    {
        $name=$_REQUEST['name'];
        $dateBirth=$_REQUEST['datebirth'];
        $email=$_REQUEST['email'];
        $telephone=$_REQUEST['telephone'];

        $mysql = ("INSERT INTO data_order_kontak (name,datebirth,email,telephone) VALUE ('$name','$datebirth','$email','$telephone')");
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
                <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
                <link rel="stylesheet" href="lib/device-mockups/device-mockups.min.css">

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

                    .bg-warning
                    {
                        background-color: #ff493b;
                    }

                    .section-heading
                    {
                        color:#ffffff;
                    }

                    p
                    {
                        color:#ffffff;
                    }

                    .text-muted
                    {
                        color:#ffffff;
                    }

                    .feature-item h3
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

                    .header-content-inner
                    {
                      color: #fff;
                    }
                </style>
            </head>

            <style>
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

        </style>

    <div class="bg_first">
        <div class="container">
            <div class="content">
                    <h2 style=" padding: 20px; font-size:20px; text-align:center ">Data anda berhasil terkirim, silahkan tunggu beberapa menit kemudian...</h2>
                    <h3 style=" padding: 0px 20px; color:#fff; font-size:20px; text-align:center">Bila selama 1x24 jam masih belum ada kabar dari kami, Silahkan menghubungi Admin Support kami melalui menu "Contact Us" pada Halaman Home kami.</h3>
                    <br>
                    <p align="center"><a href="index.php"><button class="btn btn-success btn-md" style="font-size:10px margin: 0px 10px;">Kembali Ke <br>Halaman Utama</button></a></p>
                    <br>
            </div>
        </div>
    </div>


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
