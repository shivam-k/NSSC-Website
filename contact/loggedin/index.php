<?php  
include("../../user-info.php");
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NSSC | Contact Us </title>
        <meta charset="UTF-8" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Contact Page  of nssc.in" />
       <meta name="description" content="Contact Page of National Students' Space Challenge '16"/>

        <link rel="shortcut icon" href="nssc.png"> 

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- ======================= google map ================================ -->
        <link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
       <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400,500,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">

    

        <!-- =================================== Nav links =========================== -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="nav.css">

        <style>
           .fa-facebook {
           	color: blue;
           	font-size: 20px;
           }
           h3 {
           	  margin-bottom: 10px;
           }
   
  
        /* =================== style for users name =========================== */

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
    top: 25.5px;
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

   <div class="top-menubar" >
<div class="top" style="position: fixed;">
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
  <h2 style="display: inline-block" id="head_of_page_h2">
        <div style="color: white; font-size: 20px" id="head_of_page">CONTACT US</div>  
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
        <li><a href="#"><i class="fa fa-phone-square"></i></i>&nbsp;&nbsp;Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>  <br /> <br /> <br /> <br /> <br /> <br />



<!-- ============================ Our Team ===================== -->

<div class="gov-data" id="gov">
       <div class="gov-img"><img id="jassi-img" src="images/nikhil.jpg" /></div>
       <div class="gov-details">
            <h2 style="margin-top: 20px">NIKHIL MANNAN</h2>
            <h4><b>Governor</b></h4><br />
            <p<i>nikhil@nssc.in</i></p>
             <br />
       </div>
   </div>

<div class="full-mem-list">
      
   <div class="mem-data" id="mem-1">
       <div class="mem-img" id="member-1"><img id="harsh-img" src="images/harsh.jpg" /></div>
       <div class="mem-details">
            <h2 style="margin-top: 20px">Harsh Shah</h2>
            <h4><b>Finance Head</b></h4><br />
            <p><i>harsh@nssc.in</i></p>
            <p><i>+91-8768710530</i></p>
            <a href="https://www.facebook.com/profile.php?id=100001383863258&fref=ts" target="_blank"><i class="fa fa-facebook-square" ></i></a>
       </div>
   </div>

   <div class="mem-data" id="mem-1">
       <div class="mem-img"><img id="jassi-img" src="images/jassi.jpg" /></div>
       <div class="mem-details">
            <h2 style="margin-top: 20px">Jaswanth Reddy</h2>
            <h4><b>Sponsorship Head</b></h4><br />
            <p><i>jaswanth@nssc.in</i></p>
            <p><i>+91-9933998997</i></p>
            <a href="https://www.facebook.com/jaswanth.reddy.165?fref=pb&hc_location=friends_tab&pnref=friends.recent" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
       </div>
   </div>

   <div class="mem-data" id="mem-1">
       <div class="mem-img"><img id="sanket-img" src="images/sanket.jpg" /></div>
       <div class="mem-details">
            <h2 style="margin-top: 20px">Sanket Kangle</h2>
                <h4><b>Sponsorship Head</b></h4><br />
                <p><i>sanket@nssc.in</i></p>
                <p><i>+91-7699097624</i></p>
                <a href="https://www.facebook.com/sanket.kangle?fref=ts" target="_blank"><i class="fa fa-facebook-square" ></i></a>
       </div>
   </div>


   <div class="mem-data" id="mem-1">
       <div class="mem-img" id="member-1"><img id="mohit-img" src="images/mohit.jpg" /></div>
       <div class="mem-details">
            <h2 style="margin-top: 20px">Mohit Dhariwal</h2>
                <h4><b>Events Head</b></h4><br />
                <p><i>mohit@nssc.in</i></p>
                <p><i>+91-9933992777</i></p>
                <a href="https://www.facebook.com/dhariwal.mohit?fref=ts" target="_blank"><i class="fa fa-facebook-square" ></i></a>
       </div>
   </div>

   <div class="mem-data" id="mem-1">
       <div class="mem-img"><img id="ayush-img" src="images/ayush.jpg" /></div>
       <div class="mem-details">
            <h2 style="margin-top: 20px">Ayush Kanwar</h2>
            <h4><b>Publicity and Events Head</b></h4><br />
            <p><i>ayush@nssc.in</i></p>
            <p><i>+91-8768702045</i></p>
            <a href="https://www.facebook.com/ayushkanwar777" target="_blank"><i class="fa fa-facebook-square" ></i></a>
       </div>
   </div>

   <div class="mem-data" id="mem-1">
       <div class="mem-img"><img id="remee-img" src="images/remee.jpg" /></div>
       <div class="mem-details">
            <h2 style="margin-top: 20px">Remee Patel</h2>
                <h4><b>Publicity Head</b></h4><br />
                <p><i>remee@nssc.in</i></p>
                <p><i>+91-95476 75081</i></p>
                <a href="https://www.facebook.com/remee.patel.7?fref=ts" target="_blank"><i class="fa fa-facebook-square" ></i></a>
       </div>
   </div>

  <!-- <div class="mem-data" id="mem-1">
       <div class="mem-img"><img id="saurabh-img" src="images/saurabh.png" /></div>
       <div class="mem-details">
            <h2 style="margin-top: 20px">Saurabh Malviya</h2>
                <h4><b>Publicity Head</b></h4><br />
                <p><i>saurabh@nssc.in</i></p>
                <p><i>+91-7872705937</i></p>
                <a href="https://www.facebook.com/saurab.malviya?fref=ts&__mref=message_bubble" target="_blank"><i class="fa fa-facebook-square"></i></a>
       </div>
   </div> -->

   <div class="mem-data" id="mem-1">
       <div class="mem-img" id="member-1"><img id="sumit-img" src="images/sumit.jpg" /></div>
       <div class="mem-details">
            <h2 style="margin-top: 20px">Sumit Sarkar</h2>
                <h4><b>Design Head</b></h4><br />
                <p><i>sumit@nssc.in</i></p>
                <p><i>+91-94018 01907</i></p>
                <a href="https://www.facebook.com/sumit.sarkar.9828" target="_blank"><i class="fa fa-facebook-square" ></i></a>
       </div>
   </div>

   <div class="mem-data" id="mem-1">
       <div class="mem-img"><img id="shivam-img" src="images/shivam.jpg" /></div>
       <div class="mem-details">
            <h2 style="margin-top: 20px">Shivam Kumar</h2>
            <h4><b>Web Head</b></h4><br />
            <p><i>shivam@nssc.in</i></p>
            <p><i>+91-7872702422</i></p>
            <a href="https://www.facebook.com/profile.php?id=100007937806775" target="_blank"><i class="fa fa-facebook-square"></i></a>
       </div>
   </div> 


