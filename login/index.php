<?php  
 session_start();//session starts here  
if($_SESSION['pemail'])  
{  
  
    header("Location:../events/loggedin");//redirect to login page to secure the welcome page without login access.  
}  
?>  
  

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NSSC | Login</title>

       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <meta property="og:image" content="http://nssc.in/closer.jpg"/>
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="">
       <meta name="keywords" content="NSSC | LOGIN" />
       
       <link rel="shortcut icon" type="image/png" href="nssc.png"/>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="nav.css">
     
<style type="text/css">
#head_of_page_h2 {
  max-width: 100%;
  width: 90%;
}
#head_of_page {
  display: inline-block;
  margin-right: 5%;
}
 #user-name-drop {
       display: inline-block ;
       margin-right: 5%;
       margin-left: 0%;
       float: right;
}

.dropbtn {
    background-color: #F9F9F9; 
    color: #2E3138;
    padding: 5px 16px;
    font-size: 60%;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 30.5px;
    background-color: #f9f9f9;
    min-width: 150%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); 
}

.dropdown-content a {
    color: #555555;
    font-weight: 100;
    padding: 6px 8px;
    text-decoration: none;
    display: block;
    font-size: 50%;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color:;
}

/* ============= Media query for username tab ======== */
@media only screen and (max-width: 623px) {
  #head_of_page_h2 {
  max-width: 100%;
  width: 85%;
}
} 
@media only screen and (max-width: 440px) {
  #head_of_page_h2 {
  max-width: 100%;
  width: 80%;
}
}


/* =========================== form style ============================ */
#container-form {
  max-width: 100%;
  width: 100%;
}
.nssc-form {
  display: table;
  margin: 0 auto;
  background-color: #CCEDFB;
  padding: 5% 5%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.nssc-form p, a {
  text-align: center;
}
#login-form input[type=email] {
     width: 100%;
    box-sizing: border-box;
    border: 2px solid rgba(85,85,85,0.5);
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
#login-form input[type=email]:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#login-form input[type=email]:visited, #login-form input[type=email]:active {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
 #login-form input[type=password] {
    width: 100%;
    box-sizing: border-box;
    border: 2px solid rgba(85,85,85,0.5);
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
#login-form input[type=password]:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#login-form input[type=password]:visited, #login-form input[type=password]:active{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#login-btn {
    max-width: 100%;
    width: 100%;
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    cursor: pointer;
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
#login-btn:hover {
    background-color: #555555;
    color: white;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
#error {
  display: table;
  margin: 0 auto;
  text-align: center;
}
#error p {
   margin-top: 5px;
   margin-bottom: 5px;
   color: #01A3E8;
}
.top-img-spons {
  max-width: 100%;
  width: 100%;
  display: table;
  margin: 0 auto;
}
.top-img-spons img {
  max-width: 100%;
  width: 20%;
  display: table;
  margin: 0 auto;
}
@media only screen and (max-width: 440px) {
   .top-img-spons img {
     max-width: 100%;
     width: 40%;
   }
}

</style>


</head>
<body>
<div class="top-menubar">
<div class="top" style="position: fixed;">
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
  <h2 style="display: inline-block;" id="head_of_page_h2">
      <div style="color: white; font-size: 20px" id="head_of_page">    LOGIN</div>  
  </h2>
  <div class="drawer">
    <nav>
      <ul>
        <li><a href="../"><i class="fa fa-home"></i></i>&nbsp;&nbsp;Home</a></li>
        <li><a href="../about-us"><i class="fa fa-users"></i></i>&nbsp;&nbsp;Abouts Us</a></li>
        <li><a href="../events"><i class="fa fa-trophy"></i>&nbsp;&nbsp;Events</a></li>
        <li><a href="../spons"><i class="fa fa-briefcase"></i></i>&nbsp;&nbsp;Sponsors</a></li>
        <li><a href="../guest-lectures"><i class="fa fa-odnoklassniki-square"></i></i>&nbsp;&nbsp;Guest Lecture</a></li>
        <li><a href="../exhibitions"><i class="fa fa-magic"></i></i>&nbsp;&nbsp;Exihibition</a></li>
        <li><a href="../Workshops/"><i class="fa fa-cog"></i></i>&nbsp;&nbsp;Workshops</a></li>
        <li><a href="../contact"><i class="fa fa-phone-square"></i></i>&nbsp;&nbsp;Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>




