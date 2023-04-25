<!DOCTYPE html>
<html>
<head>
  <title>Shopping Page</title>
  <link rel="stylesheet" type="text/css" href="css/proizvodiStyle.css">
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

  <h1>Products</h1>
  <div class="product-container">
    <div class="product">
      <img src="img/slikaCipela.jpg" alt="Cipele">
      <h2>Cipele</h2>
      <p>cena: 5600</p>
      <button onclick="dodajUKorpu('Cipele')">Dodaj u korpu</button>
    </div>
    <div class="product">
      <img src="img/slikaFarmerki.jpg" alt="Farmerke">
      <h2>Farmerke</h2>
      <p>cena: 4000</p>
      <button onclick="dodajUKorpu('Farmerke')">Dodaj u korpu</button>
    </div>
    <div class="product">
      <img src="img/slikaMajice.jpg" alt="Majica">
      <h2>Majica</h2>
      <p>cena: 2500</p>
      <button onclick="dodajUKorpu('Majica')">Dodaj u korpu</button>
    </div>
    <div class="product">
      <img src="img/slikaPatika.png" alt="Patike">
      <h2>Patike</h2>
      <p>cena: 11000</p>
      <button onclick="dodajUKorpu('Patike')">Dodaj u korpu</button>
    </div>
    <div class="product">
      <img src="img/slikaKosulje.jpg" alt="Kosulja">
      <h2>Kosulja</h2>
      <p>cena: 4200</p>
      <button onclick="dodajUKorpu('Kosulja')">Dodaj u korpu</button>
    </div>
  </div>

<div class="cart-container">
  <div id="cart-icon">&#128722;</div>
  <h1>Moja korpa  <span id="cart-items-count">0</span></h1>
  <ul id="cart-items"></ul>
</div>


  <script src="AJAX/shopping.js"></script>
</body>
</html>
