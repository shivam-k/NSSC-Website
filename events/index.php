<?php  
   include("../user.php");
?>  
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NSSC | Events</title>

       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">   
       <meta name="description" content="Shivam Kumar">
       <meta name="keywords" content="Events Page of nssc.in" />
       <meta name="description" content="Events Page of National Students' Space Challenge '16"/>
       <link rel="shortcut icon" type="image/png" href="nssc.png"/>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="nav.css">
       <link rel="stylesheet" href="events-css/style.css">
       <link rel="stylesheet" href="events-css/ihover.css">

       <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
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
</style>


</head>



<body style="background:url(images/O4WIJ30.jpg) repeat; background-size:cover;background-attachment:fixed">
<!-- ============================ Navigation Start ================== -->
<div class="top-menubar">
<div class="top" style="position: fixed">
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"></label>
  <h2 style="display: inline-block" id="head_of_page_h2">
        <div style="color: white; font-size: 20px" id="head_of_page">EVENTS</div>  
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
        <li><a href="#"><i class="fa fa-trophy"></i>&nbsp;&nbsp;Events</a></li>
        <li><a href="../spons"><i class="fa fa-briefcase"></i></i>&nbsp;&nbsp;Sponsors</a></li>
        <li><a href="../guest-lectures"><i class="fa fa-odnoklassniki-square"></i></i>&nbsp;&nbsp;Guest Talks</a></li>
        <li><a href="../exhibitions"><i class="fa fa-magic"></i></i>&nbsp;&nbsp;Exihibition</a></li>
        <li><a href="../Workshops"><i class="fa fa-cog"></i></i>&nbsp;&nbsp;Workshops</a></li>
        <li><a href="../contact"><i class="fa fa-phone-square"></i></i>&nbsp;&nbsp;Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>
<!-- ============================ Navigation End ================== -->

<br /><br /><br /><br /><br />



<div class="container">





<!-- ======================================= Lift off =================================== -->
<div class="row"> 
  <div class="col-sm-6" >
    <div class="ih-item circle colored effect6 scale_up" id="myBtn1"><a href="#">
        <div class="img" ><img src="images/events/liftoff.png" alt="img"></div>
        <div class="info">
          <h3>LIFT OFF</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>

<!-- ================= modal of lift off ================= -->
<div id="myModal1" class="modal-event">
  <div class="modal-content-event">
    <div class="modal-header-event">
      <span class="close-event close1">×</span>
      <h2>LIFT OFF</h2>
    </div>
    <div class="modal-body-event">
        <!-- ==== video === -->
        <div class="video-container">
             <iframe src="https://www.youtube.com/embed/PJIQSwC7dkY" class="video"></iframe>
        </div>

        <!-- ==== intro ==== -->
        <div class="odd basics">
            <h2><b>INTRODUCTION</b></h2> 
            <p>If you ever arrive in a situation where you don’t have the resource to carry on your
              task, you rely on all available natural resources to advance an inch towards success.
              In a strange turn of events, your rocket runs out of fuel. But you are not worried
              because you know how to use physics and aerodynamics! So here we present you
             an event, in which you will be able to fly your own rocket, by using water as fuel. </p>
        </div> <!-- ==== end of class="intro" -->

        <!-- === problem statement ==== -->
        <div class="even basics">
            <h2><b>PROBLEM STATEMENT</b></h2> 
            <p >Design and Build a water rocket which can be launched at any angle with respect to the horizontal. The teams will be participating in two rounds and the winners will be
            decided on the basis of rules given below.</p>
           <h2 class="left_h4"><b>ROCKET SPECIFICATION</b></h2>
           <ol>
               <li>Only plastic soft drink bottles are to be used for the rocket body.</li>
               <li>Safety comes first. The nose cone and fins should not be made of metal or any sharp surface. The rocket should be launched using a string from a safe distance, not with the help of hands. If a team fails to meet this requirement it will be disqualified from the event.</li>
               <li>The water rocket must use only compressed ambient atmospheric air as its source of energy. Only tap water shall be used in the rocket, and the water shall be provided by the organizers. Water  brought by the team shall not be allowed in the rockets.</li>
               <li>The amount of water to be filled in the rocket body is left to the choice of the team.</li>
               <li>The pressure inside the container (rocket body) before launch should not exceed 60 psi.</li>
               <li>Launchers and pressure compressors will NOT be provided by the organizers.</li>
               <li>The launcher to be constructed by the team should be fitted with an air compression device or pump for pressurizing the contents of the rocket body. A pressure-gauge having a minimum range of 0-100 psi to display the pressure of air in the water-rocket has to be attached to it too.</li>
               <li>Rocket must be launched from a stationary position on a fixed launcher. (Slingshots, trebuchets, catapults, cannons, and all other forms of launcherboost assists are forbidden). In other words, the internal pressure of the rocket must be the only source of energy for the rocket.</li>
               <li>No component or a body part of the rocket should get detached from the main frame during the flight of the rocket. If any part gets detached then the rocket will be disqualified.</li>
               <li>The teams may bring as many rockets as they wish but it should comply with the rules given above.</li>
               <li>Decision of Team NSSC will be final.</li>      
           </ol>
        </div> <!-- end of class="p-statement" -->

        <!-- ===== rules ===== -->
        <div class="odd basics">
             <h2><b>RULES AND REGULATION</b></h2>
             <ol>
                <li>Team Size: A team for Lift-off can have a maximum of 4 members. However, they need not be from the same college/university/institution.</li>
                <li>The rocket must have a variable launching angle capability.</li>
                <li>Burst Testing: All rockets will be tested to a pressure of 60 psi before they can be allowed to enter the competition. Teams are therefore advised to test their rockets to a pressure of 60 psi beforehand and also bring substitute rockets with them.</li>
                <li>If a team&#39;s rocket fails the Burst Test, ONLY ONE extra rocket shall be allowed to be burst tested. If that rocket fails the burst test too, then no points will be awarded to the team.</li>
                <li>Once a rocket passes the burst test, it shall be allowed only one attempt for launch.</li>
                <li>Participants are allowed to use multistage water rocket.</li>
                <li>In case of multistage water rocket maximum of 2liter water is allowed inside the rocket.</li>
                <li>The rules are subject to change.</li>
                <li>In case of disputes, the decision of team NSSC is final and binding.</li>
             </ol>
         </div> <!-- ===== end of class="rules" -->

         <!-- ======= task & judgement ===== -->
         <div class="even basics">
             <h2 class="left_h4"><b>TASK</b></h2>
             <ol>
                  <li>The participants have to launch the rocket from the launching point and the rocket should land in the launch arena.</li>
                  <li>The launch arena will be a sector of circle with sector angle 45° and the launch will take place from the centre of the circle.</li>
                  <li>The range of flight is the distance between the point of launch and the point of first impact with the ground after launch.</li>
                  <li>In case of multistage water rocket range of flight will be calculated as the distance between the point of launch and impact of 2 nd rocket with the ground.</li>
             </ol>
             <h2 class="left_h4"><b>JUDGING PARAMETERS</b></h2>
             <h4 class="left_h4">Round 1</h4>
             <ol>
                 <li>Participants are scored primarily on the basis of their range of their flight.Greater the range, greater will be the points earned.</li>
                 <li>Rocket going out of the sector of an angle 45 degrees will not be awarded any points.</li>
                 <li>Rocket landing inside a sector of angle 15 degrees will be given additional points corresponding to distance of 25 meters.</li>
                 <li>No additional points will be awarded if the rocket lands on the border of inner 15 degree sector.</li>
             </ol>
             <h2 class="left_h4">Round 2</h2>
             <ol>
                  <li>Top 16 teams of round 1 will advance to round 2.</li>
                  <li>The round 2 of lift off will be disclosed on the day of the event.</li>
             </ol>
         </div> <!-- end of task & judgement -->

         <!-- === certification policy === -->
         <div class="odd basics">
             <h4 class="left_h4"><b>CERTIFICATION POLICY</b></h4>
             <ol>
                <li>Top 3 teams will be awarded by Certificate of Excellence for the event.</li>
                <li>Prize money worth 20,000 INR will be distributed to the winner teams.</li>
                <li>The winner team has to complete the task, if they fail to complete the task then they will be not eligible for certificate.</li> 
             </ol>
         </div>
         <br />

<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to register for Lift Off</a><br />  
     
       <br />
        
        <div class="for-deatils">
            <div style="text-align: center"><p>For more details contact: </p></div>
            <h2><b>Mohit Dhariwal</b></h2>
            <p>mohit@nssc.in</p>
            <p>+91-9933992777</p>
            <pre>  <a href="https://www.facebook.com/dhariwal.mohit?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
        </div>
    </div> <!-- end of class="modal-body-event" -->
  </div>
</div>


<!-- ========================================== Hoverpod =================================== -->
<div class="row"> 
  <div class="col-sm-6">
    <div class="ih-item circle colored effect6 scale_up" id="myBtn2"><a href="#">
        <div class="img"><img src="images/events/hover.png" alt="img"></div>
        <div class="info">
          <h3>HOVERPOD</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>

 <!-- ================= modal of Hoverpod =============== -->

