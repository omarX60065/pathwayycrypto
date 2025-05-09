<?php


session_start();
include ("../connect.php");

  $activeError = '';
  $activeErrorClass = '';


if(isset($_POST['recover'])){
  
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);
$status = 1;
$active = 1;

#$password=md5($password);


$sql = "SELECT * from customers where username = '$username' and password= '$password' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
   while($row = mysqli_fetch_assoc($result)) {

// Anytime you see a $row['whatever'] it refers to a field in your table on your database.

    $_SESSION['userid']=$row['userid'];
    $_SESSION['fname']=$row['fullname'];
    $_SESSION['uname']=$row['username'];
    $_SESSION['email']=$row['email'];
    $_SESSION['phone']=$row['phone'];
    $_SESSION['balance']=$row['balance'];
    $_SESSION['level']=$row['acc_level'];
    $_SESSION['pass']=$row['password'];
    $_SESSION['date']=$row['date'];




        /*$_SESSION['role'] =$row['access'];
    $_SESSION['userid']= $row['id'];
    $userid=$row['id'];
    $_SESSION['username']= $row['username'];
    $_SESSION['email']= $row['email'];
    
    
    // logging admin login time for future reference
    $sql2 = "insert into timelog (mid,narration, timing) values ('$userid', 'lOGGED IN', now() )";
        $result2 = $conn->query($sql2);*/
    
    // header ("location:user/index.php");
  //             die();
        
        
   
   }
   
   
   
}  else{

	$error1 = "One or both of your Login Details are incorrect. Please check again.";
    $error1Class = "alert-danger";
          
   }

   $sql = "SELECT * from customers where (username = '$username' and password= '$password') and (status ='1') ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
   while($row = mysqli_fetch_assoc($result)) {

// Anytime you see a $row['whatever'] it refers to a field in your table on your database.


        /*$_SESSION['role'] =$row['access'];
    $_SESSION['userid']= $row['id'];
    $userid=$row['id'];
    $_SESSION['username']= $row['username'];
    $_SESSION['email']= $row['email'];
    
    
    // logging admin login time for future reference
    $sql2 = "insert into timelog (mid,narration, timing) values ('$userid', 'lOGGED IN', now() )";
        $result2 = $conn->query($sql2);*/
    
    header ("location:index.php");
                 die();
        
        
   
   }
   
   
   
} else {
   
      $activeError = 'Your account is yet to be verified by our team. If you have verified your email, please exercise patience or Contact our Support team, If you are sure something else is wrong. Thank You';
      $activeErrorClass = 'alert-danger';

   }
   
}
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Author" content="Vortex">

		<!-- Title -->
        <title>PATHWAYYCRYPTO - Forgot</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="assets/css/icons.html" rel="stylesheet">

		<!---Fontawesome css-->
		<link href="assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

		<!---Ionicons css-->
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

		<!---Typicons css-->
		<link href="assets/plugins/typicons.font/typicons.css" rel="stylesheet">

		<!---Feather css-->
		<link href="assets/plugins/feather/feather.css" rel="stylesheet">

		<!---Falg-icons css-->
        <link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

		
		<!---Style css-->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-dark.css" rel="stylesheet">

        <!-- skin css-->
        <link href="assets/css/skin-modes.css" rel="stylesheet">

		<!--- Animations css-->
		<link href="assets/css/animate.css" rel="stylesheet">

        <!-- Switcher css -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/switcher/demo.css">


    </head>
	<body class="main-body">

		<!-- Loader -->
		<div id="global-loader" class="light-loader">
			<img src="assets/img/loaders/loader.svg" class="loader-img" alt="Loader">
		</div>
        <!-- /Loader -->


        
		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
					<div class="my-auto authentication-pages">
						<div>
							<img src="assets/img/brand/logo2.png" class="m-0 mb-4" alt="logo">
							<h5 class="mb-4">We make it easy for you in the crypto trading industry</h5>
							<p class="mb-5">Get Unlimited Profits with no risk. Do More, Get More.
							We offer a vast range of opportunities and
							investment pricing plans.
							We grant access to all the major cryptocurrency trading platforms in the world.
							PATHWAYYCRYPTO - one of the best cryptocurrency brokers on the market for traders all around the world.</p>
							<a href="../about.php" class="btn btn-danger">Learn More</a>
						</div>
					</div>
				</div>
				<div class="p-5 wd-md-50p">
					<div class="main-signin-header">
						<h2>Password Recovery</h2>
						<h4>Enter the Email used in registration</h4>
						<div>
                            <?php if ( $error1 != '' ) : ?>
                          <div class="alert <?php echo $error1Class; ?>">
                            <?php echo $error1; ?>
                          </div>
                        <?php endif; ?>
                        </div>
                        <div>
                            <?php if ( $activeError != '' ) : ?>
                          <div class="alert <?php echo $activeErrorClass; ?>">
                            <?php echo $activeError; ?>
                          </div>
                        <?php endif; ?>
                        </div>
                        <?php ; ?>
						<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div class="form-group">
								<label>Email</label>
									<input class="form-control" placeholder="Enter your username" type="email" name="username">
							</div>
							<button name="recover" class="btn btn-main-primary btn-block">Sign In</button>
						</form>
					</div>
					<div class="main-signin-footer mt-3 mg-t-5">
						<p><a href="#">Forgot password?</a></p>
						<p>Don't have an account? <a href="signup.php">Create an Account</a></p>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->


		<!-- JQuery min js -->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js -->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<script src="assets/plugins/moment/moment.js"></script>

		<!-- eva-icons js -->
		<script src="assets/js/eva-icons.min.js"></script>

		<!-- Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script>

		
		<!-- Custom js -->
		<script src="assets/js/custom.js"></script>

        <!-- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>
	</body>
</html>
