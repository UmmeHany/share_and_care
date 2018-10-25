

<?php


include_once 'bula.php';


if(isset($_POST['btn-login']))
{
 $num = mysqli_real_escape_string($db,$_POST['num']);
 $upass = mysqli_real_escape_string($db,$_POST['upass']);
 $res=mysqli_query($db,"SELECT password FROM user WHERE number='$num'");

 $row=mysqli_fetch_array($res);
 
 if($row['password']==$upass)
 { ?>
 
     <script> location.replace("comm1.php"); </script>
	 
	 echo "</br></br>logged in successfully";
        
	 
	 
	 
  
<?php


 }
 else
 {
  
        
		
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
      
       
	  
        
		  
          
          <form action="loginmod1.php" method="post">
          
		  <h1>Log in</h1>
           
		               <div class="field-wrap">
					   <h4>Number<h4>
            <label>
         <span class="style1"><span class="req"></span>            </label>
            
			<input name="num" type="text" style="height:40px" autocomplete="on">
          </div>
          
          <div class="field-wrap">
		  <h4>Password</h4>
            <label>
            <span class="style1"><span class="req"></span>            </label>
            <input name="upass" type="password" style="height:40px" autocomplete="on" >
          </div>
          
          
          
        
		
	
                   <button type="submit" name="btn-login" class="button button-block">Log in</button>
                   
          
          </form>
          
       
        
     
      
</div> <!-- /form -->
    

        

    
    
    
  </body>
</html>