<div id="myModal2" class="modal-event">

  <!-- Modal content -->
  <div class="modal-content-event">
    <div class="modal-header-event">
      <span class="close-event close2">×</span>
      <h2>HOVERPOD</h2>
    </div>
    <div class="modal-body-event">
      <!-- ==== video === -->
        <div class="video-container">
             <iframe src="https://www.youtube.com/embed/RCOAMi5pr90" class="video"></iframe>
        </div>

        <!-- ==== intro ==== -->
        <div class="odd basics">
            <h2><b>INTRODUCTION</b></h2> 
            <p>In search of a planet which supports life, you finally discover a planet which has
             both, land and water. All conditions are ideal to support life. But the real problem
             is that there are some monstrous aliens who are after your life. Your only way to escape is to
             reach a spot after crossing a terrain of both land and water. So, here we present you
             the event Hoverpod to test your skills for making a vehicle capable enough to travel
             on both land and water. </p>
        </div> <!-- ==== end of class="intro" -->

        <div class="even basics">
            <h2><b>PROBLEM STATEMENT</b></h2> 
            <p >The team has to build a manually controlled, wireless, hovercraft that has
              the capacity to move through a predefined path. The path would consist of varied
              terrain, having potholes, water and other kinds of terrains as specified in the arena
              below. The aim of the participant is to rake up the maximum points to win the task.</p>
       </div>

       <div class="odd basics">
           <h2><b>RULES AND REGULATION</b></h2>  
           <ol>
                <li>Maximum number of participants allowed per team is 5. However, they need
                    not to be from the same college/ university/institution.</li>

                <li>Only one person would control the hover craft from each participating team.</li>

                <li>Team members cannot touch the hovercraft once the event has started
                               without the permission of organizing team member present there.</li>

                <li>No power supply would be provided for any purposes, because the
                               participants are required to bring wireless controllers, so no direct supply of
                               power would be required.</li>

                <li> If participants are unable to bring wireless controller, RF transmitter and receiver will be provided by Team NSSC for use during the run.</li>
                <li>Also, it is the duty of the team members to get the requisite battery. Also
                    voltage difference between any two points in the circuit of the robot cannot
                    exceed 24 volts at any point of time.</li>

                <li>The bot should be capable of traversing through any smooth or rough
                    terrain (like: potholes, water, concrete, grass etc.)</li>

                <li>Only Electronic Motors have to be used in the hovercraft.</li>

                <li>LEGO kits and pre made mechanics set parts are not allowed to be used for
                   any kind of mechanism on the bot. For further studies on these follow the <a href="https://en.wikipedia.org/wiki/Lego_Mindstorms" target="_blank">link</a></li>

                             <li>Teams qualifying for the first round only go to the second round.</li>
                             <li>Rules are subject to change.</li>

                             <li>Decision of Team NSSC will be final and binding under all circumstances.</li>
           </ol>
       </div> <!-- end of rules & regulation -->

        <!-- start of bot specification judginf parameter -->
       <div class="even basics">
           <h2 class="left_h4">BOT SPECIFICATIONS</h2>
           <ol>
                <li>l*b = 60 * 50 cm maximum allowable limit</li>
                <li>Brushless motors with rating no more than 1500kv can be used. Participants
                    should have the Motor model with them to prove the kv value when asked to
                    do so.</li>
                <li>ESC current ratings not to exceed 25 A.</li>
                <li>Power supply (battery) above 12 volts cannot be used.</li>
                <li>Minimum cushion height: 2 cm at full thrust.</li>
                <li>Maximum propeller diameter that can be used: 20 cm.</li>
           </ol>
           <h4 class="left_h4"><b>Round 1 :</b></h4>
           <h4 class="left_h4">Before Run</h4>       
           <ol>
               <li>The robot has to be placed in the starting zone before the start of the event.</li>
               <li>The controller would be required to stand in a marked zone, from where the
                            whole arena would be clearly visible, but the controller in any case cannot
                            leave the marked zone and has to control the hovercraft from that place only
                            for all the time.</li>
               <li>Other team members cannot touch the hovercraft without permission once the
                           run has started.</li>
           </ol>
           <h4 class="left_h4">During Run</h4>
           <ol>
                <li>The hovercraft is expected to perform the following task:</li>
                <ol>
                       <li>Complete the run through the arena in 10mins.</li>
                       <li>Do not touch obstacles placed in arena, and the walls of the arena.</li>
                </ol>
                <li>The whole track will have various checkpoints at regular intervals. The teams
                           will be awarded marks according to the number of checkpoints cleared.</li>
           </ol>
           <h4 class="left_h4">Judging Parameters</h4>
           <ol>
                 <li>Every team will get 200 points as starting bonus.</li>           
                 <li>Every team will get 800 points when the hovercraft finishes run.</li>
                 <li>Time bonus will be awarded (in case when bot completes the task)<br />Time Bonus= 600-(no. of seconds in which bot completes its run
                  through the whole arena)</li>            
                  <li>Every team will be awarded with 50 points while clearing each checkpoint.</li>
                  <li>Every collision with the wall of the arena attracts a penalty of 40 points, and
                           every collision with the obstacles attracts a penalty of 70 points.</li>
           </ol>
           <h4 class="left_h4"><b>Round 2:</b></h4>
           <ol>
                  <li>The round 2 of Hoverpod will be disclosed on the day of the event.</li>
          </ol>
      </div>   <!-- start of bot specification judginf parameter -->

      <div class="odd basics">
           <h2 class="left_h4">CERTIFICATION POLICY</h2>
            <ol>
               <li>Top 3 teams will be awarded by Certificate of Excellence for the event.</li>
               <li>Prize money worth 20,000 INR will be distributed to the winner teams.</li>
               <li>The winner team has to complete the task, if they fail to complete the task then they will be not eligible for certificate.</li> 
            </ol>
      </div>
     <br />

<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to register for Hoverpod</a><br />
<a href="http://www.sproboticworks.com/products/" target="_blank" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Buy Kit Components</a><br /><br />
      <!-- ==== for more details -===== -->
      <div style="text-align:center"><a href="http://nssc.in/eventtut/pdf/hoverpod.pdf" target="_blank"><h4 style="color: black">Download the tutorial</h4></a></div>   
      <br />
         <br />
        
        <div class="for-deatils">
            <div style="text-align: center"><p>For more details contact: </p></div>
            <h2><b>Mohit Dhariwal</b></h2>
            <p>mohit@nssc.in</p>
            <p>+91-9933992777</p>
            <pre>  <a href="https://www.facebook.com/dhariwal.mohit?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
        </div>


    </div> <!-- end of class="modal-body-event" -->
  </div>
</div>
 
 <!-- ======================================== Rocrun =================================================== -->
<div class="row">
  <div class="col-sm-6">
    <div class="ih-item circle colored effect6 scale_up" id="myBtn3"><a href="#">
        <div class="img"><img src="images/events/rocrun.png" alt="img"></div>
        <div class="info">
          <h3>ROCRUN</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>

<!-- ========== modal for Rocrun ================= -->

<div id="myModal3" class="modal-event">
  <div class="modal-content-event">
    <div class="modal-header-event">
      <span class="close-event close3">×</span>
      <h2>ROCRUN</h2>
    </div>
    <div class="modal-body-event">
      <!-- ==== video === -->
        <div class="video-container">
             <iframe src="https://www.youtube.com/embed/xrNUJDIb2PA" class="video"></iframe>
        </div>
        <div class="odd basics">
            <h4><b>INTRODUCTION</b></h4> 
            <p>Its 2045, ISRO has successfully launched its mars mission. Spacecraft has landed
             on a crater situated in the middle of huge mountains. Unfortunately, craft is not having
             enough fuel to take-off. So, it has to rely on the manually controlled climber bots for 
             surveillance of mountains and nearby areas.For this we are presenting you
             the event Rocrun which will brainstorm your mind to innovate better designs for
             climbing up the hills. </p>
        </div>
        <div class="even basics">
            <h4 ><b>PROBLEM STATEMENT</b></h4> 
            <p >It is a one bot event.  Participants have to build manually controlled bot which can
            climb a wall with horizontal embedded rods. Task is to climb from
            starting point to the end point and vice versa by the help of gripping mechanism,
            hooks, hydraulics, electromagnets, spring system etc. After reaching the end point of
            the arena bot has to switch on light at the end of task.</p>
        </div>

        <!-- generals rules -->
         <div class="odd basics">
             <h2><b>GENERAL RULES</b></h2>
             <ol>
                    <li>Maximum number of participants allowed is 4 per team.</li>
                    <li>A maximum of two controllers per team are allowed.</li>
                    <li>Teams cannot touch the bot during the course of run.</li>
                    <li>Horizontal embedded rods will be placed at a distance of
                        35cm from each other(horizontal distance).</li>
                    <li>vertical distance between two rods will
                        be 30cm.</li>
                    <li>The rods will have diameter of 4 cms.</li> 
                    <li>The participants will be provided with 220V, 50 Hz AC power supply, and any
                        other power supply they require has to be arranged by themselves by the
                        participants.</li>
                    <li>LEGO kits and pre made mechanics set parts are not allowed to be used for
                       any kind of mechanism on the bot. For further studies on these follow the <a href="https://en.wikipedia.org/wiki/Lego_Mindstorms" target="_blank">link</a></li>
                    <li>Rules are subjected to change.</li>
                    <li>Decision of Team NSSC will be final and binding under all circumstances.</li>       
             </ol>
           
             <h4>During Run</h4>
             <ol>
                  <li>Task of climber will be to traverse the whole arena (maze) from starting point
                      to the end point.</li>
                  <li>The time limit for the teams will be <b>8 minutes</b> per run.</li>
                  <li>The whole track will have various checkpoints at regular intervals. The teams
                      will be awarded marks according to the number of checkpoints cleared.</li>
                  <li>A maximum of two time outs can be taken by any team, with each time out not
                      exceeding 2 minutes each. Each time out will attract a penalty.</li>
                  <li>Only one Restart would be provide to the team if they have some serious
                      problem with the bot. A penalty would be imposed for the restart as well.</li>
                  <li>The bot can follow any path, and can traverse any path any number of times.></li>
                  <li>Decision of Team NSSC would be final and binding regarding any doubts
                     regarding this rule during the event.</li>
            </ol>
        </div> <!-- end general rules -->

    <div class="even basics" >
       <h2 class="left_h4">SAMPLE ARENA</h2>
       <div id="arena-img">
          <img src="images/roc1.png"/>
       </div><br />
       <div id="arena-img">
          <img src="images/roc2.png"/>
       </div><br />
    </div>
