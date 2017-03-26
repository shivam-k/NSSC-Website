<?php  
  include("../../user-info.php");
?> 

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NSSC | Guest Lecture</title>

       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Guest Lecture Page of nssc.in" />
       <meta name="description" content="Guest Lecture Page of National Students' Space Challenge '16"/>
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
        <div style="color: white; font-size: 20px" id="head_of_page">GUEST TALKS</div>  
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
        <li><a href="#"><i class="fa fa-odnoklassniki-square"></i></i>&nbsp;&nbsp;Guest Talks</a></li>
        <li><a href="../../exhibitions"><i class="fa fa-magic"></i></i>&nbsp;&nbsp;Exihibition</a></li>
        <li><a href="../../Workshops"><i class="fa fa-cog"></i></i>&nbsp;&nbsp;Workshops</a></li>
        <li><a href="../../contact"><i class="fa fa-phone-square"></i></i>&nbsp;&nbsp;Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>



<br /><br /><br /><br /><br /><br />

<div class="body-container">
  <div class="line-container">
     <div class="particular-content">  <!-- ======= modal box-1 -->
        <img src="arnab.jpg" alt="Arnab Rai Choudhuri" /><br /><br />
        <h3>Prof. Arnab Rai Choudhuri</h3><br />
        <p><i>Renowned Indian Astrophysicist,<br> Physics Department, IISc Bangalore, <br /> Writer of Nature's Third Cycle:A Story of Sunspot</i></p><br />
        <button id="myBtn1" class="button1 button5">View More</button>
     </div>

      <div class="particular-content"> <!-- ======= modal box-3 -->
        <img src="../sanjay.jpg" alt="Dr. Abhas Mitra" /><br /><br /><br />
        <h3>Dr. Abhas Mitra</h3><br />
        <p><i> Theoretical physicist,<br /> The Indian physicist who disproved black holes 13 years before Stephen Hawking</i></p><br/>
         <button id="myBtn3" class="button1 button5">View More</button>
     </div>
   
     <div class="particular-content">  <!-- ======= modal box-1 -->
        <img src="cumrun.jpg" alt="" /><br /><br />
        <h3>Dr. Cumrun Vafa</h3><br />
        <p><i>String Theorist,<br /> Recipient of Dirac Medal,<br /> Physics Department,<br /> Harvard University</i></p><br />
       <button id="myBtn2" class="button1 button5">View More</button>
     </div>
  </div>
</div>
    
    <!-- ==== modal for box 1 ============= -->
<div id="myModal1" class="modal">
 <div class="modal-content">
    <div class="modal-header">
        <span class="close close1">×</span>
        <h2>Prof. Arnab Rai Choudhuri</h2>
    </div>
    <div class="modal-body" style="padding: 25px 50px">
        <p style="text-indent: 25px"><b>Arnab Rai Choudhuri</b> is an Indian scientist working in the area of Astrophysical MHD, specially in
        context of solar magnetic cycle. He obtained his Bachelor of Science degree in 1978 from the
        Presidency College under the University of Calcutta and his M.Sc degree in physics from the Indian
        Institute of Technology Kanpur. He earned his Ph.D at the University of Chicago in 1985 working
        under the supervision of Professor E.N. Parker. For next two years till 1987 he did research at
        the High Altitude Observatory, Boulder, USA. In 1987, he joined the Physics Department of Indian Institute of Science (IISc) as lecturer and became professor there in 2002.</p></p>
        <p style="text-indent: 50px">He is a theoretical astrophysicist working on MHD problems in astrophysics-- primarily
        related to the Sun, although he has worked on other astrophysical systems (AGNs,
        jets, accretion, pulsars) as well. The generation of solar magnetic fields by the
        dynamo process and the formation of sunspots by the buoyant rise of flux tubes are
        the two subjects on which he has written the maximum number of papers.</p><br />
        <h2 style="text-align: center">CONTACTS</h2>

        <div class="contacts">
           <p><b>Ayush Kanwar</b></p>
           <p>+91-8768702045</p>
           <p>ayush@nssc.in</p>
           <a href="https://www.facebook.com/ayush.kanwar.585" target="_blank">Contact on Facebook</a><br /><br />
           <p><b>Remee Patel</b></p>
           <p>+91-9547675081</p>
           <p>remee@nssc.in</p>
           <a href="https://www.facebook.com/ayush.kanwar.585" target="_blank">Contact on Facebook</a>
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
        <h2>Dr. Cumrun Vafa</h2>
    </div>
    <div class="modal-body" style="padding: 25px 50px">
        <p style="text-indent: 25px"><b>Cumrun Vafa</b> is an Iranian-American string theorist from Harvard University, which he first joined as
        a Harvard Junior Fellow. He is the recipient of the 2008 Dirac Medal.  Currently, he is the Donner
        Professor of Science at Harvard University.
        <p style="text-indent: 50px">
        Cumrun Vafa is a string theorist. His research is focused on the nature of quantum gravity and the
        relation between geometry and quantum field theories. He is known in the string theory community
        for his co-discovery, with Strominger, that the Bekenstein-Hawking entropy of a black hole can be
        accounted for by solitonic states of superstring theory, and for expounding the relation between
        geometry and field theories that arise through string dualities (culminating in the Gopakumar-Vafa
        conjecture). This topic has been known as &quot;geometric engineering of quantum field theories&quot;. In
        1997, he developed F-theory.He is also interested in understanding the underlying meaning of string
        dualities, as well as trying to apply superstring theory to some unsolved questions of elementary
        particle physics such as the hierarchy problem and the cosmological constant problem. He has made
        contributions to topological string theories and to the understanding of mirror symmetry.</p>
        He will be live from Harvard University and the title of his talk is "Ramanujan, Hawking and Stringy Black Holes."</p><br />
