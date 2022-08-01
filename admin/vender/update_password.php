<?php

$title = "Tummy Express - Admin Profile";
include( 'header.php' );

?>

    <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        <!-- fixed-top-->
        <?php include( 'topbar.php' ); ?>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        
        <?php include( 'sidebar.php' ); ?>  
        <div class="app-content content admin-profile">
            <div class="content-wrapper">
                <div class="content-body">
                    <!-- Basic form layout section start -->
                    <section id="configuration">
                        <div class="row">
                            <div class="col-12">
                                <div class="card ">
                                    <div class="card-content collapse show">
                                        <div class="card-dashboard">
                                        <div class="d-md-flex top justify-content-md-between align-items-center mb-2">
                                            <h1>Profile</h1>
                                            </div>
                                            <div class="box update_password">
                                                <div class="row">
                                                    <div class="col-lg-12 col-12">
                                                        <div class="row">
                                                            <div class="col-md-3 col-12"> 
                                                                <div class="profileleftb">
                                                                    <ul>
                                                                        <li><a href="#" title="">Restaurant Information</a></li>
                                                                        <li><a href="admin-profile.php" title="">Account</a></li>
                                                                        <li class="active"><a href="update_password.php" title="">Change Password</a></li>
                                                                        <li><a href="time-management.php" title="">Time Management</a></li>
                                                                    </ul>
                                                                </div>      
                                                            </div>
                                                            <div class="col-md-9 col-12">
                                                                <div class="d-flex">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <h4 class="h2 nunito black mb-3">Update Password</h4>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <label>Current Password*</label>
                                                                        </div>
                                                                        <div class="col-12 col-md-4">
                                                                            <div class="passwordWrapper position-relative input_eye">
                                                                                <input type="password" id="password" class="form-control passInput" placeholder="Enter Current Password"><i class="fa fa-eye-slash position-absolute passDisplay"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12 mt-2">
                                                                            <label>New Password*</label>
                                                                        </div>
                                                                        <div class="col-12 col-md-4 input_eye">
                                                                            <div class="passwordWrapper position-relative input_eye">
                                                                                <input type="password" id="password" class="form-control passInput" placeholder="Enter New Password"><i class="fa fa-eye-slash position-absolute passDisplay"></i>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-12 col-md-12 mt-2">
                                                                            <label >Confirm New Password*</label>
                                                                        </div>
                                                                        <div class="col-12 col-md-4 input_eye">
                                                                            <div class="passwordWrapper position-relative input_eye">
                                                                                <input type="password" id="password" class="form-control passInput" placeholder="Confirm New Password "><i class="fa fa-eye-slash position-absolute passDisplay"></i>
                                                                            </div>
                                                                        </div> 
                                                                        <div class="col-12 col-md-12">
                                                                            <a href="#" class="btnn gd-btn pl-4 pr-4 mt-2">Update</a>
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

<?php include( 'footer.php' );?>