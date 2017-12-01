<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php      
     $array = array("red", "black", "green", "yellow", "blue", "orange");
     shuffle($array);
     for ($i = 0; $i < 4; $i++) {
         
  ?> 
  <div style="width:100px; height: 50px; background-color:<?php echo $array[$i] ?>"></div> <?php
    
     }
  ?>         
 </body>
</html>
