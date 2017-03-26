<?php

echo "<script>alert('Submission for astrophotography is closed...')</script>";
header("Location:../index.php");

?>

<!DOCTYPE html> 
<html>
<head>
	<title>NSSC | Astrophotography Competition</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Homepage of nssc.in" />
       <meta name="description" content="Astrophotography event of National Students' Space Challenge '16"/>
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


<! ========================= Manual Checking if everything is submitted  ================================ -->

<div style="background-color: rgba(0,0,0,0.5); z-index: 1">

<?php
// check if a file was submitted
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['college']) && isset($_POST['yog']) && isset($_POST['address']) && isset($_POST['title']) && isset($_POST['date_of_click']) && isset($_POST['place_of_click']) && isset($_POST['camera_of_click']) && isset($_POST['focal']) && isset($_POST['fstop']) && isset($_POST['iso']) && isset($_POST['speed']) && isset($_POST['description']) )
    {
    try    {
        upload();
      
        }
    catch(Exception $e)
        {
        echo '<h4>'.$e->getMessage().'</h4>';
        }
    }
?>

<! ========================= inserting contents in database ================================ -->

<?php

function upload(){
// check if a file was uploaded 
if( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['college']) && !empty($_POST['yog']) && !empty($_POST['address']) && !empty($_POST['title']) && !empty($_POST['date_of_click']) && !empty($_POST['place_of_click']) && !empty($_POST['camera_of_click']) && !empty($_POST['focal']) && !empty($_POST['fstop']) && !empty($_POST['iso']) && !empty($_POST['speed']) && !empty($_POST['description']) )
    {
    
    /*
    // for entry_image
    $esize = getimagesize($_FILES['entry_img']['tmp_name']);
    // assign our variables 
    $etype = $size['mime'];
    $eimgfp = fopen($_FILES['entry_img']['tmp_name'], 'rb');
    $esize = $size[3];
    $ename = $_FILES['entry_img']['name'];
    
    // for original image
    
    $osize = getimagesize($_FILES['original_img']['tmp_name']);
    // assign our variables 
    $otype = $size['mime'];
    $oimgfp = fopen($_FILES['original_img']['tmp_name'], 'rb');
    $osize = $size[3];
    $oname = $_FILES['original_img']['name'];
    
    
    $maxsize = 99999999;
  */
    
    // Start the session
      session_start();
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $college = $_POST['college'];
    $yog = $_POST['yog'];
    $address = $_POST['address'];
    $title = $_POST['title'];
    $date_of_click = $_POST['date_of_click'];
    $place_of_click = $_POST['place_of_click'];
    $camera_of_click = $_POST['camera_of_click'];
    $focal = $_POST['focal'];
    $fstop = $_POST['fstop'];
    $iso = $_POST['iso'];
    $speed = $_POST['speed'];
    $mount = $_POST['mount'];
    $lens = $_POST['lens'];
    $description = $_POST['description'];
    
    
    
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["contact"] = $contact;
    $_SESSION["college"] = $college;
    $_SESSION["yog"] = $yog;
    $_SESSION["address"] = $address;
    $_SESSION["title"] = $title;
    $_SESSION["date_of_click"] = $date_of_click;
    $_SESSION["place_of_click"] = $place_of_click;
    $_SESSION["camera_of_click"] = $camera_of_click;
    $_SESSION["focal"] = $focal;
    $_SESSION["fstop"] = $fstop;
    $_SESSION["iso"] = $iso;
    $_SESSION["speed"] = $speed;
    $_SESSION["mount"] = $mount;
    $_SESSION["lens"] = $lens;
    $_SESSION["description"] = $description;

       
        
        // connect to db 
       $dbh = new PDO("mysql:host=mysql2.alwaysdata.com;dbname=spats_nssc16", 'spats', 'spatscjj');
        
                // set the error mode 
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // our sql query 
        $stmt = $dbh->prepare("INSERT INTO astro (name, email, contact, college, yog, address, title, date_of_click, place_of_click, camera_of_click, focal, fstop, iso, speed, mount, lens, description, created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, CURRENT_TIMESTAMP)");

        // bind the params 
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $contact);
        $stmt->bindParam(4, $college);
        $stmt->bindParam(5, $yog);
        $stmt->bindParam(6, $address);
        $stmt->bindParam(7, $title);
        $stmt->bindParam(8, $date_of_click);
        $stmt->bindParam(9, $place_of_click);
        $stmt->bindParam(10, $camera_of_click);
        $stmt->bindParam(11, $focal);
        $stmt->bindParam(12, $fstop);
        $stmt->bindParam(13, $iso);
        $stmt->bindParam(14, $speed);
        $stmt->bindParam(15, $mount);
        $stmt->bindParam(16, $lens);
        $stmt->bindParam(17, $description);
      //  $stmt->bindParam(15, $etype);
       // $stmt->bindParam(18, $eimgfp, PDO::PARAM_LOB);
        //$stmt->bindParam(19, $oimgfp, PDO::PARAM_LOB);
        //$stmt->bindParam(20, CURRENT_TIMESTAMP);
        //$stmt->bindParam(17, $esize);
        //$stmt->bindParam(18, $ename);

        // execute the query 
        $stmt->execute();
   
        
        $message = "Your entry has been succefully recorded and proceeding to next page to upload images.";
           echo "<script type='text/javascript'>alert('$message');</script>";
           
        ?>
           
           <script type="text/javascript">   
              function Redirect() 
                 {  
                      window.location="entryimg.php"; 
                  } 
                // document.write("Redirecting to next page"); 
                 setTimeout('Redirect()',  1 );   
           </script>
         
     <?php  
        
    
        
        // throw an exception is image is not of type 
       // throw new Exception("File Size Error");
        
    }
