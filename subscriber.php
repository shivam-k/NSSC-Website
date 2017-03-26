<?php

require 'connection.php';

?>

<html>
<head>
   <title>Success of Subscription</title>
    <link rel="shortcut icon" type="image/png" href="nssc.png"/>
</head>

<body>


<?php

if(isset($_POST['name']) && isset($_POST['email']) ) {

  $name=$_POST['name'];

  $email=$_POST['email'];

  if(!empty($name) && !empty($email) ) {

     $query = "SELECT * FROM `subscriber` ";
       $query_run = mysql_query($query);

      $query = "INSERT INTO `subscriber`  VALUES ('', '".mysql_real_escape_string($name)."', '".mysql_real_escape_string($email)."') ";

     if($query_run = mysql_query($query)) {

                 echo 'You have successfully subscribed us. <br>';
                 echo '<a href="http://nssc.in/">Get Back to Website</a>';

               } else {
                  echo 'Sorry,We couldn\'t  register you at this time.Try again later.';
                    die(mysql_error());
               }



  } else {
      echo 'fill the all fields';
   }

}


?>




</body>

</html>





 