<p style="text-indent: 50px">He will be enlightening the early mathematics and the present state in the development of String Theory in concern of Black Holes via the vision of pure geometry.<br/><br />
        <h2 style="text-align: center">CONTACTS</h2>
         <div class="contacts">
           <p><b>Ayush Kanwar</b></p>
           <p>+91-8768702045</p>
           <p>ayush@nssc.in</p>
           <a href="https://www.facebook.com/ayush.kanwar.585" target="_blank">Contact on Facebook</a><br /><br />
           <p><b>Remee Patel</b></p>
           <p>+91-9547675081</p>
           <p>remee@nssc.in</p>
           <a href="https://www.facebook.com/ayush.kanwar.585" target="_blank">Contact on Facebook</a>
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
        <h2>Dr. Abhas Mitra</h2>
    </div>
    <div class="modal-body" style="padding: 25px 50px">
   <p  style="text-indent: 25px"><b>Abhas Mitra</b> (born 18 June 1955) is an Indian astrophysicist best known for his distinct views on several front-line astrophysics concepts, particularly related to black holes and Big Bang Cosmology involving Black Hole Information paradox.</p> 
   <p>Mitra has regularly questioned the mainstream cosmological concepts of the "big bang" and "black holes". Scientific diaspora including Richard A. Muller came into his favour of his claim of resolution of Black Hole Information paradox presented 13 years before Stephen Hawking. Richard Muller appreciating the claim of Mitra made remark,"I think Mitra resolved the paradox before Hawking, and did it in a way that is superior."</p>  
  <p><b>He claims to have offered exact proofs that :</b></p>
<p  style="text-indent: 50px">The so-called black holes cannot be true black holes even within the context of classical general relativity and
The Big Bang solution is illusory and actual universe must be fundamentally different from the big bang paradigm.</p>
<p>Consequently, dark energy, his research claims, is an illusion caused by the departure of the complex universe from the simple big bang model.</p>
<br />
        <h2 style="text-align: center">CONTACTS</h2>

        <div class="contacts">
           <p><b>Ayush Kanwar</b></p>
           <p>+91-8768702045</p>
           <p>ayush@nssc.in</p>
           <a href="https://www.facebook.com/ayush.kanwar.585" target="_blank">Contact on Facebook</a><br /><br />
           <p><b>Remee Patel</b></p>
           <p>+91-9547675081</p>
           <p>remee@nssc.in</p>
           <a href="https://www.facebook.com/ayush.kanwar.585" target="_blank">Contact on Facebook</a>
       </div>
    </div>
    <div class="modal-footer">
    </div>
 </div>
</div>



<br /><br /><br /><br /><br /><br /><br /><br /><br />

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

<!-- ======================== Script for pop-up ============= -->

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
    }
</script>
        

</body>
</html>
