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
                                <div class="detail-block">
                                    <div class="row border-bottom pb-2">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <h4 class="headingh4 mb-3">Order Information</h4>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="media d-md-flex d-block">
                                                <div class="media-body pl-0">
                                                    <div class="row detail-row d-flex align-items-start">
                                                        <div class="col-xl-12 col-12">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 ">
                                                                    <h5 class="headingh5 font-weight-semibold color-gray mb-1">Order Information</h5>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Order Date</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">18 Jan , 2019</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Order Status</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">Delivered</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Order Id</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">001</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Payment Method</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">Credit/Debit Card</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="media d-md-flex d-block">
                                                <div class="media-body pl-0">
                                                    <div class="row detail-row d-flex align-items-start">
                                                        <div class="col-xl-12 col-12">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 ">
                                                                    <h5 class="headingh5 font-weight-semibold color-gray mb-1">Account Information</h5>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Customer Name </p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">Rikkard Ambrose</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Customer Email </p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">Rikkar@gmail.com</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Customer Phone </p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">+1-541-754-3010</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row border-bottom">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <div class="mt-3 mb-3">
                                                <h4 class="headingh4 mb-2">Address Information </h4>
                                                <p class="color-gray"><i class="fas fa-map-marker-alt text-info pr-1"></i> JANE ROE 200 E MAIN ST PHOENIX AZ 85123 </p>
                                            </div>
                                        </div>     
                                    </div>                                   
                                </div>
                            </div>
                        </div>

                        <div class="shadow-none orderin">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <h4 class="headingh4 mb-1">Order Information</h4>
                                    <div class="main-tabble table-responsive">
                                        <div class="dataTables_wrapper container-fluid">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <table class="table table-borderless dataTable">
                                                        <tbody>
                                                            <tr>
                                                                <td><img src="../images/view_rmenu_thum_1.png"></td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold">Product Name</h5>
                                                                    <p class="color-gray">Product Details</p>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold text-right">Quantity</h5>
                                                                    <p class="color-gray text-right">x1</p>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold text-right">Unit Price</h5>
                                                                    <p class="color-gray text-right">$202</p>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold text-right">Product Total</h5>
                                                                    <p class="color-gray text-right">$101</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="../images/view_rmenu_thum_2.png"></td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold">Product Name</h5>
                                                                    <p class="color-gray">Product Details</p>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold text-right">Quantity</h5>
                                                                    <p class="color-gray text-right">x1</p>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold text-right">Unit Price</h5>
                                                                    <p class="color-gray text-right">$202</p>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold text-right">Product Total</h5>
                                                                    <p class="color-gray text-right">$101</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="../images/view_rmenu_thum_3.png"></td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold">Product Name</h5>
                                                                    <p class="color-gray">Product Details</p>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold text-right">Quantity</h5>
                                                                    <p class="color-gray text-right">x1</p>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold text-right">Unit Price</h5>
                                                                    <p class="color-gray text-right">$202</p>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-semibold text-right">Product Total</h5>
                                                                    <p class="color-gray text-right">$101</p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="row justify-content-end">
                                                        <div class="col-md-4 border-top pt-2">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray text-right">Sub Total</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray text-right">$202</p>
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray text-right">Delivery</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray text-right">$202</p>
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray text-right">Total Rates</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray text-right">$202</p>
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

<?php
include('footer.php');
?>

