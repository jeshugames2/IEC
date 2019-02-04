<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'iecnmims_cwd');
   define('DB_PASSWORD', 'cwdfund2019');
   define('DB_DATABASE', 'iecnmims_cwdfund1');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//Check if the database is connected or not.
    //  if($db){
    //  echo "Successful";
    //  }
     

   if($db->connect_error){
     die("Connection failed: " . $db->connect_error);
     echo("Failed");
   }
   @@session_start();

   function isloggedin(){
     if(@@$_SESSION['logged_in']!=TRUE){
       return FALSE;
     }
     else {
       return TRUE;
     }
   }
 ?>
