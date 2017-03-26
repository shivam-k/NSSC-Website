<?php  
session_start();
if($_SESSION['pemail']) {
   session_destroy();  
   header("Location: index.php?loggedout");//use for the redirection to some page  
 }
 else {
 	header("Location: index.php");
 }
?>  