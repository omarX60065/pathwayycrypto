<?php
  session_start();
  session_destroy();
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>PATHWAYYCRYPTO - Admin|Login</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="../assets1/img/ico.png" type="image/x-icon"/>
  
  <!-- Fonts and icons -->
  <script src="assets1/js/plugin/webfont/webfont.min.js"></script>
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
  <div class="wrapper sidebar_minimize">
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="light">
        
        <a href="../index.php" class="logo">
         <!--<img src="../assets1/img/logo2.png" alt="navbar brand" class="navbar-brand">-->
        </a>
        <a href="../index.php">
        <button class="navbar-toggler" type="button">
          <span  style="color:#1b76cd;" class="navbar-toggler-icon">
            <i class="icon-arrow-left-circle"></i>
          </span>
        </button>
      </div>
      <!-- End Logo Header -->

      <!-- Start Navbar -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="light">
                        
                        <div class="container-fluid">
                              <div class="collapse" id="search-nav">
                                          <div class="input-group">
                                                <div class="input-group-prepend">
                                                      <a href="../index.php" class="logo">
         <!-- <img src="../assets1/img/logo2.png" alt="navbar brand" class="navbar-brand">-->
        </a>
                                                </div>
                                          </div>
                              </div>
                        </div>
                  </nav>
      <!-- End Navbar -->
    </div>
    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Login Admin Panel</h4>
            <ul class="breadcrumbs">
              <li class="nav-home">
                <a href="../index.php">
                  <i style="color:#1b76cd;" class="fas fa-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="../index.php">Home</a>
            </ul>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <!-- Form Start -->
                    <form method="POST" action="log.php">
                  <div class="row">
                    <div class="col-sm-4">
                    
                    </div>
                    <!-- End of Personal Details -->

                    <!-- Start of AC details -->
                  <div class="col-sm-4">
                    <div class="card-header">
                      <div class="card-title"><strong>Login Details</strong></div>
                      </div>
                    <div class="form-group">
                        <div class="input-icon">
                              <span class="input-icon-addon">
                                    <i class="fa fa-user"></i>
                              </span>
                              <input type="text" name="username" class="form-control" required="username" placeholder="Username">
                        </div>
                  </div>
                  <div class="form-group">
                        <div class="input-icon">
                              <span class="input-icon-addon">
                                    <i class="fa fa-lock"></i>
                              </span>
                              <input type="password" class="form-control" name="password" placeholder="Password" required="password">
                        </div>
                  </div>
                </div>
              </div>
            <!-- End Of AC details -->

           <!-- Start of Login Details -->
                  <div class="col-sm-4">
                   </div>
                </div>
                <div class="card-action" style="text-align:center;">
                  <button class="btn btn-primary" type="submit" name="login">
                        <span class="btn-label">
                              <i class="fas fa-sign-in-alt"></i>
                        </span> LOGIN
                  </button>
                </div>
              </div>

            </form>
            <!-- Form End -->
          </div>
        </div>
      </div>
      </div>
                               
                              
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright ml-auto">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. <br>This site was made with <i class="fab fa-soundcloud text-success" aria-hidden="true"></i> by <span style="color:#009f4d;" >VORTEX</span></p>
          </div>    
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets1/js/core/jquery.3.2.1.min.js"></script>
  <script src="../assets1/js/core/popper.min.js"></script>
  <script src="../assets1/js/core/bootstrap.min.js"></script>
  <!-- jQuery UI -->
  <script src="../assets1/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="../assets1/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
  <!-- Sweet Alert -->
      <script src="../assets1/js/plugin/sweetalert/sweetalert.min.js"></script>
  <!-- jQuery Scrollbar -->
  <script src="../assets1/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <!-- Atlantis JS -->
  <script src="../assets1/js/atlantis.min.js"></script>
      <script>
            //== Class definition
            var SweetAlert2Demo = function() {

                  //== Demos
                  var initDemos = function() {
                        //== Sweetalert Demo 4
                        $('#alert_demo_4').click(function(e) {
                              swal({
                                    title: "Registration Complete!",
                                    text: "You will be contacted via email in 24 hours with more info.Thanks!",
                                    icon: "success",
                                    buttons: {
                                          confirm: {
                                                text: "Continue",
                                                value: true,
                                                visible: true,
                                                className: "btn btn-info",
                                                closeModal: true
                                          }
                                    }
                              });
                        });

                  };

                  return {
                        //== Init
                        init: function() {
                              initDemos();
                        },
                  };
            }();

            //== Class Initialization
            jQuery(document).ready(function() {
                  SweetAlert2Demo.init();
            });
      </script>
</body>
</html>