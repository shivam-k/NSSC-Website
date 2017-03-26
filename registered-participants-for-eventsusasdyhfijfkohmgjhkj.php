<?php
  include("db_conection.php");
?>
<!DOCTYPE html>
<head>
      <title>Total Registered Participants</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-color: #555;
    text-align: center;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
th {
    background-color: #555;
    color: white;
border: 1px solid #FFF;
}
</style>
</head>


<body>


<div class="well" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;"> 
   <h2 class="text-center"><kbd style="background-color: #FF4A56;">Registered Participants</kbd></h2>
    <blockquote class="col-sm-offset-2"><code>With Great Power Comes Great Responsibility..! Use your Admin Powers Carefully !!</code> </blockquote>
</div>

<div id="body">
<table>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>CollegeId</th>
    <th>DOB</th>
    <th>Deparment</th>
    <th>College</th>
    <th>YOG</th>
    <th>Address</th>
    <th>Contact</th>
    <th>pi</th>
    <th>Liftoff</th>
    <th>Hoverpod</th>
    <th>Spazor</th>
    <th>Rocrun</th>
    <th>Sensorous</th>
    <th>Paper Presen..</th>
    <th>Case Study</th>
    <th>Space Deb</th>
    <th>Designeer</th>
    <th>Payment</th>
    <th>Tshirt</th>
    <th>Created</th>
</tr>


<?php
$x = "";
$y = "";
$getpname = "SELECT * FROM register";
$run_query = mysqli_query($dbcon, $getpname);
if(mysqli_num_rows($run_query) > 0) {

    while($row = mysqli_fetch_assoc($run_query)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $collegeId = $row['collegeId'];
        $dob= $row['dob'];
        $department = $row['department'];
        $college = $row['college'];
        $yog = $row['yog'];
        $address = $row['address'];
        $contact = $row['contact'];
        $pi = $row['pi'];
        $liftoff = $row['liftoff'];
        $hoverpod = $row['hoverpod'];
        $spazor = $row['spazor'];
        $rocrun = $row['rocrun'];
        $senso = $row['senso'];
        $paper = $row['paper'];
        $cases = $row['cases'];
        $space = $row['space'];
        $design = $row['design'];
        $payment = $row['payment'];
        $tshirt = $row['tshirt'];
        $created = $row['created'];
if($payment != 'no') {
  $x++;
}
if($tshirt != 'no') {
  $y++;
}
     ?>

       <tr> 
          <td><?php echo $id ?></td>
          <td><?php echo $name ?></td>
          <td><?php echo $email ?></td>
          <td><?php echo $collegeId ?></td>
          <td><?php echo $dob ?></td>
          <td><?php echo $department ?></td>
          <td><?php echo $college ?></td>
          <td><?php echo $yog ?></td>
          <td><?php echo $address ?></td>
          <td><?php echo $contact ?></td>
          <td><?php echo $pi ; ?></td>
          <td><?php echo $liftoff ; ?></td>
          <td><?php echo $hoverpod ; ?></td>
          <td><?php echo $spazor ; ?></td>
          <td><?php echo $rocrun ; ?></td>
          <td><?php echo $senso ; ?></td>
          <td><?php echo $paper ; ?></td>
          <td><?php echo $cases ; ?></td> 
          <td><?php echo $space ; ?></td>
          <td><?php echo $design ; ?></td>
          <td><?php echo $payment ; ?></td>
          <td><?php echo $tshirt ; ?></td>
          <td><?php echo $created ; ?></td>          

       </tr>
      
      
      <?php
    }
}

?>


</table>
<?php
 echo "Total successfully made payment = $x <br />";
 echo "Total tshirt = $y";
?>
<?php
$hola = $_GET['payment'];
if(empty($hola)) {?>
<script> window.location.assign("http://nssc.in/registered-participants-for-eventsusasdyhfijfkohmgjhkj.php?payment=<?php echo $x; ?>andtshirt=<?php echo $y; ?>");</script>
<?php
}
?>

</div>
</body>
</html>