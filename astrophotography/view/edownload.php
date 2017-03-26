	  <?php
	    include_once 'dbconfig.php';

	    if (isset($_GET['id'])) 
	           {
				     $id = $_GET['id'];
				     $query = "SELECT * " .
				             "FROM astro WHERE id = '$id'";
				     $result = mysqli_query($connection,$query) or die('Error, query failed');
				    // list($id, $ename, $etype, $esize,$eimg) = mysqli_fetch_array($result);

                                   list($id, $name, $email, $contact, $college, $yog, $address, $title, $date_of_click, $place_of_click, $camera_of_click, $focal, $fstop, $iso,$speed,$mount,$lens,$description, $etype, $eimg, $esize, $ename, $otype, $oimg, $osize, $oname,$created) = mysqli_fetch_array($result);
				 				   //echo $id . $file . $type . $size;
				 				   //echo 'sampath';
				    // header("Content-length: $esize");
				     header("Content-type: $etype");
				     header("Content-Disposition: attachment; filename=$ename");
				     ob_clean();
				     flush();
				     echo $eimg;
				     mysqli_close($connection);
				     exit;
	           }

	       ?>
