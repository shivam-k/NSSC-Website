<?php
  include("db_conection.php");
?> 
<!DOCTYPE html>
<html>
<head>
		  <title>Registration with PDF Generation</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>

<?php
$error = "";
$success = "";

if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pi = $_POST['pi'];
  $transId = $_POST['transId'];
  $confirm_transId = $_POST['confirm_transId'];
  $tshirt = $_POST['tshirt'];
  if(!empty($pi) && !empty($email) && !empty($transId) && !empty($confirm_transId) && !empty($tshirt)) {
    if($transId == $confirm_transId ) {
       $sql = "SELECT * FROM register WHERE email = '$email' AND pi = '$pi'";
       $run_query = mysqli_query($dbcon, $sql);
       if(mysqli_num_rows($run_query) > 0) {   
         while($row = mysqli_fetch_assoc($run_query)) {
            $payment = $row['payment'];
         }
         if($payment == 'no') {
            $sql = "UPDATE register SET payment = '$transId', tshirt = '$tshirt' WHERE email = '$email' AND pi = '$pi'";
            if(mysqli_query($dbcon, $sql)) {
               $success = "Successfully Paid..Go for next ";
               $email =  "";
               $pi =  "";
               $transId =  "";
              $confirm_transId = "";
              $tshirt = "";
            }
         }
         else {
            $error = "Already Paid..";
                $email =  "";
               $pi =  "";
               $transId =  "";
              $confirm_transId = "";
              $tshirt = ""; 
         }
       }
       else {
          $error = "Combination of Email Id and Participant Id is wrong.";
       }
     }
     else {
       $error = "Transaction Ids did not match.";
     }
  }
}

?>


  <?php
  if(empty($error)) {
    echo '<style type="text/css">
           #error {
                display: none;
           }
           </style>';
    }

    if(empty($success)) {
    echo '<style type="text/css">
           #success {
                display: none;
           }
           </style>';
    }
   ?>



<div class="container col-sm-8 col-sm-offset-2">
  <div class="form-group well col-sm-offset-2 col-sm-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
       <!-- alert for danger =========== -->
       <div class="alert alert-danger" id="error">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p class="text-center"><strong><?php echo $error; ?></strong></p>
       </div>
       <!-- alert for success ============== -->
       <div class="alert alert-success" id="success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p class="text-center"><strong><?php echo $success; ?></strong></p>
       </div>
      <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="well form-group  col-sm-12" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
           <label for="usr">Email Id :</label>
           <input type="email" class="form-control input-lg" id="usr" placeholder="Enter Email Id" name="email" value="<?php echo $email; ?>"  required/>
      </div>
      <div class="well form-group  col-sm-12" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
           <label for="usr">Participant Id :</label>
           <input type="text" class="form-control input-lg" id="usr" placeholder="Enter Participant Id" name="pi" value="<?php echo $pi; ?>"  required/>
      </div>
      <div class="well form-group  col-sm-12" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
           <label for="usr">Transaction Id :</label>
           <input type="text" class="form-control input-lg" id="usr" placeholder="Enter Transaction Id" name="transId" value="<?php echo $transId; ?>"  required/>
      </div>
     <div class="well form-group  col-sm-12" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
           <label for="usr">Confirm Transaction Id :</label>
           <input type="text" class="form-control input-lg" id="usr" placeholder="Confirm Transaction Id" name="confirm_transId" value="<?php echo $confirm_transId; ?>"  required/>
      </div>
      <div class="well form-group  col-sm-12" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">
           <label for="usr">Tshirt :</label>
           <input type="text" class="form-control input-lg" id="usr" placeholder="write only yes or no" name="tshirt" value="<?php echo $tshirt; ?>"  required/>
      </div>
        <button type="submit" class="btn btn-primary btn-lg col-sm-offset-2 col-sm-8" name="submit">Submit</button>
      </form> </div>
  </div>
</div>



</body>

</html>		