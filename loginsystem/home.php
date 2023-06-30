<?php


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
      /* Add styles for the header section */
      header {
        background-color: #334;
        color: white;
        padding: 20px;
        text-align: center;
      }
      body {
        background-image: url('https://png.pngtree.com/back_origin_pic/04/30/31/5c2031482b4ddaebad80545e0550cb04.jpg');
        background-size: cover;
        background-repeat: no-repeat;
      }

      /* Add styles for the products section */
      .products {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .product {
        background-color: #f2f2f2;
        border: 1px solid black;
        width: 30%;
        height: 500px;
        margin-bottom: 20px;
        text-align: center;
      }

      .product img {
        width: 50%;
        margin: 20px auto;
      }

      .product h3 {
        font-size: 20px;
        margin-top: 20px;
      }

      .product p {
        font-size: 16px;
        margin: 20px;
      }

      #locked-div {
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
      }

      #locked-div a {
        font-size: 18px;
        font-weight: bold;
        margin: 0;
      }


      /* Add styles for the footer section */
      footer {
        background-color: #334;
        color: white;
        padding: 20px;
        text-align: center;
        position: static;
        bottom: 0;
        width: 100%;
      }
    </style>



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E-commerce</title>
  </head>
  <body>
  
  <?php require 'partials/_nav1.php' ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


    <header>
      <h1>Shopping Website</h1>
    </header>
    <section class="products">
      <div class="product">
        <img src="https://m.media-amazon.com/images/I/81iiPvmfJvL._UL1500_.jpg " alt="Product 1">
        <h5>FUNDAY FASHION</h5>
        <p>Full Sleeve Blue Solid Women's Denim Jacket</p>
      </div>
      <div class="product">
        <img src="https://m.media-amazon.com/images/I/41NOmQp3Y1L.jpg" alt="Product 2">
        <h3>neha enterprises</h3>
        <p>King and Queen Cute Hoodie Gifts for Wife</p>
      </div>
      <div class="product">
        <img src="https://m.media-amazon.com/images/I/41jQo1MTQuL.jpg" alt="Product 3">
        <h3>adhyah</h3>
        <p>Chef Coat for Men Women Professional Hotel Chef Dress for Men Women Chef Coat Cotton Full Sleeves</p>
      </div>
    </section>

    <section class="products">
      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/61zOLIyUiaL._UL1500_.jpg" alt="Product 4">
        <h5>TheYaYaCafe</h5>
        <p>TheYaYaCafe Best Matching Family T-Shirts for Mom, Dad and Kid/Son/Daughter Set of 3</p>
      </div>
      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/51TamxZJklL._UL1000_.jpg" alt="Product 5">
        <h3>More & More</h3>
        <p>More & More Unisex-Child Regular Fit White Printed Tshirt</p>
      </div>
      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/61bmwT56eWL._UL1250_.jpg" alt="Product 6">
        <h3>Zombom</h3>
        <p>Zombom Combo of Men's Regular Fit Cotton Casual Shirts (Pack of 2)</p>
      </div>
    </section>
    <div id="locked-div">
    <a href="/loginsystem/login.php">Login to continue</a>
    </div>
    <footer>
      <p>&copy; Shopping Website 2023</p>
    </footer>
  </body>
</html>

