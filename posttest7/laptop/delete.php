<?php
    include "../koneksi/connection.php";

    $idMenu = $_GET['id'];

    $tableGambar = mysqli_query($connect, "SELECT * FROM images WHERE id_laptop='$idMenu'");
    $rowGambar = mysqli_fetch_array($tableGambar);
    $idGambar = $rowGambar['id'];
    $fileLama = $rowGambar['file'];
    unlink('../img/'.$fileLama);
    $query = mysqli_query($connect, "DELETE images FROM images INNER JOIN laptop ON laptop.id_laptop = images.id_laptop WHERE laptop.id_laptop='$idMenu'");
    $query1 = mysqli_query($connect, "DELETE FROM menu WHERE id_laptop='$idMenu'");
        
        if($query && $query1){
            echo"Data Berhasil di Delete";
            header("location:view.php");
        } else {
            echo"Data Gagal di Delete";
            header("location:view.php");
        }
?>