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
                                            <h1>Edit Profile</h1>
                                            </div>
                                            <div class="box">
                                                <div class="row">
                                                    <div class="col-lg-12 col-12">
                                                        <div class="row">
                                                            <div class="col-md-3 col-12"> 
                                                                <div class="profileleftb">
                                                                    <ul>
                                                                        <li><a href="#" title="">Restaurant Information</a></li>
                                                                        <li class="active"><a href="admin-profile.php" title="">Account</a></li>
                                                                        <li><a href="update_password.php" title="">Change Password</a></li>
                                                                        <li><a href="time-management.php" title="">Time Management</a></li>
                                                                    </ul>
                                                                </div>      
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="attached camera_main mb-5">
                                                                                <img src="images/avatar.png" alt="Admin Image">
                                                                                <div class="camera_box">
                                                                                    <i class="fas fa-camera"></i>
                                                                                    <input type="file" name="">
                                                                                </div>
                                                                            </div>                    
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <h4 class="h2 nunito black font-weight-bold">Account</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-3 mb-3">
                                                                            <h6>Name</h6>
                                                                        </div>
                                                                        <div class="col-12 col-md-9">
                                                                            <input type="text" name="" placeholder="Levis Carroll" class="w-75">
                                                                        </div>
                                                                        <div class="col-12 col-md-3 mb-3">
                                                                            <h6>Email</h6>
                                                                        </div>
                                                                        <div class="col-12 col-md-9">
                                                                            <p>Email@mail.com</p>
                                                                        </div>
                                                                        <div class="col-12 col-md-3 mb-3">
                                                                            <h6>Restaurant Name</h6>
                                                                        </div>
                                                                        <div class="col-12 col-md-9">
                                                                            <p>Restaurant ABC</p>
                                                                        </div> 
                                                                        <div class="col-12 col-md-3 mb-3">
                                                                            <h6>Phone No</h6>
                                                                        </div>
                                                                        <div class="col-12 col-md-9"> 
                                                                            <input type="number" name="" placeholder="+1 101 202 303" class="w-75">
                                                                        </div> 
                                                                        <div class="col-12 col-md-3 mb-3">
                                                                            <h6>Address</h6>
                                                                        </div>
                                                                        <div class="col-12 col-md-9">
                                                                            <input type="text" name="" placeholder="Jane Roe 200 E main ST Phonix AZ 85123" class="w-75">
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