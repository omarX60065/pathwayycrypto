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
	<title>PATHWAYYCRYPTO - Admin- Withdrawal Request</title>
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
	<?php include('header.php') ?>		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Withdrawal Requests</h4>
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
								<a href="#">All Requests</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Customer ID</th>
													<th>Amount</th>
													<th>Email</th>
													<th>Wallet</th>
													<th>Date</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
												<?php
                                            $sql = "SELECT * from withdrawals";
                                            $result = $conn->query($sql);
                                            while ($rows=mysqli_fetch_assoc($result)){
                                            
                                            ?>
											</thead>
											<tbody>
												<tr>
													<td><?php echo $rows['userid']?></td>
													<td><?php echo $rows['amount']?></td>
													<td><?php echo $rows['email']?></td>
													<td><?php echo $rows['wallet'];?></td>
	                                                <td><?php echo $rows['date']; ?></td>
	                                               	<td><a style="color:white;" class ="btn btn-warning"><i class="fas fa-spinner"></i> PENDING</a></td>
	                                               	<td><a style="color:white;" class ="btn btn-success"><i class="fas fa-check-circle"></i> APPROVE</a></td>
	                                               	<td><a style="color:white;" class ="btn btn-warning"><i class="fas fa-spinner"></i> hold</a></td>
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