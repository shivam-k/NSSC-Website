<?php  
  include("../user.php");
?>  

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NSSC | Workshops</title>

       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Workshop Page of nssc.in" />
       <meta name="description" content="Workshop Page of National Students' Space Challenge '16"/>
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

.logbtn {
    color: #F9F9F9;
    padding: 5px 16px;
    font-size: 60%;
    border: none;
    cursor: pointer;
}
.logbtn a {
    color: white;
    font-weight: 100;
    padding: 1px 8px;
    text-decoration: none;
    font-size: 130%;
   /* border-bottom: 5px solid #01A3E8;*/
   -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.logbtn a:hover {
  border-bottom: 5px solid #01A3E8;
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
        <div style="color: white; font-size: 20px" id="head_of_page">WORKSHOPS</div>  
        <div id="user-name-drop">
           <div class="dropdown">
              <div class="logbtn"><a href="../login">LOGIN</a></div>
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
        <li><a href="../guest-lectures"><i class="fa fa-odnoklassniki-square"></i></i>&nbsp;&nbsp;Guest Talks</a></li>
        <li><a href="../exhibitions"><i class="fa fa-magic"></i></i>&nbsp;&nbsp;Exhibition</a></li>
        <li><a href="#"><i class="fa fa-cog"></i></i>&nbsp;&nbsp;Workshops</a></li>
         <li><a href="../contact"><i class="fa fa-phone-square"></i></i>&nbsp;&nbsp;Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>


<br /><br /><br /><br /><br /><br /><br />

<div class="body-container">
  <div class="line-container">
     <div class="particular-content">
        <img src="images/aerotrix.jpeg" alt="" /><br /><br />
        <h3>AEROTRIX</h3><br />
        <br />
        <button id="myBtn1" class="button1 button5">View More</button>
     </div>

     <div class="particular-content">
        <img src="images/hawkeyetech.jpg" alt="" style="max-width: 100%; max-height: 240px; height: 40%"/><br /><br />
        <h3>HAWKEYE TECHWORKS</h3><br />
        <br />
       <button id="myBtn2" class="button1 button5">View More</button>
     </div>

     <div class="particular-content">
        <img src="images/astroproject.jpeg" alt="" /><br /><br />
        <h3>ASTROPROJECT</h3><br />
        <br />
       <button id="myBtn3" class="button1 button5">View More</button>
     </div>

     <div class="particular-content">
        <img src="images/agragami.jpeg" style="max-width: 100%; max-height: 275px; height: 70%" alt="" /><br /><br />
        <h3>AGRAGAMI APPLIED AERONAUTICS	</h3><br />
        <br />
        <button id="myBtn4" class="button1 button5">View More</button>
     </div>

      <div class="particular-content">
        <img src="images/Bulk_contour3.jpg" style="max-width: 100%; max-height: 275px; height: 70%; border-bottom: 1px solid #555" alt="" /><br /><br />
        <h3>ALTAIR ENGINEERING	</h3><br />
        <br />
        <button id="myBtn5" class="button1 button5">View More</button>
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
   <!-- ==== modal for box 1 ============= -->
<div id="myModal1" class="modal" style="margin-bottom: 100px">
 <div class="modal-content">
    <div class="modal-header">
        <span class="close close1">×</span>
        <h2>AEROTRIX</h2>
    </div>
    <div class="modal-body" style="padding: 25px 50px">
        <p>Do you ever lust for wings when you see birds hover past the sky? The thrill of steering past the sky is worth a dream. This year, AerotriX is all set to present a workshop at IIT Kharagpur in <b>National Students’ Space Challenge</b>. AerotriX is presenting a workshop on Ornithopter, which is an aircraft that flies by using the same mechanism as birds: flapping its wings instead of using engines for propulsion like m.ost of the modern day aerodynamic models. </p>
        
<div>

<ul style="list-style: none">

   <li><h2>Course Outcomes</h2>
       <ul>
         <li>Certification from <a href="http://www.ornithopter.org/">Ornithopter Zone, USA</a></li>
         <li>Build and test your own rubber-powered Ornithopter.</li>
         <li>Understand the principles of Flight of a bird.</li>
         <li>Design a mechanism that imitates a Bird</li>
         <li>Competition for Longest Flight</li>
       </ul>
   </li>
   <li><h2>Course Structure and Topics Covered</h2>
       <li style="list-style: none"><p><b>Theory:</b></p>
           <ul>
             <li>Basics of Aerodynamics and flapping-wing flight.</li>
             <li>History of Ornithopters.</li>
             <li>Types of flapping-wing aircraft.</li>
             <li>Understanding the mechanisms involved in design of flapping-wing flight.</li>
             <li>Theory behind designing a Radio Controlled Ornithopter.</li>
           </ul>
       </li>
       <li><p><b>Practical:</b></p>
          <ul>
            <li>Design own rubber-powered Ornithopter from scratch.</li>
            <li>Ornithopter Fabrication sessions.</li>
            <li>Test flight /competition session.</li>
          </ul>
       </li>
   </li>
   <li><h2>Kit Content</h2>
       <ul>
         <li>Balsa wood</li>
         <li>Mechanism rods</li>
         <li>Epoxy Glue</li>
         <li>Rubber bands</li>
         <li>Other miscellaneous items</li>
       </ul>
   </li>

   <li><h2>Certification</h2>
    <ul>
       <li>All AerotriX certificates have a unique ID which can be verified online for authentication</li>
       <li>Certificate of Completion</li>
       <li>Certificate of Completion with Distinction (for top performers)</li>
    </ul>
   </li>

</ul>


</div>
<br />
<p style="text-align: center; color: #FFF; background-color: #555; padding: 5px 10px; display: table; margin: 0 auto">"This is paid workshop, and you will have to pay the workshop fee INR 700 in the arena at the time of fest." </p>
<br />


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
<br />
<br />
<br />
       </div>
    </div>
    <div class="modal-footer">
    </div>
 </div>
</div>

   <!-- ==== modal for box 2 ============= -->
<div id="myModal2" class="modal">
 <div class="modal-content">
    <div class="modal-header">
        <span class="close close2">×</span>
        <h2>HAWKEYE TECHWORKS</h2>
    </div>
    <div class="modal-body" style="padding: 25px 50px">
        <p>When a hawk hovers over the sky, the splendid view of the landscape is available for it to savour. In a similar situation, <b>‘Hawkeye Techworks’</b> is all set to present its own drone which will capture the splendid view of the landscape from sky. This aerial photography workshop will be a fascinating experience for the participants as there will be teaching of controlling drone and taking clicks in hands-on session.</p><br />
        
<p style="text-align: center; color: #FFF; background-color: #555; padding: 5px 10px; display: table; margin: 0 auto">"This is paid workshop, and you will have to pay the workshop fee INR 600 in the arena at the time of fest." </p>
<br />
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
        <h2>ASTROPROJECTS</h2>
    </div>
    <div class="modal-body" style="padding: 25px 50px">
        <p>The universe is full of mysteries. To get a deeper insight into the universe, many prominent scientists try present their views by various documentaries. Even the pictures of the cosmic wonders can make us skip our heartbeat. This NSSC, get ready for an exciting workshop by <b>AstroProjects</b>. The workshop will include documentaries on ‘Astronomy Research in India’, which will emphasise on the upcoming project and career opportunities in the field of space science. There will also be a session on ‘Basic of Landscape photography’ which include a hands-on session by the team.</p>
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

   <!-- ==== modal for box 4 ============= -->
<div id="myModal4" class="modal">
 <div class="modal-content">
    <div class="modal-header">
        <span class="close close4">×</span>
        <h2>AGRAGAMI APPLIED AERONAUTICS</h2>
    </div>
    <div class="modal-body" style="padding: 25px 50px">
        <p>The world is just a beautiful portrait when looked from the sky above. This September, <b>Agragami Applied Aeronautics</b> will conduct a workshop in the 2016 edition of National Students’ Space Challenge. The workshop will include an easy-to-deploy mapping drone which will capture accurate aerial imagery and transform it into 2-D maps and 3-D models of small and medium sized sites! Drone Technology allows GIS professionals to work more efficiently. This NSSC, grab the opportunity to be a part of this amazing workshop.</p><br />
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


   <!-- ==== modal for box 5 ============= -->
<div id="myModal5" class="modal">
 <div class="modal-content">
    <div class="modal-header">
        <span class="close close5">×</span>
        <h2>ALTAIR ENGINEERING</h2>
    </div>
    <div class="modal-body" style="padding: 25px 50px">
        <p>When you aim to reach beyond the horizon, you need to leave something

behind. Every budding rocket engineer wants to design a structure which can

reach past the limits of sky. Presenting a workshop by Altair on optimisation

using CAE to design light weight design structures. You will also get to learn

about composite analysis and additive manufacturing process using <b>Altair

OptiStruct</b>. NSSC 2016 welcomes you all to grab this amazing opportunity.</p><br />
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
  // ================ for view-more1 ===============
    var modal1 = document.getElementById('myModal1');
    var btn1 = document.getElementById("myBtn1");
    var span1 = document.getElementsByClassName("close1")[0];
    btn1.onclick = function() {
        modal1.style.display = "block";
    }
    span1.onclick = function() {
        modal1.style.display = "none";
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
    // ================ for view-more4 ===============
    var modal4 = document.getElementById('myModal4');
    var btn4 = document.getElementById("myBtn4");
    var span4 = document.getElementsByClassName("close4")[0];
    btn4.onclick = function() {
        modal4.style.display = "block";
    }
    span4.onclick = function() {
        modal4.style.display = "none";
    } 

    // ================ for view-more5 ===============
    var modal5 = document.getElementById('myModal5');
    var btn5 = document.getElementById("myBtn5");
    var span5 = document.getElementsByClassName("close5")[0];
    btn5.onclick = function() {
        modal5.style.display = "block";
    }
    span5.onclick = function() {
        modal5.style.display = "none";
    } 

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        else if (event.target == modal1) {
            modal1.style.display = "none";
        }
        else if (event.target == modal2) {
            modal2.style.display = "none";
        }
        else if (event.target == modal3) {
            modal3.style.display = "none";
        }
        else if (event.target == modal4) {
            modal4.style.display = "none";
        }
         else if (event.target == modal5) {
            modal5.style.display = "none";
        }
    }
</script>
        


</body>
</html>
