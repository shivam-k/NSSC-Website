  <?php
  require('fpdf.php');
  session_start();
  include("../user-info.php");

  ?>

  <?php
  $con = mysqli_connect("mysql2.alwaysdata.com","spats","spatscjj","spats_nssc16");
  $email_id = $_POST['email_participation'];
  $result = mysqli_query($con,"SELECT * FROM register WHERE email = '$pemail'");
  while($row = mysqli_fetch_array($result)) {
    $name = ucfirst($row['name']);
    $institute = ucfirst($row['college']);
    $strinsti = strlen($institute);
    $phone = $row['contact'];
    $email = $row['email'];
    $participantid = $row['participantid'];
    $dob = date("j/M/y",strtotime($row['dob']));
    $address =  ucfirst($row['address']);
    $authorization_events = $row['authorization_events'];
    $stradd = strlen($address);
    $liftoff = $row['liftoff'];
    $hoverpod = $row['hoverpod'];
    $spazor = $row['spazor'];
    $rocrun = $row['rocrun'];
    $senso = $row['senso'];
    $paper = $row['paper'];
    $cases = $row['cases'];
    $space = $row['space'];
    $design  = $row['design'];
    $events = $row['events'];
    $collegeid = $row['collegeId'];
  
  }


  class PDF extends FPDF
  {
  // Page header
  function Header()
  {
      
  }

  // Page footer
  function Footer()
  {
      // Position at 1.5 cm from bottom
      $this->SetY(-25);

      // Arial italic 8
      $this->SetFont('Arial','I',8);
      // Page number
      $this->SetTextColor(220,50,50);
      $this->Cell(20,10,"For any queries, contact Sanket, Ph: +91-7699097624 | Fb. Page : www.fb.com/nssc.iit | Website : www.nssc.in",0,0);
      $this->ln(5);
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
      $this->SetFont('Times','B',6);

  }
    function SetDash($black=false, $white=false)
      {
          if($black and $white)
              $s=sprintf('[%.3f %.3f] 0 d', $black*$this->k, $white*$this->k);
          else
              $s='[] 0 d';
          $this->_out($s);
      }
  }

  // Instanciation of inherited class
  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  // Logo
      $pdf->Image('../nssc.png',10,6,28);
      // Arial bold 15
      $pdf->SetFont('Arial','B',20);
      // Move to the right
      $pdf->Cell(80);
      // Title
      $pdf->Cell(45,10,"National Students' Space Challenge 2016" ,0,0,'C');
      $pdf->Ln(3);
      $pdf->SetFont('Arial','',12);
      $pdf->Cell(137,20,"2nd September - 4th September, 2016 ",0,0,'C');
      $pdf->Cell(40,20,"IIT Kharagpur",0,0,'C');
      
      $pdf->Ln(15);
      $pdf->SetFont('Times','B',14);
      $pdf->Cell(120,10,'');
     
      $pdf->Ln(10);
      $pdf->Cell(130,10,'');
      $pdf->Cell(0,14,'Participant Id :'.' '.$pi_admin,1,0);
      // Line break
      $pdf->Ln(5);

  $pdf->SetFont('Times','B',14);
  $pdf->Cell(60,0,'');
  $pdf->Cell(60,4,'PARTICIPATION FORM','B',0,'C');
  $pdf->Ln(10);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(24,10,'Name: ',0,0);
  $pdf->SetFont('Times','',12);
  $pdf->Cell(90,10,$name,0,0);
  $pdf->SetFont('Times','B',12);
  $pdf->Ln(5);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(24,10,'College:',0,0);
  if($strinsti<25){$pdf->SetFont('Times','',12);}
  else if($strinsti<50){$pdf->SetFont('Times','',10);}
  else{$pdf->SetFont('Times','',8);};
  $pdf->Cell(90,10,$institute,0,0);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(30,10,'Phone:',0,0);
  $pdf->SetFont('Times','',12);
  $pdf->Cell(0,10,$phone,0,0);
  $pdf->Ln(5);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(24,10,'Email:',0,0);
  $pdf->SetFont('Times','',12);
  $pdf->Cell(90,10,$email,0,0);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(30,10,'Date of Birth:',0,0);
  $pdf->SetFont('Times','',12);
  $pdf->Cell(25,10,$dob,0,0);
  $pdf->Ln(5);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(23,10,'College Id',0,0);
  $pdf->SetFont('Times','',12);
  $pdf->Cell(25,10,$collegeid,0,0);

  $pdf->Ln(5);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(24,10,'Address:',0,0);
  if($stradd<25){$pdf->SetFont('Times','',12);}
  else if($stradd<50){$pdf->SetFont('Times','',10);}
  else{$pdf->SetFont('Times','',8); $address = substr($address, 0, 95); $address.=".....";};
  $pdf->Cell(90,10,$address,0,0);

  $pdf->Ln(5);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(24,10,'Hall Allotted (to be filled by organisers) :_________________________________________',0,0);

  $pdf->Ln(5);
  $pdf->Ln(3);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(0,10,"Events participating in (*can be modified on the Registration Desk of NSSC '16) :",0,0);
  $pdf->Ln(5);
  $pdf->Ln(1);
  $pdf->Cell(25,10,'',0,0);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(25,10,'Events:',0,0);
  $pdf->Cell(25,10,'Team ID',0,0);
  $pdf->Cell(25,10,'Member 1',0,0);
  $pdf->Cell(25,10,'Member 2',0,0);
  $pdf->Cell(25,10,'Member 3',0,0);
  $pdf->Cell(25,10,'Member 4',0,0);
  $pdf->Cell(25,10,'Member 5',0,0);
  $pdf->Ln(5);
  $pdf->SetFont('Times','',12);
  #$incoming_requests = $incoming_requests[0];
  $authorization_events_array = explode(',', $authorization_events);
  $k = 0;
  
  while($k < count($authorization_events_array)){
    $request_id = $authorization_events_array[$k];
   
    if (!($request_id=="")){
  
      $request_data = mysqli_query($con,"SELECT * from request WHERE id = '$request_id'");
      
       $request_data = mysqli_fetch_array($request_data);
       $authorization = $request_data['authorization'];
       $authorization_array = explode(',',$authorization);
        $result_authorization = 1;
        for ($j=0;$j<count($authorization_array);$j = $j +1){
          $result_authorization = $result_authorization&$authorization_array[$j];
        }
        if ($result_authorization){
          $atleast = 1;
          $event = $request_data['event'];
          $sendeer_id = $request_data['sender'];
          $sendee1 = $request_data['sendee1'];
          $sendee2 = $request_data['sendee2'];
          $sendee3 = $request_data['sendee3'];
          $sendee4 = $request_data['sendee4'];
          $teamid = $request_data['teamid'];
          $pdf->Cell(25,10,'',0,0);
          $pdf->Cell(25,10,'event',0,0);
          $pdf->Cell(25,10,'teamid',0,0);
          $pdf->Cell(25,10,'sendeer_id',0,0);
          $pdf->Cell(25,10,'sendee1',0,0);
          $pdf->Cell(25,10,'sendee2',0,0);
          $pdf->Cell(25,10,'sendee3',0,0);
          $pdf->Cell(25,10,'sendee4',0,0);
          $pdf->Ln(5);

          // echo "<p class=\"roboto bold  \" style = \"font-size:15px; text-align:left;\">event: $event <br>Team: $teamid</p>";
          // echo "<p class=\"roboto bold  \" style = \"font-size:15px; text-align:left;\">Team Leader: $sendeer_id</p>";
          //   echo    "<p class=\"roboto bold  \" style=\"font-size:15px;text-align:left;\">Memebers RegId: $sendeer_id $sendee1 $sendee2 $sendee3 $sendee4</p>";
        }
      
    }
     $k = $k +1;
  }

  $result = mysqli_query($dbcon,"SELECT * FROM register WHERE email = '$pemail'");
  while($row = mysqli_fetch_array($result)) {
    $pi = $row['pi'];
    $liftoff = $row['liftoff'];
    $hoverpod = $row['hoverpod'];
    $spazor = $row['spazor'];
    $rocrun = $row['rocrun'];
    $senso = $row['senso'];
    $paper = $row['paper'];
    $cases = $row['cases'];
    $space = $row['space'];
    $design  = $row['design'];
    $payment = $row['payment'];
    $tshirt = $row['tshirt'];
 }

 /* ================= for liftoff =============== */
 $result = mysqli_query($dbcon,"SELECT * FROM lfevent WHERE teamid = '$liftoff'");
  while($row = mysqli_fetch_array($result)) {
     $teamid_lf = $row['teamid'];
     $pi1_lf = $row['pi1'];
     $pi2_lf = $row['pi2'];
     $pi3_lf = $row['pi3'];
     $pi4_lf = $row['pi4'];
  }

   if(!empty($liftoff)) {
          $pdf->Cell(25,10,'',0,0);
          $pdf->Cell(25,10,'Liftoff',0,0);
          $pdf->Cell(25,10,$teamid_lf,0,0);
          $pdf->Cell(25,10,$pi1_lf,0,0);
          $pdf->Cell(25,10,$pi2_lf,0,0);
          $pdf->Cell(25,10,$pi3_lf,0,0);
          $pdf->Cell(25,10,$pi4_lf,0,0);
          $pdf->Ln(5);
    }
 /* ============ for hoverpod ================ */
 $result = mysqli_query($con,"SELECT * FROM hpevent WHERE teamid = '$hoverpod'");
  while($row = mysqli_fetch_array($result)) {
     $teamid_hp= $row['teamid'];
     $pi1_hp = $row['pi1'];
     $pi2_hp = $row['pi2'];
     $pi3_hp = $row['pi3'];
     $pi4_hp = $row['pi4'];
     $pi5_hp = $row['pi5'];
  }         

    if(!empty($hoverpod)) {
          $pdf->Cell(25,10,'',0,0);
          $pdf->Cell(25,10,'Hoverpod',0,0);
          $pdf->Cell(25,10,$teamid_hp,0,0);
          $pdf->Cell(25,10,$pi1_hp,0,0);
          $pdf->Cell(25,10,$pi2_hp,0,0);
          $pdf->Cell(25,10,$pi3_hp,0,0);
          $pdf->Cell(25,10,$pi4_hp,0,0);
          $pdf->Cell(25,10,$pi5_hp,0,0);
          $pdf->Ln(5);
      }
