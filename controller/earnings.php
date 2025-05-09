<?php
    session_start();
    include ("../connect.php")
 ?>

<?php
       // $_SESSION['userid'];
        if(!isset($_SESSION['admin_userid'])){
            header("locatiom:login.php");
            exit();
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>PATHWAYYCRYPTO - Admin- Deposit Customers</title>
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
  <?php include('header.php') ?>    <!-- End Sidebar -->

    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Credit Customer Details</h4>
            <ul class="breadcrumbs">
              <li class="nav-home">
                <a href="index.php">
                  <i class="flaticon-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Credit</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Customers</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>Customer ID</th>
                          <th>Email</th>
                          <th>Balance</th>
                          <th>Account Level</th>
                          <th>Credit</th>
                          <th>Debit</th>
                        </tr>
                        <?php
                                            $sql = "SELECT * from customers";
                                            $result = $conn->query($sql);
                                            while ($rows=mysqli_fetch_assoc($result)){
                                            
                                            ?>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $rows['userid']?></td>
                                                  <td><?php echo $rows['email']; ?></td>
                                                  <td><?php echo $rows['balance']; ?></td>
                                                  <td><?php echo $rows['acc_level']; ?></td>
                                                <td>
                                                    <a href="credit-earning.php?userid= <?php echo $rows["userid"]; ?>"
                                                        class ="btn btn-success"><i class="fas fa-credit-card"></i> CREDIT
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="debit-earning.php?userid= <?php echo $rows["userid"]; ?>"
                                                        class ="btn btn-danger"><i class="fas fa-credit-card"></i> DEBIT
                                                    </a>
                                                </td>
                        </tr>
                        <?php
                                            }
                                            ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php include("footer.php");?>
    
  </body>
  </html>