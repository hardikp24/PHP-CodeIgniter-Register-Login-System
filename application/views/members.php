<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Members Page</title>

    <!-- Bootstrap -->
  
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>
      <div id="container"> 
        
        <h1>Members Page</h1>
        <?php 
        echo "<pre>";
        print_r($this->session->all_userdata()); 
        echo "</pre>";

        ?>
        <br>
        
        <a href='<?php echo site_url("main/logout");?>'>Log Out</a>  
         
          
      </div>
      
  </body>
</html>