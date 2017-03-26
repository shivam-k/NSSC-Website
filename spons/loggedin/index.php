<?php  

header("Location: ../index.php");
?> 

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NSSC | Sponsors</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Sponsors Page of nssc.in" />
       <meta name="description" content="Sponsors Page of National Students' Space Challenge '16"/>
       <link rel="shortcut icon" type="image/png" href="nssc.png"/>

    <link href="tabs.css" rel="stylesheet" type="text/css" />
    <link href="nav.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="tabs.js" type="text/javascript"></script>

    <script>
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script> 


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
    top: 29.5px;
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
<body id="home2" onload="init()">

<div id="up">
        <a href="#home2" class="go-up">
          <img src="top.png" title="Go Up!" alt="Go Up" />
        </a>
</div>

<!-- ==================== Navigation ====================== -->

<div class="top-menubar">
<div class="top">
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
    <h2 style="display: inline-block" id="head_of_page_h2">
        <div style="color: white; font-size: 20px" id="head_of_page">SPONSORS</div>  
         <div id="user-name-drop">
           <div class="dropdown">
              <button class="dropbtn"><?php echo $pname; ?> <i class="fa fa-sort-desc" aria-hidden="true"></i> </button>
              <div class="dropdown-content">
                  <a href="../../events/loggedin/events-registration.php">Registration Status</a>
                  <a href="../../payment">Online Payment</a>
                  <a href="../../logout.php">Logout</a>
              </div>
          </div>
      </div>
  </h2>
  <div class="drawer">
    <nav>
      <ul>
        <li><a href="../../"><i class="fa fa-home"></i></i>&nbsp;&nbsp;Home</a></li>
        <li><a href="../../about-us/"><i class="fa fa-users"></i></i>&nbsp;&nbsp;Abouts Us</a></li>
        <li><a href="../../events"><i class="fa fa-trophy"></i>&nbsp;&nbsp;Events</a></li>
        <li><a href="#"><i class="fa fa-briefcase"></i></i>&nbsp;&nbsp;Sponsors</a></li>
        <li><a href="../../guest-lectures"><i class="fa fa-odnoklassniki-square"></i></i>&nbsp;&nbsp;Guest Talks</a></li>
        <li><a href="../../exhibitions"><i class="fa fa-magic"></i></i>&nbsp;&nbsp;Exihibition</a></li>
        <li><a href="../../Workshops"><i class="fa fa-cog"></i></i>&nbsp;&nbsp;Workshops</a></li>
        <li><a href="../../contact"><i class="fa fa-phone-square"></i></i>&nbsp;&nbsp;Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>

