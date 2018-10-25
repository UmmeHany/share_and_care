<?php


include_once 'bula.php';



$sql = "select name,location,number from user where lower(owner)='restaurant' ";
$result = mysqli_query($db, $sql);

    // output data of each row
	$i=0;
    while($row = mysqli_fetch_assoc($result)) {
        $name[$i] = $row['name'];
	$location[$i] = $row['location'];
	$number[$i]=$row['number'];
	$i++;
}
$k=0;
if(isset($_POST['submit']))
{
 $name1=mysqli_real_escape_string($db,$_POST['name1']);
 
 $sql1="select name,location,number from user where lower(owner)='restaurant' and name='$name1' ";
 $result1 = mysqli_query($db, $sql1);
 
    while($row = mysqli_fetch_assoc($result1)) {
        $n1= $row['name'];
	$l1= $row['location'];
	$n2=$row['number'];
	$k++;
}
}



?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Free uperior Website Template | Menu :: w3layouts</title>
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css1?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
<!--
.style1 {font-size: xx-large}
body {
	background-image: url(images/tumblr_ls23ppRZpc1qlg5hko5_500.png);
}
-->
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
    <style>
      html, body {
        height: 60%;
        margin: 0;
        padding: 0;
		
      }
      #map {
        height: 70%;
		width:50%
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 145px;
      }
</style>
</head>
<body>
<input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map"></div>
    <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEDmhRvkOmumJt4C0MtvWDapH-Kjl11zI&libraries=places&callback=initAutocomplete"
         async defer></script>
  
	  
	  
	  
	  





<div class="header-box"></div>
<div class="wrap"> 
	<div class="total">
		<div class="header">
			<div class="header-bot">
				<div class="logo">
					<h1 class="style1">&#2480&#2503&#2488&#2509&#2463&#2497&#2480&#2503&#2472&#2509&#2463 &#2468&#2469&#2509&#2479</h1>
				</div>
				<ul class="follow_icon">
					
				</ul>
			    <div class="clear"></div> 
			</div>
			<form  method="post" action="res1.php" >
			<div class="search-bar">
			    <input name=name1 type="text" class="textbox" value=" Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
			    
				</tr>
  
  <td align="right" id="one"></td>
  <td><input type="submit" name="submit" id="submit" value="Submit"></td>
  </tr>
  
  <?php
		  for($a=0; $a<$k; $a++) {
			$nn1 = $n1;
			$ll1 = $l1;
			$cc1=$n2;
			echo "<li><a href=\"#\"><font size=4>$nn1 </font> </a><li><a href=\"#\">$ll1 </a><a href=\"#\"> ....<div align=left>contact number : $cc1 </a></div>  </li>";
			$k=0;
			$a=0;
		}
		?>
			
    		</div>
			<div class="clear"></div> 
		 </div>	
		 </form>
		<div class="menu"> 	
			<div class="top-nav">
				<ul>
					<li><a href="indexb_1.html">&#2489&#2507&#2478</a></li>
					
				</ul>
			</div>
		</div>		
		<div class="banner">
		</div>
   </div>
<div class="main">
	  <div class="pricing">
				<div class="col_1_of_menu span_1_of_menu">
					<div class="inner-block">
             <h3 class="top-2"></h3>
             <ul class="list-1 top-1 bot-2">
                 <li><a href="#">  -</a><span></span><strong>&nbsp;</strong></li>
                 <?php
		  for($j=0; $j<$i; $j++) {
			$nn = $name[$j];
			$ll = $location[$j];
			$cc=$number[$j];
			echo "<li><a href=\"#\"><font size=4>$nn </font> </a><li><a href=\"#\">$ll </a><a href=\"#\"> ....<div align=left>contact number: $cc </a></div>  </li>";
		}
		?>
             </ul>
           </div>
				</div>
				<div class="col_1_of_menu span_1_of_menu">
					<div class="inner-block">
             <h3 class="top-2"></h3>
             <ul class="list-1 top-1">
                 
                 
                  
             </ul>
           </div>
				</div>
				<div class="col_1_of_menu span_1_of_menu">
					<div class="inner-block">
             <h3 class="top-2"> </h3>
             <ul class="list-1 top-1 bot-2">
                
            
                
             </ul>
           </div>
				</div>
				<div class="clear"></div> 
			</div>
		   		<div class="heading">
				  	<h3></h3>
				</div>
		   		<div class="about-bottom">
				<div class="col_1_of_4 span_1_of_4">
					<img src="images/pic.jpg" height=215 alt=""/>
						<div class="item_content">
 							<h6 class="item_title">
							
						</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<img src="images/pic1.jpg" height=215 alt=""/>
						<div class="item_content">
 							<h6 class="item_title">
							
						</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<img src="images/pic2.jpg" height=215 alt=""/>
						<div class="item_content">
 							<h6 class="item_title">
							
						</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<img src="images/pic3.jpg" height=215 alt=""/>
						<div class="item_content">
 							<h6 class="item_title">
							
						</div>
				</div>
				<div class="clear"></div> 		
			</div>
		     <div class="clear"> </div>
			</div>
	</div>
<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			<p> © 2016 All rights Reserved | Design by Tasnova and UMME HANY</a></p>
		</div>
 	</div>
 </div>
</body>
</html>

    	
    	
            


            



    


