<?php  
  include("../../user-info.php");
?> 

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NSSC | Exhibition</title>

       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Exhibition Page of nssc.in" />
       <meta name="description" content="Exhibition Page of National Students' Space Challenge '16"/>
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
#myModal1 li {
  margin-left: 50px;
}
#myModal1 ul {
  margin: 10px 0;
}
</style>



</head>
<body>


<div class="top-menubar">
<div class="top"style="position: fixed;" >
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
  <h2 style="display: inline-block" id="head_of_page_h2">
        <div style="color: white; font-size: 20px" id="head_of_page">EXHIBITIONS</div>  
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
        <li><a href="#"><i class="fa fa-magic"></i></i>&nbsp;&nbsp;Exihibition</a></li>
        <li><a href="../../Workshops"><i class="fa fa-cog"></i></i>&nbsp;&nbsp;Workshops</a></li>
         <li><a href="../../contact"><i class="fa fa-phone-square"></i></i>&nbsp;&nbsp;Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>

<br /><br /><br /><br /><br /><br /><br />

<div class="body-container">
  <div class="line-container">
     <div class="particular-content">
        <img src="../hoverpod.jpg" alt="" /><br /><br />
        <h3>HOVERBOARD</h3><br />
        <br />
        <button id="myBtn2" class="button1 button5">View More</button>
     </div>

     <div class="particular-content">
        <img src="../hawk.jpg" alt="" style="max-width: 100%; max-height: 240px; height: 40%"/><br /><br />
        <h3>STUNT QUADCOPTER</h3><br />
        <br />
       <button id="myBtn3" class="button1 button5">View More</button>
     </div>     
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



    <!-- ========================== modal for body ======================= -->
   <!-- ========================== modal for body ======================= -->
  

   <!-- ==== modal for box 2 ============= -->
<div id="myModal2" class="modal">
 <div class="modal-content">
    <div class="modal-header">
        <span class="close close2">×</span>
        <h2>HOVERBOARD</h2>
    </div>
    <div class="modal-body" style="padding: 25px 50px">
        <p>Smart Vehicle expo : Hoverboard

Self Balancing Vechicle (Smart Vehicle) is the new phenomenon of our current generation.
If you’ve seen such kind of vechicle before and thought they were devices from the future, then these Smart Vehicle will blow your mind!
Today,these smart vechicles are environmentally friendly and used for short-distance transportation 
Come and expierence the live demo at event Smart vechicle Expo ,NSSC'16, IIT Kharagpur.
</p><br />
        <h2 style="text-align: center">CONTACTS</h2>

        <div class="contacts">
           <p><b>Ayush Kanwar</b></p>
           <p>+91-8768702045</p>
           <p>ayush@nssc.in</p>
           <a href="https://www.facebook.com/ayushkanwar777?fref=ts" target="_blank">Contact on Facebook</a><br /><br />
           <p><b>Remee Patel</b></p>
           <p>+91-9547675081</p>
           <p>remee@nssc.in</p>
           <a href="https://www.facebook.com/remee.patel.7" target="_blank">Contact on Facebook</a>
       </div>
    </div>
    <div class="modal-footer">
    </div>
 </div>
</div>

   <!-- ==== modal for box 3 ============= -->
<div id="myModal3" class="modal">
 <div class="modal-content">
    <div class="modal-header">
        <span class="close close3">×</span>
        <h2>STUNT QUADCOPTER</h2>
    </div>
    <div class="modal-body" style="padding: 25px 50px">
        <p>When a gliding Hawk swiftly grabs its prey, it doesn’t even let it bat an eye. Have you ever 
wished to see a Hawk live in action? This NSSC, witness the stunts of a quad copter when it 
glides like a Hawk in a Quidditch themed arena! The hovering of a hover-board is also in the 
list of exhibitions to be presented. Be a part of this amazing exhibition to watch the ride of a 
stunt copter and a hover-board.</p><br />
        <h2 style="text-align: center">CONTACTS</h2>

        <div class="contacts">
           <p><b>Ayush Kanwar</b></p>
           <p>+91-8768702045</p>
           <p>ayush@nssc.in</p>
           <a href="https://www.facebook.com/ayushkanwar777?fref=ts" target="_blank">Contact on Facebook</a><br /><br />
           <p><b>Remee Patel</b></p>
           <p>+91-9547675081</p>
           <p>remee@nssc.in</p>
           <a href="https://www.facebook.com/remee.patel.7" target="_blank">Contact on Facebook</a>
       </div>
    </div>
    <div class="modal-footer">
    </div>
 </div>
</div>

  <!-- ================ modal for subscriber =========== -->
<div id="myModal" class="modal">
 <div class="modal-content">
    <div class="modal-header">
        <span class="close">×</span>
        <h2 style="color: #01A3E8">SUBSCRIBE US</h2>
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
  // ============= for subscribe us ================
    var modal = document.getElementById('myModal');
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }

    // ================ for view-more2 ===============
    var modal2 = document.getElementById('myModal2');
    var btn2 = document.getElementById("myBtn2");
    var span2 = document.getElementsByClassName("close2")[0];
    btn2.onclick = function() {
        modal2.style.display = "block";
    }
    span2.onclick = function() {
        modal2.style.display = "none";
    } 
    // ================ for view-more3 ===============
    var modal3 = document.getElementById('myModal3');
    var btn3 = document.getElementById("myBtn3");
    var span3 = document.getElementsByClassName("close3")[0];
    btn3.onclick = function() {
        modal3.style.display = "block";
    }
    span3.onclick = function() {
        modal3.style.display = "none";
    } 
 
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        else if (event.target == modal2) {
            modal2.style.display = "none";
        }
        else if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }
</script>
        


</body>
</html>
