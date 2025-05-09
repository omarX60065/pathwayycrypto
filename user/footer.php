<?php
    include("../connect.php")
 ?>
<!-- Right-sidebar-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="p-3">
					<a href="#" class="text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="tab-menu-heading border-0 card-header">
					<div class="card-title mb-0">SUB MENU</div>
					<div class="card-options ml-auto">
						<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
					</div>
				</div>
				<div class="tabs-menu ">
					<!-- Tabs -->
					<ul class="nav panel-tabs">
						<li class=""><a href="#tab" class="active show" data-toggle="tab">Profile</a></li>
						<li class=""><a href="#tab1" data-toggle="tab" class="">Deposits</a></li>
					</ul>
				</div>
				<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
					<div class="tab-content">
						<div class="tab-pane active" id="tab">
							<div class="card-body p-0">
								<div class="header-user text-center mt-4">
									<span class="avatar avatar-xxl brround mx-auto" style="background-color:black;"><img src="assets/img/faces/user-white.png" alt="Profile-img" class="avatar avatar-xxl brround"></span>
									<div class=" text-center font-weight-semibold user mt-3 h6 mb-0"><?php echo $_SESSION['fname'] ?></div>
									<span class="text-muted"><?php echo $_SESSION['level'] ?> Trading Portfolio</span>
								</div>
								<a class="dropdown-item  border-top" href="edit.php">
									<i class="dropdown-icon fe fe-edit mr-2"></i> Edit Profile
								</a>
								<a class="dropdown-item border-top" href="signup.php">
									<i class="dropdown-icon  fas fa-sort-amount-up mr-2"></i> Add Another Account
								</a>
								<a class="dropdown-item  border-top" href="contact.php">
									<i class="dropdown-icon fe fe-mail mr-2"></i> Contact Us
								</a>
								<a class="dropdown-item  border-top" href="faq.php">
									<i class="dropdown-icon fe fe-help-circle mr-2"></i> Need Help?
								</a>
								<div class="card-body border-top border-bottom">
									<div class="row">
										<div class="col-6 text-center">
											<a class="" href="account-upgrade.php"><i class="dropdown-icon fas fa-sort-amount-up fs-20 m-0 leading-tight"></i></a>
											<div>Account Upgrade</div>
										</div>
										<div class="col-6 text-center">
											<a class="" href="logout.php"><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
											<div>Sign out</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab1">
							<div class="chat">
								<div class="contacts_card">
									<ul class="contacts mb-0">
										<li class="active">
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="assets/img/crypto-currencies/round-outline/Bitcoin.svg" class="rounded-circle user_img" alt="img">
													<span class="online_icon"></span>
												</div>
												<div class="user_info">
													<a class="btn ripple btn-secondary" data-target="#modaldemo1" data-toggle="modal" href="#">View Wallet</a>
												</div>
											</div>
											<!-- Small modal -->
												<div class="modal" id="modaldemo1">
													<div class="modal-dialog modal-sm" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h6 class="modal-title">Ethereum Wallet</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
															</div>
															<div class="modal-body">
																<?php
																   $sql= 'SELECT * from wallets where userid = 1 ';
																    $result = $conn->query($sql);
																    while ($rows = mysqli_fetch_assoc($result)){
																?>
																<p><?php echo $rows['address']; }?></p>
															</div>
															<div class="modal-footer justify-content-center">
																<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
															</div>
														</div>
													</div>
												</div>
											<!-- End Small Modal -->
										</li>
										<li>
											<div class="d-flex bd-highlight w-100">
												<div class="img_cont">
													<img src="assets/img/crypto-currencies/round-outline/Ethereum.svg" class="rounded-circle user_img" alt="img">
													<span class=" online_icon"></span>
												</div>
												<div class="user_info">
													<a class="btn ripple btn-secondary" data-target="#modaldemo2" data-toggle="modal" href="#">View Wallet</a>
												</div>
											</div>

											<!-- Small modal -->
												<div class="modal" id="modaldemo2">
													<div class="modal-dialog modal-sm" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h6 class="modal-title">Ethereum Wallet</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
															</div>
															<div class="modal-body">
																<?php
																   $sql= 'SELECT * from wallets where userid = 2 ';
																    $result = $conn->query($sql);
																    while ($rows = mysqli_fetch_assoc($result)){
																?>
																<p><?php echo $rows['address']; }?></p>
															</div>
															<div class="modal-footer justify-content-center">
																<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
															</div>
														</div>
													</div>
												</div>
											<!-- End Small Modal -->
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Right-sidebar-closed -->
			
			<!-- Footer opened -->
			<div class="main-footer ht-40">
				<div class="container-fluid pd-t-0-f ht-100p">
					<span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. This site was made with <i style="color:#009f4d;" class="fab fa-soundcloud" aria-hidden="true"></i> by <span style="color:#009f4d;" >VORTEX</span></span>
				</div>
			</div>
			<!-- Footer closed -->
		</div>
		<!--End Page -->