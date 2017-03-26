<?php

include("../db_conection.php");

?>
<!DOCTYPE html> 
<html>
<head>
	<title>NSSC | Accommodations</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="NSSC | Accommodation" />
       <meta name="description" content="Accommodation: Let us know when you are coming?? Fill the accommodation form"/>
      <meta property="og:image" content="http://nssc.in/accommmo.jpg"/>
       <link rel="shortcut icon" type="image/png" href="nssc.png"/>
	<!--   ===================Including CSS for different screen sizes==============  -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="screen and (max-width: 1550px) and (min-width: 1200px)" href="style4.css" />
	<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="style1.css" />
	<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="style2.css" />
	<link rel="stylesheet" media="screen and (max-width: 350px)" href="style3.css" />
	
	
	<style>
           .error {color: red;}
           
           #need {color: yellow;}
       </style>
</head>


<body style="background:url(back.jpg) repeat; background-size:cover;background-attachment:fixed; color: white">


<!-- ========================= Manual Checking if everything is submitted  ================================ -->


<div style=" z-index: 1">

<?php
  $success = "";
  $error = "";
?>

<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pi = $_POST['pi'];
  $contact = $_POST['contact'];
  $college = $_POST['college'];
  $arrival = $_POST['arrival'];
  $departure = $_POST['departure'];
  $msg = $_POST['msg'];
  if(!empty($name) && !empty($email) && !empty($pi) && !empty($contact) && !empty($college) && !empty($arrival) && !empty($departure)) {
      $sql = "SELECT * FROM register WHERE email = '$email' AND pi = '$pi'";
      $run_query = mysqli_query($dbcon, $sql) or die(mysqli_error($dbcon)); 
      if(mysqli_num_rows($run_query) > 0) {
         $success = "OK";
         $sql = "SELECT * FROM accom WHERE email = '$email' AND pi = '$pi'";
         $run_query = mysqli_query($dbcon, $sql) or die(mysqli_error($dbcon)); 
          if(mysqli_num_rows($run_query) > 0) {
             $success = "<b>You have already confirmed your accommodation earlier.</b>";
          }
          else {
            $insert = "INSERT INTO accom (name, email, contact, college, pi, Atime, Dtime, msg) VALUES ('$name', '$email', '$contact', '$college', '$pi', '$arrival', '$departure', '$msg')";
            if (mysqli_query($dbcon, $insert)) {
               $success = "<b>You have successfully confirmed your accommodations. See you soon in IIT Kharagpur</b>";
            } 
            else {
              echo "Error: " . $insert . "<br>" . mysqli_error($dbcon);
            } 
          }

      }
      else {
        $error = "<b>Combination of Email Id and Participant Id is wrong.</b>";
      }
  }
  else {
    $error = "<b>Make Sure you have filled all the required fields</b>";
  }

}


?>


<?php

  if(empty($success)) {
    echo '<style type="text/css">
           #success {
                display: none;
           }
           </style>';
    }

  if(empty($error)) {
    echo '<style type="text/css">
           #error {
                display: none;
           }
           </style>';
    }

 ?>


<!-- ========================= Main form part ================================ -->

<div id="envelope" style="background-color: rgba(0,0,0,0.6);">
<header style="padding-right: 20px; padding-left: 20px">
    <h2>Accommodation Form</h2>
    <p>We know you all are eagerly awaited to come IIT Kharagpur for NSSC'16. Fill the form below and let us know when you are coming to IIT Kharagpur as we are opening all accommodation lines from evening 1st September onward.</p>
</header>

<div style= "text-align: center"><p>Fill the form below to confirm accommodations .</p></div>
<div style="padding-right: 20px; padding-left: 20px">
<p style="color: yellow; ">* Required field.</p>
</div>
<div id="error" >
<p style="text-align: center; background-color: #F2DEDE; color: #A94442;padding:15px 55px; display: table; margin: 0 auto; border-radius: 5px"><?php echo $error; ?></p>
</div>
<div id="success">
<p style="text-align: center; background-color: #DFF0D8; color: #3C763D;padding:15px 55px; display: table; margin: 0 auto; border-radius: 5px"><?php echo $success; ?></p>
</div>
<hr>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" >  

  <label><span id="need">* </span>Name :</label>  	
	<input type="text" name="name" placeholder="*Name" width="100px;" value="<?php echo $name;?>" required/>

  <label><span id="need">* </span>Email :</label>	
	<input type="email" name="email" placeholder="*Email" value="<?php echo $email;?>" required/>

   <label><span id="need">* </span>Participant Id :</label>  
  <input type="text" name="pi" placeholder="*Participant  Id" value="<?php echo $pi;?>" required/>

    <label><span id="need">* </span>Mobile Number :</label>
	<input type="number" name="contact" placeholder="*Mobile(Without +91)" value="<?php echo $contact;?>" required/>	

  <label><span id="need">* </span>College :</label>	
	<input type="text" name="college" placeholder="*College" width="100px;" value="<?php echo $college;?>" required/>

  <label><span id="need">* </span>Arrival Date and Time in IIT Kharagpur :</label>  
  <input type="datetime-local" max="2016-09-04" min="2016-09-01" name="arrival"  width="100px;" value="<?php echo $arrival;?>" required/>
 
   <label><span id="need">* </span>Departure Date and Time from IIT Kharagpur  :</label>  
  <input type="datetime-local" name="departure"  width="100px;" value="<?php echo $departure;?>" required/>
  
   <label>Anything you want us to know :</label> <br> 
    <textarea name="msg" max="2016-09-06" min="2016-09-01" rows="10" cols="15" placeholder="*Type it here... :"><?php echo $msg;?></textarea>

    <input type="submit" value="Submit" id="submit" name="submit">

</form>
</div>

</div>
</body>
</html>
