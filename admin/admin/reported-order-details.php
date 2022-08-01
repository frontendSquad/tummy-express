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
                        <div class="d-flex flex-md-row flex-column border-bottom justify-content-lg-between mb-3">
                            <h3 class="mb-2 page-main-hdng pr-2"> <i onclick="javascript:history.go(-1)" class="far fa-long-arrow-left"></i> Reported Order Details</h3>
                            <div>
                                <a href="#" class="btn btn-primary mr-1" data-target=".rejection_reason" data-toggle="modal">Enter Rejection Reason</a>
                                <a href="#" class="btn btn-primary" data-target=".refund-amount" data-toggle="modal">Refund Amount</a>
                            </div>
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
                                            <div class="align-content-center align-items-center d-flex justify-content-lg-between mb-3">
                                                <h4 class="headingh4">Order Information</h4>
                                                <div class="order_status">
                                                    <p>Order Status</p>
                                                    <!-- <h6>Pending <i class="fas fa-caret-down"></i></h6> -->
                                                    <div class="btn-group ml-1">
                                                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                                        Pending
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"> Reject</a>
                                                            <a class="dropdown-item" href="#"> Resolved </a>
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
                                                <p class="color-gray d-inline-block pr-3"><i class="fas fa-burger-soda text-info pr-1"></i> ABC Restaurant </p>
                                                <p class="color-gray d-inline-block pr-3"><i class="fas fa-map-marker-alt text-info pr-1"></i> JANE ROE 200 E MAIN ST PHOENIX AZ 85123 </p>
                                                <p class="color-gray d-inline-block pr-3"><i class="fas fa-phone-alt text-info pr-1"></i> +1 101 202 303 </p>
                                            </div>
                                        </div>     
                                    </div>   
                                    <div class="row border-bottom">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <div class="mt-3 mb-3">
                                                <h4 class="headingh4 mb-2">Customer Information</h4>
                                                <p class="color-gray d-inline-block pr-3"><i class="fas fa-user text-info pr-1"></i> Jason Mark</p>
                                                <p class="color-gray d-inline-block pr-3"><i class="fas fa-map-marker-alt text-info pr-1"></i> JANE ROE 200 E MAIN ST PHOENIX AZ 85123 </p>
                                                <p class="color-gray d-inline-block pr-3"><i class="fas fa-phone-alt text-info pr-1"></i> +1 101 202 303 </p>
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






<div class="modal fade refund-amount p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="row">
                        <div class="col-12 text-left">
                            <h5 class="font-weight-semibold text-left text-secondary mb-2">Please Enter The Amount You Want To Refund To The User</h5>
                            <input type="text" name="" placeholder="Enter Amount">
                            <div class="modal-buttons">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".amount_refunded">Refund</button>
                                <button type="submit" class="btn btn-secondary ml-1 cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade amount_refunded p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="row">
                        <div class="col-12 text-left">
                            <!-- <i class="fa-check-confirm">
                                <img src="../images/question-icon.png" alt="">
                            </i> -->
                            <h5 class="text-left font-weight-semibold text-success-primry">Success</h5>
                            <p>Amount Refunded Successfully</p>
                            <div class="modal-buttons mt-3">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close">ok  </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade rejection_reason p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="row">
                        <div class="col-12 text-left">
                            <h5 class="font-weight-semibold text-left text-secondary mb-2">Please Enter The Rejection Reason</h5>
                            <textarea name="" placeholder="Enter Rejection Reason"></textarea>
                            <div class="modal-buttons">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".suurejection_reason">Submit</button>
                                <button type="submit" class="btn btn-secondary ml-1 cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade suurejection_reason p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="row">
                        <div class="col-12 text-left">
                            <!-- <i class="fa-check-confirm">
                                <img src="../images/question-icon.png" alt="">
                            </i> -->
                            <h5 class="text-left font-weight-semibold text-success-primry">Success</h5>
                            <p>Rejection Reason Successfully Submit</p>
                            <div class="modal-buttons mt-3">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close">ok  </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include('footer.php');
?>

