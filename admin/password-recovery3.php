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
						 <img src="images/login-logo.png" class="img-fluid" alt="car image">
					 </div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="left"> 
						<div class="login-inner">
							<img src="images/icon-top.png" class="icon-top">
							<h3 class="text-center">Password Recovery</h3>
							<form action="login.php">
								<div class="row">
									<div class="col-12">
										<label for="password">New Password<span class="red">*</span>:</label>
										<div class="passwordWrapper position-relative">
											<input type="password" id="password" class="form-control passInput" placeholder="Enter New Password">
											<button class="view-btn position-absolute passDisplay" type="button"><i class="fa fa-eye-slash"></i></button>
										</div>

									</div>
									<div class="col-12">
										<label for="password">Re-Type New Password <span class="red">*</span>:</label>
										<div class="passwordWrapper position-relative">
											<input type="password" id="password" class="form-control passInput" placeholder="Retype Password">
											<button class="view-btn position-absolute passDisplay" type="button"><i class="fa fa-eye-slash"></i></button>
										</div>
									</div>
									<div class="col-12">
										<p class="text-denger text_darkred text-left">The password does not match</p>
									</div>
								</div>
								<button type="submit" class="gd-btn">Update</button>
							<p><a href="login.php" class="green">Back to login</a></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--login page end here-->



<!--delete-req Modal start -->
<div class="default-modal account_exist modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
			<div class="modal-body text-center"> <img src="images/logout.png" class="img-fluid" alt="Check Image">
                    <h5 class="font-weight-semibold mt-2">Alert</h5>
					<h6>The email Address does not exist.</h6>
				<button type="button" class="gd-btn mt-2" id="delete-req" data-dismiss="modal" aria-label="Close">Ok</button>

			</div>
		</div>
	</div>
</div>
<!--delete-req Modal end -->



	<?php include( 'footer.php' );?>