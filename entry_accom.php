<?php
  include("db_conection.php");
?>
<!DOCTYPE html>
<head>
		  <title>Accommodations Entry</title>
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
   <h2 class="text-center"><kbd style="background-color: #FF4A56;">Accommodations Entry</kbd></h2>
    <blockquote class="col-sm-offset-2"><code>With Great Power Comes Great Responsibility..! Use your Admin Powers Carefully !!</code> </blockquote>
</div>

<div id="body">
<table>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>College</th>
    <th>Contact</th>
    <th>PI</th>
    <th>Atime</th>
    <th>Dtime</th>
    <th>Message</th>
</tr>


<?php

$getpname = "SELECT * FROM accom";
$run_query = mysqli_query($dbcon, $getpname);
if(mysqli_num_rows($run_query) > 0) {

    while($row = mysqli_fetch_assoc($run_query)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $college = $row['college'];
        $contact = $row['contact'];
        $pi = $row['pi'];
        $Atime = $row['Atime'];
        $Dtime = $row['Dtime'];
        $msg = $row['msg'];
     ?>

       <tr> 
          <td><?php echo $id ?></td>
          <td><?php echo $name ?></td>
          <td><?php echo $email ?></td>
          <td><?php echo $college ?></td>
          <td><?php echo $contact ?></td>
          <td><?php echo $pi ; ?></td>
          <td><?php echo $Atime ; ?></td>
          <td><?php echo $Dtime ; ?></td>
          <td><?php echo $msg ; ?></td>          

       </tr>
      
      
      <?php
    }
}

?>


</table>
    
</div>
</body>
</html>
