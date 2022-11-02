<?php 
    include "../menu_utama.php";

    if(isset($_POST['create'])){
        $namaMenu = $_POST['nama_laptop'];
        $hargaMenu = $_POST['harga_laptop'];
        $stok = $_POST['stok'];

        $query = mysqli_query($connect, "INSERT INTO laptop (nama_laptop, harga_laptop, stok) VALUES ('$namaMenu','$hargaMenu','$stok')");
        if(!empty($_FILES['gambar']['name'])){
          $query = mysqli_query($connect,"SELECT * FROM laptop WHERE nama_laptop='$namaMenu'");
          $result = mysqli_fetch_assoc($query);
          $id = $result['id_laptop'];
          $nama = $_POST['nama_laptop'];
          $waktu = $_POST['waktu'];
          $gambar = $_FILES['gambar']['name'];
          $x = explode('.',$gambar);
          $ekstensi = strtolower(end($x));
          $gambar_baru = "$nama.$ekstensi";
          $tmp = $_FILES['gambar']['tmp_name'];
          if(move_uploaded_file($tmp,"../img/$gambar_baru")){
            $query = mysqli_query($connect,"INSERT INTO gambar (id_laptop,nama_laptop,upload_on, file) VALUES ($id,'$nama','$waktu', '$gambar_baru');");
            if($query){
            echo"Data Berhasil di Tambah";
              header("Location:view.php");
            } else {
              echo "Tambah data error";
            }
          }
        }
      }
      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masukkan Barang</title>
    <style>
	* {
		margin: 0;
		padding: 0;
	}
		table th {
			 text-align: center;
    		background-color: #ffdb4f;
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
    		width: 2px;
}
table tr td a {
  color: white;
}

	table tr:nth-child(even){background-color: #2f4b5b; color: white;}
    table tr:nth-child(odd){background-color: #2f4b5b; color: white;}
	table tr:hover,table tr:hover a{background-color: white; color: black;
}
	</style>    
</head>
<body class="body">
    <section class="center">
        <form action="" method="POST"  enctype="multipart/form-data" class="box">
            <h3 align="center">Barang laptop yang di tambah</h3>
            <table border="0" align="center">
                <tr>
                    <td>Nama Laptop</td>
                    <td><input type="text" name="nama_laptop" required></td>
                </tr>
                <tr>
                    <td>Harga Laptop</td>
                    <td><input type="number" name="harga_laptop" required></td>
                </tr>

                <tr>
                    <td>Stok Menu</td>
                    <td><input type="number" name="stok" required></td>
                </tr>
                <tr>
                    <td>Nama File</td>
                    <td><input type="text" name="nama_gambar" required></td>
                </tr>
                <tr>
                    <td>File</td>
                    <td><input type="file" name="gambar" required></td>
                    <input type="datetime"  value="<?php echo date("Y-m-d\TH:i:s"); ?>" hidden name="waktu">
                </tr>

                <tr>
                    <td align="center" colspan="2"><hr><input type="submit" name="create" value="Insert"> <a href="view.php">Back</a></td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>