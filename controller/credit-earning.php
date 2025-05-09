<?php
    session_start();
    include ("../connect.php");


       // $_SESSION['userid'];
        if(!isset($_SESSION['admin_userid'])){
            header("location:login.php");
            exit();
        }

    $userid = mysqli_escape_string($conn, $_GET['userid']);
    $sql= 'SELECT * from customers where userid = '.$userid;
    $result = $conn->query($sql);
    while ($rows = mysqli_fetch_assoc($result)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>PATHWAYYCRYPTO - Admin- Credit Customers</title>
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
<body data-background-color="light">
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
                                                      <form method="POST" action="crediting.php" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong>Personal Information</strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">Full Name</label>
                                                                        <input type="text" class="form-control" value="<?php echo $rows['fullname']; ?>" name="fname">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="phone">Amount</label>
                                                                        <input type="number" class="form-control" name="balance" required="balance" >
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="phone">Plan</label>
                                                                        <input type="text" class="form-control" name="plan" required="plan">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <input type="hidden" class="form-control" name="userid" value="<?php echo $rows['userid']; ?>">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <input type="hidden" class="form-control" name="email" value="<?php echo $rows['email']; ?>">
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="credit">
                                                                              <span class="btn-label">
                                                                                    <i class="fas fa-user-edit"></i>
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