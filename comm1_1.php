<?php
include("bula.php");
if(isset($_POST['submit']))
{
 $name1=mysqli_real_escape_string($db,$_POST['name1']);
 $des1=mysqli_real_escape_string($db,$_POST['des1']);
 
 if(mysqli_query($db,"INSERT INTO comment(name,des) VALUES('$name1','$des1')"))
 {
  ?>
        <script>alert('successfully inserted ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while inserting...');</script>
        <?php
 }
}
 
 
 
 
?>


<?php




$sql = "select name,des,dt from comment ";
$result = mysqli_query($db, $sql);

    // output data of each row
	$i=0;
    while($row = mysqli_fetch_assoc($result)) {
        $name[$i] = $row['name'];
	$des[$i] = $row['des'];
	$dt[$i]=$row['dt'];
	$i++;
}



?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>CHAT EXAMPLE</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">


   
    

    
    
    
  
<!--
body {
	background-image: url(pattern.jpg);

}
.style2 {color: #000000}
a:link {
	color: #000000;
}
h1 {
	color: inherit;
}
.style3 {color: #FFFFFF}
-->
</style></head>
<body style="font-family:Verdana">
  <div class="container">
<div class="row " style="padding-top:40px;">
    <h3 class="text-center style3" >&#2478&#2472&#2509&#2468&#2476&#2509&#2479 &#2476&#2495&#2472&#2495&#2478&#2527 &#2439&#2468&#2495&#2489&#2494&#2488</h3>
	
	 
	
	
	<form name="comment" method="post" action="comm1.php" onSubmit="return validation()">
            <div class="panel-footer">
                <div class="input-group">
                                    <input name="name1"  type="text" class="form-control" placeholder="Enter name" />
									
                                    
              
  </div>
        </div>
	
	
	
	
     
	 
	 
	 
	 
	 
	
	
	<br/> <br/>
	

	
	
	
	
      
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	
	
	
    <div class="col-md-8">
	<div class="panel panel-info">
	
	
	
            <div class="panel-heading">
			
			
			
			
			
			
			
			
			
			
                &#2478&#2472&#2509&#2468&#2476&#2509&#2479
            <span class="style2"></span></div>
            <div class="panel-body">
<ul class="media-list">






                                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
											
                                                <a class="pull-left" href="#">
                                                    
                                                </a>
												
                                                <div class="media-body" >
												
												
												
												
                                        
                                    </li>
									
									
									
									
									
    
              </ul>
            </div>
            <div class="panel-footer">
                <div class="input-group">
                                    <input name="des1" type="text" class="form-control" placeholder="Enter Message" />
								
   </tr>
  
  <td align="right" id="one"></td>
  <td><input type="submit" name="submit" id="submit" value="Submit post"></td>
  </tr>
              </div>
            </div>
      </div>
    </div>
	
	</form>
    
	
	
	
	
	
	

	
	
	<table width="876" bordercolor='#000000' border="5" cellpadding="10" cellspacing="0" background="20.jpg" bgcolor='#000000'>
  <tr>
    <th scope="col" bgcolor='#99c2ff'>&#2478&#2472&#2509&#2468&#2476&#2509&#2479</th>
  </tr>
  <tr>
    
	<?php
		  for($j=0; $j<$i; $j++) {
			$nn = $name[$j];
			$ll = $des[$j];
			$tm1=$dt[$j];
			echo "<tr> <td>$nn<br>$ll</br>&nbsp;<br>$tm1 </br></td></tr>";
		}
		?>
  
</table>

          
            
			

    
          			
	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
               
    </div>
        
    </div>
</div>
  </div>		
			
			
			
			
			
			
			
			
			
			
			
			
			
               
      </div>
        
    </div>
</div>
  </div>
  
  
  
  
  
 
			 
  
 <a href="indexb_1.html"> <button  class="button button-block">&#2489&#2507&#2478</button> </a> 
  
  
  
  
  
  
  
  
  
  
  
  
  
</body>
</html>







