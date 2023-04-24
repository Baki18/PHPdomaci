<?php

include "dbConn.php";

if (isset($_POST['submit'])) {
    $naziv = $_POST['naziv'];
    $cena = $_POST['cena'];
    $opis = $_POST['opis'];
    $korId = $_POST['korId'];

    $sql = "INSERT INTO komentari VALUES ('$naziv', '$cena', '$opis', '$korId')";

    $result = mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Baki SHOP</title>
        <link rel="stylesheet" href="css/indexStyle.css">
        <style>
            .navbar ul li a{
                color: #fff;
            }
        </style>
    </head>
<body>
    <div class="navbar">
                <div class="logo">
                    <img src="img/shopLogo.PNG" width="160px">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Glavna</a></li>
                        <li><a href="proizvodi.php">Proizvodi</a></li>
                        <li><a href="onama.php">O nama</a></li>
                        <li><a href="prijava.php">Prijava</a></li>
                    </ul>
                </nav>
    </div>
</body>
<head>
    <title>Ostavite komentar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f00;
        }

        .form-group label {
        }

        .form-control {
            border: 2px solid #000;
            padding: 8px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Ostavite komentar</h1>
        <form method="post">
            <div class="form-group">
                <label for="naziv"><b>Naziv:</b></label>
                <input type="text" class="form-control" id="naziv" name="naziv" required>
            </div>
            <div class="form-group">
                <label for="cena"><b>Cena:</b></label>
                <input type="number" class="form-control" id="cena" name="cena" step="10" required>
            </div>
            <div class="form-group">
                <label for="opis"><b>Komentar:</b></label>
                <textarea class="form-control" id="opis" name="opis" rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
                <label for="korId"><b>Korisnikov ID:</b></label>
                <input type="number" class="form-control" id="korId" name="korId" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Potvrdi</button>
            <button type="submit" class="btn btn-primary" name="deletebtn" id="deletebtn">Obriši komentare</button>
        </form>
    </div>
</body>
<head>
    <title>Podaci baze podataka</title>
    <style>
        body {
            background-color: #FFD8D0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #D2D2D2;
        }
    </style>
</head>
<body>
    <h1>Prethodni komentari</h1>
    <?php
        $mysqli = new mysqli("localhost", "root", "", "kolokvijumi");

        if($mysqli->connect_error){
            die("Connection failed: " . $mysqli->connect_error);
        }

        $stmt = $mysqli->prepare("SELECT * FROM komentari");
        $stmt->execute();

        $stmt->bind_result($naziv, $cena, $opis, $korId); 

        echo "<table>";
        echo "<tr>";
        echo "<th>Naziv proizvoda</th>";
        echo "<th>Cena</th>";
        echo "<th>Komentar</th>";
        echo "<th>Korisnikov ID</th>";
        echo "</tr>";

        while($stmt->fetch()){
            echo "<tr>";
            echo "<td>$naziv</td>";
            echo "<td>$cena</td>";
            echo "<td>$opis</td>";
            echo "<td>$korId</td>";
            echo "</tr>";
        }

        echo "</table>";

        $stmt->close();
        $mysqli->close();
    ?>
</body>
</html>
