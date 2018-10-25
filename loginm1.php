<?php

session_start();

include_once 'bula.php';

if(isset($_POST['btn-signup']))

{   $owner=mysqli_real_escape_string($db,$_POST['owner']);

   $uid=mysqli_real_escape_string($db,$_POST['uid']);
 $uname = mysqli_real_escape_string($db,$_POST['uname']);
  $loc=mysqli_real_escape_string($db,$_POST['loc']);
 $number = mysqli_real_escape_string($db,$_POST['number']);
 $upass = md5(mysqli_real_escape_string($db,$_POST['upass']));
 
 
 if(mysqli_query($db,"INSERT INTO user(owner,ID,name,location,number,password) VALUES('$owner','$uid','$uname','$loc','$number','$upass')"))
 {
  ?>
        <script>alert(' signed up...');</script>
		
        <?php
		
 }
 else
 {
  ?>
        <script>alert('error while signing up...');</script>
        <?php
 }
}
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css1?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css1'>
    
    <link rel="stylesheet" href="css/normalize1.css">

    
    <link rel="stylesheet" href="css/style1.css">

    
    
    
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-image: url(images_14.jpg);
}
a:link {
	color: #000000;
}
a:hover {
	color: #CC9900;
}
.style1 {color: #000000}
h1 {
	color: #000000;
}
body,td,th {
	color: #000000;
}
-->
  </style></head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup" class="style1">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
	  
	  
      <div class="tab-content">
        <div id="signup">   
		  
          
          <form action="loginm1.php" method="post">
          
		  <div class="field-wrap">
              <label>
             <span class="style1" id="style1" style="height:30px">Are u a restaurant or orphanage owner?</span><span class="req">*</span>              </label>
              <input name="owner" type="text" style="height:60px">
            </div>
		  
          <div class="top-row">
            <div class="field-wrap">
              <label>
            <span class="style1" id="style1" style="height:30px">>ID<span class="req">*</span>              </label>
              <input name="uid" type="text" style="height:60px">
            </div>
        
            <div class="field-wrap">
              <label>
             <span class="style1" >Name<span class="req">*</span>              </label>
              <input name="uname" type="text" style="height:60px" >
            </div>
		  </div>
		  
		  <div class="field-wrap">
              <label>
             <span class="style1">Location<span class="req">*</span>              </label>
              <input name="loc" type="text" style="height:60px" >
            </div>
		  
		  
		  
		  
		  

          <div class="field-wrap">
            <label>
        <span class="style1">   Email<span class="req">*</span>            </label>
            <input name="number" type="email" style="height:60px" >
          </div>
          
          <div class="field-wrap">
            <label>            <span class="style1">Set A Password<span class="req">*</span>            </label>
            <input name="upass" type="password" style="height:60px" >
          </div>
		  
		 
         
		  <button type="submit" name="btn-signup" onclick="window.location.href='/comm1.php'">Continue</button>


		 
                    
		                                                
		   
		                                                
		   
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
         <span class="style1">Email<span class="req">*</span>            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
            <span class="style1"> Password<span class="req">*</span>            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
        <a href="get_started.html">  <button class="button button-block"/>Get started</button> </a>
		
		<a href="#">  <button class="button button-block"/>Log in</button> </a>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    

        

    
    
    
  </body>
</html>
