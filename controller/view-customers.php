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
	<title>PATHWAYYCRYPTO - Admin- View Customers</title>
	<?php include('header.php') ?>		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">List of Customers</h4>
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
								<a href="#">Customers</a>
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
													<th>Full Name</th>
													<th>Email</th>
													<th>Phone</th>
													<th>Balance</th>
													<th>Account Level</th>
													<th>Date</th>
													<th>Password</th>
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
													<td><?php echo $rows['fullname'];?></td>
	                                                <td><?php echo $rows['email']; ?></td>
	                                                <td><?php echo $rows['phone']; ?></td>
	                                                <td><?php echo $rows['balance']; ?></td>
	                                                <td><?php echo $rows['acc_level']; ?></td>
	                                                <td><?php echo $rows['date']; ?></td>
	                                                <td><?php echo $rows['password']; ?></td>
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