<br />
        <!-- bot specification & judging round -->
        <div class="even basics">
             <h2 class="left_h4"><b>BOT SPECIFICATIONS</b></h2>
             <ol>
                  <li>Maximum dimension of rover can be 30*30*30 cm [l*b*h*].</li>
                  <li>Arm of rover can have maximum length of <b>60 cm</b>.</li>
                  <li>In case the controller(s) is(are) using manual controlled remote(s) with wired
                      communication with the bot, then the remote(s) and the wires are to be
                      included in the maximum dimension limit.</li>
                  <li>The wires of the wired controller should be at least <b>15 metres</b> long.</li>
                  <li>In case the controller(s) is(are) using manual controlled remote(s) with
                      wireless communication with the bot, then the remote(s) and the wireless
                      module(s) along with their batteries are to be included in the maximum
                      dimension limit.</li>
                  <li>In case the controller(s) is(are) controlling the bot through laptop using
                      wireless communication devices like ZigBee, then only the wireless
                      communication module with batteries (if applicable) will be included in the
                      maximum dimension limit.</li>
                  <li>In all cases, any on board power supply devices like batteries are to be
                      included in the maximum dimension limit.</li>
                  <li>The bot can exceed the dimension limit once it has started the run (by
                      expanding or any other means), but before the commencement of the run it
                      has to satisfy the dimension rules as stated above.</li>
                  <li>Potential difference between any two points on the bot should not exceed 24
                      volts.</li>
                  <li>The bot dimensions would be subject to tolerance of 5%.</li>
                  <li>The rules are subject to change.</li>
                  <li>In case of disputes, the decision of team NSSC is final and binding.</li>
             </ol>
             <h2 class="left_h4"><b>JUDGING PARAMETERS</b></h2>
             <ol >
                   <li>Points for completing the whole maze (B): 120 points.</li>
                   <li>Penalty for losing the grip from walls: -10 points every time climber loses grip.</li>
                   <li>Penalty for dropping the climber: -40 points every time rover falls (excluding timeout).</li>
                   <li>Penalty for each timeout will be 20 points.</li>
                    <li>Penalty for restart will be 35 points.</li>
                    <li>Taking another path instead of stated one will be -20points.</li>
                    <li>Crossing each checkpoint will be 50 points.</li>
                    <li>Points for completing the task in time: (8*60 - t); where &#39;t&#39; is the time taken by
                    the bot to complete the task in seconds. This bonus will not be awarded if task
                    is not completely done.</li>
             </ol>
        </div> <!-- end bot specification & judging round -->

        <div class="odd basics">
             <h2 class="left_h4"><b>CERTIFICATION POLICY</b></h2>
              <ol>
                 <li>Top 3 teams will be awarded by Certificate of Excellence for the event.</li>
                 <li>Prize money worth 20,000 INR will be distributed to the winner teams.</li>
                 <li>The winner team has to complete the task, if they fail to complete the task then they will be not eligible for certificate.</li> 
              </ol>
        </div>
        <br />
        <a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to register for Rocrun</a> <br />
<a href="http://www.sproboticworks.com/products/" target="_blank" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Buy Kit Components</a><br /><br />
        
        <div class="for-deatils">
            <div style="text-align: center"><p>For more details contact: </p></div>
            <h2><b>Mohit Dhariwal</b></h2>
            <p>mohit@nssc.in</p>
            <p>+91-9933992777</p>
            <pre>  <a href="https://www.facebook.com/dhariwal.mohit?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
        </div>

    </div> <!-- end of modal-body-content -->
  </div>
</div>


<!-- ============================================ Sensorous ============================================== -->

<div class="row"> 
  <div class="col-sm-6">
    <div class="ih-item circle colored effect6 scale_up" id="myBtn4"><a href="#">
        <div class="img"><img src="images/events/sensorous.png" alt="img"></div>
        <div class="info">
          <h3>SENSOROUS</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>

<!-- ========== modal for senorous ================= -->

<div id="myModal4" class="modal-event">
  <div class="modal-content-event">
    <div class="modal-header-event">
      <span class="close-event close4">×</span>
      <h2>SENSOROUS</h2>
    </div>
    <div class="modal-body-event">
      <div class="video-container">
             <iframe src="https://www.youtube.com/embed/wSOmISWKAik" class="video"></iframe>
      </div>


  <div class="odd basics">
          <h2><b>INTRODUCTION</b></h2> 
          <p>You are stuck in such a dangerous situation The real problem is that you cannot communicate with your co-pilots directly. 
             You need to warn them; but to do that you need to glow an emergency light in your co-pilot’s room. Let’s see whether your 
             sensors can save you and your co-pilots by avoiding the danger! </p>
  </div>

   <div class="even basics">
          <h2 ><b>PROBLEM STATEMENT</b></h2> 
          <p >The objective is to engineer a semi- autonomous robot that will follow a track
              comprising of straight lines, curves, angles of different degree, crossovers. It can
              detect wall and should have LED or alarm system attached with it. After detection of
              a wall, it should turn on LED or alarm so that participant sitting in another room will
             get a clue to take turn and reach the end point.</p>
   </div>

   <div class="odd basics">
           <h2><b>GENERAL RULES</b></h2>
           <ol>
            <li>Maximum number of participants allowed is 4 per team. The members from
                   different colleges can form a team.</li>
            <li>The team can not touch the bot during the course of run.</li>
            <li>Enough time would be given to properly threshold the sensors on board.</li>
            <li>Total time allowed for run will be 8 mins.</li>
            <li>The participants will be provided with 220V, 50 Hz AC power supply, and any
                other power supply they require has to be arranged by themselves by the
                participants.</li>
            <li>LEGO kits and pre made mechanics set parts are not allowed to be used for
                any kind of mechanism on the bot. For further studies on these follow the link
                : http://en.wikipedia.org/wiki/Lego_Mindstorms</li>
            <li>Microprocessors used should not be more than 16 bit microprocessors.</li>
            <li>Rules are subjected to change.</li>
            <li>Decision of Team NSSC will be final and binding under all circumstances.</li>
           </ol>
<h2>TASK</h2>
<p>The robot has to detect walls which are present on side by side of the given track
and by the help of LED lights or alarms it has to give signal to the participant who will
sit in another room , the bot has to take turn comprising of various angles during
course of its run.<p>
    </div>

     <div class="even basics">
           <h2 class="left_h2"><b>BOT SPECIFICATIONS</b></h2>
           <ol>
              <li>Maximum dimension allowed for lander is 30*30*30 cm [l*b*h*].</li>
              <li>In case the team is using a non-electric power supply, the team must get it
                  approved from the organizers beforehand via email. Organizers will not be
                  responsible for inconvenience if approval is not sought.</li>
              <li>The wires for the power supply should be at least 15 metres long.</li>
              <li>In all cases, any on-board power supply devices like batteries are to be
                  included in the maximum dimension limit.</li>
              <li>The bot can exceed the dimension limit once it has started the run (by
                  expanding or any other means), but before the commencement of the run it
                  has to satisfy the dimension rules as stated above.</li>
              <li>Potential difference between any two points on the bot should not exceed 24
                  volts.</li>
               <li>The bot dimensions would be subject to tolerance of 5%.</li>
                <li>The rules are subject to change.</li>
                 <li>In case of disputes, the decision of team NSSC is final and binding.</li>
           </ol>
      </div>
      <div class="odd basics">
            <h2 class="left_h4"><b>ARENA SPECIFICATION</b></h2>
             <ol>
               <li>The width of the track will be 50cm and different widths for turns accordingly.</li>
               <li>Obstacles will be placed at random positions at varying distance from the
                   track.</li>
               <li>The whole track will have various obstacles and the robot has to reach the
                   end point by the crossing different check points.</li>
               <li>The whole track will have various checkpoints at regular intervals. The teams
                   shall be awarded marks according to the number of checkpoints cleared.</li>
              <li>Sufficient time will be given for the thresholding of the various parameters.</li>
             </ol>
    </div>

     <div class="even basics" >
       <h2 class="left_h4">SAMPLE ARENA</h2>
       <div id="arena-img">
          <img src="images/rocrun_arena.jpg"/>
       </div><br />
       <h3 style="text-align: center">For your information, this is not the exact arena.</h3>
    </div>
<br />
     <div class="even basics">
           <h2 class="left_h4"><b>JUDGING PARAMETERS</b></h2>
           <ol>
              <li>Each team will get 100 points as starting bonus.</li>
              <li>Each team will get 2 timeouts and 1 restart in which the teams can make
                  some hardware changes during this period, like changing batteries, adjusting
                  sensors, but no extra hardware can be added and no changes in the code can
                  be made.</li>
              <li>Penalty for each timeout will be of 25 points and for restart it will be of 50
                  points.</li>
              <li>If the bot successfully detects the wall and turns then 30 points will be
                  awarded.</li>
              <li>If the bot successfully crosses the check point then extra 50 points will be
                 awarded.</li>
              <li>If the bot does not detect wall then penalty of 30 points will be awarded.</li>
              <li>If bot detects wall but doesn’t turn, penalty of 15 points will be awarded.</li>
              <li>For each time bot deviates from path (takes u turn) following penalty of 10 points will be
                    awarded.</li>
              <li>If the bot completes the track then 30 points will be awarded as finishing
                  bonus.</li>
              <li>Points for completing the task in time: [(8*60 - t)/2]; where &#39;t&#39; is the time taken
                  by the bot to complete the task in seconds. This bonus will not be awarded if
                  task is not completely done.</li>
           </ol>
      </div>
        <div class="odd basics">
            <h2 class="left_h4"><b>CERTIFICATION POLICY</b></h2>
              <ol>
                 <li>Top 3 teams will be awarded by Certificate of Excellence for the event.</li>
                 <li>Prize money worth 25,000 INR will be distributed to the winner teams.</li>
                 <li>The winner team has to complete the task, if they fail to complete the task then they will be not eligible for certificate.</li> 
              </ol>
        </div>      

        
     <br />

        <a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to register for Sensorous</a><br />
<a href="http://www.sproboticworks.com/products/" target="_blank" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Buy Kit Components</a><br /><br />
       
         <div style="text-align:center"><a href="http://nssc.in/eventtut/pdf/sensorous.pdf" target="_blank"><h4 style="color: black">Download the tutorial</h4></a></div>     

      <br />
        <div style="text-align: center"><b><p>For more details contact: </p></b></div>
      <div class="for-deatils">
          <h2>Mohit Dhariwal</h2>
          <p>mohit@nssc.in</p>
          <p>+91-9933992777</p>
          <pre>  <a href="https://www.facebook.com/dhariwal.mohit?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
      </div>
    </div> <!-- end of modal-body-content -->
  </div>
</div>


<!-- ============================================ Spazor ================================================ -->
 
<div class="row">
  <div class="col-sm-6">
    <div class="ih-item circle colored effect6 scale_up" id="myBtn5"><a href="#">
        <div class="img"><img src="images/events/spazoor.png" alt="img"></div>
        <div class="info">
          <h3>SPAZOR</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>

