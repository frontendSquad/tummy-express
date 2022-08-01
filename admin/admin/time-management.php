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
                                                                        <li><a href="admin-profile.php" title="">Account</a></li>
                                                                        <li><a href="update_password.php" title="">Change Password</a></li>
                                                                        <li class="active"><a href="time-management.php" title="">Time Management</a></li>
                                                                    </ul>
                                                                </div>      
                                                            </div>
                                                            <div class="col-md-9 col-12">
                                                                <div class="d-flex">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <label>Select Day*</label>
                                                                        </div>
                                                                        <div class="col-12 col-md-4">
                                                                            <select name="" class="w-100 form-control d-inline-block mb-1 mt-1">
                                                                                <option value="">Select day or days</option>
                                                                                <option value="">Monday</option>
                                                                                <option value="">Tuesday</option>
                                                                                <option value="">Wednesday</option>
                                                                                <option value="">Thursday</option>
                                                                                <option value="">Friday</option>
                                                                                <option value="">Saturday</option>
                                                                                <option value="">Sunday</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <label>Opening Time*</label>
                                                                        </div>
                                                                        <div class="col-12 col-md-4">
                                                                            <input type="time" name="" class="w-100 mb-1 mt-1" placeholder="19:00">
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <label >Closing Time*</label>
                                                                        </div>
                                                                        <div class="col-12 col-md-4">
                                                                            <input type="time" name="" class="w-100 mb-1 mt-1" placeholder="21:00">
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