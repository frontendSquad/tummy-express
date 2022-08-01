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
                            <h3 class="mb-2 page-main-hdng"> <i onclick="javascript:history.go(-1)" class="far fa-long-arrow-left"></i> Product Details</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card custom-card rounded-10">
                            <div class="card-body">
                                <div class="detail-block view_rmenu_main">
                                    <div class="row mb-3 pb-3">
                                        <div class="col-12 col-lg-4 col-md-12">
                                            <div class="view_rmenu_left">
                                                <div class="view_rmenu_ltop">
                                                    <ul class="view_rmenu_ltslider">
                                                        <li>
                                                            <img src="../images/view_rmenu_img.png">
                                                        </li>
                                                        <li>
                                                            <img src="../images/view_rmenu_img.png">
                                                        </li>
                                                        <li>
                                                            <img src="../images/view_rmenu_img.png">
                                                        </li>
                                                        <li>
                                                            <img src="../images/view_rmenu_img.png">
                                                        </li>
                                                    </ul>
                                                    <ul class="view_rmenu_lbslider">
                                                        <li>
                                                            <img src="../images/view_rmenu_thum_1.png">   
                                                        </li>
                                                        <li>
                                                            <img src="../images/view_rmenu_thum_2.png">   
                                                        </li>
                                                        <li>
                                                            <img src="../images/view_rmenu_thum_3.png">   
                                                        </li>
                                                        <li>
                                                            <img src="../images/view_rmenu_thum_1.png">   
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7 col-md-12">
                                            <div class="view_rmenu_right">
                                                <div class="view_rmenu_rboxtop">
                                                    <h4>Product Name</h4>
                                                    <h6><i class="fas fa-circle"></i> Active</h6>
                                                </div>
                                                <p class="">Product Category</p>
                                                <h3>$321</h3>
                                                <ul>
                                                    <li>
                                                        <div>
                                                            <h6>Add-Ons 1</h6>
                                                            <p>Fries With Drink</p>
                                                        </div>
                                                        <div>
                                                            <h4>$100</h4>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h6>Add-Ons 2</h6>
                                                            <p>Fries With Drink</p>
                                                        </div>
                                                        <div>
                                                            <h4>$100</h4>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy <br>seirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam<br> voluptua. At vero</p>
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