/* ============ for Spazor ================ */
   $result = mysqli_query($con,"SELECT * FROM spevent WHERE teamid = '$spazor'");
  while($row = mysqli_fetch_array($result)) {
     $teamid_sp= $row['teamid'];
     $pi1_sp = $row['pi1'];
     $pi2_sp = $row['pi2'];
     $pi3_sp = $row['pi3'];
     $pi4_sp = $row['pi4'];
     $pi5_sp = $row['pi5'];
  }    
     if(!empty($spazor)) {     
          $pdf->Cell(25,10,'',0,0);
          $pdf->Cell(25,10,'Spazor',0,0);
          $pdf->Cell(25,10,$teamid_sp,0,0);
          $pdf->Cell(25,10,$pi1_sp,0,0);
          $pdf->Cell(25,10,$pi2_sp,0,0);
          $pdf->Cell(25,10,$pi3_sp,0,0);
          $pdf->Cell(25,10,$pi4_sp,0,0);
          $pdf->Cell(25,10,$pi5_sp,0,0);
          $pdf->Ln(5);
        }

/* ============ for rocrun ================ */
   $result = mysqli_query($con,"SELECT * FROM rcevent WHERE teamid = '$rocrun'");
  while($row = mysqli_fetch_array($result)) {
     $teamid_rc = $row['teamid'];
     $pi1_rc = $row['pi1'];
     $pi2_rc = $row['pi2'];
     $pi3_rc = $row['pi3'];
     $pi4_rc = $row['pi4'];
     $pi5_rc = $row['pi5'];
  }      

    if(!empty($rocrun)) {   
          $pdf->Cell(25,10,'',0,0);
          $pdf->Cell(25,10,'Rocrun',0,0);
          $pdf->Cell(25,10,$teamid_rc,0,0);
          $pdf->Cell(25,10,$pi1_rc,0,0);
          $pdf->Cell(25,10,$pi2_rc,0,0);
          $pdf->Cell(25,10,$pi3_rc,0,0);
          $pdf->Cell(25,10,$pi4_rc,0,0);
          $pdf->Cell(25,10,$pi5_rc,0,0);
          $pdf->Ln(5);
      }
