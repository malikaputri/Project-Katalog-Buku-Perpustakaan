<?php
require 'functions.php';


$perpus = query("SELECT * FROM perpusguru");


if( isset($_POST["cari"]) ) {
    $perpus = cari($_POST["keyword"]);
}


if( isset($_POST["submit"] )){
   
    if( tambah($_POST) > 0 ){
        echo "<script>alert('Data berhasil disimpan');document.location.href='index.php'; </script>";
        
    }else{
          
        echo "<script>alert('Gagal disimpan');document.location.href='index.php'; </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM KATALOG BUKU</title>
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
                         background: url(library/bukuperpustakaan.jpg) no-repeat  fixed;
                         background-size:100% 100%;
                    }

                </style>

    

<div class="container">
    <h1 class="text-judul"  style="margin-bottom:30px; margin-top:30px;">FORM KATALOG BUKU</h1>
        <div class="card">  
            <div class="card-header bg-secondary text-white" style="text-align:center;">
               FORM INPUT DATA KATALOG BUKU PERPUSTAKAAN
            </div>
                <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                            <label for="kode_buku" style="margin-bottom:10px;">Kode Buku  </label>
                                            <input type="text" name="kode_buku" class="form-control" style="margin-bottom:10px;" placeholder="Silahkan isi kode buku disini..." id="kode_buku" >
                                </div>
                                <div class="form-group">
                                            <label for="judul" style="margin-bottom:10px;">Judul  </label>
                                            <input type="text" name="judul" class="form-control" style="margin-bottom:10px;" placeholder="Silahkan isi judul buku disini..." id="judul" >
                                </div>
                                <div class="form-group">
                                            <label for="pengarang" style="margin-bottom:10px;">Pengarang  </label>
                                            <input type="text" name="pengarang" class="form-control" style="margin-bottom:10px;" placeholder="Silahkan isi nama pengarang disini..." id="pengarang" >    
                                </div>

                                <button type="submit" class="btn btn-success" style="margin-top:5px;" name="submit">Simpan Data</button><br>

                                <div class="collapse" id="navbarToggleExternalContent">
                                    <div class="bg-light">
                                    <form action="" method="post" class="d-flex">
                                         <label class="form-check-label" for="flexRadioDefault2">
                                            <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="kodebuku">
                                            Kode Buku
                                            </label>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                            <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="judul">
                                            Judul 
                                            </label>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                            <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="pengarang">
                                            Pengarang
                                            </label>
                                            </label>
                                            <input class="form" type="search" placeholder="Search" name="keyword"  aria-label="Search" style="height:35px; margin-top:20px;">
                                            <button class="btn btn-outline-secondary" name="cari" type="submit">Search</button>
                                        
                                    </form>
                                    </div>
                                    </div>
                                    <nav class="navbar navbar-light bg-light">
                                    <div class="container-fluid">
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" style="margin-left:auto;" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <img src="library/search.png" alt="" widht="20" height="30">
                                        </button>
                                    </div>
                                    </nav>
               

            <div class="card-header bg-dark text-white text-center">
                            DATA KATALOG BUKU PERPUSTAKAAN
            </div>
                        <div class="card-body"> 
                            <table class="table table-borderes table-striped">
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Buku</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                </tr>
                                    <?php $i = 1; ?>
                                    <?php  foreach( $perpus as $row ) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                        <td><?= $row["kode_buku"]; ?>
                                            <td><?= $row["judul"]; ?>
                                                <td><?= $row["pengarang"]; ?>
                                                   
                                                </td>
                                            </td>
                                        </td>
                                </tr>
                                             <?php $i++; ?>
                                            <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
        </div>
        <h1 class="text-judul"  style="margin-bottom:30px; margin-top:30px;">REKOMENDASI BUKU</h1>
            <div class="card-group">
                <div class="card" style="width: 18rem; margin-right:10px;">
                <img class="card-img-top" src="library/cardbuku1.jpeg" height="350" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Metodologi penelitian dan teknik penyusunan skripsi</h5>
                <p class="card-text">
                                    Pengarang buku : H. Abdurrahmat fathoni<br>
                                    Penerbit buku : PT. Rineka cipta<br>
                                    Tahun Terbit : Tahun 2006<br>
                                    Jumlah halaman : 105 halaman</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-right:10px;">
                <img class="card-img-top" src="library/cardbuku2.jpeg"  height="350" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Pengantar Filsafat Pendidikan</h5>
                <p class="card-text">Penulis : Drs. Uyoh sadulloh, M.Pd<br>
                                    Jumlah Halaman Buku : 183 halaman.<br>
                                    Tahun Terbit : September 2004</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-right:10px;">
                <img class="card-img-top" src="library/cardbuku3.jpeg" height="350" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Kamus Besar Bahasa Inggris</h5>
                <p class="card-text">Penulis : John M.Echols & Hassan Shadily<br>
                                    Jumlah Halaman Buku : 700 halaman<br>
                                    Penerbit buku : PT. Gramedia Jakarta<br>
                                    Tahun Terbit : Tahun 2000</p>
            </div><br><br>
        </div>
                
</div>

<script type="text/javascript" src="js/bootstrap.min.js">

</script>
    
</body>
</html>