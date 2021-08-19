<?php
require  'config/koneksi.php';

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    
    $kodebuku = htmlspecialchars($data["kode_buku"]);
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);


    $query = "INSERT INTO perpusguru
                    VALUES
                ('', '$kodebuku', '$judul', '$pengarang' )
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM perpusguru WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $kodebuku = htmlspecialchars($data["kode_buku"]);
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);


    $query = "UPDATE perpusguru SET
                kode_buku = '$kodebuku',
                judul = '$judul',
                pengarang = '$pengarang'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}


function cari($keyword) {
    $query = "SELECT * FROM perpusguru 
                WHERE
                judul LIKE '%$keyword%' OR 
                kode_buku LIKE '%$keyword%' OR
                pengarang LIKE '%$keyword%'
                ";

        return query($query);
}



?>