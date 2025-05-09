<?php
    session_start();
    include ("../connect.php");


       // $_SESSION['userid'];
        if(!isset($_SESSION['admin_userid'])){
            header("location:login.php");
            exit();
        }


 $userid= $_SESSION['admin_userid'];

?>

<?php require_once('../connect.php'); ?>
<?php
//mysql_select_db($database_cn, $cn);

if(isset($_POST['update'])){
      
$fname = mysqli_escape_string($conn, $_POST['fname']);
$lname = mysqli_escape_string($conn, $_POST['lname']);
$email = mysqli_escape_string($conn, $_POST['email']);
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);



      
      $sql=" UPDATE admin SET firstname='$fname', lastname='$lname', email='$email', username='$username', password='$password' WHERE userid = $userid  ";

     if ($conn->query($sql) === TRUE) {

            
      //    // logging admin login time for future reference
      //    $sql2 = "insert into timelog (mid,narration, timing) values ('$userid', 'ADDED A NEW ADMIN', now() )";
 //        $result2 = $conn->query($sql2);
 //               if ($result){
            
      //    echo $Save;
            
            
      //          }
            
            
      // }
 


?>

<script type="text/javascript">
      alert("Update was Successful");
      window.location="index.php";
</script>
<?php 
die();


}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>PATHWAYYCRYPTO - Admin Details</title>
      <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
      
      <!-- Fonts and icons -->
      <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
      <script>
            WebFont.load({
                  google: {"families":["Lato:300,400,700,900"]},
                  custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
                  active: function() {
                        sessionStorage.fonts = true;
                  }
            });
      </script>

      <!-- CSS Files -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/atlantis.min.css">
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link rel="stylesheet" href="assets/css/demo.css">
</head>
<body data-background-color="light">
      <?php include('header.php') ?>            <!-- End Sidebar -->

<div class="main-panel">
                  <div class="content">
                        <div class="page-inner">
                              <div class="page-header">
                                    <h4 class="page-title">Admin Profile</h4>
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
                                                <a href="#">Home</a>
                                    </ul>
                              </div>
                              <div class="row">
                                    <div class="col-sm-12">
                                          <div class="card">
                                                <div class="card-body">
                                                      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-5">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong>Personal Information</strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">First Name</label>
                                                                        <input type="text" class="form-control" value="<?php echo $_SESSION['admin_fname'];?>" name="fname" required="fname">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="email2">Last Name</label>
                                                                        <input type="text" name="lname" class="form-control" required="lname" value="<?php echo $_SESSION['admin_lname'];?>">
                                                                  </div>

                                                                  <div class="form-group">
                                                                        <label for="email2">Email</label>
                                                                        <input type="text" name="email" class="form-control" required="email" value="<?php echo $_SESSION['admin_email'];?>">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="email2">Username</label>
                                                                        <input type="text" name="username" class="form-control" required="username" value="<?php echo $_SESSION['admin_username'];?>">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label>Password</label>
                                                                        <div class="input-icon">
                                                                              <span class="input-icon-addon">
                                                                                    <i class="fa fa-lock"></i>
                                                                              </span>
                                                                              <input type="password" class="form-control" name="password" placeholder="Password" required="password" value="<?php echo $_SESSION['admin_password'];?>">
                                                                        </div>
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="update">
                                                                              <span class="btn-label">
                                                                                    <i class="fas fa-user-edit"></i>
                                                                              </span> Update
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
                  <?php include("footer.php"); ?>
            
      </body>
      </html>