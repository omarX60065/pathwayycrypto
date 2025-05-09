<?php
    session_start();
    include ("../connect.php");

       // $_SESSION['userid'];
        if(!isset($_SESSION['admin_userid'])){
            header("location:login.php");
            exit();



        }
if(isset($_POST['credit'])){    

$id = mysqli_escape_string($conn, $_POST['id']);
$amount = mysqli_escape_string($conn, $_POST['amount']);
$plan = mysqli_escape_string($conn, $_POST['plan']);
$email = mysqli_escape_string($conn, $_POST['email']);
$fullname = mysqli_escape_string($conn, $_POST['fullname']);
$status=1;



//$password= password_hash($password);
 //$password=($password);


  
  $sql = "INSERT INTO  earnings (userid, amount, plan, date)
  VALUES ('$id', '$amount', '$plan', now() )";

if ($conn->query($sql) === TRUE) {

    
    // logging admin login time for future reference
    /*$sql2 = "insert into timelog (mid,narration, timing) values ('$userid', 'ADDED A NEW ADMIN', now() )";
        $result2 = $conn->query($sql2)*/;

       //PHPMailer
        require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 465;  
        $mail->Username = 'support@PATHWAYYCRYPTO.com';
        $mail->Password = '111Twothree$$';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="support@PATHWAYYCRYPTO.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send()){

            ?>
           <!-- error message here -->
        <?php
        die();
        }
        else 
        {
            ?>
           <script type="text/javascript">
        alert("Credit Completed Successfully");
        window.location="credit.php";
        </script>
        <?php
        die();
        }
      }
    
    
    $to   = $email;
    $from = 'support@PATHWAYYCRYPTO.com';
    $message = "Hello $fullname! We hope this meets you well.<br> You have recieved a return of USD$amount, on your trading account. Automated trading continues as usual. Thank You for trading with Us. Do have a wonderful trading experience as always. <br><br> 

      PATHWAYYCRYPTO Team &copy; 2025";
    $subject = 'Earnings Notification';
    $body = $message;
    
    $error=smtpmailer($to, $from, $from_name, $subject, $body);
  }
}


//$userid= $_SESSION['userid'];

?>
<?php

$userid = mysqli_escape_string($conn, $_GET['userid']);
    $sql= 'SELECT * from customers where userid = '.$userid;
    $result = $conn->query($sql);
    while ($rows = mysqli_fetch_assoc($result)){


//$userid= $_SESSION['userid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>PATHWAYYCRYPTO - Admin - Credit Customers</title>
      <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <link rel="icon" href="../assets1/img/ico.png" type="image/x-icon"/>
      
      <!-- Fonts and icons -->
      <script src="../assets1/js/plugin/webfont/webfont.min.js"></script>
      <script>
            WebFont.load({
                  google: {"families":["Lato:300,400,700,900"]},
                  custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets1/css/fonts.min.css']},
                  active: function() {
                        sessionStorage.fonts = true;
                  }
            });
      </script>

      <!-- CSS Files -->
      <link rel="stylesheet" href="../assets1/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets1/css/atlantis.min.css">
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link rel="stylesheet" href="../assets1/css/demo.css">
</head>
<body data-background-color="dark">
      <?php include('header.php') ?>            <!-- End Sidebar -->

<div class="main-panel">
                  <div class="content">
                        <div class="page-inner">
                              <div class="page-header">
                                    <h4 class="page-title">Credit Customer</h4>
                                    <ul class="breadcrumbs">
                                          <li class="nav-home">
                                                <a href="index.php">
                                                      <i style="color:#1b76cd;" class="fas fa-home"></i>
                                                </a>
                                          </li>
                                          <li class="separator">
                                                <i class="flaticon-right-arrow"></i>
                                          </li>
                                          <li class="nav-item">
                                                <a href="#">Credit</a>
                                    </ul>
                              </div>
                              <div class="row">
                                    <div class="col-sm-12">
                                          <div class="card">
                                                <div class="card-body">
                                                      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong></strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">Customer ID</label>
                                                                        <input type="text" class="form-control" value="<?php echo $rows['userid']; ?>" name="id" required="id">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <input type="hidden" class="form-control" value="<?php echo $rows['fullname']; ?>" name="fullname">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="email2">Amount</label>
                                                                        <input type="number" name="amount" class="form-control" required="amount">
                                                                  </div>

                                                                  <div class="form-group">
                                                                        <label for="email2">Plan</label>
                                                                        <input type="text" name="plan" class="form-control" required="plan">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <input type="hidden" class="form-control" name="email" value="<?php echo $rows['email']; ?>">
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="credit">
                                                                              <span class="btn-label">
                                                                                    <i class="fas fa-credit-card"></i>
                                                                              </span> Credit
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                            </form>
                                                         </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                  <?php include("footer.php"); }?>
            
      </body>
      </html>