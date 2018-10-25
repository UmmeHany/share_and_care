<?php



include_once 'bula.php';

if(isset($_POST['btn-signup']))

{   $owner=mysqli_real_escape_string($db,$_POST['owner']);

   $uid=mysqli_real_escape_string($db,$_POST['uid']);
 $uname = mysqli_real_escape_string($db,$_POST['uname']);
  $loc=mysqli_real_escape_string($db,$_POST['loc']);
 $number = mysqli_real_escape_string($db,$_POST['number']);
 $upass = mysqli_real_escape_string($db,$_POST['upass']);
 
 
 if(mysqli_query($db,"INSERT INTO user(owner,ID,name,location,number,password) VALUES('$owner','$uid','$uname','$loc','$number','$upass')"))
 {
  ?>
        <script>alert(' signed up...');</script>
        <script> location.replace("comm1_1.php"); </script>
                
		
        <?php

echo "</br></br> successfully signed up... ";

		
 }
 else
 {
  ?>
        <script>alert('error while signing up...');</script>
        <?php
echo "</br></br> error while signing up... ";
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
	background-image: url(bi21.png);
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
      
      
      
         
          <h1>&#2475&#2509&#2480&#2495 &#2468&#2503 &#2488&#2494&#2439&#2472 &#2438&#2474 &#2453&#2480&#2497&#2472</h1>
          
          <form action="mylogin_1.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              
            <h4><font  size=3 color="black">&#2480&#2503&#2488&#2509&#2463&#2497&#2480&#2503&#2472&#2509&#2463 &#2437&#2469&#2476&#2494 &#2437&#2472&#2494&#2469&#2494&#2486&#2509&#2480&#2478&#2503&#2480 &#2437&#2471&#2453&#2494&#2480&#2496</h4></font>
			 <input name="owner" type="text" style="height:40px">
              
            </div>
        
            <div class="field-wrap">
             
             <h4><font  size=3 color="black">&#2474&#2480&#2495&#2458&#2527 &#2472&#2494&#2478&#2509&#2476&#2494&#2480</h4></font>
              <input name="uid" type="text" style="height:40px">
            </div>
          </div>

          <div class="field-wrap">
            
        <h4><font  size=3 color="black">&#2472&#2494&#2478</h4></font>
            <input name="uname" type="text" style="height:40px">
          </div>
          
          <div class="field-wrap">
            <h4><font  size=3 color="black">&#2437&#2476&#2488&#2509&#2469&#2494&#2472</h4></font>
            <input name="loc" type="text" style="height:40px">
          </div>
		  
		  <div class="field-wrap">
            <h4><font  size=3 color="black">&#2478&#2507&#2476&#2494&#2439&#2482 &#2472&#2494&#2478&#2509&#2476&#2494&#2480</h4></font>
            <input name="number" type="text" style="height:40px">
          </div>
		  
		  <div class="field-wrap">
            <h4><font  size=3 color="black">&#2474&#2494&#2488&#2451&#2527&#2494&#2480&#2509&#2465 &#2464&#2495&#2453 &#2453&#2480&#2497&#2472</h4></font>
            <input name="upass" type="password" style="height:40px">
          </div>
          
         
		  <button type="submit" name="btn-signup" class="button button-block">&#2486&#2497&#2480&#2497 &#2489&#2507&#2453</button>                                                 
		   
          
          </form>
                    

        </div>
        
        

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index1.js"></script>

    
    
    
  </body>
</html>