<!-- ========================== Sponsors part ======================== -->
<br />
    <div id="demopage" onload="init()">
       
        <div class="container1" style="">
            <ul id="tabs">
                <li><a href="#view1">2016 Sponsors</a></li>
                <li><a href="#view2">2015 Sponsors</a></li>
                <li><a href="#view3">2014 Sponsors</a></li>
            </ul>

            <div class="panel-container" style="">

       

                 <!-- ================== Sponsors 2016 ================== -->

                  <div id="view1" class="tabContent">

                    <!--  <div id="fifth-container" style="">
                        <div id="fifth">
                            <h1>Event Partners</h1>
                             <a href=""><img src="images/spons2013/autonext.png" alt="" /></a>
                            <a href=""><img src="images/spons2013/ptc.png" alt="" /></a>
                            <a href=""><img src="images/spons2013/planetpower.jpg" alt="" /></a>
                            <a href=""><img src="images/spons2013/space-logo.png" alt="" /></a>
                        </div>
                      </div> -->

                     <div id="thirteen-container" style="">
                       <div id="two" style="">
                          <h1 style="">Stationary Partner</h1>
                          <a href="http://www.elkospens.com/" target="_blank"><img src="images/spons2016/elkos.png" alt="" style="" /></a>
                       </div>
                    </div>

                    <div id="thirteen-container" style="">
                       <div id="two" style="">
                          <h1 style="">Noodle Partner</h1>
                          <a href="http://www.cgfmcg.com/" target="_blank"><img src="images/spons2016/wai.jpg" alt="" style="" /></a>
                       </div>
                    </div>

                     <div id="tenth-container" style="">
                       <div id="tenth" style="">
                          <h1 style="">Workshop Partner</h1>
                          <a href="http://www.agragami.in/" target="_blank"><img src="images/spons2016/agragami.jpg" alt="" style="" /></a>
                          <a href="http://astroproject.in/" target="_blank"><img src="images/spons2016/logoblack.png" alt="" style="" /></a>
                          <a href="http://www.skyfilabs.com/aerotrix" target="_blank"><img src="images/spons2016/aerotrix-by-skyfilabs.png" alt="" style="" /></a>
                          <a href="http://www.hawkeyetechworks.com/" target="_blank"><img src="images/spons2016/logo-footer.png" alt="" style="" /></a>
                       </div>
                    </div>

                    <div id="thirteen-container" style="">
                       <div id="one" style="">
                          <h1 style=""> Gift and goodies partner</h1>
                          <a href="http://www.jabong.com/" target="_blank"><img src="images/spons2016/jabong.png" alt="" style="max-width: 100%; width: 20%" /></a>
                       </div>
                    </div>

                    <div id="three-container" style="">
                       <div id="three" style="">
                          <h1 style="">Web Hosting Partner</h1>
                          <a href="#" target="_blank"><img src="images/spons2016/gtech.jpg" alt="" style="" /></a>
                       </div>
                    </div>

                    <div id="three-container" style="">
                       <div id="three" style="">
                          <h1 style=""> Entertainment Partner</h1>
                          <a href="#" target="_blank"><img src="images/spons2016/aquaticalogo.png" alt="" style="" /></a>
                       </div>
                    </div>

                    <div id="one-container" style="">
                       <div id="one" style="">
                          <h1 style=""> News Partner </h1>
                          <a href="http://www.jabong.com/" target="_blank"><img src="../images/spons2016/indian-news.jpg" style="max-width: 400px; width: 100%" alt="" /></a>
                       </div>
                    </div>

                    <div id="eigth-container" style="">
                       <div id="eigth" style="">
                          <h1 style="">Radio Partner</h1>
                          <a href="http://www.919fm.in/" target="_blank"><img src="images/spons2016/rdio.png" alt="" /></a>
                          <a href="#" target="_blank"><img src="images/spons2016/Fever.png" alt="" style="max-width: 100%; width: 20%" /></a>
                       </div>
                    </div>

                    <div id="" style="">
                       <div id="" style="display: table; margin: 0 auto; ">
                          <h1 style="">Competition Partner</h1>
                          <a href="http://dare2compete.com//" target="_blank"><img src="images/spons2016/dare.png" alt="" style="max-width: 100%; width: 80%" /></a>
                       </div>
                    </div>

                    <div id="eigth-container" style="">
                       <div id="eigth" style="">
                          <h1 style="">Online Magazine Partners</h1>
                          <a href="http://iyouthmag.co/" target="_blank"><img src="images/spons2016/iyouthmag.jpg" alt="" style="" /></a>
                          <a href="#" target="_blank"><img src="images/spons2016/lexwitness.png" alt="" style="" /></a><br />
                          <a href="http://iyouthmag.co/" target="_blank"><img src="images/spons2016/science-india.jpg" alt="" style="" /></a>
                       </div>
                    </div>

                    <div id="twelfth-container" style="">
                        <div id="twelfth">
                            <h1>Online Media Partners</h1>
                             <a href="http://allevents.in/" target="_blank"><img src="images/spons2016/allevents.png" alt="" /></a>
                            <a href="https://www.brainbuxa.com/" target="_blank"><img src="images/spons2016/brain.png" alt="" /></a>
                            <a href="http://www.knowafest.com/" target="_blank"><img src="images/spons2016/know.jpg" alt="" /></a>
                            <a href="http://www.festpav.com/" target="_blank"><img src="images/spons2016/logo.png" alt="" /></a>
                            <a href="http://iyouthmag.co/" target="_blank"><img src="images/spons2016/fest-info.jpg" alt="" style="" /></a>
                            <a href="" target="_blank"><img src="images/spons2016/festpav.png" alt="" /></a>
                            <a href="" target="_blank"><img src="images/spons2016/Skriver-me-logo.png" alt="" /></a>
