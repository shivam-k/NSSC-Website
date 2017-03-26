<?php  
header("Location: ../closeR");
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
<title>NSSC | Register</title>

  
       <meta property="fb:page_id" content=""/>
       <meta property="og:image" content="https://external.fmaa1-1.fna.fbcdn.net/safe_image.php?d=AQAXGPMLdkaCGF_F&amp;w=476&amp;h=249&amp;url=https%3A%2F%2Fwww.facebook.com%2Fads%2Fimage%2F%3Fd%3DAQKCGQunaHVL3z-sO4qEAGO1NXzrbQlQ-N-wi3dNQpTh9w6-LnVlKmxNH7keKlmvGXRbJFlqXP-IgLT5D7UBrzbeAqBsqCjudGd7nI8TJFEmjaqC68lt0spSg1HYEI13zLvrcx2wmZS2idz63B58Zv2Q&amp;cfs=1&amp;upscale=1"/>
        <meta property="og:description" content="You need to signup inorder to register for our fest. So click on the Login tab in the navigation bar to jump on the login options.After signing up, you need to login and then you will be able to register for events.  "/>
       <meta property="og:title" content=""/>

       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Online Payment of nssc.in" />
       <meta name="description" content="Online Payment for events registration of National Students' Space Challenge '16"/>
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
  max-width: 100%;
  width: 35%;
  display: table;
  margin: 0 auto;
  background-color: #CCEDFB;
  padding: 3% 5% 5% 5%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.nssc-form p, a {
  text-align: center;
}

