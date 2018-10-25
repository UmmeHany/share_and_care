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
 {?>
  
        
        
		<script> location.replace("comm1.php"); </script>
                <?php
        


		
 }
 else
 {
 
 
        
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
      
       
	  
      
	<h1>Sign Up</h1>	  
          
          <form action="mylogin.php" method="post">
                 </label>
				   <div class="field-wrap">
				 <h4>Are you a restaurant or orphanage owner?</h4>
              <label>
			 <span class="style1" id="style1" style="height:30px"></span><span class="req"></span>  
              </div>
		 <div class="field-wrap">
              <label>
             <span class="style1" id="style1" style="height:30px"></span><span class="req"></span>              </label>
              <input name="owner" type="text" style="height:30px">
            </div>
		  
		  
          <div class="top-row">
            <div class="field-wrap">
			<h4>ID</h4>
              <label>
			  
            <span class="style1" id="style1" style="height:30px"><span class="req"></span>              </label>
              <input name="uid" type="text" style="height:30px">
            </div>
        
            <div class="field-wrap">
			
			 <h4>Name</h4>
              <label>
			  
             <span class="style1" ><span class="req"></span>              </label>
              <input name="uname" type="text" style="height:30px" >
            </div>
		  </div>
		  
		  <div class="field-wrap">
		   <h4>Location</h4>
              <label>
			 
             <span class="style1"><span class="req"></span>              </label>
              <input name="loc" type="text" style="height:30px" >
            </div>
		  
		  
		  
		  
		  

          <div class="field-wrap">
		  <h4>Number</h4>
            <label>
			
        <span class="style1"><span class="req"></span>            </label>
            <input name="number" type="text" style="height:30px" >
          </div>
          
          <div class="field-wrap">
		  <h4>Set a password</h4>
            <label>            <span class="style1"><span class="req"></span>            </label>
            <input name="upass" type="password" style="height:30px" >
			
			 
			
          </div>
		  
		 
         
		  <button type="submit" name="btn-signup" class="button button-block">Signed Up</button>


		 
                    
		                                                
		   
		                                                
		   
          
          </form>
          
        </div>
        
        
      

    

        

    
    
    
  </body>
</html>
