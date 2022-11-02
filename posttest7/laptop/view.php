<?php 
    include "../menu_utama.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laptop</title>
    <style>
	* {
    margin: 0;
    padding: 0;
  }
  h3{
    padding-top: 10px;
    font-size: 32px;
  }
    table th {
       text-align: center;
        background-color: #7DE5ED;
        color: black;
    }
    table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;
        margin-top: 10%;
        margin-left: auto;
        margin-right: auto;
        border: 2px solid black;
}
    table td, table th {
        border: 1px solid black;
        padding: 6px;
        width: 100px;
}
table tr td a {
  color: white;
}

    table tr:nth-child(even){background-color: #7DE5ED; color: white;}
    table tr:nth-child(odd){background-color: #7DE5ED; color: white;}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: white;
  text-align: center;
  font-size: 12px;
  padding: 10px;
  width: 120px;
  height: 30px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 2px;
  margin-bottom: 8%;
  position: absolute;
  left: 70%;
  top: 10%;
}
.button a {
  text-decoration: none;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button a {
	color: white;
	font-family: raleway;
}
.btn {
    background-color: red;
    border: none;
    color: white;
    padding: 5px 12px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 7px;
}
.btn:hover {
    background-color: red;
}
.edit a {
	color: white;
	text-decoration: none;
}
.hapus a {
	color: white;
	text-decoration: none;
}
.tambah {
  margin-top: 10%;
}


	</style>
  
 <form method="post">
</head>
<body class="body">

    <form action="" method="POST">
        <h3 align="center">Laptop</h3>
        <table align="center" border="0" class="table">
            <tr>
                <th>No</th>
                <th>Nama Laptop</th>
                <th>Harga Laptop</th>
                <th>Stok</th>
                <th>Gambar</th>
                <th>Tanggal</th>
                <th>change</th>
            </tr>

                <?php
                    $no = 1;
                    $tableBarang = mysqli_query($connect,"SELECT * FROM laptop INNER JOIN gambar ON laptop.id_laptop = gambar.id_laptop");
                    while($rowBarang = mysqli_fetch_array($tableBarang)){
                ?>

            <tr>
                <th><?= $no++ ?></th>
                <td><input type="text" size="15" readonly value="<?= $rowBarang['nama_laptop'] ?>"></td>
                <td><input type="text" size="15" readonly value="Rp.<?= $rowBarang['harga_laptop'] ?>"></td>
                <td><input type="text" size="15" readonly value="<?= $rowBarang['stok'] ?>"></td>
                <td><img width="60px" src="../img/<?=$rowBarang['file']?>" alt="<?=$rowBarang['file']?>"></td>
                <td><input type="text" size="15" readonly value="<?= $rowBarang['upload_on'] ?>"></td>
                <td><a href="update.php?id=<?= $rowBarang['id_laptop']?>">Edit</a> | <a href="delete.php?id=<?= $rowBarang['id_laptop'] ?>">Hapus</a></td>
            </tr>

                <?php }?>
        </table>
        </form>
    <br>
    <br>
</body>
</html>