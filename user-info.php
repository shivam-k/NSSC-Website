<?php  
include("db_conection.php");
session_start();//session starts here  
if($_SESSION['pemail']) {
        $pemail = $_SESSION['pemail'];  
        $getpname = "SELECT * FROM register WHERE email = '$pemail'";
         $run_query = mysqli_query($dbcon, $getpname);
         if(mysqli_num_rows($run_query) > 0) {
              while($row = mysqli_fetch_assoc($run_query)) {
                  $pname = $row['name'];
                  $liftoff_admin = $row['liftoff'];
                  $pi_admin = $row['pi'];
                  $hoverpod_admin = $row['hoverpod'];
                  $spazor_admin = $row['spazor'];
                  $rocrun_admin = $row['rocrun'];
                  $senso_admin= $row['senso'];
                  $paper_admin= $row['paper'];
                  $cases_admin= $row['cases'];
                  $space_admin= $row['space'];
                  $design_admin= $row['design'];
              }
         }
         else {
            echo "<script>alert('Not worked name');</script>";
         }
  }
  else {
    header ("Location: ../");
  }
?> 