<a href="" target="_blank"><img src="images/spons2016/almamapper.jpg" alt="" /></a>
<a href="" target="_blank"><img src="images/spons2016/ba_logo.png" alt="" /></a>
<a href="" target="_blank"><img src="images/spons2016/missionmca.com.jpg" alt="" /></a>
<a href="" target="_blank"><img src="images/spons2016/hook2events.jpg" alt="" /></a>
<a href="" target="_blank"><img src="images/spons2016/festsamachar.jpg" alt="" /></a>
<a href="" target="_blank"><img src="images/spons2016/eventhaat.com.png" alt="" /></a>
<a href="" target="_blank"><img src="images/spons2016/hellointern.png" alt="" /></a>
<a href="" target="_blank"><img src="../images/spons2016/test-funda.jpg" alt="" /></a>
<a href="" target="_blank"><img src="http://www.siib.ac.in/assets/images/promo/collegesearch.jpg" alt="" /></a>
<a href="" target="_blank"><img src="../images/spons2016/oh-campus.jpg" alt="" /></a>
                        </div>
                    </div>

                  </div>



             <!-- ========= Sponsors 2015  ========= -->
                <div id="view2" style="" class="tabContent">

                   <div id="one-container" style="">
                     <div id="one" style="">
                         <h1 style="">Title Sponsor</h1>
                         <a href="http://www.timesworld.in/"><img src="images/spons2015/all-logo.png" alt="" style="" /></a>
                     </div>
                   </div>

                   <div id="two-container">
                   	  <div id="two">
                   	  	  <h1>Associate Title Sponsor</h1>
                   	  	  <a href="http://www.omegawatches.com/"><img src="images/spons2015/OMEGA.png" alt="" /></a>
                   	  </div>
                   </div>

                   <div id="three-container">
                   	  <div id="three">
                   	  	  <h1>Major Sponsor</h1>
                   	  	  <a href="http://www.sbi.co.in/"><img src="images/spons2015/sbi.png" alt="" /></a>
                   	  </div>
                   </div>
<br />
                   <div id="fourth-container" style="">
                   	  <div id="fourth" style="">
                   	  	  <h1>Event Partner</h1><br />
                   	  	  <a href="http://www.groupautonext.com/"><img src="images/spons2015/autonext.png" alt="" /></a>
                   	  	  <a href="http://www.pkcell.net/"><img src="images/spons2015/pk.jpg" alt="" style="width: 100px; height: 100px" /></a>
                   	  	  <a href="http://www.drdo.gov.in/drdo/English/index.jsp?pg=homebody.jsp"><img src="images/spons2015/drdologo.png" alt="" style="width: 100px; height: 100px"/></a>
                   	  </div>
                   </div>
<br />
                   <div id="fifth-container" style="">
                        <div id="fifth">
                        	<h1>Workshops Partner</h1><br/>
                        	<a href="http://www.dhruvaspace.com/"><img src="images/spons2015/dhruva.png" alt="" /></a>
                        	<a href="https://www.robosapi.com/"><img src="images/spons2015/robosapiens.jpg" alt="" /></a>
                        	<a href="http://www.teamindus.in/"><img src="images/spons2015/teamindus.jpg" alt="" /></a>
                        </div>
                   </div>
<br/>
                   <div id="sixth-container" style="">
                        <div id="sixth">
                        	 <h1>Exhibitions and Air Show Partner</h1><br/>
                        	 <a href="http://hobbypep.com/"><img src="images/spons2015/hobbypep.png" alt="" /></a>
                        </div>
                   </div>