/* ============ for Sensorous ================ */
   $result = mysqli_query($con,"SELECT * FROM ssevent WHERE teamid = '$senso'");
  while($row = mysqli_fetch_array($result)) {
     $teamid_ss = $row['teamid'];
     $pi1_ss = $row['pi1'];
     $pi2_ss = $row['pi2'];
     $pi3_ss = $row['pi3'];
     $pi4_ss = $row['pi4'];
  }  

     if(!empty($senso)) {       
          $pdf->Cell(25,10,'',0,0);
          $pdf->Cell(25,10,'Sensorous',0,0);
          $pdf->Cell(25,10,$teamid_ss,0,0);
          $pdf->Cell(25,10,$pi1_ss,0,0);
          $pdf->Cell(25,10,$pi2_ss,0,0);
          $pdf->Cell(25,10,$pi3_ss,0,0);
          $pdf->Cell(25,10,$pi4_ss,0,0);
          $pdf->Ln(5);
      }
/* ============ for Paper presentation ================ */
   $result = mysqli_query($con,"SELECT * FROM ppevent WHERE teamid = '$paper'");
  while($row = mysqli_fetch_array($result)) {
     $teamid_pp = $row['teamid'];
     $pi1_pp = $row['pi1'];
     $pi2_pp = $row['pi2'];
     $pi3_pp = $row['pi3'];
     $pi4_pp = $row['pi4'];
     $pi5_pp = $row['pi5'];
  }    

     if(!empty($paper)) {     
          $pdf->Cell(25,10,'',0,0);
          $pdf->Cell(25,10,'Paper Prese.',0,0);
          $pdf->Cell(25,10,$teamid_pp,0,0);
          $pdf->Cell(25,10,$pi1_pp,0,0);
          $pdf->Cell(25,10,$pi2_pp,0,0);
          $pdf->Cell(25,10,$pi3_pp,0,0);
          $pdf->Cell(25,10,$pi4_pp,0,0);
          $pdf->Cell(25,10,$pi5_pp,0,0);
          $pdf->Ln(5);
      }