<!-- ========== modal for spazor ======= -->

<div id="myModal5" class="modal-event">
  <div class="modal-content-event">
    <div class="modal-header-event">
      <span class="close-event close5">×</span>
      <h2>SPAZOR</h2>
    </div>
    <div class="modal-body-event">
      <div class="video-container">
             <iframe src="https://www.youtube.com/embed/dtHEgp1epOM" class="video"></iframe>
      </div>

       <div class="odd basics">
          <h2><b>INTRODUCTION</b></h2> 
          <p>You and your team consists of astronauts who are the first ones to reach the planet
             D-18 in Andromeda Galaxy. Being Galaxies away from home, you definitely have a
             problem in setting up direct communication with ISRO, so you rely only on Morse-
             codes. Now, you need to return back to planet Earth, but you don’t have a map of D-
            16 to judge your next movements. However, ISRO has an overview of your planet’s
            terrain via satellite, and in order to understand their orders via Morse-codes, you
            need to reach the centre of D-16.
            Test your survival skills in the event Spazer! </p>
  </div>

   <div class="even basics">
          <h2 ><b>PROBLEM STATEMENT</b></h2> 
          <p >The bot has to traverse the arena (as shown in the figure). The bot has to start from
              the start point and by using line following mechanism, it has to reach at the centre
              node where it will be given a Morse code in the form of light which will contain the
              message about the path it has to take next. The bot has to solve the code and
              complete the run.</p>
   </div>

   <div class="odd basics">
           <h2><b>GENERAL RULES</b></h2>
           <ol>
            <li>Maximum number of participants allowed is 5 per team. The members from
                different colleges can form a team.</li>
            <li>The team cannot touch the bot during the course of run.</li>
            <li>Enough time would be given to properly threshold the sensors on board.</li>
            <li>Total time allowed for run will be 8 mins.</li>
            <li>The participants will be provided with 220V, 50 Hz AC power supply, and any
                other power supply they require has to be arranged by themselves by the
                participants.</li>
            <li>LEGO kits and pre made mechanics set parts are not allowed to be used for
                any kind of mechanism on the bot. For further studies on these follow the <a href="http://en.wikipedia.org/wiki/Lego_Mindstorms">link</a></li>
            <li>Microprocessors used should not be more than 16 bit microprocessors.</li>
            <li>Rules are subjected to change.</li>
            <li>Decision of Team NSSC will be final and binding under all circumstances.</li>
           </ol>
    </div>

     <div class="even basics">
           <h2 class="left_h4"><b>BOT SPECIFICATIONS</b></h2>
           <ol>
              <li>Maximum dimension allowed for lander is 30*30*30 cm [l*b*h*].</li>
              <li>In case the team is using a non-electric power supply, the team must get it
                  approved from the organizers beforehand via email. Organizers will not be
                  responsible for inconvenience if approval is not sought.</li>
              <li>The wires for the power supply should be at least 15 metres long.</li>
              <li>In all cases, any on-board power supply devices like batteries are to be
                  included in the maximum dimension limit.</li>
              <li>Potential difference between any two points on the bot should not exceed 24
                  volts.</li>
               <li>The bot dimensions would be subject to tolerance of 5%.</li>
                <li>The rules are subject to change.</li>
                 <li>In case of disputes, the decision of team NSSC is final and binding.</li>
           </ol>
      </div>
      <div class="odd basics">
            <h2 class="left_h4"><b>ARENA SPECIFICATION</b></h2>
             <ol>
               <li>The arena is shown in the figure.</li>
               <li>The width of the white line will be 3 centimetres.</li>
               <li>The length and width of the centre node will be 7*7 centimetres.</li>
               <li>As a morse code we will give a character. the characters will be R,L,F or B for right, left, front or back respectively.</li>
              <li>Sufficient time will be given for the thresholding of the various parameters.</li>
             </ol>
    </div>

     <div class="even basics" >
       <h2 class="left_h4">SAMPLE ARENA</h2>
       <div id="arena-img">
          <img src="images/spazor-arena.jpg"/>
       </div>
    </div>

     <div class="odd basics">
           <h2 class="left_h4"><b>JUDGING PARAMETERS</b></h2>
           <h4 class="left_h4">Points awarding:</h4>
           <ol>
              <li>Each team will be awarded bonus 100 point at the start of the run.</li>
              <li>5 points will be awarded for clearing each level.</li>
              <li>30 points will be awarded for clearing one way.</li>
              <li>50 points will be awarded for detecting the correct Morse code.</li>
              <li>Next 30 points will be awarded for completing the other way.</li>
              <li>Time bonus</li>
           </ol>
          <h4 class="left_h4">Penalties:</h4>
           <ol>
              <li>5 points will be deducted if bot deviates from its path.</li>
              <li>20 points will be deducted if bot doesn’t detect the Morse code.</li>
              <li>20 points will be deducted if bot detect a wrong Morse code.</li>
              <li>30 points will be deducted if team opt for a timeout.</li>
              <li>50 points will be deducted if team wants a restart.</li>
           </ol>
           <p><span style="color: red">(</span> Each team will get 2 timeouts and 1 restart in which they can make some
                  hardware changes, like changing batteries, adjusting sensors, but no extra hardware
                  can be added and no changes in the code can be made. <span style="color: red">)</span></p>
      </div>
        <div class="even basics">
            <h2 class="left_h4"><b>CERTIFICATION POLICY</b></h2>
              <ol>
                 <li>Top 3 teams will be awarded by Certificate of Excellence for the event.</li>
                 <li>Prize money worth 25,000 INR will be distributed to the winner teams.</li>
                 <li>The winner team has to complete the task, if they fail to complete the task then they will be not eligible for certificate.</li> 
              </ol>
        </div>    
        
     <br />
       
          <a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to register for Spazor</a><br />
<a href="http://www.sproboticworks.com/products/" target="_blank" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Buy Kit Components</a><br /><br />
          <div style="text-align:center"><a href="http://nssc.in/eventtut/pdf/spazor.pdf" target="_blank"><h4 style="color: black">Download the tutorial</h4></a></div>      

      <br />
        <div style="text-align: center"><b><p>For more details contact: </p></b></div>
      <div class="for-deatils">
          <h2>Mohit Dhariwal</h2>
          <p>mohit@nssc.in</p>
          <p>+91-9933992777</p>
          <pre>  <a href="https://www.facebook.com/dhariwal.mohit?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
      </div>

    </div> <!-- end of modal-body-content -->
  </div>
</div>



<!-- ======================================================  T shirt design ===================================== -->
<div class="row" > 
  <div class="col-sm-6">
    <div class="ih-item circle colored effect6 scale_up" id="myBtn6"><a href="#">
        <div class="img"><img src="images/events/tshirt.png" alt="img"></div>
        <div class="info">
          <h3>T-SHIRT DESIGN</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>

<!-- ========== modal for tshirt-design ================= -->

<div id="myModal6" class="modal-event">
  <div class="modal-content-event">
    <div class="modal-header-event">
      <span class="close-event close6">×</span>
      <h2>T-SHIRT DESIGN</h2>
    </div>
    <div class="modal-body-event">
      <div class="odd basics">
          <h2><b>INTRODUCTION</b></h2> 
          <p>Your design skills may be amazing, but to get a chance to participate in an
             online T-shirt design competition of a National level Space-Tech fest is something that you
             don’t get to see every day. Grab an opportunity to display your amazing design skills in this
             online T-shirt design competition of NSSC 2016. </p>
    </div>

    <div class="even basics">
           <h2 class="left_h4"><b>HOW TO ENTER</b></h2>
           <ol>
              <li>Applications will only be accepted from June 19th, 2016 to August 15th, 2016.The event is open for
                  all.</li>
              <li>E-mail your submissions to <a href="http://nssc.in/assets/events/events.html">tshirt@nssc.in</a></li>
              <li>The tee-design must be based on the theme &quot;Space&quot;.</li>
              <li>All entry emails should have the subject line &quot;T-shirt Design Contest Submission - &quot;First Name, Last Name, College Name.&quot;</li>
              <li>Submit the front as well as back design for the tee</li>
               <li>Attach high resolution JPEG file of your designs as the entries.</li>
                <li>You can submit up to two designs per person. If you submit more than two, only your first two
                   submissions in order of date and time will be considered.</li>
                 <li>The following details must be mentioned in the E-mail:
                   <ol>
                     <li>Name</li>
                     <li>E-mail Id</li>
                     <li>Phone Number</li>
                     <li>Contact Address</li>
                     <li>College (If Applicable)</li>
                   </ol>
                 </li>
                 <li>Rules are subject to change.</li>
                 <li>Decision of Team NSSC will be final and binding under all circumstances.</li>
           </ol>
      </div>

      <div class="odd basics">
        <h2 class="left_h4"><b>RULES AND REGULATIONS</b></h2>
        <ol>
          <li>Submit only original designs. These designs must not contain copyrighted material and they cannot
              have previously won any awards.</li>
          <li>Please be prepared to submit the original Illustrator or Adobe Photoshop file of your design in case
              your artwork is chosen.</li>
          <li>The design must not contain more than 3 solid colours apart from the background color. The
              background color of the t-shirt is not included in 3 solid colors.</li>
          <li>You are not allowed to use any gradients on T-Shirts or on designs. You are allowed to use only
              solid colors.</li>
          <li>Scanned copies of hand-made designs are also acceptable. However, we will prefer digital designs.</li>
          <li>Contestants retain all ownership rights over their submissions, however, as a condition of
             participation, the contestants hereby grant a perpetual, irrevocable, non-exclusive license to the
             organisers of NSSC to reproduce the design and use it for their own marketing purposes. NSSC
             shall retain exclusive rights over the winning entries.</li>
          <li>NO ADDITIONAL MATERIALS (VIDEOS, SAMPLES, ETC) WILL BE ACCEPTED WITH YOUR
           SUBMISSION.</li>
        </ol>
      </div>

      <div class="even basics">
         <h2 class="left_h4"><b>REVIEW AND SELECTION</b></h2>
         <ol>
           <li>Entries will be reviewed by NSSC &#39;16 Organizing Team.</li>
           <li>Entries will also be uploaded on NSSC &#39;16 Facebook page by NSSC&#39;16 Team. Evaluation will also consider the public interest that each submission generates, measured through likes and shares
           along with the appreciation in the form of comments.</li>
           <li>You can also tag your friends in the comments section (NOT in the pic) in order to make it more viral.</li>
           <li>The likes and shares will be taken into account till 11:59 pm, 15 th August,2016.</li>
           <li>There will be one grand prize winner, one honourable mention and consolation prizes for other
              unique and creative submissions that also includes maximum likes, maximum shares.</li>
           <li>The judges&#39; panel includes members of the NSSC &#39;16 creative and design teams.</li>
           <li>Judging criteria is based on: creativity, originality, and content apart from public reviews.</li>
           <li>Winners’ entry may not necessarily be printed.</li>
           <li>Finalists will be required to provide reference files (i.e., preliminary drawings, source for idea).</li>
         </ol>
      </div>

      <div class="odd basics">
        <h2 class="left_h4"><b>NOTIFICATION AND PRIZES</b></h2>
        <ol>
          <li>The winners will be notified by email before or by August 20, 2016.</li>
          <li>The grand prize winner will receive prizes worth Rs. 3000 and a printed T-shirt of NSSC&#39;16.</li>
          <li>The honourable mention will receive prizes worth Rs. 2000, and a printed T-shirt of NSSC&#39;16.</li>
          <li>Consolation prizes and Goodies worth Rs 5000 and T-Shirts of NSSC&#39;16 will be awarded based on
              the creativity, uniqueness and originality of the t-shirt designs.</li>
        </ol>
      </div>  
      
     <br />
       
       <a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
    

      <br />
        <div style="text-align: center"><b><p>For more details contact: </p></b></div>
      <div class="for-deatils">
          <h2>Mohit Dhariwal</h2>
          <p>mohit@nssc.in</p>
          <p>+91-9933992777</p>
          <pre>  <a href="https://www.facebook.com/dhariwal.mohit?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
      </div>
    </div> <!-- end of modal-body-content -->
  </div>
