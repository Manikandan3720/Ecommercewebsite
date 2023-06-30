<?php
date_default_timezone_set('Asia/Kolkata');
include('database.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>

   <style>
   header {
        background-color: #334;
        color: white;
        padding: 20px;
        text-align: center;
      }
    
      .sidebar {
        position: absolute;
        top: 140px;
        left: 10px;
        bottom: 8%;
        width: 360px;
        background-color: red;
      }

      .box {
        padding: 10px;
        margin: 10px;
        background-color: #fff;
        border: 1px solid black;
      }
      
      .help{
        color: #333; 
        font-size: 16px;
        line-height: 1.5; 
        text-align: justify; 
        font-family: Arial, sans-serif; 
        background-color: #f5f5f5; 
        padding: 10px; 
        border: 1px solid #ccc; 
        border-radius: 5px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

      }


	  footer {
        background-color: #334;
        color: white;
        padding: 20px;
        text-align: center;
        position: absolute;
        top: 700px;
        bottom: 0;
        width: 100%;
        height: 50px;
      }

	  </style>

      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>Chatbot</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link href="style.css" rel="stylesheet">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

	    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-black bg-black">
   <div class="sidebar">
  <div class="box">
    <h4 style="text-align: center;color: #666; font-weight: bold; text-transform: uppercase;">Help Section!</h4>

    <p class="help">Type 1 to get Website Information.<br>Type 2 to get Owner Information.<br>Type 3 for Sponsor of this website.<br> </p>
    <p class="help">
    For SignUp Related information Type Signup or Register. <br>
    For login related information Type Login. <br>
    To get know usefull of login in to website type Use.
    </p>
    <p class="help">You can talk with our chatbot by saying the command like: HI or Hello or Hola,
    How are you ,what is your name or whats your name, Where are you from, Bye or See you late or Have a Good Day.
    </p>
  </div>
</div>

  <div class="container-fluid">
    <a class="navbar-brand" href="/loginsystem/welcome.php">E-commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/loginsystem/welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indx.php">Chatbot</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/loginsystem/logout.php">Logout</a>
        </li>
      
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
--> <!-- Bootstrap CSS -->


   
   <header> 
      <h4>Chatbot</h4>
    </header>
      <div class="container">
         <div class="row justify-content-md-center mb-4">
            <div class="col-md-6">
               <!--start code-->
               <div class="card">
                  <div class="card-body messages-box">
					 <ul class="list-unstyled messages-list">
							<?php
							$res=mysqli_query($con,"select * from message");
							if(mysqli_num_rows($res)>0){
								$html='';
								while($row=mysqli_fetch_assoc($res)){
									$message=$row['message'];
									$added_on=$row['added_on'];
									$strtotime=strtotime($added_on);
									$time=date('h:i A',$strtotime);
									$type=$row['type'];
									if($type=='user'){
										$class="messages-me";
										$imgAvatar="user_avatar.png";
										$name="Me";
									}else{
										$class="messages-you";
										$imgAvatar="bot_avatar.png";
										$name="Chatbot";
									}
									$html.='<li class="'.$class.' clearfix"><span class="message-img"><img src="image/'.$imgAvatar.'" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">'.$name.'</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'.$time.'</span></small> </div><p class="messages-p">'.$message.'</p></div></li>';
								}
								echo $html;
							}else{
								?>
								<li class="messages-me clearfix start_chat">
								   Please start
								</li>
								<?php
							}
							?>
                    
                     </ul>
                  </div>
                  <div class="card-header">
                    <div class="input-group">
					   <input id="input-me" type="text" name="messages" class="form-control input-sm" placeholder="Type your message here..." />
					   <span class="input-group-append">
					   <input type="button" class="btn btn-primary" value="Send" onclick="send_msg()">
					   </span>
					</div> 
                  </div>
               </div>
               <!--end code-->
            </div>
         </div>
      </div>
      <script type="text/javascript">
		 function getCurrentTime(){
			var now = new Date();
			var hh = now.getHours();
			var min = now.getMinutes();
			var ampm = (hh>=12)?'PM':'AM';
			hh = hh%12;
			hh = hh?hh:12;
			hh = hh<10?'0'+hh:hh;
			min = min<10?'0'+min:min;
			var time = hh+":"+min+" "+ampm;
			return time;
		 }
		 function send_msg(){
			jQuery('.start_chat').hide();
			var txt=jQuery('#input-me').val();
			var html='<li class="messages-me clearfix"><span class="message-img"><img src="image/user_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Me</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+txt+'</p></div></li>';
			jQuery('.messages-list').append(html);
			jQuery('#input-me').val('');
			if(txt){
				jQuery.ajax({
					url:'get_bot_message.php',
					type:'post',
					data:'txt='+txt,
					success:function(result){
						var html='<li class="messages-you clearfix"><span class="message-img"><img src="image/bot_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Chatbot</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+result+'</p></div></li>';
						jQuery('.messages-list').append(html);
						jQuery('.messages-box').scrollTop(jQuery('.messages-box')[0].scrollHeight);
					}
				});
			}
		 }
      </script>
      
	   <footer>
      <p>&copy; Shopping Website 2023</p>
    </footer>
  </body>
   </body>
</html>