else
    {
    // if the file is not less than the maximum allowed, print an error
    //throw new Exception("Unsupported Image Format!");
    ?>
    
    <script>
          alert("Make sure you've filled all required fields !");
    </script>
    
    <?php
    }
}
?>


<! ========================= Validating the form contents ================================ -->

<?php

$nameErr = $emailErr = $contactErr = $collegeErr = $yogErr = $date_of_clickErr = $place_of_clickErr = $camera_of_clickErr = $focalErr = $fstopErr = $isoErr = $speedErr = $descriptionErr = $entry_imgErr = $original_imgErr = "";

$name = $email = $contact = $college = $yog = $address = $title = $date_of_click = $place_of_click = $camera_of_click = $focal = $fstop = $iso = $speed = $mount = $lens = $description = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

 // Name erra
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
    
  // Email erra
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  
   // Contact erra
  if (empty($_POST["contact"])) {
    $contactErr = "Contact Number is required";
  } else {
    $contact = test_input($_POST["contact"]);

  // College erra
  if (empty($_POST["college"])) {
    $collegeErr = "College name is required";
  } else {
    $college = test_input($_POST["college"]);
  

  // YOG erra 
  if (empty($_POST["yog"])) {
    $yogErr = "Year of graduation is required";
  } else {
    $yog = test_input($_POST["yog"]);
  
  // Address erra 
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
    
  // title erra 
  if (empty($_POST["title"])) {
    $titleErr = "Title of image is required";
  } else {
    $title = test_input($_POST["title"]);
  
  
  // Date of click erra
  if (empty($_POST["date_of_click"])) {
    $date_of_clickErr = "Date when photograph was clicked is required";
  } else {
    $date_of_click = test_input($_POST["date_of_click"]);
  
  
  // Place of click erra
  if (empty($_POST["place_of_click"])) {
    $place_of_clickErr = "Place where photograph was clicked is required";
  } else {
    $place_of_click = test_input($_POST["place_of_click"]);
  
  
  // Camera of click erra
  if (empty($_POST["camera_of_click"])) {
    $camera_of_clickErr = "Camera used to click photograph is required";
  } else {
    $camera_of_click = test_input($_POST["camera_of_click"]);
  
  
  // Focal erra
  if (empty($_POST["focal"])) {
    $focalErr = "Focal length of the lens used is required";
  } else {
    $focal = test_input($_POST["focal"]);
  
  
  // Fstop erra
  if (empty($_POST["fstop"])) {
    $fstopErr = "F-stop is required";
  } else {
    $fstop = test_input($_POST["fstop"]);
  
  
  // ISO erra
  if (empty($_POST["iso"])) {
    $isoErr = "ISO is required";
  } else {
    $iso = test_input($_POST["iso"]);
  
  
  // Speed erra
  if (empty($_POST["speed"])) {
    $speedErr = "Shutter speed is required";
  } else {
    $speed = test_input($_POST["speed"]);
    
  if (empty($_POST["mount"])) {
    $mountErr = "";
  } else {
    $mount = test_input($_POST["mount"]);
    
  if (empty($_POST["lens"])) {
    $lensErr = "";
  } else {
    $lens = test_input($_POST["lens"]);
    
  // Speed erra
  if (empty($_POST["description"])) {
    $descriptionErr = "Shutter speed is required";
  } else {
    $description = test_input($_POST["description"]);
 
 }
 }
 }
 } 
 } 
 }
 }
 }
 }
 } 
 }
 }
 } 
 } 
 }
 }
 }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<!-- ========================= Main form part ================================ -->

<div id="envelope" style="background-color: rgba(0,0,0,0.6);">
<header style="padding-right: 20px; padding-left: 20px">
    <h2>Amateur Astrophotography Competition</h2>
    <p>Under the blanket of beautiful stars, we all witness the exquisite beauty of universe which hides boundless mysteries underneath. To provide a platform to all amateur photographers across the nation to showcase their photography skills, NSSC’16 presents
