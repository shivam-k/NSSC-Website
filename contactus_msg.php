<?php

$dbcon = mysqli_connect("mysql2.alwaysdata.com","spats","spatscjj");  
mysqli_select_db($dbcon,"spats_nssc16");  



if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];   
    $message = $_POST['message'];

    if(!empty($name) && !empty($email) && !empty($message)) {
         
             // Start storing message
       $sql = "INSERT INTO contactus_msg (name, email, message) VALUE ('$name', '$email', '$message')";
       if(mysqli_query($dbcon, $sql) > 0) {
           echo 'We have got your message and we will contact you as soon as possible.<br>';
           echo '<a href="http://nssc.in/">Get Back to website</a>';

        } 
        else {
            echo "<p style='color: red'>Sorry $name, We couldnt connect you at this time.Please mail your query at <b>info@nssc.in</b> and let us know how we can help you.</p><br />";
            die(mysqli_error($dbcon));
         }
         
    }  
    else {
     echo 'All fields are required.';
    }
}


?>