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
							<h3 class="text-center">Password Recovery</h3>
							<form action="password-recovery3.php">
								<div class="row">
									<div class="col-12">
									<label for="password">Verification Code <span class="red">*</span></label>
										<input type="number" id="password" class="form-control" placeholder="Enter Verification Code">
									</div>
								</div>
								<div class="text-right">
									<a href="password-recovery2.php" class="forgot">Resend Code</a>
								</div>								
								<button type="submit" class="gd-btn">Continue</button>
							</form>
							<p><a href="login.php" class="green">Back to login</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--login page end here-->



<!--delete-req Modal start -->
<div class="default-modal account_verification modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
			<div class="modal-body text-center"> <img src="../images/logout.png" class="img-fluid" alt="Check Image">
                    <h5 class="font-weight-semibold mt-2">Alert</h5>
					<h6>The verification code is Incorrect.</h6>
				<button type="button" class="gd-btn mt-2" id="delete-req" data-dismiss="modal" aria-label="Close">Ok</button>

			</div>
		</div>
	</div>
</div>
<!--delete-req Modal end -->



	<?php include( 'footer.php' );?>