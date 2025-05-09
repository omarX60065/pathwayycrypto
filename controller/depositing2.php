<?php
    session_start();
    include ("../connect.php");

if(isset($_POST['notify'])){    

$id = mysqli_escape_string($conn, $_POST['id']);
$amount = mysqli_escape_string($conn, $_POST['amount']);
$plan = mysqli_escape_string($conn, $_POST['plan']);
$email = mysqli_escape_string($conn, $_POST['email']);
$fullname = mysqli_escape_string($conn, $_POST['fullname']);
$status=1;



//$password= password_hash($password);
 //$password=($password);


  
  $sql = "INSERT INTO  deposits (userid, amount, plan, date, status)
  VALUES ('$id', '$amount', '$plan', now(), '$status' )";

if ($conn->query($sql) === TRUE) {

        $to = $email;
        $subject = "Deposit Notification";
         
        $message = "<b>Deposit Notification</b>";
        $message .= "<h5>Hello $fullname! <br> Your Deposit of USD$amount has been confirmed by our Trading team. Automated trading will begin on your trading account with immediate effect. Thank you for trading with us. <br> Do have a wonderful trading experience as always! <br><br> 


      PATHWAYYCRYPTO Team &copy; 2022</h5>";

        
         
         $header = "From:support@PATHWAYYCRYPTO.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Email sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
    

}}
?>

?>

<script type="text/javascript">
      alert("Deposit was Successful");
      window.location="deposit.php";
</script>
<?php 
die();