/* ============ for Paper presentation ================ */
   $result = mysqli_query($con,"SELECT * FROM csevent WHERE teamid = '$cases'");
  while($row = mysqli_fetch_array($result)) {
     $teamid_cs = $row['teamid'];
     $pi1_cs = $row['pi1'];
     $pi2_cs = $row['pi2'];
     $pi3_cs = $row['pi3'];
     $pi4_cs = $row['pi4'];
  }    

   if(!empty($cases)) {     
          $pdf->Cell(25,10,'',0,0);
          $pdf->Cell(25,10,'Case Study',0,0);
          $pdf->Cell(25,10,$teamid_cs,0,0);
          $pdf->Cell(25,10,$pi1_cs,0,0);
          $pdf->Cell(25,10,$pi2_cs,0,0);
          $pdf->Cell(25,10,$pi3_cs,0,0);
          $pdf->Cell(25,10,$pi4_cs,0,0);
          $pdf->Ln(5);
      }

/* ============ for Paper presentation ================ */
   $result = mysqli_query($con,"SELECT * FROM sdevent WHERE teamid = '$space'");
  while($row = mysqli_fetch_array($result)) {
     $teamid_sd = $row['teamid'];
     $pi1_sd = $row['pi1'];
     $pi2_sd = $row['pi2'];
     $pi3_sd = $row['pi3'];
     $pi4_sd = $row['pi4'];
  }    

    if(!empty($space)) {    
           $pdf->Cell(25,10,'',0,0);
          $pdf->Cell(25,10,'Space Deb',0,0);
          $pdf->Cell(25,10,$teamid_sd,0,0);
          $pdf->Cell(25,10,$pi1_sd,0,0);
          $pdf->Cell(25,10,$pi2_sd,0,0);
          $pdf->Cell(25,10,$pi3_sd,0,0);
          $pdf->Cell(25,10,$pi4_sd,0,0);
          $pdf->Ln(5);
      }
