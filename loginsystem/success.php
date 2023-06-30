
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .item:link, .item:visited
        {
            background-color: green;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            }

            .item:hover, .item:active {
            background-color: red;
            }

        }
        .container {
        font-family: arial;
        font-size: 24px;
        margin: 25px;
        width: 350px;
        height: 200px;
        outline: dashed 1px black;
        }
    </style>
  </head>
  <body>
  
    

    <?php  
    echo '<script type="text/javascript">';
    echo ' alert("Success! Your account is created")'; 
    echo '</script>';
    ?>

        <div class="container">
        <li class="item1">
          <a class="item" href="/loginsystem/login.php">Click here to login</a>
        </li>
        </div>





    </body>
</html>