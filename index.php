<?php
include "klase/korisnik.php";
$user = new User();
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Baki SHOP</title>
        <link rel="stylesheet" href="css/indexStyle.css">
    </head>
    <body>
    <div class="navbar">
                <div class="logo">
                    <img src="img/shopLogo.PNG" width="160px">
                </div>
                <h1><?php if($user!=null){echo "   Dobrodošli, ". $user->getName(). "!";}else{echo "Dobrodosli";};?></h1>
                <nav>
                    <ul>
                        <li><a href="index.php">Glavna</a></li>
                        <li><a href="proizvodi.php">Proizvodi</a></li>
                        <li><a href="onama.php">O nama</a></li>
                        <li><a href="prijava.php">Prijava</a></li>
                    </ul>
                </nav>
    </div>
     <hr>
        <div class="containerGlavna">
            <div class="row">
                <div class="col-2">
                    <h1 class="moto">Nađite sve što Vam treba,<br>Kad god Vam treba!</h1><br>
                    <p class="poziv">Želite li da postanete naš član?</p><br>
                    <a href="prijava.php"><button class="dugmePrijava">Prijavite se</button></a>
                </div>
                <div class="col-2">
                    <img src="img/sf.png">
                </div>
            </div>
        </div>
    </body>