#register-form input[type=email], #register-form input[type=text], #register-form input[type=date], #register-form input[type=number] {
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
 #register-form input[type=password] {
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
#register-form input[type=email]:hover, #register-form input[type=text]:hover, #register-form input[type=date]:hover, #register-form input[type=number]:hover, #register-form input[type=password]:hover {
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  #register-form input[type=email]:visited, #register-form input[type=text]:visited, #register-form input[type=date]:visited, #register-form input[type=number]:visited, #register-form input[type=password]:visited {
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
#register-btn {
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
     background-color: #555555;
    color: white;
    border: 2px solid #555555;
}
#register-btn:hover {
    background-color: white;
    color: black;
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
/*==================== modal query for html body =========== */
@media only screen and (max-width: 600px) {
 #container-form {
    max-width: 100%;
    width: 100%;
  }
  .nssc-form {
     max-width: 100%;
     width: 95%;
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
      <div style="color: white; font-size: 20px" id="head_of_page">    SIGN UP</div>  
  </h2>
  <div class="drawer">
    <nav>
      <ul>
        <li><a href="../"><i class="fa fa-home"></i></i>&nbsp;&nbsp;Home</a></li>
        <li><a href="../about-us"><i class="fa fa-users"></i></i>&nbsp;&nbsp;Abouts Us</a></li>
        <li><a href="../events"><i class="fa fa-trophy"></i>&nbsp;&nbsp;Events</a></li>
        <li><a href="../spons"><i class="fa fa-briefcase"></i></i>&nbsp;&nbsp;Sponsors</a></li>
        <li><a href="../guest-lectures"><i class="fa fa-odnoklassniki-square"></i></i>&nbsp;&nbsp;Guest Talks</a></li>
        <li><a href="../exhibitions"><i class="fa fa-magic"></i></i>&nbsp;&nbsp;Exihibition</a></li>
        <li><a href="../Workshops/"><i class="fa fa-cog"></i></i>&nbsp;&nbsp;Workshops</a></li>
        <li><a href="../contact"><i class="fa fa-phone-square"></i></i>&nbsp;&nbsp;Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>

<?php  
  
include("../db_conection.php");

$error_value = "";

if(isset($_POST['register']))  
{  
    $pname=$_POST['pname'];
    $pemail=$_POST['pemail'];
    $pcollegeId=$_POST['pcollegeId'];
    $pdob=$_POST['pdob'];
    $pdepartment=$_POST['pdepartment'];
    $pcollege = $_POST['pcollege'];
    $pyog =$_POST['pyog'];
    $paddress = $_POST['paddress'];
    $pcontact = $_POST['pcontact'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password']; 
   
    if(!empty($pname) && !empty($pemail) && !empty($pcollegeId) && !empty($pdob) && !empty($pdob) && !empty($pdepartment) && !empty($pcollege) && !empty($pyog) && !empty($paddress) && !empty($pcontact) && !empty($password) && !empty($confirm_password))  
    {  
          if($password != $confirm_password) {
             // echo"<script>alert('Password does not match.')</script>";  
            $error_value = "Password does not match.";
          }
          else {
                  $password_hash = $password;
                  $checkemail="SELECT * FROM register WHERE email='$pemail'";  
                  $run_query=mysqli_query($dbcon,$checkemail);  
                  if(mysqli_num_rows($run_query)>0)  
                  {  
                    $error_value = "Email: $pemail is already exist in our database, Please try another one!";
                  }  
                  else {
                        $checkcollegeId="SELECT * FROM register WHERE collegeId='$pcollegeId'";  
                        $run_query=mysqli_query($dbcon,$checkcollegeId);  
                        if(mysqli_num_rows($run_query)>0)  
                        {  
                            $error_value = "CollegeId: $pcollegeId is already exist in our database, Please try another one!";  
                        }  
                        else {

                                 $check = "SELECT * FROM register WHERE id = (SELECT MAX(id) FROM register)";
                                 $result = mysqli_query($dbcon,$check);
                                 if(mysqli_num_rows($result) > 0) {  
                                       while($row = mysqli_fetch_assoc($result)) {
                                            $last_id = $row['id'];
                                            $getid = $row["pi"];
                                           $getpi = str_replace("PI", "", $getid);
                                            $pi = "PI".($getpi+1);
                                            // echo "<script>alert('Your PId = $pi');</script>";
                                        }
                                  }
                                  else  {
                                    echo "<script>alert('Not worked');</script>";
                                  }  
                                     
                                $insert_user="INSERT INTO register (name, email, collegeId, dob, department, college, yog, address, contact, password, pi) VALUE ('$pname','$pemail','$pcollegeId','$pdob','$pdepartment','$pcollege','$pyog','$paddress','$pcontact','$password','$pi')";              
                                if (mysqli_query($dbcon, $insert_user)) {
                                    $last_id = mysqli_insert_id($dbcon);
                                  // echo "<script>alert('Success. & id: $last_id');</script>";
                                    ?> <script> window.location="../login"; </script> <?php
                                } 
                                else {
                                    echo "Error: " . $insert_user . "<br>" . mysqli_error($dbcon);
                                  }                                
                            } 
                   }
             } // ---------- end of password match -------
    }  // -------- end of !empty() braces -------------
    else 
    {
      // echo"<script>alert('All fields are required.')</script>";  
      $error_value = "All fields are required"; 
    }  
}  
  
?>  

<br /><br /><br /><br /><br />

<div id="container-form">
    <div class="nssc-form">
       <div id="error">
          <p><?php echo $error_value; ?></p>
       </div> <br />
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="register-form">
             <p>Name :</p> <br />
             <input type="text" name="pname" placeholder="*name" value="<?php echo $pname;?>" required/> <br></br>

             <p>Email :</p><br />
             <input type="email" name="pemail" placeholder="*email" value="<?php echo $pemail;?>" required/> <br></br>
             
             <p>College Id (STUDENT ROLL NUMBER) :</p><br />
             <input type="text" name="pcollegeId" placeholder="*CollegeId" value="<?php echo $pcollegeId;?>" required/> <br></br>

             <p>Date of Birth :</p><br />
             <input type="date" name="pdob" value="<?php echo $pdob;?>" required/> <br></br>

             <p>Department :</p><br />
             <input type="text" name="pdepartment" placeholder="*Department" value="<?php echo $pdepartment;?>" required/> <br></br>

             <p>College :</p><br />
             <input type="text" name="pcollege" placeholder="*College" value="<?php echo $pcollege;?>" required/> <br></br>

             <p>Year of Graduation :</p><br />
             <input type="number" name="pyog" placeholder="*Your year of Graduation" value="<?php echo $pyog;?>" required/> <br></br>

             <p>Address :</p><br />
             <input type="text" name="paddress" value="<?php echo $paddress;?>" placeholder="*Address" required/> <br></br>

             <p>Contact Number :</p><br />
             <input type="number" name="pcontact" placeholder="*Enter your 10 Digit Contact Number" value="<?php echo $pcontact;?>" required/> <br></br>

             <p>Password :</p><br />
             <input type="password" name="password" required/> <br></br>

             <p>Confirm Password :</p><br />
             <input type="password" name="confirm_password" /> <br></br><br/>

             <input type="submit" name="register" value="Submit" id="register-btn" required/>
         </form>
    </div>
</div>

<br /><br /><br /><br /><br /><br />

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

<!-- the modal -->
    <div id="myModal" class="modal">

  <!-- Modal content -->
 <div class="modal-content">
    <div class="modal-header">
        <span class="close">×</span>
        <h2>SUBSCRIBE US</h2>
    </div>
    <div class="modal-body">
        <form action="../../subscriber.php" method="post" id="hobba">
                <input type="text" name="name" placeholder="Your Name" required/>
                <input type="email" name="email" placeholder="Enter Email" required/>
                <input type="submit" value="SUBMIT" />
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
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
        

</body>
</html>
