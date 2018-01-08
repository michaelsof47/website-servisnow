<?php
    include "connection.php";

    $sql = "SELECT * FROM data ORDER BY id_order_area DESC";

    $sql1 = "SELECT * FROM data_order_keluhan ORDER by id_order_keluhan DESC";

    $sql2 = "SELECT * FROM data_order_kontak ORDER by id_order_kontak DESC";

    $value = mysqli_query($conn,$sql);

    $value1 = mysqli_query($conn,$sql1);

    $value2 = mysqli_query($conn,$sql2);

    if(!$value || !$value1 || !$value2)
    {
        echo "Koneksi Database Error" .mysqli_connect_error();
    }

    session_start();
?>

<!DOCTYPE html>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        header
        {
            text-align: center;
            background-color: #039be6;
            border-radius: 10px;
            
        }
        
        header h1
        {
            color: #fff;
        }
        header h3
        {
            color:#fff;
        }

        .table
        {
            background-color:#42a5f5;
            border-radius: 10px;
            width: 100%;
            height:auto;
        }

        body
        {
            background-color:#1e88e5;
        }
    </style>

</head>

<body>
        <header>
            <h1 align="center">Servisnow for Order</h1>
        </header>

        <div class="container-fluid" style="margin: 0px 30px;">
            <h2 align="center">Servisnow for Area</h2>
            <table class="table table-responsive">
                <thead class="active">
                    <tr>
                        <th>Area Lokasi</th>
                        <th>Jenis Kerusakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_array($value))
                        {
                            echo"<tr>";
                                echo"<td>".$row['area']."</td>";
                                echo"<td>".$row['jenis_kerusakan']."</td>";
                            echo"</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
        <div class="container-fluid" style="margin: 0px 30px;">
            <h2 align="center">Servisnow for Order</h2>
            <table class="table table-responsive">
            <thead class="active">
                <tr>
                    <th>Tanggal Order</th>
                    <th>Lokasi Alamat</th>
                    <th>Keluhan</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($value1))
                    {
                        echo"<tr>";
                            echo"<td>".$row['tgl_order']."</td>";
                            echo"<td>".$row['lokasi_alamat']."</td>";
                            echo"<td>".$row['keluhan']."</td>";
                        echo"</tr>";
                    }
                ?>
            </tbody>
        </table>
        </div>
        
        <div class="container-fluid" style="margin: 0px 30px;">
            <h2 align="center">Servisnow for Contact</h2>
            <table class="table table-responsive table-hover" align="center">
            <thead class="active">
                <tr>
                    <th>Nama Customer</th>
                    <th>Email Customer</th>
                    <th>Nomer Telepon</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($value2))
                    {
                        echo"<tr>";
                            echo"<td>".$row['name']."</td>";
                            echo"<td>".$row['email']."</td>";
                            echo"<td>".$row['phone']."</td>";
                        echo"</tr>";
                    }
                ?>
            </tbody>
        </table>

        </div>
        <?php

            $reset = mysqli_close($conn);

            if($reset)
            {
              $user = "";
              $pass = "";
            }

        ?>

        <script src="lib/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/new-age.min.js"></script>

  </body>

</html>
