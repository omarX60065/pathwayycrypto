<?php
    session_start();
    include ("../connect.php");


       // $_SESSION['userid'];
        if(!isset($_SESSION['admin_userid'])){
            header("location:login.php");
            exit();
        }

   

//$userid= $_SESSION['userid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>PATHWAYYCRYPTO - Admin- Update Wallet</title>
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
                                    <h4 class="page-title">Edit Customer Details</h4>
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
                                                <a href="#">Edit</a>
                                    </ul>
                              </div>
                              <div class="row">
                                    <div class="col-sm-12">
                                          <div class="card">
                                                <div class="card-body">
                                                      <form method="POST" action="updating-wallet.php" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong>Bitcoin Address</strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">Bitcoin</label>
                                                                        <input type="text" class="form-control" value="" name="bitcoin" required="bitcoin">
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="update-b">
                                                                              <span class="btn-label">
                                                                                    <i class="fas fa-user-edit"></i>
                                                                              </span> Update
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                            </form>
                                                            <form method="POST" action="updating-wallet.php" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong>Ethereum Address</strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">Ethereum</label>
                                                                        <input type="text" class="form-control" value="" name="ethereum" required="ethereum">
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="update-e">
                                                                              <span class="btn-label">
                                                                                    <i class="fas fa-user-edit"></i>
                                                                              </span> Update
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                            </form>
                                                            <form method="POST" action="updating-wallet.php" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong>BNB Address</strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">BNB</label>
                                                                        <input type="text" class="form-control" value="" name="ethereum" required="ethereum">
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="update-BNB">
                                                                              <span class="btn-label">
                                                                                    <i class="fas fa-user-edit"></i>
                                                                              </span> Update
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                            </form>
                                                            <form method="POST" action="updating-wallet.php" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong>USDT Address</strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">USDT</label>
                                                                        <input type="text" class="form-control" value="" name="ethereum" required="ethereum">
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="update-e">
                                                                              <span class="btn-label">
                                                                                    <i class="fas fa-user-edit"></i>
                                                                              </span> Update
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                            </form>
                                                            <form method="POST" action="updating-wallet.php" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong>Tron Address</strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">Tron</label>
                                                                        <input type="text" class="form-control" value="" name="ethereum" required="ethereum">
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="update-e">
                                                                              <span class="btn-label">
                                                                                    <i class="fas fa-user-edit"></i>
                                                                              </span> Update
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                            </form> 
                                                            <form method="POST" action="updating-wallet.php" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong>Trump Address</strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">Trump</label>
                                                                        <input type="text" class="form-control" value="" name="ethereum" required="ethereum">
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="update-e">
                                                                              <span class="btn-label">
                                                                                    <i class="fas fa-user-edit"></i>
                                                                              </span> Update
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                            </form>
                                                            <form method="POST" action="updating-wallet.php" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong>Pepe Address</strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">Pepe</label>
                                                                        <input type="text" class="form-control" value="" name="solana" required="ethereum">
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="update-e">
                                                                              <span class="btn-label">
                                                                                    <i class="fas fa-user-edit"></i>
                                                                              </span> Update
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                            </form>
                                                            <form method="POST" action="updating-wallet.php" enctype="multipart/form-data">
                                                      <div class="row">
                                                            <div class="col-sm-4">
                                                                  <div class="card-header">
                                                                        <div class="card-title"><strong>Solana Address</strong></div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="title">Sol</label>
                                                                        <input type="text" class="form-control" value="" name="ethereum" required="ethereum">
                                                                  </div>
                                                                  <div class="card-action">
                                                                        <button class="btn btn-primary" type="submit" name="update-e">
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