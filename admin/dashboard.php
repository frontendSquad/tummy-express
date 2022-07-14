<?php

$title = "Tummy Express - Dashboard";
include( 'header.php' );

?>

	<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
		<!-- fixed-top-->
		<?php include( 'topbar.php' ); ?>
		<!-- ////////////////////////////////////////////////////////////////////////////-->
		
		<?php include( 'sidebar.php' ); ?>		
 		
 		<div class="app-content content dashboard">
			<div class="content-wrapper">
				<div class="content-body">
					<!-- Basic form layout section start -->
					<section id="configuration">
						<div class="row">
							<div class="col-12">
								<div class="card ">
									<div class="card-content collapse show">
										<div class="card-dashboard dashboard">
											<div class="row">
												<div class="col-12">
													<h1>Dashboard</h1> </div>
											</div>


											<div class="row">
												<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
													<div class="dashboardbox d-flex align-items-start mb-sm-1 mb-xl-0">
														<span class="card-icon primary d-flex justify-content-center">
															<img src="images/totalp_3.png">
														</span>
														<div class="stats-amount ml-2 w-100">
															<p class="sub-heading">Tummy Rank</p>
															<h3 class="heading-text">32,560</h3>
															<img src="images/grap_icon_3.png" alt="">
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
													<div class="dashboardbox d-flex align-items-start mb-sm-1 mb-xl-0">
														<span class="card-icon primary d-flex justify-content-center">
															<img src="images/totalp_1.png">
														</span>
														<div class="stats-amount ml-2 w-100">
															<p class="sub-heading">Total Sales</p>
															<h3 class="heading-text">32,560</h3>
															<img src="images/grap_icon_1.png" alt="">
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
													<div class="dashboardbox d-flex align-items-start mb-sm-1 mb-xl-0">
														<span class="card-icon primary d-flex justify-content-center">
															<img src="images/totalp_2.png">
														</span>
														<div class="stats-amount ml-2 w-100">
															<p class="sub-heading">Total Orders</p>
															<h3 class="heading-text">32,560</h3>
															<img src="images/grap_icon_2.png" alt="">
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
													<div class="dashboardbox d-flex align-items-start mb-sm-1 mb-xl-0">
														<span class="card-icon primary d-flex justify-content-center">
															<img src="images/totalp_4.png">
														</span>
														<div class="stats-amount ml-2 w-100">
															<p class="sub-heading">Total Customers</p>
															<h3 class="heading-text">32,560</h3>
															<img src="images/grap_icon_4.png" alt="">
														</div>
													</div>
												</div>
											</div>




											<form action="">
												<div class="d-lg-flex justify-content-lg-between align-items-center">
													<div class="">
														<h2>Order Analysis</h2> 
													</div>													
												</div>
												<div class="box mb-0">
													<div class="chart-main position-relative">
														<div class="row">
															<div class="col-12">
																<div>
																	<img src="images/grap_img.png" alt="" class="w-100">
																</div>
															</div>
														</div>
													</div>
												</div>
											</form>


										<div>
											<div class="d-lg-flex justify-content-lg-between align-items-center">
												<div class="">
													<h2>Latest Orders</h2> 
												</div>
												<div class="">
													<select name="" id="">
														<option value="">Month</option>
														<option value="">01</option>
														<option value="">01</option>
														<option value="">01</option>
														<option value="">01</option>
														<option value="">01</option>
														<option value="">01</option>
														<option value="">01</option>
													</select>
												</div>
											</div>											
											<div class="box p-0">
												<div class="dataTables_wrapper">
													<div class="row row-table">
														<div class="main-tabble table-responsive">
															<div class="dataTables_wrapper container-fluid dt-bootstrap4">
																<div class="row">
																	<div class="col-sm-12">
																		<table class="table table-borderless dataTable">
																			<thead>
																				<tr>
																					<th>S. No.</th>
																					<th>Order ID</th>
																					<th>Customer</th>
																					<th>Status</th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																					<td>2136</td>
																					<td>dd/mm/yyyy</td>
																					<td>Abc Worker</td>
																					<td class="text-danger">Closed</td>
																				</tr>
																				<tr>
																					<td>2136</td>
																					<td>dd/mm/yyyy</td>
																					<td>Abc Worker</td>
																					<td class="text-green">On-going</td>
																				</tr>
																				<tr>
																					<td>2136</td>
																					<td>dd/mm/yyyy</td>
																					<td>Abc Worker</td>
																					<td class="text-yellow">On-Hold</td>
																				</tr>
																				<tr>
																					<td>2136</td>
																					<td>dd/mm/yyyy</td>
																					<td>Abc Worker</td>
																					<td class="text-danger">Closed</td>
																				</tr>
																				<tr>
																					<td>2136</td>
																					<td>dd/mm/yyyy</td>
																					<td>Abc Worker</td>
																					<td class="text-green">On-going</td>
																				</tr>
																				<tr>
																					<td>2136</td>
																					<td>dd/mm/yyyy</td>
																					<td>Abc Worker</td>
																					<td class="text-yellow">On-Hold</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>



										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>





<!--delete-req-confirm Modal end -->
<?php include( 'footer.php' );?>