</div>



<!-- ====================================================== Space Deb ===================================== -->
<div class="row" > 
  <div class="col-sm-6">
    <div class="ih-item circle colored effect6 scale_up" id="myBtn11"><a href="#">
        <div class="img"><img src="images/events/deb.png" alt="img"></div>
        <div class="info">
          <h3>Space Deb</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>

<!-- ========== modal for Space Deb ================= -->

<div id="myModal11" class="modal-event">
  <div class="modal-content-event">
    <div class="modal-header-event">
      <span class="close-event close11">×</span>
      <h2>SPACE DEB</h2>
    </div>
    <div class="modal-body-event">
      <div class="odd basics">
          <h2><b>INTRODUCTION</b></h2> 
          <p>The night is dark and full of terror, but the vast mysteries of space which it
hides underneath is even darker. There are many highly controversial
mysteries of our space which are debatable. There are also many complex
technologies used in Space Science which are too complex and need to be
presented concisely. To test how efficiently you can handle such manifold
and debatable situations, we introduce an online event where you show
your perspective of the issues in your own video! </p>
    </div>

    <div class="even basics">
           <h2 class="left_h4"><b>Topic to be selected by the participant:</b></h2>
           <ul>
              <li>Solution(s) to Black Hole information paradox.</li>
               <li>Hawking radiation.</li>
               <li>Supernovae mechanism, inside a star.</li>
               <li>Symmetry breaking of the early Universe and CMBR.</li>
               <li>Efficient method for interstellar travel.</li>
               <li>Gravitational Waves.</li>
               <li>Weak strength of Gravity explained using String Theory.</li>
               <li>Any method to detect Dark Matter and Dark Energy.</li>
               <li>An efficient landing mechanism on other planet’s surface.</li>
               <li>A way to utilize maximum energy of our Sun.</li>
           </ul>
      </div>

      <div class="odd basics">
        <h2 class="left_h4"><b>GUIDELINES:</b></h2>
        <ol>
          

<li>The teams have to propose a name for themselves.</li>
<li>The maximum number of members allowed in a team is <b>three</b>.</li>
<li>The maximum number <b>topics</b> allowed for a single team is <b>one</b>.</li>
<li>The diagrams or animations must be properly labelled.</li>
<li>Each team has to send their details along with the video link which consists of:
  <ol>
    <li>Name of the team and its members along with their institute names. They may belong to different institutes.</li>
    <li>Their contact numbers and email ids.</li>
  </ol>
</li>
<li>Selected teams will be invited to present their views on a given topic in front of judges during National Students’ Space Challenge 2016.</li>
        </ol>
      </div>

      <div class="even basics">
         <h2 class="left_h4"><b>RULES AND REGULATIONS:</b></h2>
         <ol>
           <li>Submit only original VIDEOS. These designs must not contain copyrighted material and they cannot have previously won any awards.</li>
           <li>Contestants retain all ownership rights over their submissions, however, as a condition of participation, the contestants hereby grant
             a perpetual, irrevocable, non-exclusive license to the organizers of NSSC to reproduce or edit the video and use it for their own marketing purposes. NSSC shall retain exclusive rights over the winning entries.</li>
           <li>NO ADDITIONAL MATERIALS (VIDEOS, SAMPLES, ETC) WILL BE ACCEPTED WITH YOUR SUBMISSION.</li>
         </ol>
      </div>

      <div class="odd basics">
        <h2 class="left_h4"><b>ABOUT THE VIDEO:</b></h2>
        <ol>
          <li>The maximum allowed track length of each video is <b>three minutes</b>.</li>
          <li>The video must be uploaded on <b>Google Drive</b> with permission of access and link to be mailed at <b>spacedeb@nssc.in</b> along with the team details.</li>
        </ol>
      </div>  

  <div class="even basics">
     <h2><b>JUDGING PARAMETERS:</b></h2>
     <ul>
        <li>The Judgement will be given on the overall richness of the content of the case and presentation.</li>
        <li>New innovative ideas would lead to more points for the participating teams.</li>
        <li>More views and likes in favor of the video will be beneficial for the participating teams.</li>
        <li>Any violation to any of the guidelines and rules will lead to direct disqualification.</li>
        <li>Finalists will be required to provide reference files (i.e., preliminary video, source for idea, references, etc. along with the video link submitted).</li>
        <li>In case of disputes, the decision of team NSSC is final and binding.</li>
     </ul>
  </div>
      
     <br />

         <a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to register for Space Deb</a><br />
       
         <div style="text-align:center"><h3 style="color: black">Mail your Google Drive link at <a href="#">spacedeb@nssc.in</a></h3></div>      

      <br />
        <div style="text-align: center"><b><p>For more details contact: </p></b></div>
      <div class="for-deatils">
          <h2>Sanket Kangle</h2>
          <p>sanket@nssc.in</p>
          <p>+91-7699097624</p>
          <pre>  <a href="https://www.facebook.com/sanket.kangle?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
      </div>
    </div> <!-- end of modal-body-content -->
  </div>
</div>




<!-- =============================================================== Designeer =================================================== -->
<div class="row"> 
  <div class="col-sm-6">
    <div class="ih-item circle colored effect6 scale_up" id="myBtn7"><a href="#">
        <div class="img"><img src="images/events/cad.png" alt="img"></div>
        <div class="info">
          <h3>DESIGNEER</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>


<!-- ========== modal for Designeer ================= -->

<div id="myModal7" class="modal-event">
  <div class="modal-content-event">
    <div class="modal-header-event">
      <span class="close-event close7">×</span>
      <h2>DESIGNEER</h2>
    </div>
    <div class="modal-body-event">
      <div class="odd basics">
          <h2><b>INTRODUCTION</b></h2> 
          <p>Rome was not built in a day, neither was any space-craft! Introducing an event in
             NSSC 2016, in which aspiring Rocket Scientists can test their primitive space craft
             designing skills by preparing virtual models of space crafts and other space related
             structures.</p>
  </div>

   <div class="even basics">
          <h2 ><b>PROBLEM STATEMENT</b></h2> 
          <p >Participant have to give an optimized CAD design of the given problem statement
              overnight. The exact problem statement will be released just before the event. Some
              component of CAD will be provided. Participant have to submit a design report on their
              CAD to validate their design.</p>
   </div>

   <div class="odd basics">
           <h2><b>GENERAL RULES</b></h2>
           <ol>
            <li>Maximum allowable team size is 3.The members need not be of the same institute.</li>
            <li>Total Time for the Overnight event is 8 hours with half hour extra for introduction.</li>
            <li>Only one design is allowed per team.</li>
            <li>The participant have to bring their own laptop with per-installed CAD software.</li>
            <li>The software allowed for event are PTC Creo, Solid Works, AutoCAD, Catia.</li>
            <li>The participant will be provided with standard AC power source and Internet for any
                 assistance in designing, however taking help from anyone other person or outsourcing
                 their design will lead to disqualification.</li>
            <li>Rules are subject to change.</li>
            <li>Participant have to submit the CAD and design presentation to validate their design.</li>
           </ol>
    </div>

     <div class="even basics">
           <h2 class="left_h4"><b>JUDGING PARAMETERS</b></h2>
           <ol>The judging will be based on accuracy of CAD and design presentation.</ol>
     </div>
     <div class="odd basics">
            <h2 class="left_h4"><b>CERTIFICATION POLICY</b></h2>
           <ol>Top 3 teams will be awarded by certification of merit for the event.</ol>

     </div>   

      
     <br />
       
        <a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to register for Designeer</a><br />     

      <br />
        <div style="text-align: center"><b><p>For more details contact: </p></b></div>
      <div class="for-deatils">
          <h2>Mohit Dhariwal</h2>
          <p>mohit@nssc.in</p>
          <p>+91-9933992777</p>
          <pre>  <a href="https://www.facebook.com/dhariwal.mohit?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
      </div>
    </div> <!-- end of modal-body-content -->
  </div>
</div>



<!-- ================================================== Case Studey ================================================ -->
<div class="row" > 
  <div class="col-sm-6">
    <div class="ih-item circle colored effect6 scale_up" id="myBtn8"><a href="#">
        <div class="img"><img src="images/events/case.png" alt="img"></div>
        <div class="info">
          <h3>CASE STUDY</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>

<!-- ========== modal for case-study ================= -->

