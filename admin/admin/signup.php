 <?php
 $title = "Tummy Express - Login";
 include( 'header.php' );

 ?>


<body class="vertical-layout vertical-menu 2-columns menu-expanded" data-open="click" data-menu="vertical-menu" data-col="2-columns">

	<!--login page start here-->

	<section class="register loginn">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-lg-6 col-12">
 					<div class="right gd-bg">
						 <img src="../images/login-logo.png" class="img-fluid" alt="car image">
					 </div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="left pt-0"> 
						<div class="login-inner">
							<h3 class="pt-3 pb-3 text-center">Let's Get Started</h3>
							<form>
								<div class="row">
									<div class="col-md-12">
										<div class="d-lg-flex d-block justify-content-center align-items-center top">
											<div class="attached"> 
												<img src="../images/avatar.png" alt="Admin Image">
												<button name="file" class="camera-btn" onclick="document.getElementById('upload').click()"><i class="fa fa-camera"></i></button>
												<input type="file" id="upload" name="file"> 
											</div>
										</div>										
									</div>
									<div class="col-md-6">
										<label for="email">Name <span class="red">*</span></label>
										<input type="text" id="email" contenteditable="true" spellcheck="true" class="form-control" placeholder="Enter Name">
									</div>
									<div class="col-md-6">
										<label for="email">Restaurant Name <span class="red">*</span></label>
										<input type="text" id="email" contenteditable="true" spellcheck="true" class="form-control" placeholder="Enter Restaurant Name">
									</div>
									<div class="col-md-12">
										<label for="email">Restaurant Category <span class="red">*</span></label>
										<select class="form-control mb-0 mt-0">
											<option value="">Select Category</option>
											<option value="">Select Category</option>
											<option value="">Select Category</option>
											<option value="">Select Category</option>
										</select>
									</div>
									<div class="col-md-6">
										<label for="email">Email <span class="red">*</span></label>
										<input type="text" id="email" contenteditable="true" spellcheck="true" class="form-control" placeholder="Enter Email Address">
									</div>
									<div class="col-md-6">
										<label for="email">Phone No. <span class="red">*</span></label>
										<input type="text" id="email" contenteditable="true" spellcheck="true" class="form-control" placeholder="Enter Phone Number">
									</div>
									<div class="col-md-12">
										<label for="email">Restaurant Address <span class="red">*</span></label>
										<input type="text" id="email" contenteditable="true" spellcheck="true" class="form-control" placeholder="Enter Restaurant Address">
									</div>






									<div class="col-md-6">
										<label for="password">Password <span class="red">*</span></label>
										<input type="password" id="password" class="form-control" placeholder="Enter Password">
									</div>

									<div class="col-md-6">
										<label for="password">Confirm Password <span class="red">*</span></label>
										<input type="password" id="password" class="form-control" placeholder="Confirm Password">
									</div>




								</div>
								<div class="d-flex align-items-center pt-2 pl-2">
									<input type="checkbox" name="" class="mr-1">
									By clicking "Sign Up," you agree to <a href="password-recovery.php" class="forgot m-0">General Terms & Conditions</a>
								</div>
								<button type="button" class="gd-btn" data-toggle="modal" data-target=".account_disabled">Sign Up</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--login page end here-->















<!--delete-req Modal start -->
<div class="default-modal account_disabled modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
			<div class="modal-body text-center"> <img src="../images/logout.png" class="img-fluid" alt="Check Image">
                    <h5 class="font-weight-semibold mt-2">Alert</h5>
					<h6>Thank you for registering, our admin team will review your application and be in contact with you shortly.</h6>
				<button type="button" class="gd-btn mt-2" id="delete-req" data-dismiss="modal" aria-label="Close">Ok</button>

			</div>
		</div>
	</div>
</div>
<!--delete-req Modal end -->




	<?php include( 'footer.php' );?>