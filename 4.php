<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/style.css">  
  <title>Photo</title>    
 </head>
 <body> 
<?php
$dir = "img/";
$files = scandir($dir);
	foreach($files as $file){
			if ($file == '.' || $file == '..'){
				continue;
			}  			
			echo '<a href="#myModal"  id="myBtn"> <img src=' . "img/" . $file . ' " width="50" height="50" /></a>';
			echo '<div id="myModal" class="modal">
					<div class="modal-content">
						<span class="close">&times;</span>
						<img src=' . "img/" . $file . '>
					 </div>
				  </div>';
    }    
?>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="js/script.js"></script> 
 </body>
</html>