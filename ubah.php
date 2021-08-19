<?php 
require 'functions.php';

$id = $_GET["id"];


$mhs = query("SELECT * FROM perpusguru WHERE id = $id")[0];

if( isset($_POST["submit"] )){
   
    if( ubah($_POST) > 0 ){
        echo "<script>alert('Data berhasil diubah!');document.location.href='index.php'; </script>";
        
    }else{
          
        echo "<script>alert('Data Gagal diubah!');document.location.href='index.php'; </script>";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah data katalog buku</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
                <style>
                    .text-judul{
                        color : white;
                        size : 1rem;
                        text-align : center;
                    }
                    h2
                    {
                        background-color: white;
                        color: crimson;
                        font-family: sans-serif;
                        text-align: center;
                        width: 45%;
                        margin:auto;
                        padding: 20px;
                    }
            
                    body
                    {
                        background-image: url('library/bukuperpustakaan.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                    }
                </style>

                
<div class="container">
    <h1 class="text-judul" style="margin-bottom:20px; margin-top:70px;" >UBAH DATA KATALOG BUKU</h1>
        <div class="card">  
            <div class="card-header bg-secondary text-white">
               UBAH DATA KATALOG BUKU
            </div>
                <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $mhs["id"]; ?> ">
                                <div class="form-group">
                                    <label for="kode_buku"  style="margin-bottom:20px;">Kode Buku  </label>
                                    <input type="text" name="kode_buku" id="kode_buku"  style="margin-bottom:20px;" class="form-control" required value="<?= $mhs["kode_buku"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="judul"  style="margin-bottom:20px;">Judul  </label>
                                    <input type="text" name="judul" id="judul"  style="margin-bottom:20px;" class="form-control" value="<?= $mhs["judul"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="pengarang"  style="margin-bottom:20px;">Pengarang  </label>
                                    <input type="text" name="pengarang" id="pengarang"  style="margin-bottom:20px;" class="form-control" value="<?= $mhs["pengarang"]; ?>">
                                </div><br>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary"  type="submit" name="submit">Update</button>
                                    <button class="btn btn-danger"  type="submit" name="submit"><a href="index.php" style="color:white; text-decoration: none;">Cancel</a></button>
                                </div>
                        </form>
                </div>
        </div>
</div>


<script type="text/javascript" src="js/bootstrap.min.js">

</script>

</body>
</html>