<div id="myModal8" class="modal-event">
  <div class="modal-content-event">
    <div class="modal-header-event">
      <span class="close-event close8">×</span>
      <h2>CASE STUDY</h2>
    </div>
    <div class="modal-body-event">
     <div class="odd basics">
      <h2>INTRODUCTION</h2>
       <p>
          An explanatory is used to explore causation in order to find underlying principles. The above idea gave us a thought to bring to you a golden chance to study and explore various Space sciences and Astronomy related intricate cases intriguing human brains. 
      </p>
    </div>
    <div class="even basics">
      <h2>MANGALYAAN</h2>
      <p>Asian country which was maligned by being mocked as “A land of snake charmers”, has made unparalleled technological success in the past few years. After fighting against all odds, and with the solo motive of serving nation and humanity, an organisation which came into existence in the year 1969 has made unshakable and exponential progress in the field of space science and technology over the past few years. It has served the same Asian country in technological field by research in space science and technology. In the year 2014, the same organisation made the whole country proud by registering it as the first Asian nation to reach Mars orbit, and the first nation in the world to do so in its first attempt. Indian Space Research Organisation (ISRO), has surely made every Indian proud after the success of Mangalyaan.
ISRO came into existence in the year 1969. Prior to that, INCOSPAR (Indian National Committee for Space Research), was established in 1962 under the chairmanship of Dr Vikram Sarabhai (Sarabhai), the Indian physicist referred to as the father of the Indian space research initiative. INCOSPAR was established to formulate India’s space program. Sarabhai successfully convinced the government about the importance of a space program and also gained support from Dr Homi Jehangir Bhaba, the pioneer of nuclear research in India. 
Dr Sarabhai laid the foundation of ISRO, whose mission was to utilize technology for the benefit of the common people and the nation as a whole. </p> <br />
<img src="images/radar.jpg" style="width: 60%; display: table; margin-left: 20%; height: auto" />
<br /> <!-- img part -->
<p style="text-indent: 150px">On 23 November 2008, the first public acknowledgement of an unmanned mission to Mars was announced by then-ISRO chairman G. Madhavan Nair. The MOM mission concept began with a feasibility study in 2010 by the Indian Institute of Space Science and Technology after the launch of lunar satellite Chandrayaan-1 in 2008. The government of India approved the project on 3 August 2012, after the Indian Space Research Organization.The enormous distances involved in interplanetary missions present a demanding challenge; developing and mastering the technologies essential for these missions will open endless possibilities for space exploration. After leaving Earth, the Orbiter will have to endure the interplanetary space. Apart from deep space communications and navigation-guidance-control capabilities, the mission will require autonomy at the spacecraft end to handle contingencies.</p>
<br />
<p style="text-indent: 150px">Assembly of the PSLV-XL launch vehicle, designated C25, started on 5 August 2013. The mounting of the five scientific instruments was completed at Indian Space Research Organization Satellite Centre, Bangalore, and the finished spacecraft was shipped to Sriharikota on 2 October 2013 for integration to the PSLV-XL launch vehicle. The satellite's development was fast-tracked and completed in a record 15 months. Specifically, the primary objective is to develop the technologies required for designing, planning, management and operations of an interplanetary mission. The secondary objective is to explore Mars' surface features and Martian atmosphere using indigenous scientific instruments.</p>
<br />
<img src="images/set.png" style="width: 60%; display: table; margin-left: 20%; height: auto" />
<br />
<p style="text-indent: 150px">The mission is a "technology demonstrator" project to develop the technologies for designing, planning, management, and operations of an interplanetary mission.[25] It carries five instruments that will help advance knowledge about Mars to achieve its secondary, scientific objective.[26] The spacecraft is currently being monitored from the Spacecraft Control Centre at ISRO Telemetry, Tracking and Command Network (ISTRAC) in Bangalore with support from Indian Deep Space Network (IDSN).</p>
  </div>

  <div class="odd basics">
   <h2>We propose you to study the Mangalyaan Mission giving stress on following study topics:</h2>
   <ul>
     <li>Stress upon the political conditions and pressures during the launch of Mangalyaan.</li>
     <li>What technology has been used in the propulsion and detecting instruments in Mangalyaan that lowered its cost to such an extent in comparison with other interplanetary missions?</li>
     <li>Describe the interplanetary journey of Mangalyaan in brief and state the troubles faced in this phase of journey. How were they tackled? </li>
     <li>Out of around 53 total missions only 24 have been successful to Mars, Mangalyaan being one of them. State the major unsuccessful missions and what problems were faced by them. Comment how Mangalyaan succeeded in overcoming them.</li>
     <li>Elaborate the objectives of the mission. What is special about Mangalyaan’s objectives compared to other ongoing missions?</li>
     <li>Explain how Mangalyaan entered into the Mars’ orbit. What were the major dilemmas to be regulated in this phase? </li>
     <li>What are results and conclusion from the Mangalyaan mission regarding the surface and atmosphere of Mars? Especially about the methane content.</li>
     <li>What geographical, political and economical factors make India's space missions so cheap but accurate? </li>
     <li>How can it contribute to our economy if we see it as a business model?</li>
     <li><h2>Guidelines:</h2>
         <ol>
             <li>The teams have to propose a name for themselves.</li>
             <li>The diagrams should be neat and clearly labeled.</li>
         </ol>
     </li>
     <li>
     	<h2>About the report:</h2>
     	 <ol>
     	    <li>
     	    	<h4>Format: </h4>
     	    	<p>The report must be submitted in PDF/Microsoft Word/Open Office Word formats
only. Report must be submitted in English language.</p>
     	    </li>
     	    <li>
     	    	<h4>Page Limit: </h4>
     	    	<p>The report must not exceed 15 pages which include front page, index, appendix
and bibliography.</p>
     	    </li>
     	 </ol>
     </li>
     <li>
     	<h4>Rules and regulations:</h4>
     	<ol>
     	   <li>
     	       <h4>Team Size:</h4>
     	       <p>The maximum permissible number of members in a participating team is 4.However they need not belong to the same institute/college/university.</p>
     	   </li>
     	   <li>The competition shall be held in 2 rounds. The first round shall be online where participants have to submit the report online.</li>
     	   <li>All teams must send in soft-copies of their proposals latest by 25th Aug to casestudy@nssc.in along with the names of the participants and their complete details.</li>
     	   <li>The plagiarism in content shall not be accepted and the entry shall be cancelled.</li>
     	   <li>The shortlisted teams for second round will have to present their report in form of a presentation (PowerPoint preferably) in front of eminent judges.</li>
     	</ol>
     </li>
     <li>
     	<h4>Judging parameters:</h4>
     	<ol>
     	   <li>The presentation time shall be 15 minutes</li>
     	   <li>The teams have to wrap up the presentation within the given limits. A warning bell shall be issued two minute before the end of 15 minutes.</li>
     	   <li>The Judgement will be given on the overall richness of the content of the case and presentation.</li>
     	   <li>The decision of judges shall be considered as final.</li>
     	</ol>
     </li>
   </ul>
  </div>

    <div class="even basics">
             <h2 class="left_h4"><b>CERTIFICATION POLICY</b></h2>
              <ol>
                 <li>Top 3 teams will be awarded by Certificate of Excellence for the event.</li>
                 <li>Prize money worth 15,000 INR will be distributed to the winner teams.</li>
              </ol>
        </div>
      
     <br /><br />

         <a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to register for Case Study</a><br /><br />
       
         <div style="text-align:center"><h3 style="color: black">"Mail your entries at <a href="">casestudy@nssc.in</a>"</h3></div>      

      <br /><br />
        <div style="text-align: center"><b><p>For more details contact: </p></b></div>
      <div class="for-deatils">
          <h2>Sanket Kangle</h2>
          <p>sanket@nssc.in</p>
          <p>+91-7699097624</p>
          <pre>  <a href="https://www.facebook.com/sanket.kangle" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
      </div>
    </div> <!-- end of modal-body-content -->
  </div>
</div>

<!-- ================================== Paper presentation ======================================= -->

<div class="row"> 
  <div class="col-sm-6" >
    <div class="ih-item circle colored effect6 scale_up" id="myBtn10"><a href="#">
        <div class="img" ><img src="images/events/paper.png" alt="img"></div>
        <div class="info">
          <h3>PAPER PRESENTATION</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>

<!-- ====== modal of paper presentation == -->

<div id="myModal10" class="modal-event">
   <div class="modal-content-event">
      <div class="modal-header-event">
         <span class="close-event close10">x</span>
         <h2>PAPER PRESENTATION</h2> 
      </div>
      <div class="modal-body-event">
          <div class="odd basics">
             <h2>INTRODUCTION</h2>
             <p>The LIGO concept built upon early work by many scientists to test a component of Albert Einstein's theory of relativity, the existence of gravitational waves. Starting in the 1960s, American scientists including Joseph Weber, as well as Soviet scientists Mikhail Gertsenshtein and Vladislav Pustovoit, conceived of basic ideas and prototypes of laser interferometry, and in 1967 Rainer Weiss of MIT published an analysis of interferometer use and initiated the construction of a prototype with military funding, but it was terminated before it could become operational.  Starting in 1968, Kip Thorne initiated theoretical efforts on gravitational waves and their sources at Caltech, and was convinced that gravitational wave detection would eventually succeed.</p>
             <br />
             <h4>Finally! After exactly 100 years of Relativity! </h4> <br />
             <img src="images/paper1.jpg" style="max-width: 100%; width: 100%; height: auto;" />
             <br /><br />
             <p style="text-indent: 100px">Scientists have observed ripples in the fabric of space-time directly which are called as 'gravitational waves'. They are a direct evidence of the General Relativity proposed by Einstein and other mathematicians of that era. This confirms a major prediction of Einstein’s 1915 general theory of relativity and opens an unprecedented new window onto the cosmos. We can use this new technology as a new vision to the unseen Universe.

