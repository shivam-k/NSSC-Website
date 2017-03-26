<!DOCTYPE html> 

<html>
<head>
	<title>NSSC | Astrophotography Competition</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Homepage of nssc.in" />
       <meta name="description" content="Homepage of National Students' Space Challenge '16"/>
       <link rel="shortcut icon" type="image/png" href="nssc.png"/>
	<!--   ===================Including CSS for different screen sizes==============  -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="screen and (max-width: 1550px) and (min-width: 1200px)" href="style4.css" />
	<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="style1.css" />
	<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="style2.css" />
	<link rel="stylesheet" media="screen and (max-width: 350px)" href="style3.css" />
	
	<style>
           .error {color: yellow;}
           
           #need {color: yellow;}
       </style>
       
       
</head>

<body style="background:url(back.jpg) repeat; background-size:cover;background-attachment:fixed; color: white">

<div style="background-color: rgba(0,0,0,0.5); z-index: 1; background-size:cover;background-attachment:fixed; padding-top: 70px; padding-bottom: 70px">


<!-- ==================================== all about session variables ================================================ 

<?php
   $name = $_SESSION["name"];  
   $email = $_SESSION["email"]; 
   $contact = $_SESSION["contact"];
   $college = $_SESSION["college"];
   $yog = $_SESSION["yog"];
   $address = $_SESSION["address"];   
   $title = $_SESSION["title"];
   $date_of_click = $_SESSION["date_of_click"];
   $place_of_click = $_SESSION["place_of_click"];
   $camera_of_click = $_SESSION["camera_of_click"];
   $focal = $_SESSION["focal"]; 
   $fstop = $_SESSION["fstop"]; 
   $iso = $_SESSION["iso"];
   $speed = $_SESSION["speed"];
   $mount = $_SESSION["mount"];
   $lens = $_SESSION["lens"];  
   $description = $_SESSION["description"];
   $etype = $_SESSION["etype"];
   $eimg = $_SESSION["eimg"];
   $esize = $_SESSION["esize"];
   $ename = $_SESSION["ename"];

   if(empty($name) || empty($email) || empty($contact) || empty($college) || empty($yog) || empty($address) || empty($title) || empty($date_of_click) || empty($place_of_click) || empty($camera_of_click) || empty($focal) || empty($fstop) || empty($iso) || empty($speed) || empty($description) ) {

?>


<script> alert("We do not have your basic information..Please fill the 1st page first.");

    function Redirect() 
                 {  
                      window.location="index.php"; 
                  } 
                    // document.write("Redirecting to next page"); 
                 setTimeout('Redirect()',  1 );   

</script>

<?php
   

}


?> -->




<!-- ===================================== all about uploading original image ================================ -->

<?php
/*** check if a file was submitted ***/
if(isset($_FILES['original_img']))
    {
    try    {
        uploadoriginal();
        /*** give praise and thanks to the php gods ***/
        }
    catch(Exception $e)
        {
        echo '<h4>'.$e->getMessage().'</h4>';
        }
    }
?>

<?php
function uploadoriginal(){

// Start the session
      session_start();
   $name = $_SESSION["name"];  
   $email = $_SESSION["email"]; 
   $contact = $_SESSION["contact"];
   $college = $_SESSION["college"];
   $yog = $_SESSION["yog"];
   $address = $_SESSION["address"];   
   $title = $_SESSION["title"];
   $date_of_click = $_SESSION["date_of_click"];
   $place_of_click = $_SESSION["place_of_click"];
   $camera_of_click = $_SESSION["camera_of_click"];
   $focal = $_SESSION["focal"]; 
   $fstop = $_SESSION["fstop"]; 
   $iso = $_SESSION["iso"];
   $speed = $_SESSION["speed"];
   $mount = $_SESSION["mount"];
   $lens = $_SESSION["lens"];  
   $description = $_SESSION["description"];
   $etype = $_SESSION["etype"];
   $eimg = $_SESSION["eimg"];
   $esize = $_SESSION["esize"];
   $ename = $_SESSION["ename"];



// check if a file was uploaded 
if(is_uploaded_file($_FILES['original_img']['tmp_name']) && getimagesize($_FILES['original_img']['tmp_name']) != false)
    {
    //  get the image info. 
    $osize = getimagesize($_FILES['original_img']['tmp_name']);
    // assign our variable
    $otype = $osize['mime'];
    $oimgfp = fopen($_FILES['original_img']['tmp_name'], 'rb');
    $osize = $osize[3];
    $oname = $_FILES['original_img']['name'];
    $maxsize = 30000000;


    //  check the file is less than the maximum file size 
    if($_FILES['original_img']['size'] < $maxsize )
        {
        // connect to db 
        $dbh = new PDO("mysql:host=mysql2.alwaysdata.com;dbname=spats_nssc16", 'spats', 'spatscjj');

                // set the error mode 
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // our sql query 
        $stmt = $dbh->prepare("UPDATE `astro` SET `name` = :name, `email` = :email, `contact` = :contact, `college` = :college, `yog` = :yog, `address` = :address, `title` = :title, `date_of_click` = :date_of_click, `place_of_click` = :place_of_click, `camera_of_click` = :camera_of_click, `focal` = :focal, `fstop` = :fstop,`iso`= :iso, `speed`= :speed, `mount`= :mount, `lens` = :lens, `description` = :description, `otype` = :otype, `oimg` = :oimg, `osize` = :osize, `oname` = :oname, `created` = CURRENT_TIMESTAMP WHERE `name` = :name  AND `email` = :email AND `contact` = :contact");

        // bind the params 
         $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":contact", $contact);
        $stmt->bindParam(":college", $college);
        $stmt->bindParam(":yog", $yog);
        $stmt->bindParam(":address", $address);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":date_of_click", $date_of_click);
        $stmt->bindParam(":place_of_click", $place_of_click);
        $stmt->bindParam(":camera_of_click", $camera_of_click);
        $stmt->bindParam(":focal", $focal);
        $stmt->bindParam(":fstop", $fstop);
        $stmt->bindParam(":iso", $iso);
        $stmt->bindParam(":speed", $speed);
        $stmt->bindParam(":mount", $mount);
        $stmt->bindParam(":lens", $lens);
        $stmt->bindParam(":description", $description);
        
     /*   $stmt->bindParam(":etype", $etype);
        $stmt->bindParam(":eimg", $eimgfp, PDO::PARAM_LOB);
        $stmt->bindParam(":esize", $esize);
        $stmt->bindParam(":ename", $ename); */
 
        $stmt->bindParam(":otype", $otype);
        $stmt->bindParam(":oimg", $oimgfp, PDO::PARAM_LOB);
        $stmt->bindParam(":osize", $osize);
        $stmt->bindParam(":oname", $oname);

        // execute the query 
        $stmt->execute();
        $message = "Your entry has been recorded successfully. Thanks for keeping patience..";
           echo "<script type='text/javascript'>alert('$message');</script>";
           
        ?>
           
           <script type="text/javascript">   
              function Redirect() 
                 {  
                      window.location="../events"; 
                  } 
                // document.write("Redirecting to next page"); 
                 setTimeout('Redirect()',  1 );   
           </script>
         
     <?php  
        }
    else
        {
        // throw an exception is image is not of type
        throw new Exception("<script>alert('File Size Error.You can't upload image of size more than 30MB.');</script>");
        }
    }
