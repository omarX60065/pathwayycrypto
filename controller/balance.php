<?php
    session_start();
    include ("../connect.php");
       // $_SESSION['userid'];
        if(!isset($_SESSION['admin_userid'])){
            header("location:login.php");
            exit();
        }
?>
<?php

$userid = mysqli_escape_string($conn, $_GET['userid']);
    $sql= 'SELECT * from customers where userid = '.$userid;
    $result = $conn->query($sql);
    while ($rows = mysqli_fetch_assoc($result)){
//$userid= $_SESSION['userid'];
?>

<?php

    $sql = "SELECT SUM(amount) AS count FROM earnings WHERE userid = $userid";
    $result = $conn->query($sql);
    while($record = $result->fetch_array()){
      $total = $record['count'];
      }
     $sql=" UPDATE customers SET balance='$total' WHERE userid ='$userid'  ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>PATHWAYYCRYPTO - Admin - View Balance</title>
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
                                    <h4 class="page-title">View Earnings</h4>
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
                                                                        <label for="email2">Balance</label>
                                                                        <input type="number" name="amount" class="form-control" value="<?php echo $rows['balance'] ?>" required="amount">
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