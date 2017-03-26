<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<head>
<title>Uploaded files</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>


<body>
<div id="header">
<label>Uploaded files</label>
</div>
<div id="body">

<!--
<a href="logon-home.php"><img src="img/home.png" width="60px" height="60px" alt="home.png" align="left"/></a>
<a href="index.php"><img src="img/back.png" width="60px" height="60px" alt="home.png" align="left"/></a>
-->

	<table border="1">
    <tr>
    <th colspan="27">
            <tt style="font-family:Trebuchet MS;color:black; font-size:20px;">
                     <h2>Astro Data</h2>
            </tt>
     </th>
    
    
    
    </tr>
    <tr bgcolor="#005CE6" style="font-family:Trebuchet MS;color: white; font-size:20px;">
    <td>id</td>
    <td>File name</td>
    <td>Email</td>
    <td>Contacts</td>
    <td>College</td>
    <td>YOG</td>
    <td>Address</td>
    <td>title</td>
    <td>DOC</td>
    <td>POC</td>
    <td>COC</td>
    <td>focal</td>
    <td>fstop</td>
    <td>iso</td>
    <td>speed</td>
    <td>mount</td>
    <td>lens</td>
    <td>description</td>
    <td>etype</td>
    <td>eimg</td>
    <td>esize</td>
    <td>ename</td>
    <td>otype</td>
    <td>oimg</td>
    <td>osize</td>
    <td>oname</td>
    <td>created</td>
   <!-- <td>File Type</td>
    <td>File size<sub style="font-size:10px">(In KB)</sub></td> 
    <td>Download Link</td> -->
    </tr>
    
    
    <?php
	$sql="SELECT * FROM astro";
	$result_set=mysqli_query($connection,$sql);
	if (mysqli_num_rows($result_set) == 0) {
            echo "Database is empty <br>";
        } 


        else {
            while (list($id, $name, $email, $contact, $college, $yog, $address, $title, $date_of_click, $place_of_click, $camera_of_click, $focal, $fstop, $iso,$speed,$mount,$lens,$description, $etype, $eimg, $esize, $ename, $otype, $oimg, $osize, $oname,$created) = mysqli_fetch_array($result_set)) {
                ?>
                <tr bgcolor="#D6E5FB" style="word-wrap: break-word; font-family:Trebuchet MS;color: #FF6600; font-size:15px;">
                <td><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $contact; ?></td>
                <td><?php echo $college; ?></td>
                <td><?php echo $yog; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $title; ?></td>
                <td><?php echo $date_of_click; ?></td>
                <td><?php echo $place_of_click; ?></td>
                <td><?php echo $camera_of_click; ?></td>
                <td><?php echo $focal; ?></td>
                <td><?php echo $fstop; ?></td>
                <td><?php echo $iso; ?></td>
                <td><?php echo $speed; ?></td>
                <td><?php echo $mount; ?></td>
                <td><?php echo $lens; ?></td>
                <td><?php echo $description; ?></td>
                <td><?php echo $etype; ?></td>
                <td>
                   <a href="edownload.php?id=<?php echo urlencode($id); ?>"><?php urlencode($ename);?>Download</a>
                </td> 
                <td><?php echo $esize; ?></td>
                <td><?php echo $ename; ?></td>
                <td><?php echo $otype; ?></td>
                <td>
                   <a href="odownload.php?id=<?php echo urlencode($id); ?>"><?php urlencode($oname);?>Download</a>
                </td>  
                <td><?php echo $osize; ?></td>
                <td><?php echo $oname; ?></td>
                <td><?php echo $created; ?></td>
              
              
        <!--      <td>
                <?php 
                
                $ext = pathinfo($ename, PATHINFO_EXTENSION);
                if($ext=="doc"||$ext=="docx")
				{
					echo '<img src="img\word.png" alt="word.png" width="40px" height="40px"/>';
				
					
				}

				else if($ext=="pdf"||$ext=="PDF")
				{
					echo '<img src="img\pdf.png" alt="word.png" width="40px" height="40px"/>';
				}

				else if($ext=="xls"||$ext=="xlsx"||$ext=="XLSX"||$ext=="XLS")
				{
					echo '<img src="img\excel.png" alt="word.png" width="40px" height="40px"/>';

				}
				


			else if($ext=="jpeg"||$ext=="jpg"||$ext=="png"||$ext=="JPEG"||$ext=="JPG"||$ext=="PNG"||$ext=='gif'||$ext=='GIF')
			{
		       		echo '<img src="img/photo.png" alt="word.png" width="40px" height="40px"/>';
	       	}
            
            else{
            	echo '<img src="img\misc.png" alt="word.png" width="40px" height="40px"/>';

            }    

                ?></td>
                <td><?php echo $size; ?></td> -->
                
                <!-- ==================== download img ======================
                
                <td><a href="download.php?id=<?php echo urlencode($id); ?>"
                   ><?php urlencode($name);?>Download</a></td>  -->
                </tr>
                <?php
            }
        }

	/*while($row=mysqli_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['id'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}*/
	?>
    </table>
    
</div>
</body>
</html>
