<?php

$con = mysql_connect("mysql2.alwaysdata.com", "spats", "spatscjj") or die(mysql_error());
	$db = mysql_select_db("spats_nssc16");


?>

<html>
<head>
   <title>Success of Subscription</title>
    <link rel="shortcut icon" type="image/png" href="nssc.png"/>
</head>

<body>


<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['college']) && isset($_POST['dep']) && isset($_POST['yop']) && isset($_POST['contact'])
 && isset($_POST['fb']) && isset($_POST['why']) && isset($_POST['past']) ) {

  $name=$_POST['name'];

  $email=$_POST['email'];

 $college = $_POST['college'];

$dep = $_POST['dep'];

$yop = $_POST['yop'];

$contact = $_POST['contact'];

$fb = $_POST['fb'];

$why = $_POST['why'];

$past = $_POST['past'];

  if(!empty($name) && !empty($email) && !empty($college) && !empty($dep) && !empty($yop) && !empty($contact) && !empty($fb) && !empty($why) && !empty($past) ) {

     $query = "SELECT * FROM `sa` ";
       $query_run = mysql_query($query);

      $query = "INSERT INTO `sa`  VALUES ('', '".mysql_real_escape_string($name)."', '".mysql_real_escape_string($email)."', '".mysql_real_escape_string($college)."',
 '".mysql_real_escape_string($dep)."', '".mysql_real_escape_string($yop)."', '$contact', '".mysql_real_escape_string($fb)."',
 '".mysql_real_escape_string($why)."', '".mysql_real_escape_string($past)."') ";

     if($query_run = mysql_query($query)) {

                 echo 'Your entry has been successfully recorded. <br>';
                 echo '<a href="http://nssc.in/">Get back to Website</a>';


               } else {
                  echo 'Sorry,We Have some problem to record your entry.';
                    die(mysql_error());
               }



  } else {
      echo 'fill the all fields';
   }

}


?>




</body>

</html>





 
