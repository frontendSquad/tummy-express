<?php

$title = "Tummy Express - Dashboard";
include( 'header.php' );

?>

    <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        <!-- fixed-top-->
        <?php include( 'topbar.php' ); ?>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        
        <?php include( 'sidebar.php' ); ?> 
<div class="app-content content  dashboard">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration" class="my-profile">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-md-row flex-column justify-content-between border-bottom mb-3">
                            <h3 class="mb-2 page-main-hdng">Restaurant Name</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card custom-card rounded-10">
                            <div class="card-body">
                                <div class="detail-block">
                                    <div class="row mb-3 pb-3">
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="media d-md-flex d-block">
                                                <div class="media-body pl-0">
                                                    <div class="row detail-row d-flex align-items-start">
                                                        <div class="col-xl-4 col-md-4 col-12">
                                                            <div class="profile-img text-center m-auto m-md-0">
                                                                <img src="../images/profile-avatar.png" class="img-fluid ml-0" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-8 col-12">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Full Name</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">ABC</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Restaurant Name</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">Reatuarant ABC</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Email Address</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">abc@gmail.com</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Phone No.</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">+1-541-754-3010</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Requested On</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">08/14/2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <a href="#" class="btn-green mr-1">Accept</a>
                                                                    <a href="#" class="btn-red">Reject</a>
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="d-flex justify-content-end">
                                                <p class="color-gray"><i class="fas fa-map-marker-alt text-info pr-1"></i> JANE ROE 200 E MAIN ST PHOENIX AZ 85123</p>
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

<?php
include('footer.php');
?>