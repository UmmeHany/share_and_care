






<?php


include_once 'bula.php';


if(isset($_POST['btn-login']))
{
 $num = mysqli_real_escape_string($db,$_POST['num']);
 $upass = mysqli_real_escape_string($db,$_POST['upass']);
 $res=mysqli_query($db,"SELECT password FROM user WHERE number='$num'");

 $row=mysqli_fetch_array($res);
 
 if($row['password']==$upass)
 {
	 
	 echo "</br></br>logged in successfully";
         
	 
	 ?>
         <script> location.replace("comm1_1.php"); </script>
	 
  
<?php

 }
 else
 {?>
  
        
		<?php
		echo "</br></br>!!!!!!! wrong details... can not log in!!!!!!!";
        
 }
 
}
?> 





<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up</title>
    <link href='http://fonts.googleapis.com/css1?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css1'>
    
    <link rel="stylesheet" href="css/normalize1.css">

    
    <link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script>

$(function(){ 
    $('.nav-tabs a').on('click', function (e) {
        e.preventDefault();
        $(this).tab('show');
    });  
});
</script>

    
    
    
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
      
       
	  
        
		  
          
          <form action="loginmod1_1.php" method="post">
          
		  <h1>&#2482&#2455 &#2439&#2472</h1>
           
		               <div class="field-wrap">
					   <h4>&#2478&#2507&#2476&#2494&#2439&#2482 &#2472&#2494&#2478&#2509&#2476&#2494&#2480<h4>
            <label>
         <span class="style1"><span class="req"></span>            </label>
            
			<input name="num" type="text" style="height:40px" >
          </div>
          
          <div class="field-wrap">
		  <h4>&#2474&#2494&#2488&#2451&#2527&#2494&#2480&#2509&#2465 &#2464&#2495&#2453 &#2453&#2480&#2497&#2472</h4>
            <label>
            <span class="style1"><span class="req"></span>            </label>
            <input name="upass" type="password" style="height:40px" >
          </div>
          
          
          
        
		
	
                   <button type="submit" name="btn-login" class="button button-block">&#2486&#2497&#2480&#2497 &#2489&#2507&#2453</button>
          
          </form>
          
          
       
        
     
      
</div> <!-- /form -->
    

        

    
    
    
  </body>
</html>