<br />
                   <div id="seventh-container" style="">
                   	    <div id="seventh">
                   	    	 <h1>Web Media Partner</h1><br />
                   	    	 <a href="https://www.townscript.com/"><img src="images/spons2015/ts-logo.png" alt="" /></a>
                   	    </div>
                   </div>
<br />
                   <div id="eigth-container">
                   	    <div id="eigth">
                   	         <h1>Travelling Partner</h1><br />
                   	         <a href="https://www.uber.com/"><img src="images/spons2015/uber.png" alt="" /></a>
                   	         <a href=""><img src="images/spons2015/shankar.png" alt="" /></a>
                   	    </div>
                   </div>
<br />
                   <div id="ninth-container" style="">
                   	    <div id="ninth">
                   	    	 <h1>Entertainment Partner</h1><br />
                   	    	 <a href="http://ww2.aquaticaindia.com/"><img src="images/spons2015/logo.png" alt="" /></a>
                   	    </div>
                   </div>
<br />
                   <div id="tenth-container" style="">
                        <div id="tenth">
                        	<h1>Gift and Goodies Partner</h1><br />
                        	<a href="http://www.wrangler.com/"><img src="images/spons2015/wrangler.png" alt="" /></a>
                        	<a href="https://giftingideas.giftzone.co.in/"><img src="images/spons2015/GIPL.png" alt="" /></a>
                        	<a href="https://gandour.com/"><img src="images/spons2015/gandour.jpg" alt="" /></a>
                        </div>
                   </div>
<br />
                   <div id="eigth-container" style="">
                   	    <div id="eigth">
                   	    	 <h1>Merchandise Partner</h1><br />
                   	    	 <a href="http://www.ebay.in/"><img src="images/spons2015/eba1.jpg" alt="" /></a>
                   	    	 <a href="https://www.hashtags.org/"><img src="images/spons2015/hashtag.png" alt="" /></a>
                   	    </div>
                   </div>
<br />
                   <div id="ninth-container" style="">
                   	    <div id="ninth">
                   	    	 <h1>Outreach Partner</h1><br />
                   	    	 <a href="http://www.justdial.com/"><img src="images/spons2015/Justdial_logo.png" alt="" /></a>
                   	    </div>
                   </div>
<br />
                   <div id="eleventh-container" style="">
                   	    <div id="eleventh">
                   	    	  <h1>Food and Beverage Partner</h1><br />
                   	         <a href="http://www.amul.com/"><img src="images/spons2015/amul-min.png" alt="" /></a>
                   	    	  <a href="http://www.dominos.co.in/"><img src="images/spons2015/dominos.png" alt="" /></a>
                   	    	  <a href="http://www.the-afc.com/"><img src="images/spons2015/afc.jpg" alt="" /></a>
                   	    	  <a href=""><img src="images/spons2015/kusum.png" alt="" /></a>
                   	    	  <a href="http://www.subway.com/en-IN"><img src="images/spons2015/subway.png" alt="" /></a>
                   	    </div>
                   </div>
<br />
                   <div id="ninth-container" style="">
                   	    <div id="ninth">
                   	    	 <h1>Magzine Partner</h1><br />
                   	    	 <a href="http://youthincmag.com/"><img src="images/spons2015/youth.jpg" alt="" /></a>
                   	    </div>
                   </div>
<br />
                   <div id="ninth-container" style="">
                   	    <div id="ninth">
                   	    	 <h1>Radio Partner</h1><br />
                   	    	 <a href=""><img src="images/spons2015/friends.jpg" alt="" /></a>
                   	    </div>
                   </div>
<br />
                   <div id="ninth-container" style="">
                   	    <div id="ninth">
                   	    	 <h1>E-Media Partner</h1><br />
                   	    	 <a href="http://www.nagpurtoday.in/"><img src="images/spons2015/NAGPURTODAY.png" alt="" /></a>
                   	    </div>
                   </div>
<br />
                   <div id="ninth-container" style="">
                   	    <div id="ninth">
                   	    	 <h1>Student Opportunity Partner</h1><br />
                   	    	 <a href="http://www.twenty19.com/"><img src="images/spons2015/2019.png" alt="" style="width: 60%"/></a>
                   	    </div>
                   </div>
