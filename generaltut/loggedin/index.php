<?php  
  include("../../user-info.php");
?> 

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NSSC | General Tutorial</title>

       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Exhibition Page of nssc.in" />
       <meta name="description" content="General Tutorial of National Students' Space Challenge '16"/>
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
</style>
</head>
<body>
<div class="top-menubar">
<div class="top" style="position: fixed;">
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
   <h2 style="display: inline-block" id="head_of_page_h2">
        <div style="color: white; font-size: 20px" id="head_of_page">GENERAL TUTORIAL</div>  
         <div id="user-name-drop">
           <div class="dropdown">
              <button class="dropbtn"><?php echo $pname; ?> <i class="fa fa-sort-desc" aria-hidden="true"></i> </button>
              <div class="dropdown-content">
                  <a href="../../events/loggedin/events-registration.php">Registration Status</a>
                  <a href="../../payment">Online Payment</a>
                  <a href="../../pdf">Participation Receipt</a>
                   <a href="../../accommodation">Accommodation Form</a>
                  <a href="../../logout.php">Logout</a>
              </div>
          </div>
      </div>
  </h2>
  <div class="drawer">
    <nav>
      <ul>
        <li><a href="../../"><i class="fa fa-home"></i></i>&nbsp;&nbsp;Home</a></li>
        <li><a href="../../about-us"><i class="fa fa-users"></i></i>&nbsp;&nbsp;Abouts Us</a></li>
        <li><a href="../../events"><i class="fa fa-trophy"></i>&nbsp;&nbsp;Events</a></li>
        <li><a href="../../spons"><i class="fa fa-briefcase"></i></i>&nbsp;&nbsp;Sponsors</a></li>
        <li><a href="../../guest-lectures"><i class="fa fa-odnoklassniki-square"></i></i>&nbsp;&nbsp;Guest Talks</a></li>
        <li><a href="../../exhibitions"><i class="fa fa-magic"></i></i>&nbsp;&nbsp;Exihibition</a></li>
        <li><a href="../../Workshops"><i class="fa fa-cog"></i></i>&nbsp;&nbsp;Workshops</a></li>
        <li><a href="../../contact"><i class="fa fa-phone-square"></i></i>&nbsp;&nbsp;Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>

<br /><br /><br /><br /><br />

<div id="events-container">

   <div class="back-event" id="event1">
           <a href="pdf/dd.pdf"><img src="dd.jpg"  /></a>
           <br/><br />
           <span> <a href="pdf/dd.pdf"><h2>Differential Drive<h2></a></span>
   </div>

   <div class="back-event" id="event2">
           <a href="pdf/grip.pdf"><img src="grip.png"  /></a>
           <br/><br />
           <span> <a href="pdf/grip.pdf"><h2>Gripping Mechanism<h2></a></span>
   </div>   
   
   <div class="back-event" id="event3">
           <a href="pdf/motor.pdf"><img src="motor-driver.jpg"  /></a>
           <br/><br />
           <span><a href="pdf/motor.pdf"> <h2>Motor Driver L293D<h2> </a></span>
   </div> 

   <!--<div class="back-event" id="event4">
           <a href="pdf/rectifier.pdf"><img src="rectifier.png"  /></a>
           <br/><br />
           <span><a href="pdf/rectifier.pdf"> <h2>Rectifier Circuit<h2> </a></span>
   </div> -->
   
   <div class="back-event" id="event5">
           <a href="pdf/dpdt.pdf"><img src="dpdt.gif"  /></a>
           <br/><br />
           <span><a href="pdf/dpdt.pdf"> <h2>DPDT Switches<h2> </a></span>
   </div>
   <div class="back-event" id="event6">
           <a href="pdf/micro.pdf"><img src="micro.png"  /></a>
           <br/><br />
           <span><a href="pdf/micro.pdf"> <h2>Micro­Processor/Micro­Controller<h2> </a></span>
   </div>
   <div class="back-event" id="event7">
           <a href="pdf/servo.pdf"><img src="servo.jpg"  /></a>
           <br/><br />
           <span><a href="pdf/servo.pdf"> <h2>SERVO MOTOR<h2> </a></span>
   </div> 
   
   <div class="back-event" id="event8">
           <a href="pdf/radio.pdf"><img src="radio.jpg"  /></a>
           <br/><br />
           <span><a href="pdf/radio.pdf"> <h2>Radio Controlled <br /> Power System<h2> </a></span>
   </div> 
    
   <div class="back-event" id="event9">
           <a href="pdf/rc.pdf"><img src="rc.jpg"  /></a>
           <br/><br />
           <span><a href="pdf/rc.pdf"> <h2>R/C Control System<h2> </a></span>
   </div>
   <div class="back-event" id="event10">
           <a href="pdf/sonar.pdf"><img src="sonar.jpg"  /></a>
           <br/><br />
           <span><a href="pdf/sonar.pdf"> <h2>SONAR<h2> </a></span>
   </div> 

</div>



<!--


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