ASTROPHOTOGRAPHY. Winning photos will also be displayed in an exhibition in NSSC &#39;16.</p>
</header>

<div style= "text-align: center"><p>Fill the form below .</p></div>
<div style="padding-right: 20px; padding-left: 20px">
<p style="color: yellow; ">* Required field.</p>
</div>

<hr>
<form enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" onsubmit="document.getElementById('submit').disabled=true; document.getElementById('submit').value='Submitting, please wait...';">  

    <label><span id="need">* </span>NAME :</label> 
        <span class="error"><?php echo $nameErr;?></span>   	
	<input type="text" name="name" placeholder="*Name" width="100px;" value="<?php echo $name;?>">

    <label><span id="need">* </span>EMAIL :</label>	
        <span class="error"> <?php echo $emailErr;?></span>
	<input type="email" name="email" placeholder="*Email" value="<?php echo $email;?>">

    <label><span id="need">* </span>MOBILE NUMBER :</label>
        <span class="error"> <?php echo $contactErr;?></span>	
	<input type="number" name="contact" placeholder="*Mobile(Without +91)" value="<?php echo $contact;?>">	

    <label><span id="need">* </span>COLLEGE :</label>	
        <span class="error"> <?php echo $collegeErr;?></span>
	<input type="text" name="college" placeholder="*College" width="100px;" value="<?php echo $college;?>">

    <label><span id="need">* </span>YEAR OF GRADUATION :</label>
        <span class="error"> <?php echo $yogErr;?></span>	
	<input type="number" name="yog" placeholder="Year" value="<?php echo $yog;?>">	

    <label><span id="need">* </span>YOUR ADDRESS :</label>
        <span class="error"> <?php echo $addressErr;?></span>	
	<textarea name="address" rows="10" cols="15" placeholder="*Your Address"><?php echo $address;?></textarea>

    <label><span id="need">* </span>YOUR TITLE/CAPTION OF THE IMAGE :</label> <br>	
         <span class="error"> <?php echo $titleErr;?></span>	
	<textarea name="title" rows="10" cols="15" placeholder="*Your title/caption of the Image :"><?php echo $title;?></textarea>

    <label><span id="need">* </span>DATE WHEN THE PHOTOGRAPH WAS CLICKED :</label> <br>
        <span class="error"> <?php echo $date_of_clickErr;?></span>  	
	<input type="date" name="date_of_click" placeholder="*Date when the photograph was clicked :" value="<?php echo $date_of_click;?>">
	<br /> 

    <label><span id="need">* </span>PLACE WHERE THE PHOTOGRAPH WAS CLICKED :</label> <br>
        <span class="error"> <?php echo $place_of_clickErr;?></span>	
	<input type="text" name="place_of_click" placeholder="*Place where the photograph was clicked :" value="<?php echo $place_of_click;?>" >

    <label><span id="need">* </span>CAMERA USED TO CLICK THE PHOTOGRAPH :</label> <br>
        <span class="error"> <?php echo $camera_of_clickErr;?></span>	
	<input type="text" name="camera_of_click" placeholder="*Camera used to click the photograph :"  value="<?php echo $camera_of_click;?>">

     <label><span id="need">* </span>FOCAL LENGTH OF THE LENS USED :</label> <br>
        <span class="error"> <?php echo $focalErr;?></span>	
	<input type="text" name="focal" placeholder="*Focal length of lens used :" value="<?php echo $focal;?>" >

    <label><span id="need">* </span>F-STOP :</label>
        <span class="error"> <?php echo $fstopErr;?></span>	
	<input type="text" name="fstop" placeholder="*F-stop :" value="<?php echo $fstop;?>" >

     <label><span id="need">* </span>ISO :</label>
        <span class="error"> <?php echo $isoErr;?></span>	
	<input type="text" name="iso" placeholder="*ISO :" value="<?php echo $iso;?>" >

     <label><span id="need">* </span>SHUTTER SPEED :</label>
        <span class="error"> <?php echo $speedErr;?></span>	
	<input type="text" name="speed" placeholder="*Shutter Speed :" value="<?php echo $speed;?>">

     <label>TELESCOPE MOUNT(IF ANY) :</label>	
	<input type="text" name="mount" placeholder="Telescope Mount(if any) :" value="<?php echo $mount;?>">

     <label>TELESCOPE LENS(IF USED) :</label>	
	<input type="text" name="lens" placeholder="Telescope lens(if used) :" value="<?php echo $lens;?>" >

     <label><span id="need">* </span>YOUR DESCRIPTION OF THE IMAGE :</label>
        <span class="error"> <?php echo $descriptionErr;?></span>	
	<input type="text" name="description" placeholder="*Your Description of the Image :" value="<?php echo $description;?>" >


    <input type="submit" value="Submit and Proceed to Next Page" id="submit">

</form>
</div>

</div>
</body>
</html>