/* ============ for Paper presentation ================ */
   $result = mysqli_query($con,"SELECT * FROM deevent WHERE teamid = '$design'");
  while($row = mysqli_fetch_array($result)) {
     $teamid_de = $row['teamid'];
     $pi1_de = $row['pi1'];
     $pi2_de = $row['pi2'];
     $pi3_de = $row['pi3'];
     $pi4_de = $row['pi4'];
  }    

    if(!empty($design)) {     
          $pdf->Cell(25,10,'',0,0);
          $pdf->Cell(25,10,'Designeer',0,0);
          $pdf->Cell(25,10,$teamid_de,0,0);
          $pdf->Cell(25,10,$pi1_de,0,0);
          $pdf->Cell(25,10,$pi2_de,0,0);
          $pdf->Cell(25,10,$pi3_de,0,0);
          $pdf->Cell(25,10,$pi4_de,0,0);
          $pdf->Ln(5);
     }


  $pdf->SetFont('Times','B',12);
  $pdf->Ln(5);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(0,10,"Terms and Agreement:",0,0);
  $pdf->Ln(5);
  $pdf->SetFont('Times','',12);
  $pdf->Cell(0,10,"I declare that the information provided is correct to the best of my knowledge. Any information if found ",0,0);
  $pdf->Ln(5);
  $pdf->Cell(0,10,"incorrect, will lead to my disqualification from NSSC '16. I shall abide by the official rules of NSSC '16",0,0);
  $pdf->Ln(5);
  $pdf->Cell(0,10,"provided at http://www.nssc.in",0,0);
  $pdf->Ln(10);
  $pdf->SetFont('Times','B',12);
  if($payment == 'no') {
    $pdf->Cell(90,10,"Paid Registration fee INR: _______________",0,0);
  }
  else {
    $pdf->Cell(120,10,"Paid Registration fee INR: 800, Transacation Id: $payment",0,0);
  }
  //$pdf->Cell(90,10,"Paid INR: _______________$payment",0,0);
  $pdf->Ln(8);
  $pdf->SetFont('Times','B',12);
  if($tshirt == 'no') {
    $pdf->Cell(90,10,"Paid for Tshirt INR: _______________",0,0);
  }
  else {
    $pdf->Cell(90,10,"Paid for Tshirt INR: 350",0,0);
  }
  $pdf->Cell(20,10,"Signature of Participant: ____________________",0,0);
  $pdf->Ln(8);
  $y = $pdf->Gety();
  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(1, 0.5); //5mm on, 5mm off
  $pdf->Line(0, $y+5, 240, $y+5);
  $pdf->Ln(2);
  $pdf->SetFont('Times','',8);
  $pdf->Cell(80,10,'Tear from here',0,0);
  $pdf->Cell(80,10,'Tear from here',0,0);
  $pdf->Cell(80,10,'Tear from here',0,0);
  $pdf->Ln(8);
  $y = $pdf->Gety();
  $pdf->SetFont('Times','B',14);
  $pdf->Image('img/logo1.png',10,$y,20);
  $pdf->Cell(40,10,'');
  $pdf->Cell(0,10,"National Students' Space Challenge '16, IIT Kharagpur",0,0);
  $pdf->Ln(5);
  $pdf->SetFont('Times','',10);
  $pdf->Cell(40,10,'');
  $pdf->Cell(0,10,"2nd September - 4th September 2016",0,0);
  $pdf->Ln(8);
  $pdf->SetFont('Times','B',14);
  $pdf->SetLineWidth(0.1);
  $pdf->SetDash(1,0);

  $pdf->Cell(70,0,'',0,0);
  $pdf->Cell(40,4,"Payment Receipt",'B',0,'C'); 
  $pdf->Ln(8);
  $pdf->Cell(120,10,'');
  $pdf->Ln(8);
  $pdf->Cell(120,10,"Date:__________");
  $pdf->Cell(70,10,"Participant Id:".' '.$pi_admin,1,0);
  $pdf->ln(8);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(20,10,"Name:",0,0);
  $pdf->SetFont('Times','',12);
  $pdf->Cell(10,10,$name,0,0);
  $pdf->Ln(5);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(20,10,"College:",0,0);
  if($strinsti<25){$pdf->SetFont('Times','',12);}
  else if($strinsti<50){$pdf->SetFont('Times','',10);}
  else{$pdf->SetFont('Times','',8);};
  $pdf->Cell(100,10,$institute,0,0);
  $pdf->SetFont('Times','B',12);
  $pdf->Ln(5);
  $pdf->Cell(25,10,'College Id',0,0);
  $pdf->SetFont('Times','',12);
  $pdf->Cell(0,10,$collegeid,0,0);
  $pdf->Ln(5);
  $pdf->SetFont('Times','B',12);
  if($payment == 'no') {
    $pdf->Cell(20,10,"Amount Paid (in words):____________________________________________________________________",0,0);
  }
  else {
    $pdf->Cell(20,10,"Amount Paid (in words): Eight Hundred rupees",0,0);
  }
  $pdf->Ln(5);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(20,10,"Accomodation Provided at (to be filled by organisers):___________________________________________",0,0);
  $pdf->Ln(10);
  $pdf->Cell(100,10,"Signature of the Participant: __________________",0,0);
  $pdf->Cell(20,10,"Signature of the Organiser: __________________",0,0);
  $pdf->Ln(5);