<br /><br /><br /><br /><br /><br />


<?php

$error_value="";
 session_start();
include("../db_conection.php");

if(isset($_POST['login'])) {
  $pemail = $_POST['pemail'];
  $password = $_POST['password'];
   if(!empty($pemail) && !empty($password)) {
         $checkemail= "SELECT * FROM `register` WHERE `email` = '$pemail' AND `password` ='$password'";  
          $run_query= mysqli_query($dbcon,$checkemail) or die(mysqli_error($dbcon));   
          if(mysqli_num_rows($run_query)>0)  {
             // echo "<script>alert('OK.');</script>";
             // echo "<script>alert('SESSION: $pemail');</script>";
             $_SESSION['pemail'] = $pemail;
             ?> <script> window.location="../read"; </script> <?php
         } else {
            // echo "<script>alert('Wrong Combination')</script>";
            $error_value = "Wrong Combination Of Email & Password";
         }

   }
   else {
     // echo "<script>alert('All fields are required..');</script>";
     $error_value = "All fields are required..";
   }
}


?>
<div class="top-img-spons">
  <a href="https://www.znetlive.com/" target="_blank"><img src="znet.png" alt="Znet Web Hosting Partner" /></a>
</div>
<div id="container-form">
  <div class="nssc-form">
     <div id="error">
        <p><?php echo $error_value; ?></p>
      </div> <br />
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="login-form" >
          <p>Email :</p> <br />
              <input type="email" name="pemail" placeholder="*Email" value="<?php echo $pemail; ?>"  required/> <br /><br />
          <p>Password :</p> <br />
              <input type="password" name="password" required/> <br /> <br />
          <input type="submit" value="Login" name="login" id="login-btn"/>
       </form> <br />
       <a id="myBtn1" style="color: blue; text-decoration: underline; cursor: pointer">Forgot your password</a> <br /><br />
       <a href="../register">Sign up if you are a new user</a>
  </div>
</div>

<!-- ====================== Reset password PHP =================== -->
<?php

 if(isset($_POST['reset-pass'])) {
      $rname = $_POST['rname'];
      $remail = $_POST['remail'];
      if(!empty($rname) && !empty($remail)) {
          $sql = "SELECT * FROM register WHERE name = '$rname' AND email = '$remail'";
          $run_query = mysqli_query($dbcon, $sql) or die(mysqli_error($dbcon));   
          if(mysqli_num_rows($run_query) > 0) {
             // echo "<script>alert('OK')</script>";
             while($row = mysqli_fetch_assoc($run_query)) {
                $password = $row['password'];
                $email = $row['email'];
                $name = $row['name'];
             }
              // echo "<script>alert('$password')</script>";
              

 $to = $email;
              $subject = 'Password Remind';
              $headers = "From: " . "info@nssc.in" . "\r\n";
              $headers .= "Reply-To: ". "info@nssc.in" . "\r\n";
              $headers .= "MIME-Version: 1.0\r\n";
              $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

              $message = '<html><body>';
              $message .= "Hello $name,";
              $message .= "<p style='text-indent: 20px'>Greetings from National Student Space Challenge (<b>NSSC</b>) IIT Kharagpur !! We are reminding you your password which is <b>$password</b>.You can ignore this email if this does not concern you. Have a nice day...</p>";
              $message .= "<p style='margin-bottom: 0;background:linear-gradient(-135deg,white 15%,#4c4c4c 0%);color:white;display:inline-block;padding:5px 30px 5px 5px;font-weight:bold'>Thanks and Regards,</p>";
              $message .= "<br /><br /><span style='margin-bottom: 0; color:rgb(71,71,71);font-family:&quot;Playfair Display&quot;,serif;font-size:20px'>Shivam Kumar</span>
<br /><span style='margin-bottom: 0'>Web head at NSSC</span> 
<br /><span style='margin-bottom: 0'>+91-7872702422</span>
<br /><span>shivam@nssc.in</span>
<br /><a href='https://www.facebook.com/people/Shivam-Kumar/100007937806775'>Contact on facebook</a>
              ";

              $message .= "</body></html>";

              $send_mail = mail($to,$subject,$message,$headers);
              if($send_mail) {
                echo "<script>alert('Check your email for recovery of password.')</script>";
              }
              else {
                echo "<script>alert('Problem in sending mail')</script>";
              }

          }
          else {
            echo "<script>alert('Wrong Combination of Name & Email Id.')</script>";
          }
      }
 }

