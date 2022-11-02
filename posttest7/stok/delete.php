<?php
    include "../koneksi/connection.php";

    $idpasok = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM stok WHERE id_laptop='$idpasok'");

    if($query){
        echo"Jenis Berhasil di Delete";
        header("location:view.php");
    } else {
        echo"Jenis Gagal di Delete";
        header("location:index.php");
    }

?>
