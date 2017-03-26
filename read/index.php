<?php  
include("../user-info.php");
?> 

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NSSC | Instruction For Participants</title>


   
    <meta name="keywords" content="NSSC'16 National Students' Space Challenge IIT Kharagpur Space Tehnology Students Society space technology fest">
    <meta name="author" content="Space Tchnology Students' Society spAts">
    <!-- Facebook Metadata /-->
    <meta property="fb:page_id" content="https://www.facebook.com/nssc.iit"/>
    
    <!-- ********************* TO DO ********************* -->
    <meta property="og:image" content="http://nssc.in/payment/online-payment.jpg"/>
    <meta property="og:description" content=""/>
    <meta property="og:title" content=""/>
    <!-- ************************************************* -->   

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
  div.full-container {
     width: 100%;
  }
}
div.full-container {
  max-width: 100%;
  width: 90%;
  height: auto;
  padding: 50px 5% 100px 5%;
  background-color: #44A7BC;
}
div.container-top {
  max-width: 100%;
  width: 70%;
  display: table;
  margin: 25px auto;
  padding: 25px 5%;
  background-color: #FFFFFF;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
div.container-body {
  max-width: 100%;
  width: 70%;
  display: table;
  margin: 25px auto 25px auto;
  padding: 100px 5%;
  background-color: #FFFFFF;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
div.container-body ol {

  line-height: 30px;
}
div.container-body li {
  margin-left: 50px;
  line-height: 30px;
}
div.container-footer {
   max-width: 100%;
   width: 70%;
  display: table;
  margin: 25px auto 50px auto;
  padding: 25px 5%;
  background-color: #FFFFFF;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<div class="top-menubar">
<div class="top" style="position: fixed;">
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
   <h2 style="display: inline-block" id="head_of_page_h2">
        <div style="color: white; font-size: 20px" id="head_of_page">INSTRUCTIONS</div>  
         <div id="user-name-drop">
           <div class="dropdown">
              <button class="dropbtn"><?php echo $pname; ?> <i class="fa fa-sort-desc" aria-hidden="true"></i> </button>
              <div class="dropdown-content">
                  <a href="../../events/loggedin/events-registration.php">Registration Status</a>
                  <a href="../payment">Online Payment</a>
                  <a href="../pdf">Participation Receipt</a>
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
<br /><br />

<div class="full-container">
   <div class="container-top">
       <h2 style="text-align: center; color: #FF4A56">INSTRUCTIONS FOR PARTICIPANTS</h2>
       <p style="text-align: center; color: #555">Compulsory Reading to everyone</p>
   </div>

   <div class="container-body">
       <div class="text-container">
          <h2 style="text-align: center; color: #FF4A56">On spot Registration & Payment at IIT Kharagpur !!</h2><br />
          <ul>
          <li>Those who couldn't Register or Make Payment online, Be there at the Registration Desk of NSSC'16-IIT Kharagpur for on spot Registration from 2nd September onward.</li>
          <li>Please fill the accommodation form <a href="../accommodation">here on this link</a> before coming to IIT Kharagpur campus.</li>
           <li><a href="../schedule.pdf">Click to download schedule of NSSC'16 .</a></li>
          </ul>
       </div>
   </div> 

   <div class="container-body">
       <div class="text-container">
          <ol ><h3 style="color: #FF4A56">Basic Information :</h3>
              <li>Congratulations for joining NSSC'16 !! You are about to be a part of NSSC'16 as you have alredy signed up.</li>
              <li>After successfully signing up you need to do three things accordingly <b>1)</b> <span style="color: #FF4A56">Events registration</span> <b>2)</b> <span style="color: #FF4A56">Online Payment</span> <b>3)</b> <span style="color: #FF4A56">Coming IIT Kharagpur</span>.</li>
              <li>Just after signing up you get a <b>PI</b> means participant Id which you can see on <a href="../../events/loggedin/events-registration.php">Registration Status Page</a> as well as on <a href="../pdf">participation receipt</a>.</li>
          </ol>
          <ol type="a"><h3 style="color: #FF4A56">Events Registration :</h3>
              <li>Events registration can be done following two ways, one is <a href="../events">event page</a> where you need to click the button in the bottom of pop-up modal of that particular event, and another one is <a href="../../events/loggedin/events-registration.php">Registration Status Page</a>. </li>
              <li>On <a href="../../events/loggedin/events-registration.php">Registration Status Page</a> you can register for multiple events and also can make your team for your choice of event/events.</li>
              <li>Click the button named 'key Points' there on <a href="../../events/loggedin/events-registration.php">Registration Status Page</a> to read the remaining rules for event registration.</li>
          </ol>
          <ol><h3 style="color: #FF4A56">Payment Procedure is as follows :</h3>
              <li>You will be redirected from NSSC website to payment portal where you can pay <b>Registration fee</b> for yourslef by selecting one ticket.</li>
              <li>Registration fee includes INR 700 (Accommodations during fest + Registration fee) and INR 100 (caution money which will be refunded back to you on 4th Sept after closing ceremony at arena.)</li>  
              <li>Every participant has to pay individually using his own participant Id.</li>
              <li>There on payment portal you need to fill up your details which include your name, your email id, your participnat id and you email mobile number</li>    
              <li>Participant can also buy <b>official tshirt of NSSC'16</b> which will be distributed in arena at the time of fest.<a href="http://nssc.in/payment/tshirt.jpg" target="_blank"> Click here to see official tshirt of NSSC'16</a></li>
              <li>After successful payment you will get a <b>transaction id</b> of your successfull payment by an email which will be confirmation of your payment.</li>
              <li><a href="https://www.townscript.com/widget/nssc-2016" style="cursor: pointer">Click here to pay registration fee.</a></li>
              <li>You will have to pay fees of paid workshops in arena at the time of fest.</li>
          </ol>
          <ol><h3 style="color: #FF4A56">Coming IIT Kharagpur :</h3>
             <li>Now all you have to do is to come IIT Kharagpur in order to perform for registered event/events.</li>
             <li>We are opening all the accommodation lines from evening 1st September onwards. Fill the accommodation form<a href="../accommodation"> here on this link </a> and let us know when you are coming to IIT Kharagpur ?</li>
             <li> It is compulsory for each participant to carry <a href="../pdf">participation receipt, payment receipt</a>(in case of fees paid) and college ID(Student Roll Number) card along with them while coming to the fest.</li>
             <li><a href="../pdf"> Click to download your participation receipt </a></li>
             <li>NSSC wishes you all the best !!</li>
          </ol>
       </div>
   </div>

   <div class="container-footer">
        <h2 style="text-align: center">CONTACTS</h2><br />
           <p><b>Remee Patel</b></p>
           <p>+91-9547675081</p>
           <p>remee@nssc.in</p>
           <a href="https://www.facebook.com/remee.patel.7" target="_blank">Contact on Facebook</a><br /><br />
           <p><b>Sanket Kangle</b></p>
           <p>+91-7699097624</p>
           <p>sanket@nssc.in</p>
           <a href="https://www.facebook.com/sanket.kangle" target="_blank">Contact on Facebook</a><br /><br />
   </div>
</div>

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
