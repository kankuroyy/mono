<?php
   // session start
   session_start();

   // functions include
   include(__DIR__.'/functions/home/functions.php');

   echo $_POST['c_id'],"<br />";
   echo $_POST['c_pass'];

?>