/* ==================== adding 2nd Refund receipt page ====================== */

  // $pdf->AddPage();
  // $pdf->Ln(10);
  // $pdf->SetFont('Times','B',14);
  // $pdf->Cell(70,10,"",0,0);
  // $pdf->Cell(35,4,"Refund Receipt",'B',0,'C');
  // $pdf->Ln(10);
  // $pdf->Cell(120,10,'');
  // $pdf->Ln(10);
  // $pdf->Cell(120,10,"",0,0);
  // $pdf->Cell(68,10,"Participant Id:".$participantid,1,0,'C');
  // $pdf->Ln(10);
  // $pdf->SetFont('Times','B',12);
  // $pdf->Cell(20,10,"Name:",0,0);
  // $pdf->SetFont('Times','',12);
  // $pdf->Cell(90,10,$name,0,0);
  // $pdf->SetFont('Times','B',12);
  // $pdf->Cell(20,10,"Phone:",0,0);
  // $pdf->SetFont('Times','',12);
  // $pdf->Cell(20,10,$phone,0,0);
  // $pdf->SetFont('Times','B',12);
  // $pdf->Ln(5);
  // $pdf->Cell(110,10,"Mattress:________________________",0,0);
  // $pdf->SetFont('Times','B',12);
  // $pdf->Cell(20,10,"Email:",0,0);
  // $pdf->SetFont('Times','',12);
  // $pdf->Cell(20,10,$email,0,0);
  // $pdf->Ln(5);
  // $pdf->SetFont('Times','B',12);
  // $pdf->Cell(25,10,'College Id',0,0);
  // $pdf->SetFont('Times','',12);
  // $pdf->Cell(0,10,$collegeid,0,0);
  // $pdf->Ln(5);
  // $pdf->SetFont('Times','B',12);
  // $pdf->Cell(110,10,"Date of Arrival:    _____________________",0,0);
  // $pdf->Ln(5);
  // $pdf->SetFont('Times','B',12);
  // $pdf->Cell(110,10,"Name of Person allotting items:    ____________________________________________________________",0,0);
  // $pdf->Ln(5);
  // $pdf->SetFont('Times','B',12);
  // $pdf->Cell(110,10,"Return Status:     __________________________________________________________________________",0,0);
  // $pdf->Ln(20);
  // $pdf->SetFont('Times','B',12);
  // $pdf->Cell(110,10,"Signature of Participant: _____________________",0,0);
  // $pdf->Cell(110,10,"Registration Desk: _____________________",0,0);
  // $pdf->Ln(20);
  // $pdf->SetFont('Times','B',12);
  // $pdf->Cell(110,10,"Signature from Hall:        _____________________",0,0);
  // $pdf->Cell(110,10,"Return Seal:           _____________________",0,0);
  // $pdf->Ln(15);
  // $pdf->Cell(22,0,"Disclaimer:",0,0);
  // $pdf->SetFont('Times','',12);
  // $pdf->Ln(5);
  // $pdf->Cell(0,0,"1. The organising team of NSSC '16 will not be responsible for your personal belongings. Your belongings are",0,0);
  // $pdf->Ln(5);
  // $pdf->Cell(5,0,"",0,0);
  // $pdf->Cell(0,0," to be kept at your own risk",0,0);
  // $pdf->Ln(5);
  // $pdf->Cell(0,0,"2. If any article/item belonging to NSSC is found missing /damaged , your cautionary deposit will be retained.",0,0);
  // $pdf->Ln(8);
  // $pdf->Cell(0,0,"3. The refund receipt is for the caution money which will be given at the registration desk at NSSC '16 ",0,0);
  // $pdf->Ln(8);
  // $pdf->SetFont('Times','',8);
  // $pdf->Cell(80,10,'Tear from here',0,0);
  // $pdf->Cell(80,10,'Tear from here',0,0);
  // $pdf->Cell(80,10,'Tear from here',0,0);
  // $pdf->Ln(2);
  // $y = $pdf->Gety();
  // $pdf->SetLineWidth(0.1);
  // $pdf->SetDash(1, 0.5); //5mm on, 5mm off
  // $pdf->Line(0, $y+5, 240, $y+5);

  // $pdf->Ln(5);
  // $pdf->SetDash(1, 0);
  // $pdf->Cell(190, 55 , "", 1,0);
  // $y = $pdf->GetY();
  // $pdf->Line(105, $y, 105 ,  $y+55);
  // $pdf->Ln(2);
  // $pdf->SetFont('Times','B',10);
  // $pdf->Cell(5,10,"",0,0);
  // $pdf->Cell(15,10,"Name:",0,0);
  // $pdf->SetFont('Times','',10);
  // $pdf->Cell(20,10,$name,0,0);
  // $pdf->Ln(5);
  // $pdf->SetFont('Times','B',10);
  // $pdf->Cell(5,10,"",0,0);
  // $pdf->Cell(15,10,"Phone:",0,0);
  // $pdf->SetFont('Times','',10);
  // $pdf->Cell(20,10,$phone,0,0);
  // $pdf->Ln(5);
  // $pdf->SetFont('Times','B',10);
  // $pdf->Cell(5,10,"",0,0);
  // $pdf->Cell(15,10,"Email:",0,0);
  // $pdf->SetFont('Times','',10);
  // $pdf->Cell(20,10,$email,0,0);
  // $pdf->Ln(5);
  // $pdf->Cell(5,10,"",0,0);

  // $pdf->SetFont('Times','B',10);

  // $pdf->Cell(20,10,'College Id',0,0);
  // $pdf->SetFont('Times','',12);
  // $pdf->Cell(20,10,$collegeid,0,0);
  // $pdf->Ln(5);
  // $pdf->SetFont('Times','B',10);
  // $pdf->Cell(5,10,"",0,0);
  // $pdf->Cell(15,10,"College:",0,0);
  // if($strinsti<25){$pdf->SetFont('Times','',10);}
  // else if($strinsti<50){$pdf->SetFont('Times','',8);}
  // else{$pdf->SetFont('Times','',6);};
  // $pdf->Cell(20,10,$institute,0,0);
  // $pdf->Ln(5);
  // $pdf->SetFont('Times','B',10);
  // $pdf->Cell(5,10,"",0,0);
  // $pdf->Cell(25,10,"Hall Allotted:",0,0);
  // $pdf->SetFont('Times','B',10);
  // $pdf->Cell(20,10,"___________________________",0,0);
  // $pdf->Ln(10);
  // $pdf->SetFont('Times','B',14);
  // $pdf->Cell(5,10,"",0,0);
  // $pdf->Cell(80,10,"Participant Id:".$participantid,1,0);
  // $pdf->Cell(13,10,"",0,0);
  // $pdf->Cell(86,10,"National Students' Space Challenge 2016",0,0,'C');
  // $pdf->Ln(5);
  // $pdf->SetFont('Times','B',10);
  // $pdf->Cell(5,10,"",0,0);
  // $pdf->Cell(80,10,"",0,0);
  // $pdf->Cell(13,10,"",0,0);
  // $pdf->Cell(86,10,"Indian Institute of Technology, Kharagpur",0,0,'C');
  // $pdf->Ln(2);
  // $x = $pdf->GetX();
  // $y = $pdf->GetY();
  // $pdf->Image('img/logo1.png',$x + 127,$y - 35,28);

  // $y = $pdf->Gety();
  // $pdf->SetLineWidth(0.1);
  // $pdf->SetDash(1, 0.5); //5mm on, 5mm off
  // $pdf->Line(0, $y+12, 240, $y+12);
  // $pdf->Ln(10);
  // $pdf->SetFont('Times','',8);
  // $pdf->Cell(80,10,'Tear from here',0,0);
  // $pdf->Cell(80,10,'Tear from here',0,0);
  // $pdf->Cell(80,10,'Tear from here',0,0);
  // $pdf->Ln(2);

  // $pdf->Ln(5);



  $pdf->Output();

  ?>


      