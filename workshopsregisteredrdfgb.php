<?php
include("db_conection.php");
?>
<!DOCTYPE html>
<head>
<title>Details of Registered Participants</title>
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
<div id="header">
<h1 style="text-align: center; color: #FF4A56">Never Abuse Your Power <sub style="color: #555; font-size: 15px">-Shivam Kumar</sub></h1>
</div>
<div id="body">

<table>

<tr>
    <th>Id</th>
    <th>pi</th>
    <th>AEROTRIX</th>
    <th>HAWKEYE TECHWORKS</th>
    <th>ASTROPROJECT</th>
    <th>AGRAGAMI APPLIED AERONAUTICS </th>
</tr>


<?php

$getpname = "SELECT * FROM workshops";
$run_query = mysqli_query($dbcon, $getpname);
if(mysqli_num_rows($run_query) > 0) {

    while($row = mysqli_fetch_assoc($run_query)) {
        $id = $row['id'];
        $pi = $row['pi'];
        $aero = $row['aero'];
        $hawk = $row['hawk'];
        $astro = $row['astro'];
        $agra = $row['agra'];
     ?>

       <tr> 
          <td><?php echo $id ?></td>
          <td><?php echo $pi ?></td>
          <td><?php echo $aero ?></td>
          <td><?php echo $hawk ?></td>
          <td><?php echo $astro ?></td>
          <td><?php echo $agra ?></td>
       </tr>
      
      
      <?php
    }
}

?>


</table>
    
</div>
</body>
</html>
