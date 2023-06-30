<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
  $loggedin= true;
}
else {
  $loggedin = false;
}

echo '<nav class="navbar navbar-expand-lg navbar-cyan bg-black">
  <div class="container-fluid">
    <a class="navbar-brand" href="/loginsystem/welcome.php">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/loginsystem/welcome.php">Home</a>
        </li>';

        if(!$loggedin)
        {
        echo '<li class="nav-item">
          <a class="nav-link" href="/phpt/phpChatBot%20(1)/home.php">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/loginsystem/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/loginsystem/signin.php">SignUp</a>
        </li>';
        }
        if($loggedin)
        {
        echo '
        
        <li class="nav-item">
          <a class="nav-link" href="/phpt/phpChatBot%20(1)/indx.php">Chatbot</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/loginsystem/logout.php">Logout</a>
        </li>';
        }
       
      echo '</ul>
     
      </form>
    </div>
  </div>
</nav>';
?>