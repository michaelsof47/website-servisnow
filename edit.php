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
            header
            {
                text-align: center;
                background-color: #039be6;
            }
            
            header h2
            {
                font-size: 30px;
                color: #fff;
                font-family: sans-serif;
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
        </style>
    </head>
    
    <body>
        
        <header>
            <h2>Servisnow Editor Data</h2>
        </header>
        
        <section>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="margin-left:270px;">
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
                                    <input type="date" data-date="" data-date-format="dd mmmm yyyy" value="2017-11-21" class="form-control" =name="tgl_lahir" id="datepicker" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" placeholder="Masukkan alamat email"
                                name="email" id="email" required>
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
                                    <button style="width: 100px;" type="submit" name="kirim" value="submit" class="btn btn-success btn-lg">Kirim</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
    </body>
</html>