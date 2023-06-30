<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: login.php");
  exit();
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - <?php echo $_SESSION['username']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      /* Navbar styles */
nav {
    background-color: #333;
    height: 50px;
    display: flex;
    justify-content: center;
  }
  
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
  }
  
  nav li {
    margin: 0 10px;
  }
  
  nav a {
    color: #fff;
    text-decoration: none;
  }
  
  /* Section styles */
  section {
   
    padding: 20px;
    margin: 20px;
  }
  
  /* Media queries */
  @media only screen and (max-width: 768px) {
    /* Navbar styles */
    nav {
      height: auto;
    }
  
    nav ul {
      flex-direction: column;
      height: auto;
    }
  
    nav li {
      margin: 10px 0;
    }
  
    /* Section styles */
    section {
      margin: 20px 10px;
    }
  }

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
        justify-content: space-evenly;
      }

      .product {
        position: sticky;
        background-color: #f2f2f2;
        border: 1px solid black;
        width: 30%;
        height: 550px;
        margin-bottom: 20px;
        text-align: center;
      }

      .product img {
        position: sticky;
        width: 40%;
        border: 1px solid black;
        margin: 20px auto;
      }

      .product h3 {
        position: sticky;
        font-size: 20px;
        margin-top: 20px;
      }

      .product p {
        position: sticky;
        font-size: 16px;
        margin: 20px;
      }

      .c-button {
        position: sticky;
        display: block;
        margin: 10px auto;
        
      }

      .buy-now {
        position: sticky;
        
        width: 100px; /* or width: 100%; */
        height: 50px;
        background-color: #13e54b;
        color:#333;
        border:red;
        border-radius: 10px;
        
      }
       
      
      .section1 {
        width: 100%;
        overflow-x: scroll;
      }
      
      .scrollable {
        white-space: nowrap;
      }
      
      .scrollable img {
        width: 100%;
        max-width: 300px;
        height: auto;
        display: inline-block;
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
    
    <title>E-commerce logged in </title>

  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <div id="header-container">
    <header>
      <h1>Shopping Website</h1>
    </header>
    </div>
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
      <p>Hey how are you doing? Welcome to Ecommerce website. You are logged in as <?php echo $_SESSION['username']?>. Aww yeah, you successfully read this important alert message.</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="/loginsystem/logout.php"> using this link.</a></p>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
    <script>
    function buyProduct() {
        // Add your code to handle the buy button click event here
        alert("Successfully bought the product!");
    }
    </script>
    
    <section class="products">
      <div class="product">
        <img src="https://m.media-amazon.com/images/I/81iiPvmfJvL._UL1500_.jpg " alt="Product 1">
        <h5>FUNDAY FASHION</h5>
        <p>Full Sleeve Blue Solid Women's Denim Jacket</p>
        <h3>₹738</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>

      <div class="product">
        <img src="https://m.media-amazon.com/images/I/41NOmQp3Y1L.jpg" alt="Product 2">
        <h3>neha enterprises</h3>
        <p>King and Queen Cute Hoodie Gifts for Wife</p>
        <h3>₹454</h3>
      <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
        </div>

      <div class="product">
        <img src="https://m.media-amazon.com/images/I/41jQo1MTQuL.jpg" alt="Product 3">
        <h3>adhyah</h3>
        <p>Chef Coat for Men Women Professional Hotel Chef Dress for Men Women Chef Coat Cotton Full Sleeves</p>
        <h3>899₹</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>

    </section>

    <section class="products">
      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/61zOLIyUiaL._UL1500_.jpg" alt="Product 4">
        <h5>TheYaYaCafe</h5>
        <p>TheYaYaCafe Best Matching Family T-Shirts for Mom, Dad and Kid/Son/Daughter Set of 3</p>
        <h3>₹2339</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>

      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/51TamxZJklL._UL1000_.jpg" alt="Product 5">
        <h3>More & More</h3>
        <p>More & More Unisex-Child Regular Fit White Printed Tshirt</p>
        <h3>₹499</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>
      

      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/61bmwT56eWL._UL1250_.jpg" alt="Product 6">
        <h3>Zombom</h3>
        <p>Zombom Combo of Men's Regular Fit Cotton Casual Shirts (Pack of 2)</p>
        <h3>₹1466</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/51IwhPipCpL._AC_UL600_FMwebp_QL65_.jpg" alt="Product 7">
        <h5>ME VENTURES</h5>
        <p>Regular Fit Half Sleeves Round Neck Printed T-Shirts for Men Women Black</p>
        <h3>₹599</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>

      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/71jMT4TD8OL._UL1500_.jpg" alt="Product 8">
        <h5>FABIOUS</h5>
        <p>Unisex Round Neck Plain T-Shirt | Combed Bio-Washed Ring Spun Cotton for Men & Women, Short Sleeves</p>
        <h3>₹389</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>
      

      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/51-4VSIXc9L._UL1124_.jpg" alt="Product 9">
        <h5>ME VENTURES</h5>
        <p>T-Shirt for Men Women Half Sleeve Regular Fit Round Neck Black |Pure-Cotton| Peaky Blinders</p>
        <h3>₹799</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>
    </section>

    <section class="products">
    <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/71CQOAZoxKL._UL1500_.jpg" alt="Product">
        <h5>Besick</h5>
        <p>Besick Oversized Cotton Tshirt Casual PlainTshirt Korean Fit for Men for Women Box fit Boxy fit Drop Shoulder</p>
        <h3>₹583</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>

      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/51QUQvN5LgL._AC_UL600_FMwebp_QL65_.jpg" alt="Product">
        <h5>Generic</h5>
        <p>Men's Digital Printed Rayon Shirt TBC 1032</p>
        <h3>₹999</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>

      <div class="product">
        <img src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/81xgXa0ZccL._AC_UL600_FMwebp_QL65_.jpg" alt="Product">
        <h5>Hangout Hub</h5>
        <p>Anniversary Edition | Men's & Women's Cotton Printed Regular Fit T-Shirts</p>
        <h3>₹599</h3>
        <div class="c-button">
        <button class="buy-now" onclick="buyProduct()">Buy Now</button>
        </div>
      </div>

    </section>
      
    
   

    <footer>
      <p>&copy; Shopping Website 2023</p>
    </footer>

  </body>
</html>