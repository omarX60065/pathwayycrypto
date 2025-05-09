<?php 
 session_start();
$email = $_SESSION['email'];
if($email == false){
  header('Location: signin.php');
}

include ("../connect.php");
$errors = array();

//if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Passwords do not match!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = $password;
            $update_pass = "UPDATE customers SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                $info = "Your password has been changed. You can now login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }

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
        <title>PATHWAYYCRYPTO - New Password</title>

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


        
		<!-- Main-signin-wrapper -->
		<div class="my-auto page">
			<div class="main-signin-wrapper">
				<div class="main-card-signin forgot-password d-md-flex wd-100p">
					<div class="wd-md-50p  page-signin-style p-md-5 p-4 text-white d-none d-md-block ">
						<div class="my-auto authentication-pages">
							<div>
								<img src="assets/img/brand/logo3.png" class="m-0 mb-4" alt="logo">
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
							<h2>New Password</h2>
							<div>
								<?php 
					                    if(isset($_SESSION['info'])){
					                        ?>
					                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
					                            <?php echo $_SESSION['info']; ?>
					                        </div>
					                        <?php
					                    }
					                    ?>
					                    <?php
					                    if(count($errors) > 0){
					                        ?>
					                        <div class="alert alert-danger text-center">
					                            <?php
					                            foreach($errors as $showerror){
					                                echo $showerror;
					                            }
					                            ?>
					                        </div>
					                        <?php
					                    }
				                    ?>
							</div>
							<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								<div class="form-group">
									<label class="form-label">New Password</label>
										<input class="form-control" name="password" placeholder="Enter New Password" type="text">
								</div>
								<div class="form-group">
									<label class="form-label">Confirm Password</label>
										<input class="form-control" name="cpassword" placeholder="Confirm Password" type="password">
								</div>
								<button  name="change-password" class="btn btn-main-primary btn-block">Change</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main-signin-wrapper -->


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
