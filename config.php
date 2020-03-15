<?php 
   $conn = new mysqli("localhost","root","","phpcrud");

   if($conn->connect_error){
       die("Can't Connect To The DB!!" .$conn->connect_error);
       exit();
   }
//    else{
//        echo("Connected Successfully");
//    }



?>
