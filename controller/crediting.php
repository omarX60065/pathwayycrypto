<?php require_once('../connect.php');

   

   session_start();

   if(isset($_POST['credit']))
   {

   $fname = mysqli_escape_string($conn, $_POST['fname']);
      $email = mysqli_escape_string($conn, $_POST['email']);
      $balance = mysqli_escape_string($conn, $_POST['balance']);
      $plan = mysqli_escape_string($conn, $_POST['plan']);
      $userid = mysqli_escape_string($conn, $_POST['userid']);

      $query = "INSERT INTO  earnings (userid, amount, plan, date)
      VALUES ('$userid', '$balance', '$plan', now() )";
      if ($conn->query($query) === TRUE)
      {
      
         $sql = "UPDATE customers SET balance =balance+$balance WHERE userid ='$userid' ";

         if ($conn->query($sql) === TRUE)
         {
            $to = $email;
            $subject = "Earning Notification";
            
            $message = "<b>Earning Notification</b>";
            $message .= "<h5> Hello $fname! We hope this meets you well.<br> You have recieved a return of USD$balance, on your trading account. Automated trading continues as usual. Thank You for trading with Us. Do have a wonderful trading experience as always. <br><br> 
            PATHWAYYCRYPTO Team &copy; 2022</h5>";

         
            
            $header = "From:support@PATHWAYYCRYPTO.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            
            $retval = mail ($to,$subject,$message,$header);
            
            if( $retval == true )
            {
               echo "Email sent successfully...";
            }
            else
            {
               echo "Message could not be sent...";
            }
         }
      }
   }
?>


?>

<script type="text/javascript">
	alert("Credit was Successful");
	window.location="earnings.php";
</script>
<?php 
die();



