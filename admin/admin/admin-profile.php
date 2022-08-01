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
                                                <!-- <a href="edit-admin-profile.php" class="btnn gd-btn">edit</a> -->
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
                                                            <div class="col-md-5 col-12">
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6">
                                                                        <div class="attached ml-auto mr-auto mb-5">
                                                                            <img src="../images/avatar.png" alt="Admin Image">
                                                                        </div>                     
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6">
                                                                        <h4 class="h2 nunito black font-weight-bold text-center">Account</h4>



                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-4">
                                                                        <h6>Name</h6>
                                                                    </div>
                                                                    <div class="col-12 col-md-8">
                                                                        <p>Levis Carroll</p>
                                                                    </div>
                                                                    <div class="col-12 col-md-4">
                                                                        <h6>Email</h6>
                                                                    </div>
                                                                    <div class="col-12 col-md-8">
                                                                        <p>Email@mail.com</p>
                                                                    </div>
                                                                    <div class="col-12 col-md-4">
                                                                        <h6>Restaurant Name</h6>
                                                                    </div>
                                                                    <div class="col-12 col-md-8">
                                                                        <p>Restaurant ABC</p>
                                                                    </div> 
                                                                    <div class="col-12 col-md-4">
                                                                        <h6>Phone No</h6>
                                                                    </div>
                                                                    <div class="col-12 col-md-8">
                                                                        <p>+1 101 202 303</p>
                                                                    </div> 
                                                                    <div class="col-12 col-md-4">
                                                                        <h6>Address</h6>
                                                                    </div>
                                                                    <div class="col-12 col-md-8">
                                                                        <p>Jane Roe 200 E main ST Phonix AZ 85123 </p>
                                                                    </div> 
                                                                    <div class="col-12 col-md-12">
                                                                        <a href="edit-profile.php" class="btnn gd-btn pl-4 pr-4 mt-2">Edit Profile</a>
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