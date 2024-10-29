<!-- my reusable connect.php -->
<?php 
  $connect = mysqli_connect(
          'localhost', 
          'root', 
          'root', 
          'firehelp' 
        );

        if(!$connect){
          echo "Connection Failed: " . mysqli_connect_error();
        }

?>
 