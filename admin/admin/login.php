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
					<div class="left"> 
						<div class="login-inner">
							<img src="../images/icon-top.png" class="icon-top">
							<h3 class="text-center">Login</h3>
							<form action="dashboard.php">
								<div class="row">
									<div class="col-12">
										<label for="email">Email Address <span class="red">*</span></label>
										<input type="email" id="email" contenteditable="true" spellcheck="true" class="form-control" placeholder="Enter Email Address">
									</div>
									<div class="col-12">
										<label for="password">Password <span class="red">*</span></label>
										<div class="passwordWrapper position-relative">
											<input type="password" id="password" class="form-control passInput" placeholder="Password">
											<button class="view-btn position-absolute passDisplay" type="button"><i class="fa fa-eye-slash"></i></button>
										</div>
									</div>
								</div>
								<div class="text-right">
									<a href="password-recovery.php" class="forgot position-relative">Forgot Password?</a>
								</div>
								<button type="submit" class="gd-btn">Login</button>
							</form>
							<!-- <p><a href="./" class="green">Back To Website</a></p> -->
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