else
    {
    // if the file is not less than the maximum allowed, print an error
    throw new Exception("<script> alert('Make sure you are uploading correct format of image!'); </script>");
    }
}
?>

<div id="envelope" style="background-color: rgba(0,0,0,0.6);">
		<header style="padding-right: 20px; padding-left: 20px">
		    <h2>Amateur Astrophotography Competition</h2>
		    <p>Under the blanket of beautiful stars, we all witness the exquisite beauty of universe which hides boundless   mysteries underneath. To provide a platform to all amateur photographers across the nation to showcase their photography skills, NSSC’16 presents ASTROPHOTOGRAPHY. Winning photos will also be displayed in an exhibition in NSSC &#39;16.</p>
		</header>

		<div style= "text-align: center"><p>Select an image .</p></div>
		<div style="padding-right: 20px; padding-left: 20px">
		    <p style="color: yellow; ">* Required field.</p>
                    <p style="color: yellow; ">Do not press back or refresh button.</p>
		</div>

		<hr>
		<!-- =================== original_img submission ========================= -->
		
		<form enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" onsubmit="document.getElementById('submit').disabled=true; document.getElementById('submit').value='Submitting, please wait...';">  
		
		    <label><span id="need">* </span>SELECT ORIGINAL IMAGE : </label> 
		        <span class="error"> <?php echo $original_imgErr;?></span>
		        <input type="file" name="original_img" > 
		    
		   <input type="submit" value="Submit" id="submit">

              </form>

	</div>

</div>

<!-- ============================================ Sending mail ======================================== -->
<?php

if(isset($_FILES['original_img']))
{

// Start the session
      session_start();
   $name = $_SESSION["name"];  
   $email = $_SESSION["email"]; 
   $contact = $_SESSION["contact"];
   $college = $_SESSION["college"];
   $yog = $_SESSION["yog"];
   $address = $_SESSION["address"];   
   $title = $_SESSION["title"];
   $date_of_click = $_SESSION["date_of_click"];
   $place_of_click = $_SESSION["place_of_click"];
   $camera_of_click = $_SESSION["camera_of_click"];
   $focal = $_SESSION["focal"]; 
   $fstop = $_SESSION["fstop"]; 
   $iso = $_SESSION["iso"];
   $speed = $_SESSION["speed"];
   $mount = $_SESSION["mount"];
   $lens = $_SESSION["lens"];  
   $description = $_SESSION["description"];
   $etype = $_SESSION["etype"];
   $eimg = $_SESSION["eimg"];
   $esize = $_SESSION["esize"];
   $ename = $_SESSION["ename"];


    $from_email = 'info@nssc.in'; //sender email
    $recipient_email = 'astronssc@gmail.com'; //recipient email
    $subject = 'Response of 3rd-Stage Astro. '; //subject of email
    $message = "
Here is the response :

Name : $name;
Email : $email;
Contact : $contact;
College : $college;
Year of Graduation : $yog;
Address : $address;
Title : $title;
Date of click : $date_of_click;
Place of click : $place_of_click;
Camera of click : $camera_of_click;
Focal : $focal;
F-Stop : $fstop;
ISO : $iso;
Speed : $speed;
Mount : $mount;
Lens : $lens;
Description : $description;
etype : $etype;
eimg : $eimg;
esize : $esize;
ename : $ename;




"; //message body
    
    //get file details we need
    $file_tmp_name    = $_FILES['original_img']['tmp_name'];
    $file_name        = $_FILES['original_img']['name'];
    $file_size        = $_FILES['original_img']['size'];
    $file_type        = $_FILES['original_img']['type'];
    $file_error       = $_FILES['original_img']['error'];
    
    $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if($file_error>0)
    {
        die('upload error');
    }
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));


        $boundary = md5("sanwebe"); 
        //header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$user_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //plain text 
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($message)); 
        
        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
        $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
        $body .= $encoded_content; 
    
    $sentMail = @mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {       
        die('Thank you for your email');
    }else{
        die('Could not send mail! Please check your PHP mail configuration.');  
    }

}


?>



</body>
</html>