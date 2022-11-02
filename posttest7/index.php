<?php

    include "koneksi/connection.php";
	if(!isset($_SESSION['login'])){
		header("Location: login.php");
        exit;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Laptop Store </title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/147e95360f.js" crossorigin="anonymous"></script>
        <script src="jquery.js"></script>
        <script src="js.js"></script>
 	<style>
 	* {
 		box-sizing: border-box;
 	}
 	.header h1{
 		font-size: 40px;
 		font-family: raleway;
 	}
 	h1 {
 		text-align: center;
 		font-family: raleway;
 	}
 	body {
        background-color: #7DE5ED;
 		background-size: 100% 100%;
 		margin: 0px;
 	}
 	nav {
 		padding: 15px;
 		font-family: raleway;
 		box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
 	}
 	#nav-1 {
 		background: #7DE5ED;
 	}
 	.nav {
 		transition: 0.3%;
 		background: #7DE5ED;
 		color: #000000;
 		font-size: 20px;
 		text-decoration: none;
 		border-top: 4px solid #7DE5ED;
 		border-bottom: 4px #7DE5ED;
 		padding: 3px;
 		margin: 10px;
 	}
 	.nav:hover {
 		color: blue;
 		padding: 6px 0;
 	}
 	.style-kotak2 {
 		margin-top: 50px;
 		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
 		padding: 20px;
 		text-align: center;
 		background-color: white;
 		height: 70px;
 		border-radius: 10px;
 	}
 	.kotak2 {
 		height: 500px;
 		padding-bottom: 10px;
 		padding: 100px;
 		background-color: white
 	}
 	</style>
<body>
    <header class="header">
        <h1>Laptop Store</h1>
        <nav class="navbar-nav">
            <div class="isi">   
                <div class="kiri">
                    <label>
                    <div><b class="left"></b></div>
                    </label>
                </div>
                <nav id="nav-1">
 		<a class="nav" href="menu_utama.php">Home</a>
 		<a class="nav" href="#">Shop</a>
 		<a class="nav" href="laptop/view.php">Laptop</a>
 		<a class="nav" href="stok/view.php">stok</a>
		<a class="nav" href="logout.php">Logout</a>
            <button id="btn-info">Tema</button>
            <button id="btn1">Show Barang</button>
         </div>
         </div>  
        </nav>  
    </header>
    <content>              
        <div class="buttonsec1"><button id="btn-more"> Tombol Darurat </button></div>
        <div id="section1">
                    <h3 id="our">  Product Laptop </h3>
                    <div class="product">
                        <div>
                            <img src="https://i.pinimg.com/564x/97/22/e0/9722e02596c4fba3b506c33fc50a4cc9.jpg" alt="Laptop"> 
                            <p> Notebook lenovo idea pad S145 </p>
                            <p1> Rp 10.000,000,- </p1>
                        </div>
                        <div class="img2">
                            <img src="https://i.pinimg.com/564x/24/cd/83/24cd83ecb4afcd32b1e1cbb378941517.jpg" alt="Laptop"> 
                            <p>  Asus ChromeBook </p>
                            <p1> Rp 8.000,000,- </p1>
                        </div>
                    </div>
                    <div class="btn-beli"><button><a href="form/form.php"> BUY </a></button></div>
                </div>
            </content>
        <footer>
            <h3> Laptop Store </h3>
            <img src="css/logo1.jpeg" alt="logo">
            <br>
        </footer>
        <div class="bottom">
</body>
</html>
