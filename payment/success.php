<?php  
    include("../user-info.php");
?> 

<!DOCTYPE HTML>
<html>
<head>

<title>NSSC | Payment Success</title>
       
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">          
      
       <!-- ================ fb meta data ============ -->
       <meta property="og:url" content="http://nssc.in/payment/index.php"  />
       <meta property="og:type" content="website" />
       <meta property="og:title" content="NSSC'16 | Online Payment"/>
       <meta property="og:description" content="You first need to login in order to pay registration fee for our fest. So click on the Login tab in the navigation bar to jump on the login option.After successful login, you need to select online payment option in the navigation bar. Thereafter you please read the instructions for payment procedure and proceed for payment.  "/>
       <meta property="og:image" content="http://nssc.in/payment/online-payment.jpg"/>       

       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="" />
       <meta name="description" content="Rgistration Payment for National Students' Space Challenge '16"/>
       <link rel="shortcut icon" type="image/png" href="nssc.png"/>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="nav.css">

<style>      
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



/* ============ style for body content =========== */

div#body-container {
  max-width: 100%;
  width: 90%;
  padding: 50px 5%;
}
div#body-content {
    background-color: #FFF;
    display: table;
    margin: 100px auto;
    max-width: 100%;
    width: 60%;
    text-align: center;
     box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
div#body-content h2 {
	margin: 100px 25px 25px 25px;
}

@media only screen and (max-width: 553px) {
  div#body-content {
    max-width: 100%;
     width: 90%;
  }
}

</style>


</head>
<body>
<div class="top-menubar">
<div class="top" style="position: fixed;">
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
   <h2 style="display: inline-block" id="head_of_page_h2">
        <div style="color: white; font-size: 20px" id="head_of_page">Payment Success</div>  
         <div id="user-name-drop">
           <div class="dropdown">
              <button class="dropbtn"><?php echo $pname; ?> <i class="fa fa-sort-desc" aria-hidden="true"></i> </button>
              <div class="dropdown-content">
                  <a href="../events/loggedin/events-registration.php">Registration Status</a>
                  <a href="index.php">Online Payment</a>
                   <a href="../accommodation">Accommodation Form</a>
                  <a href="../logout.php">Logout</a>
              </div>
          </div>
      </div>
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
        <li><a href="../Workshops"><i class="fa fa-cog"></i></i>&nbsp;&nbsp;Workshops</a></li>
        <li><a href="../contact"><i class="fa fa-phone-square"></i></i>&nbsp;&nbsp;Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>
<br /><br /><br />

<div id="body-container">
	<div id="body-content">
	   <h2 style="line-height: 40px"><?php echo $pname ?>, You have successfully made payment.<br />
            <p>See you soon in IIT Kharagpur. !!</p></h2>
            <p style="color: #FF4A56">Never forget to download your <a href="../pdf">Participation Receipt</a>.</p><br />
           <p style="color: #FF4A56">NSSC wishes you all the best and Happy journey :) !!! </p><br /><br /><br /><br />
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


    <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
 <div class="modal-content">
    <div class="modal-header">
        <span class="close">×</span>
        <h2>SUBSCRIBE US</h2>
    </div>
    <div class="modal-body">
        <form action="../../subscriber.php" method="post">
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
