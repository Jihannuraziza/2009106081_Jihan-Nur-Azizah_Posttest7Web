<?php 
 
include 'koneksi/connection.php';
 
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
 

    $result = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['login'] = true;
            header("Location: index.php");
            exit;
        }
}
$error = true;
}
 
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
          <h1>Login</h1>
          <?php
          if(isset($error)){
            echo "<p style='color: red;'> Username atau password salah!</p>";
          }
          ?>
            <form method="POST" action="">

                <label>Username</label>
                <br>
                <input name="username" type="text" placeholder="Masukkan Username" required>
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" placeholder="Masukkan Password" required>
                <br>
                <button type="submit" name="login">Log In</button>
                
                <p> Belum punya akun?
                  <a href="daftar.php">Daftar di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>