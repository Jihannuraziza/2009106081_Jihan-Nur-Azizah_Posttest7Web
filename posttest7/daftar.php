<?php 
 
include 'koneksi/connection.php';
 
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password === $cpassword){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo"
            <script>
            alert('Username sudah Ada');
            document.location.href = 'regis.php';
            </script>
            ";
        }else {
            $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
            $result = mysqli_query($connect,$sql);

            if(mysqli_affected_rows($connect) > 0) {
                echo"
                <script>
                alert('Registrasi Berhasiil');
                document.location.href = 'login.php';
                </script>
                ";            
        } else {
            echo"
            <script>
            alert('Registrasi Gagal');
            document.location.href = 'regis.php';
            </script>
            ";
        }
    }
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Akun</title>
</head>
<body>
        <div class="container">
          <h1>Daftar</h1>
            <form method="POST" action="">

                <label>Username</label>
                <br>
                <input name="username" type="text" placeholder="Masukkan Username">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" placeholder="Masukkan Password">
                <br>
                <label>Konfirmasi Password</label>
                <br>
                <input name="cpassword" type="password" placeholder=" Konfirmasi Password">
                <br>
                <button type="submit" name="register">Daftar</button>
                <p> Sudah punya akun?
                  <a href="login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>