According to the General theory of Relativity or GR, gravity is no longer Newtonian but a consequence of the nature of space and time or so called the space-time. Space and time are no longer independent of each other. Masses cause the space-time to curve or have stress and this is what we feel as gravity. This curvature or stress in space-time is quantified by a mathematical object called the Riemann Curvature Tensor. Riemann curvature tensor tells us how the space is curved, if it's zero the space is flat and no gravitational field is present and if not so then pure gravitational field is present. G-waves are based on this concept. 
Inside the interferometers there are interfering coherent waves which would get out of phase by even a small disturbance of the order of diameter of a proton (10-21m)! So, if a gravitational wave pass via the Earth region, one of the arm of the interferometer would get elongate while other shorten and this would introduce a phase difference between the waves which is easily detectable.</p>
             <br />
             <img src="images/paper2.jpg" style="max-width: 100%; width: 100%; height: auto;" />
             <br /><br />
             <p style="text-indent: 100px;">The gravitational waves were detected on September 14, 2015 at 5:51 a.m. Eastern Daylight Time (09:51 UTC) by both of the twin Laser Interferometer Gravitational-wave Observatory (LIGO) detectors, located in Livingston, Louisiana, and Hanford, Washington, USA. The LIGO Observatories are funded by the National Science Foundation (NSF), and were conceived, built, and are operated by Caltech and MIT. The discovery, accepted for publication in the journal Physical Review Letters, was made by the LIGO Scientific Collaboration (which includes the GEO Collaboration and the Australian Consortium for Interferometric Gravitational Astronomy) and the Virgo Collaboration using data from the two LIGO detectors. It took scientists few months to finally analyze the data and conclude that this gravitational wave emerged from a giant collision of two black holes, an event indicating the merging of two primordial black holes. </p>
          </div>
          <div class="even basics">
               <h4>PROBLEM STATEMENT(s):</h4>
               <ol>
                  <li>
                   Address these conceptual arguments which played a major role in the detection of G-waves.
                  	<ul>
                  		<li>What are gravitational waves? What are their properties explored by LIGO? What information do they provide?</li>
                  		<li>Since g-waves stretch and squeeze the whole space-time, they must do the same to the wavelength of radiation too. So how have been their effect detected?</li>
                  		<li>LIGO is reported to have an accuracy of about 10-18 m. Explain briefly how can physicists be sure that the signal was due to a gravitational wave event only?</li>
                  	</ul>
                  </li>
                  <li>Give the detailed description of the following engineering concerns in LIGO and present your own ideas regarding their improvements to <b>increase more precision</b> and at the same <b>time lower the finances:</b>
                    <ul>
                    	<li>The highly vacuumed arms of the observatory</li>
                    	<li>The ultra-reflective mirrors used</li>
                    	<li>Seismic isolation</li>
                    	<li>Lasers </li>
                    	<li>Noise reduction</li>
                    	Describe a gravitational wave event in sequence of its detection and at what stages the technology can be altered to a more sensitive and compatible one. 
                    </ul>
                  </li>
                  <li>The accuracy of a Michelson interferometer is proportional to the length of its arms. One way is to conduct the experiment in Space itself with huge distance b/w the arms! One such proposed mission is <b>Laser Interferometer Space Antenna (LISA)</b> by NASA.
Elaborate how such an experiment can be conducted and specifically lay stress on the <b>arrangements in space</b> for this experiment that would be most effective.</li>
                 <li>After this first successful session of LIGO, it is now going to be enhanced in a project called <b>Advanced LIGO</b>. What modern technologies are going to be involved in this project and what according to you must be incorporated for more <b>wide range data collection</b> regarding the Comic events? </li>
               </ol>
          </div>
          <div class="odd basics">
              <h2>GUIDELINES:</h2>
              <ul>
              	<li>The teams have to propose a name for themselves as well as their proposed prototype.</li>
              	<li>The team must come up with an original idea for tackling this problem. Their proposal must not be copied from existing models for accomplishing guarded mechanism.</li>
              	<li>The team can come with a system which can include multiple prototypes to make moments of terror to moments of breathless cheers.</li>
              </ul>
          </div>
          <div class="even basics">
              <h2>ABOUT THE REPORT:</h2>
              <ul>
              	<li>Format: The report must be submitted in PDF/Microsoft Word/Open Office Word formats only. Report must be submitted in English language. </li>
              	<li>Page Limit: The report must not exceed 40 pages.</li>
              </ul>
          </div>
          <div class="odd basics">
          	<h2>RULES AND REGULATIONS:</h2>
          	<ul>
          		<li>Team Size: The maximum permissible number of members in a participating team is 5. However they need not belong to the same institute/college/university.</li>
          		<li>The competition shall be held in 2 rounds. The first round shall be online where participants have to submit the report online.</li>
          		<li>All teams must send in soft-copies of their proposals latest by <DATE to ........@gmail.com>, along with the names of the participants and their complete details.</li>
          		<li>The report must not exceed 40 pages which include front page, index, appendix and bibliography.</li>
          		<li>The report should be in PDF/Microsoft Word/Open Office Word formats only.</li>
          		<li>The diagrams should be neat and clearly labeled.</li>
          		<li>The plagiarism in content shall not be accepted and the entry shall be cancelled.</li>
          		<li>The shortlisted teams for second round will have to present their report in form of a presentation (PowerPoint preferably) in front of eminent judges.</li>
          	       <li>All teams must send in soft-copies of their proposals latest by 25th Aug to paperpresentation@nssc.in along with the names of the participants and their complete details.</li>
                </ul>
          </div>
          <div class="even basics">
          	<h2>JUDGING PARAMETERS:</h2>
          	<ul>
          		<li>The event consists of 100 points with report consisting of 60 points and presentation 40 points.</li>
          		<li>The presentation time shall be 25 minutes.</li>
          		<li>The teams have to wrap up the presentation within the given limits. A warning bell shall be issued one minute before the end of 25 minutes.
Feasibility -> 20 points.</li>
                <li>Innovativeness -> 15 points</li>
                <li>Design -> 15 points</li>
          	</ul>
          </div>
         <div class="odd basics">
             <h2 class="left_h4"><b>CERTIFICATION POLICY</b></h2>
              <ol>
                 <li>Top 3 teams will be awarded by Certificate of Excellence for the event.</li>
                 <li>Prize money worth 15,000 INR will be distributed to the winner teams.</li>
              </ol>
        </div>
        
        <br /><br />

              <a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
<a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to register for Paper Presentation</a><br /><br />
       
                   <div style="text-align:center"><h3 style="color: black">"Mail your entries at <a href="">paperpresentation@nssc.in</a>"</h3></div>      

      <br /><br />

        <div class="for-deatils">
            <div style="text-align: center"><p>For more details contact: </p></div>
            <h2><b>Mohit Dhariwal</b></h2>
            <p>mohit@nssc.in</p>
            <p>+91-9933992777</p>
            <pre>  <a href="https://www.facebook.com/dhariwal.mohit?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
        </div>
      </div>
   </div>
</div>


<!-- ==================================================== Astrophotography ============================================ -->
<div class="row" > 
  <div class="col-sm-6">
    <div class="ih-item circle colored effect6 scale_up" id="myBtn9"><a href="#">
        <div class="img"><img src="images/events/astro.png" alt="img"></div>
        <div class="info">
          <h3>ASTROPHO-<br>-TOGRAPHY</h3>
          <p>View more</p>
        </div></a></div>
  </div>
</div>
</div>

<!-- ========== modal for astro ================= -->

