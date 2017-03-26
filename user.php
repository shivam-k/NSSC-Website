<?php  
 session_start();//session starts here  
if($_SESSION['pemail'])  
{  
    header("Location: loggedin/");//redirect to login page to secure the welcome page without login access.  
}  
?>  
  
