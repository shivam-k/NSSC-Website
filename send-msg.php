<?php
include("db_conection.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Shivam's mail service to Participants</title>
<style>
pre {
 color: red;
font-size: 25px;
}
h2 {
   font-family: 'Marck Script',cursive;
    font-size: 22px;
    display: table;
    margin: 0 auto;
}
input[type=password], input[type=text] {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: block;
    font-family: 'Marck Script',cursive;
    font-size: 22px;
    line-height: 20px;
    margin: 2% auto;
    padding: 11px 20px 0 70px;
    resize: none;
    width: 530px;
    -webkit-background-size:  100% 50px;
    background-size: 100% 50px;
    background-color: #e5fff3;
}
 textarea
    {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        display: block;
        font-size: 22px;
        line-height: 20px;
        margin: 2% auto;
        padding: 11px 20px 0 70px;
        resize: none;
        height: 389px;
        width: 530px;
        -webkit-background-size:  100% 50px;
        background-size: 100% 50px;
        background-color: #e5fff3;
        font-size: 15px;
    }
    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    display: table;
    margin: 0 auto;
}
.button5 {
  background-color: #555555;
    color: white;
}

.button5:hover {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

    </style>

  </head>

  <body>

  </body>

<?php

  if(isset($_POST['send'])) {
      $msg = $_POST['msg'];
      $pass = $_POST['pass'];
      $sgn_name = $_POST['sgn_name'];
      $sgn_mbno = $_POST['sgn_mbno'];
      $sgn_email = $_POST['sgn_email'];
      if(!empty($msg) && !empty($pass) && !empty($sgn_name)) {
        echo "<script>alert('not empty')</script>";
        if($pass == 'sk30013') {
          echo "<script>alert('Correcr pass')</script>";
           $sql = "SELECT email FROM email";
               $run_query = mysqli_query($dbcon, $sql) or die(mysqli_error($dbcon)); 
               if(mysqli_num_rows($run_query) > 0) {
                              $subject = 'Password Remind';
                              $headers = "From: " . "info@nssc.in" . "\r\n";
                              $headers .= "Reply-To: ". "info@nssc.in" . "\r\n";
                              $headers .= "MIME-Version: 1.0\r\n";
                              $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                              $i = 0;
                   while($row = mysqli_fetch_assoc($run_query)) {
                               $email = $row['email'];
                               $to = $email;
                               $message = '<html><body>';
                               $message .= "<pre style='color: #333333; font-size: 15px; font-family: Arial, Helvetica, sans-serif;'> $msg </pre>";
$message .= "--<br />";
$message .= "<p style='margin-bottom: 0;background:linear-gradient(-135deg,white 15%,#4c4c4c 0%);color:white;display:inline-block;padding:5px 30px 5px 5px;font-weight:bold'>Thanks and Regards,</p>";
$message .= "<br /><br /><span style='color:rgb(71,71,71);font-family:&quot;Playfair Display&quot;,serif;font-size:25px'> $sgn_name </span>";
$message .= "<br /><img src='https://ci5.googleusercontent.com/proxy/pMnsFBGvXuIL62u40oDLNJEJ6DlDbDsNR_u7ZUajPG429rxF78hJ77h3rcvzWcyBapLoc8akgRjsN_VJTCeai-vvzfx8=s0-d-e1-ft#https://www.wescoturf.com/img/cms/telephone.png' style='font-size:12.8px;color:rgb(0,0,0);width:15px;height:15px'> <span style='margin-left: 10px'>$sgn_mbno</span>";
$message .= "<br /><img src='https://ci6.googleusercontent.com/proxy/TeNOI-fioCXxlzsmVr8iVtVFNl42gdyb2tUMcSqqMrMUmhwv_8Muc0FpKJ6e5NCABJSkXoaO5viKegv8ItBgbg2A6Kt8_BL7tUZ8OQrBxFtOraaWsova1g-bD_L9Kz4rjJz5PLkAV9s=s0-d-e1-ft#https://image.freepik.com/free-icon/black-back-closed-envelope-shape_318-53807.png' style='font-size:12.8px;color:rgb(0,0,0);width:15px;height:15px'> <span style='margin-left: 10px'>$sgn_email</span>";
$message .= "</body></html>";




                               $send_mail = mail($to,$subject,$message,$headers);
                               if($send_mail) {
                                  $i++;
                               }
                  }
                           echo $i;
               }  
        }
        else {
          echo "<script>alert('Not correct password')</script>";
        }
      }
      else {
        echo "<script>alert('Empty...are you kidding me??')</script>";
      }
  }

?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
     <h2>Password:</h2>
        <input type="password" name="pass" required/>
        <h2>Email Content:</h2>
    <textarea rows="10" cols="50" name="msg" id="styled" required><?php echo $msg ?></textarea> <br />
    <input type="text" name="sgn_name" value="<?php echo $sgn_name; ?>" placeholder="Sendor Name" required/>
    <input type="text" name="sgn_mbno" value="<?php echo $sgn_mbno; ?>" placeholder="Mob no" required/>
    <input type="text" name="sgn_email" value="<?php echo $sgn_email; ?>" placeholder="Email id" required/>
    <input type="submit" name="send" value="Send" class="button button5" />

  </form>

  </body>

</html>