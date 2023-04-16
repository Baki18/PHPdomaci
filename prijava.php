
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Baki SHOP</title>
        <link rel="stylesheet" href="css/prijavaStyle.css">
    </head>
    <body>
        <div class="navbar">
                    <div class="logo">
                        <img src="img/shopLogo.PNG" width="160px">
                    </div>
                    <nav>
                    <h1 class="porukaDobrodoslice">
                    <?php
                        session_start();
                        if(isset($_POST['korIme']) && isset($_POST['lozinka'])){
                            $un = $_POST['korIme'];
                            $pw = $_POST['lozinka'];
                            echo "Dobrodošli, $un!";
                        }
                    ?>
                    </h1>
                        <ul>
                            <li><a href="index.php">Glavna</a></li>
                            <li><a href="">Proizvodi</a></li>
                            <li><a href="onama.php">O nama</a></li>
                            <li><a href="prijava.php">Prijava</a></li>
                        </ul>
                    </nav>
        </div>
        <div class="containerLogin">
            <h1 class="naslov">Unesite podatke</h1>
            <form class="formPrijava" method="post">
                <label for="ime" class="nazivInputa">Korisničko ime:</label><br>
                <input type="text" id="ime" name="korIme" class="unos"><br>
                <label for="loz" class="nazivInputa">Lozinka:</label><br>
                <input type="password" id="loz" name="lozinka" class="unos"><br>
                <button type="submit" class="dugmePrijava">Prijavite se</button>
            </form>
        </div>
    </body>
    
    