?>


<!-- =============== Reset password modal ========== -->
<div id="myModal1" class="modal">
  <!-- Modal content -->
 <div class="modal-content">
    <div class="modal-header">
        <span class="close close1">×</span>
        <h2>Password Recovery</h2>
    </div>
    <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="hobba">
                <input type="text" name="rname" placeholder="Your Name" required/>
                <input type="email" name="remail" placeholder="Enter Email" required/>
                <input style="cursor: pointer" type="submit" value="SUBMIT" name="reset-pass" />
        </form>
    </div>
    <div class="modal-footer">
        <h3></h3>
    </div>
 </div>
</div>



<br /><br /><br /><br />

<!-- ===================== footer ================================== -->

 <div class="footer">
      <div id="Footer__Informations" class="flow-foot">
        <ul>
          <li>
            <a href="#">info@nssc.in</a>
          </li>
          
                    <li class="social-floating">
                        <a target="_blank" href="https://www.facebook.com/nssc.iit/?fref=ts"><i class="fa fa-facebook-square"></i></a>
                    </li>
                    <li class="social-floating">
                        <a target="_blank" href="https://twitter.com/SpaceTech4U"><i class="fa fa-twitter-square"></i></a>
                    </li>
                    <li class="social-floating">
                        <a target="_blank" href="https://www.linkedin.com/company/national-students'-space-challenge"><i class="fa fa-linkedin-square"></i></a>
                    </li>
        </ul>
      </div>
      <div id="Footer__Logo" class="flow-foot">
        <img src="nssc.png">
      </div>

            <div class="flow-foot" id="subscriber">
               <button class="button subs-btn" id="myBtn">SUBSCRIBE US</button>
            </div>

    </div>



<?php


if(isset($_POST['subscribe-btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  if(!empty($name) && !empty($email)) {
      $sql = "SELECT * FROM register WHERE email = '$email'";
      $run_query = mysqli_query($dbcon, $sql) or die(mysqli_error($dbcon));   
      if(mysqli_num_rows($run_query) > 0) {
            echo "<script>alert('Email Id $email is already present in subcribers list..Please try another email..')</script>";
      } 
      else {
          
      }
  }
}

?>



<!-- =============== subscribe us ====================== -->
<div id="myModal" class="modal">
  <!-- Modal content -->
 <div class="modal-content">
    <div class="modal-header">
        <span class="close">×</span>
        <h2>SUBSCRIBE US</h2>
    </div>
    <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="hobba">
                <input type="text" name="name" placeholder="Your Name" required/>
                <input type="email" name="email" placeholder="Enter Email" required/>
                <input style="cursor: pointer" type="submit" value="SUBMIT" name="subscribe-btn" />
        </form>
    </div>
    <div class="modal-footer">
        <h3></h3>
    </div>
 </div>
</div>



<!-- =============================== footer Last ======================= -->    
        <div class="foot-last">
                     <p>All rights are reserved by © <span class="bold">nssc</span> 2016</p>
        </div>

 <script>
    var modal = document.getElementById('myModal');
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }

    var modal1 = document.getElementById('myModal1');
    var btn1 = document.getElementById("myBtn1");
    var span1 = document.getElementsByClassName("close1")[0];
    btn1.onclick = function() {
        modal1.style.display = "block";
    }
    span1.onclick = function() {
        modal1.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        else if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }

</script>
        

</body>
</html>