<br />
                   <div id="ninth-container" style="">
                   	    <div id="ninth">
                   	    	 <h1>Competition Partner</h1><br />
                   	    	 <a href="http://dare2compete.com/"><img src="images/spons2015/DARE2COMPETE.png" alt="" /></a>
                   	    </div>
                   </div>
<br />
                   <div id="ninth-container" style="">
                   	    <div id="ninth">
                   	    	 <h1>Online Quiz Partner</h1><br />
                   	    	 <a href="http://www.xquizit.org/"><img src="images/spons2015/Xquizit.png" alt="" style="width: 60%"/></a>
                   	    </div>
                   </div>
<br />
                   <div id="twelfth-container" style="">
                   	    <div id="twelfth">
                   	    	  <h1>Online Media Partner</h1><br />
                   	         <a href="http://allevents.in/"><img src="images/spons2015/ALLEVENTS.png" alt="" /></a>
                   	    	  <a href="http://www.btechjosh.com/"><img src="images/spons2015/btechjosh.png" alt="" /></a>
                   	    	  <a href="http://www.faadooengineers.com/"><img src="images/spons2015/FAADOO.png" alt="" /></a>
                   	    	  <a href="http://festpav.com/"><img src="images/spons2015/PAV.png" alt="" /></a>
                   	    	  <a href="http://indcareer.com/"><img src="images/spons2015/INDCAREER.png" alt="" /></a>

                   	    	   <a href="http://campfestiva.com/"><img src="images/spons2015/campfestive-logo.jpg" alt="" /></a>
                   	    	  <a href="https://www.thecollegefever.com/"><img src="images/spons2015/COLLEGEFEVER.png" alt="" /></a>
                   	    	  <a href="http://indiacollegefest.com/"><img src="images/spons2015/indiacollegefest.png" alt="" /></a>
                   	    	  <a href="http://missionmca.com/"><img src="images/spons2015/MISSIONMCA.png" alt="" /></a>
                   	    	  <a href="https://www.brainbuxa.com/"><img src="images/spons2015/brain.png" alt="" /></a>

                   	    	  <a href="http://aglasem.com/"><img src="images/spons2015/AglaSemLogo.png" alt="" /></a>
                   	    	  <a href="https://www.hellointern.com/"><img src="images/spons2015/hellointern.png" alt="" /></a>
                   	    	  <a href="http://www.hook2events.com/"><img src="images/spons2015/hook2events.jpg" alt="" /></a>
                   	    	  <a href="http://www.uthtime.in/"><img src="images/spons2015/logoforbackdrop.jpg" alt="" /></a>
                   	    	  <a href="https://www.technotification.com/"><img src="images/spons2015/tech.png" alt="" /></a>
                   	    	  <a href="http://letmeknow.lk/"><img src="images/spons2015/letmeknow.jpg" alt="" /></a>
                   	    </div>
                   </div>
                </div>



               <!-- ================= Sponsors 2014 ============= -->

                <div id="view3" class="tabContent">

                    <div id="one-container" style="">
                     <div id="one" style="">
                         <h1 style="">Title Sponsor</h1>
                         <a href="http://www.larsentoubro.com/"><img src="images/spons2014/lnt.jpg" alt="" style="" /></a>
                     </div>
                   </div>

                   <div id="twelfth-container" style="">
                   	    <div id="twelfth">
                   	    	  <h1>Online Media Partners</h1>
                   	         <a href="http://betechs.com/"><img src="images/spons2014/betechs.jpg" alt="" /></a>
                   	    	  <a href="https://www.thecollegefever.com/"><img src="images/spons2014/collegefever.jpg" alt="" /></a>
                   	    	  <a href="http://allevents.in/"><img src="images/spons2014/allevents.jpg" alt="" /></a>
                   	    	  <a href=""><img src="images/spons2014/fest5.png" alt="" /></a>
                   	    	  <a href="http://www.knowafest.com/"><img src="images/spons2014/Logo_250_200.jpg" alt="" /></a>

                   	    	   <a href="http://www.markmyfest.com/"><img src="images/spons2014/MMFlogofinaltouse.jpg" alt="" /></a>
                   	    	  <a href="http://www.twenty19.com/"><img src="images/spons2014/Twenty19_logo_trans.png" alt="" /></a>
                   	     </div>
                   	</div>

                   	<div id="tenth-container" style="">
                        <div id="tenth">
                        	<h1>Workshop Partners</h1>
                        	<a href="http://www.xovian.com/"><img src="images/spons2014/xovian.png" alt="" /></a>
                        	<a href="http://www.groupautonext.com/"><img src="images/spons2014/autonext.png" alt="" /></a>
                        	<a href="http://www.playark.com/"><img src="images/spons2014/ark.jpg" alt="" /></a>
                        	<a href="http://edubotix.in/"><img src="images/spons2014/edu.png" alt="" /></a>
                        </div>
                   </div>
 
                    <div id="thirteen-container" style="">
                     <div id="thirteen" style="">
                         <h1 style="">Youth Opportunity Partner</h1>
                         <a href="http://letmeknow.lk/"><img src="images/spons2014/letme.png" alt="" style="" /></a>
                     </div>
                   </div>

                   <div id="thirteen-container" style="">
                     <div id="thirteen" style="">
                         <h1 style="">Education Partner</h1>
                         <a href="http://www.faadooengineers.com/"><img src="images/spons2014/faadoo.png" alt="" style="" /></a>
                     </div>
                   </div>

                   <div id="one-container" style="">
                     <div id="one" style="">
                         <h1 style="">Exhibition Partner</h1>
                         <a href="http://www.gridbots.com/"><img src="images/spons2014/Gridbots.jpg" alt="" style="" /></a>
                     </div>
                   </div>

                   <div id="fifth-container" style="">
                   	  <div id="fifth" style="">
                   	  	  <h1>Food Partners</h1>
                   	  	  <a href="http://roosters.co.uk/"><img src="images/spons2014/rooster.png" alt="" /></a>
                   	  	  <a href="http://www.dominos.co.in/"><img src="images/spons2014/dominos.png" alt="" style="" /></a>
                   	  	  <a href=""><img src="images/spons2014/kusum.png" alt="" style=""/></a>
                   	  </div>
                   </div>

                   <div id="one-container" style="">
                     <div id="one" style="">
                         <h1 style="">Newspaper Partner</h1>
                         <a href="http://indianexpress.com/"><img src="images/spons2014/Indian_express.png" alt="" style="" /></a>
                     </div>
                   </div>

                   <div id="eigth-container">
                   	    <div id="eigth">
                   	         <h1>Outreach Partners</h1>
                   	         <a href="http://www.groupautonext.com/"><img src="images/spons2015/autonext.png" alt="" /></a>
                   	         <a href="http://www.planetpower.com.au/"><img src="images/spons2014/planet.jpg" alt="" /></a>
                   	    </div>
                   </div>

                    <div id="thirteen-container" style="">
                     <div id="thirteen" style="">
                         <h1 style="">Shopping Partner</h1>
                         <a href="http://www.ebay.in/"><img src="images/spons2014/eba1.jpg" alt="" style="" /></a>
                     </div>
                   </div>

                   <div id="thirteen-container">
                   	    <div id="thirteen">
                   	         <h1>Merchandise Partner</h1>
                   	         <a href="http://www.campusmall.in/welcome/"><img src="images/spons2014/logo_email.png" alt="" /></a><br />
                   	         <a href="http://www.spykar.com/"><img src="images/spons2014/spykar.jpg" alt="" /></a>
                   	    </div>
                   </div>  
                </div>
            </div>
            <br />
            
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

    <!-- =============================== footer Last ======================= -->    
        <div class="foot-last">
         
           
                     <p>All rights are reserved by © nssc 2016</p>
      
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

<!-- ================ for slow scrolling ====================== -->


        

</body>
</html>
