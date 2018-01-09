<?php
    include "connection.php";
    
    $nomer = 0;
    
    $mysql = "SELECT * FROM mitra_teknisi_komputer ORDER BY no DESC";

    $query = mysqli_query($conn,$mysql);

    if(!$query)
    {
        echo "Koneksi Database Error" . mysqli_connect_error();
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
            
    </head>

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
            border-radius:10px;
            width: 100%;
            height:auto;
        }

        body
        {
            background-color:#1e88e5;
        }
        
    </style>

    <body>
        
        <header>

            <h1>Servisnow untuk Mitra</h1>
            <h3>Kumpulan informasi data para mitra servisnow</h3>

        </header>
        
        <br> <br>
        
        <content>

           <div class="container-fluid">
              <table class="table table-responsive">
                  <thead class="active" style="color: #fff;">
                      <th>name</th>
                      <th>tgl_lahir</th>
                      <th>email</th>
                      <th>telephone</th>
                      <th style="text-align: center;">option</th>
                  </thead>
                  <tbody>
                      <?php
                          while($row = mysqli_fetch_array($query))
                          {
                              echo"<tr style='font-size:20px; font-family:sans-serif'>";
                                  "<td style='color:#fff;'>".$nomer++."</td>";
                                  echo"<td style='color:#fff;'>".$row['name']."</td>";
                                  echo"<td style='color:#fff;'>".$row['tgl_lahir']."</td>";
                                  echo"<td style='color:#fff;'>".$row['email']."</td>";
                                  echo"<td style='color:#fff;'>".$row['telephone']."</td>";
                                  echo"<td style='color:#fff;'><button type='submit' class='btn btn-success btn-md' style='border-radius: 50px; float:left;' name='update' href='edit.php?id=".$row['no']."'>Edit Data</button> <button type='delete' class='btn btn-danger btn-md' style='border-radius:50px; float:right' name='delete'>Hapus Data</button></td>";
                              echo"</tr>";
                          }
                      ?>
                  </tbody>
              </table>
            </div>

        </content>

    </body>

</html>