</div>
<br /><br /><br />


    <!-- ========================= Our place of work =============== -->
    <div class="whole_place">
        <div class="whole_place_content" id="whole_place_img" >
        	<img src="images/kcst.jpg">
        </div>
        <div class="whole_place_content" id="whole_place_write" >
        	<h1><b>OUR PLACE OF WORK ! </b></h1><br/>
            <hr class="work-line"/>
        	<p >Kalpana Chawla Space Technology Cell is the contact point of Indian Space Research Organisation at IIT Kharagpur. Its main aim is to promote research and applications in Space Science and Technology that compliments space agencies efforts. </p>
        </div>
        <div class="location">
            <i class="fa fa-map-marker">  <span style="font-size: 15px">IIT KHARAGPUR, KHARAGPUR</span></i>
        </div>
        
    </div>
    <!-- ======================= contact us form ============================= -->

<div class="contact">
 <div class="back-color">
  <div  id="meet-me">
      <form action="../../contactus_msg.php"; method="POST">
         <input type="text" name="name" placeholder="Your Name" required/>
         <input type="email" name="email" placeholder="Enter Email" required/>
         <textarea type="text" name="message" placeholder="You message..."></textarea><br />
         <input type="submit" value="Submit" id="form-btn" /> 
        </form>
   </div>
 </div>
 </div>

<!-- ========================= google map =========================== -->

 <div class="container">
    <div id="map_container"></div>
      <div id="map"></div>
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
				<img src="images/nssc.png">
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

        
<!-- ======================== Script for Modal ==================================== -->


        
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


        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <!-- ============================= google map ================================ -->

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/noisy/1.2/jquery.noisy.min.js'></script>

        <script src="js/index.js"></script>
    </body>
</html>