<div id="myModal9" class="modal-event">
  <div class="modal-content-event">
    <div class="modal-header-event">
      <span class="close-event close9">×</span>
      <h2>ASTROPHOTOGRAPHY</h2>
    </div>
    <div class="modal-body-event">
      <div class="odd basics">
          <h2><b>INTRODUCTION</b></h2> 
          <p>Under the blanket of beautiful stars, we all witness the exquisite beauty of
             universe which hides boundless mysteries underneath. To provide a platform to all amateur
             photographers across the nation to showcase their photography skills, NSSC’16 presents
             ASTOPHOTOGRAPHY. Winning photos will also be displayed in an exhibition in NSSC &#39;16..</p>
    </div>

     <div class="even basics">
          <h2 ><b>RULES</b></h2> 
          <p >Amateur Astrophotography is a photography competition, so by
              entering you agree to the following competition rules.</p>
   

        <ol >
          <li style="color:#013D57">
             <h4><b>Organizers</b></h4>
             <p>The Amateur Astrophotography Competition is organized by Space
               Technology Students&#39; Society, IIT Kharagpur.</p>
          </li>
          <li>
             <h4><b>How to Enter</b></h4>
             <p>Entries to the Amateur Astrophotography Competition 2016 competition
               open on 16th May 2016 and must be received by 25th August 2016.</p>
          </li>
          <li>
             <h4><b>Submitting and Eligibility</b></h4>
               <ol type="i">
                  <li><p>Entrants must belong to the age-group of 15-25. Entrants may submit
                   up to five separate entries to the Amateur Astrophotography Competition
                   2016.</p></li>
                   <li><p>By submitting an entry, each entrant agrees to the competition Rules,
                  and warrants that they have secured the permission of the copyright
                 owner (if not themselves) to enter the image into the competition.</p></li>
                 <li><p>By submitting photos to the competition you confirm that the photo:
                    <ol type="a">
                      <li><p>Was taken and processed by you, or by a group of which you are
                         an active participant</p></li>
                         <li><p>Is your or your group&#39;s original work, or</p></li>
                         <li><p>Does not infringe the copyright or any other rights of any third
                      party (particularly in relation to the use of robotic telescopes)</p></li>
                      <li><p>Does not contain any obscene or defamatory content or material</p></li>
                    </ol>
                 </p></li>
                <li><p>Digitally enhanced, composites are eligible for entry to the
                     competition, but original Photos must be attached with the entry. The
                     judging panel may ask about your processing method if your photo is
                     shortlisted for a prize.</p></li>
                <li><p>If the Image is not digitally enhanced, participant has to upload the
                    same image twice in both categories, viz. Original Image and Entry
                    Image.</p></li>
                <li><p>The following images are not eligible for entry to the Amateur
                   Astrophotography Competition:
                    <ol type="a">
                      <li><p>Photos that have previously been submitted to a news/picture
                         agency for distribution.</p></li>
                        <li><p>Photos taken more than two years before the competition&#39;s
                         closing date (i.e. taken before 16th May 2014).</p></li>
                    </ol>
                   </p></li>
               </ol>

              <li>
                <h4><b>Shortlisted entries</b></h4>
                <ol type="i">
                  <li><p>To make sure that your photos are eligible for the competition
                      shortlist, please ensure:
                       <ol type="a">
                        <li><p>you have completed the relevant online application form</p></li>
                        <li><p>you have a high-resolution version (atleast 1080p) of your photo
                        available. This is to ensure that your image can be reproduced in the
                        exhibition and for promotional purposes, should it be awarded a prize.</p></li>
                       </ol>
                      </p></li>
                    <li><p>If your photo is shortlisted, we will contact you via the email address
                    you provided on the online entry form and ask you to:
                      <ol type="a">
                         <li><p>Supply a high resolution version of your photo. This must be
                        exactly the same image as the one originally entered, albeit a larger
                        version. No retouching or altering of the image is permitted after the
                        image has been shortlisted.</p></li>
                        <li><p>supply any missing information about your image, if needed.</p></li>
                        <li><p>Declare if your photo has been digitally manipulated and, if so,
                          supply details of the processing method. Digitally manipulated photos
                          are eligible but the judging panel will want to take your process into
                          consideration when choosing winning photos.</p></li>
                      </ol>
                    </p></li>
                  </ol></li> 
               </li>
             <li>
              <h4><b>Copyright and use of images</b></h4>
                <ol type="i">
                  <li><p>Space Technology Students Society is dedicated to supporting public
                        understanding and education of science. The images submitted to the
                        Amateur Astrophotography Competition serve as key resources to
                        promote astronomy photography in practice and in order for us to do this
                        we need to be able to use your image(s) in certain ways.</p></li>
                    <li><p>Entrants will retain copyright and moral rights in their submitted
                        images. In all instances, the copyright holder will be credited, wherever
                        practicable, when the image is used and published by spAts. We will use
                        your first and last name as supplied during the entry process. Although
                        spAts will always supply the correct information to third parties (for
                        example to press / media), it cannot accept responsibility for any credit
                        line errors or omissions by these parties.</p></li>
                    <li><p>By entering, all entrants grant spAts a non-exclusive, worldwide,
                        royalty-free right to use, reproduce, modify, adapt, and publish in
                        perpetuity, each image entered into the competition:
                        <ol type="a">
                          <li><p>in exhibition displays, in relation to both the Amateur
                              Astrophotography Competition 2016 and exhibition and related future
                              exhibitions and displays.</p></li>
                            <li><p>in promotional, press and marketing materials to promote and
                              publicize the 2016 competition and exhibition, as well as future related
                              exhibitions, and more generally to promote the understanding of
                              astronomy in general terms as spAts sees fit</p></li>
                            <li><p>in spAts publications about the Amateur Astrophotography
                               Competition 2016 competition and exhibition and future related
                               exhibitions.</p></li>
                        </ol>
                        </p></li>
                     <li><p>Please do not submit your contribution to the competition if you do
                        not wish to grant these rights to spAts.</p></li>
                </ol>
            </li>
            <li>
              <h4><b>Winning Images</b></h4>
              <ol type="i">
                <li><p>Total prizes worth INR 10,000/- at stake.</p></li>
                <li><p>There will be 3 Prizes. Winner, 1st runner up and 2nd runner up.</p></li>
                <li><p>Consolation Prizes will be given to entries with Maximum likes,
                      shares and most appreciated Photo in comments.</p></li>
                    <li><p>Winners get free entry in NSSC &#39;16.</p></li>
                    <li><p>Top 25 Images will be displayed in exhibition hosted by spAts in
                     NSSC &#39;16.</p></li>
                    <li><p>Winners will be announced on our Facebook Page and website in the
                     month of August.</p></li>
              </ol>
            </li>
            <li>
              <h4><b>Judging</b></h4>
              <ol type="i">
              <li><p>Entries will be uploaded by NSSC on our Facebook Page for Judging.</p></li>
              <li><p>Space Technology Students Society will be the Judging Panel. They
                  might appoint a panel not related spAts to judge the entries.</p></li>
                 <li><p>Judging will be based on technical skills, artistic merit and
                  originality.</p></li>
                  <li><p>Decision of Space Technology Students Society will be final and
                   binding to all.</p></li>
              </ol>
            </li>
            <li>
              <h4><b>Invalid entries</b></h4>
              <ol type="i">
                <li><p>All entries to the competition must be submitted via the entry portal on
                    our website will not accept images submitted by any other means.</p></li>
                    <li><p>Maximum allowable image size in 5 MB.</p></li>
                    <li><p>No responsibility can be accepted for entries which are lost, delayed,
                       corrupted, damaged, misdirected or incomplete or which cannot be
                       delivered for any technical, delivery or other reason. Proof of sending
                       will not be accepted as proof of receipt. spAts cannot guarantee
                       continuous, uninterrupted or secure access to the website.</p></li>
                     <li><p>By submitting your photo for entry into the Amateur Astrophotography
                        Competition 2016 and for publishing on the website, you confirm that the
                        content of the photo is and will not be taken to be obscene, racist,
                        pornographic, indecent, harassing, threatening or offensive.</p></li>
                     <li><p>SpAts reserves the right to pre-vet and/or moderate photos submitted
                        and reserves the right to not display uploaded content to the website or
                        remove, suspend or disable access to photos, at any time, at its sole
                        discretion, without liability or prior notice.</p></li>
              </ol>
            </li>
            <li>
              <h4><b>Liability</b></h4>
              <p>spAts reserves the right to cancel the Amateur Astrophotography
                 Competition and/or exhibition at any time owing to circumstances
                 outside its reasonable control and where circumstances make this
                 unavoidable, but will always use all reasonable endeavors to minimize
                 the effect on participants to avoid undue disappointment.</p>
            </li>
        </ol>

    </div>

     <br />

       <a href="../login" style="display: table; margin: 0 auto; text-decoration: none; color: #FFF; background-color: #555; padding: 10px 10px">Login to Make Online Payment</a><br />
       
         <div style="text-align:center" id="astro-form"><a href="http://nssc.in/astrophotography/">Proceed</a></div>      

      <br />
        <div style="text-align: center"><b><p>For more details contact: </p></b></div>
      <div class="for-deatils">
          <h2>Mohit Dhariwal</h2>
          <p>mohit@nssc.in</p>
          <p>+91-9933992777</p>
          <pre>  <a href="https://www.facebook.com/dhariwal.mohit?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></pre>
      </div>

    </div> <!-- end of modal-body-content -->
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
        <form action="../subscriber.php" method="post">
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


<!-- ============================ Scripts for models ================================ -->

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

/* ============= Event model-1 =============== */
var modal1 = document.getElementById('myModal1');
var btn1 = document.getElementById("myBtn1");
var span1 = document.getElementsByClassName("close1")[0];
btn1.onclick = function() {
    modal1.style.display = "block";
}
span1.onclick = function() {
    modal1.style.display = "none";
}

/* ================ Event model-2 ============== */
var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("myBtn2");
var span2 = document.getElementsByClassName("close2")[0];
btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.display = "none";
}

/* ================ Event model-3 ============== */
var modal3 = document.getElementById('myModal3');
var btn3 = document.getElementById("myBtn3");
var span3 = document.getElementsByClassName("close3")[0];
btn3.onclick = function() {
    modal3.style.display = "block";
}
span3.onclick = function() {
    modal3.style.display = "none";
}

/* ================ Event model-4 ============== */
var modal4 = document.getElementById('myModal4');
var btn4 = document.getElementById("myBtn4");
var span4 = document.getElementsByClassName("close4")[0];
btn4.onclick = function() {
    modal4.style.display = "block";
}
span4.onclick = function() {
    modal4.style.display = "none";
}

/* ================ Event model-5 ============== */
var modal5 = document.getElementById('myModal5');
var btn5 = document.getElementById("myBtn5");
var span5 = document.getElementsByClassName("close5")[0];
btn5.onclick = function() {
    modal5.style.display = "block";
}
span5.onclick = function() {
    modal5.style.display = "none";
}

/* ================ Event model-6 ============== */
var modal6 = document.getElementById('myModal6');
var btn6 = document.getElementById("myBtn6");
var span6 = document.getElementsByClassName("close6")[0];
btn6.onclick = function() {
    modal6.style.display = "block";
}
span6.onclick = function() {
    modal6.style.display = "none";
}

/* ================ Event model-7 ============== */
var modal7 = document.getElementById('myModal7');
var btn7 = document.getElementById("myBtn7");
var span7 = document.getElementsByClassName("close7")[0];
btn7.onclick = function() {
    modal7.style.display = "block";
}
span7.onclick = function() {
    modal7.style.display = "none";
}

/* ================ Event model-8 ============== */
var modal8 = document.getElementById('myModal8');
var btn8 = document.getElementById("myBtn8");
var span8 = document.getElementsByClassName("close8")[0];
btn8.onclick = function() {
    modal8.style.display = "block";
}
span8.onclick = function() {
    modal8.style.display = "none";
}
/* ================ Event model-9 ============== */
var modal9 = document.getElementById('myModal9');
var btn9 = document.getElementById("myBtn9");
var span9 = document.getElementsByClassName("close9")[0];
btn9.onclick = function() {
    modal9.style.display = "block";
}
span9.onclick = function() {
    modal9.style.display = "none";
}

/* ================ Event model-10 ============== */
var modal10 = document.getElementById('myModal10');
var btn10 = document.getElementById("myBtn10");
var span10 = document.getElementsByClassName("close10")[0];
btn10.onclick = function() {
    modal10.style.display = "block";
}
span10.onclick = function() {
    modal10.style.display = "none";
}

/* ================ Event model-11 ============== */
var modal11 = document.getElementById('myModal11');
var btn11 = document.getElementById("myBtn11");
var span11 = document.getElementsByClassName("close11")[0];
btn11.onclick = function() {
    modal11.style.display = "block";
}
span11.onclick = function() {
    modal11.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
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
    else if (event.target == modal6) {
        modal6.style.display = "none";
    }
    else if (event.target == modal7) {
        modal7.style.display = "none";
    }
     else if (event.target == modal8) {
        modal8.style.display = "none";
    }
     else if (event.target == modal9) {
        modal9.style.display = "none";
    }
    else if (event.target == modal10) {
        modal10.style.display = "none";
    }
    else if (event.target == modal11) {
        modal11.style.display = "none";
    }

}

</script>


        


</body>
</html>
		