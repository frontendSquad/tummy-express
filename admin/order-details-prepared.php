<?php

$title = "Tummy Express - Dashboard";
include( 'header.php' );

?>

    <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        <!-- fixed-top-->
        <?php include( 'topbar.php' ); ?>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        
        <?php include( 'sidebar.php' ); ?>      










        
        <div class="app-content content my-vehicles">
            <div class="content-wrapper">
                <div class="content-body">
                    <!-- Basic form layout section start -->
                    <section id="configuration">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0">
                                    <div class="card-content collapse show">
                                        <div class="card-dashboard dataTables_wrapper">
                                            <div class="top align-items-center mb-2">
                                                <h1> <i onclick="javascript:history.go(-1)" class="fas fa-chevron-left mr-1"></i> Order Details</h1>
                                                <h4 class="h2 font-weight-bold mt-1 nunito ml-2">Order & Account Information</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="box py-0 order-daccep">
                                    <div class="card custom-card rounded-10 mb-0 pb-0">
                                        <div class="card-body pb-0">
                                            <div class="detail-block">
                                                <div class="row border-bottom pb-2">
                                                    <div class="col-12 col-lg-12 col-md-12">
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <h4 class="h2 nunito black font-weight-bold">Order Information</h4>
                                                            <a href="#" class="btn btn-green rounded" data-toggle="modal" data-target=".status_change">Prepared</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6 col-md-12">
                                                        <div class="media d-md-flex d-block">
                                                            <div class="media-body pl-0">
                                                                <div class="row detail-row d-flex align-items-start">
                                                                    <div class="col-xl-12 col-12">
                                                                        <div class="row mb-1">
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="">Order Date:</p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="text-light">18 Jan, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-1">
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="">Payment Method:</p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="text-light">Credit/Debit Card</p>
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
                                                                        <div class="row mb-1">
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="">Order ID:</p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="text-light">#5693</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-1">
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="">Order Status:</p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <select name="">
                                                                                    <option value="">Received</option>
                                                                                    <option value="">In-Process</option>
                                                                                    <option value="">Prepared</option>
                                                                                    <option value="">Cancel</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row border-bottom pb-2 pt-3">
                                                    <div class="col-12 col-lg-12 col-md-12">
                                                        <div class="mb-2">
                                                            <h4 class="h2 nunito black font-weight-bold">Account Information</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6 col-md-12">
                                                        <div class="media d-md-flex d-block">
                                                            <div class="media-body pl-0">
                                                                <div class="row detail-row d-flex align-items-start">
                                                                    <div class="col-xl-12 col-12">
                                                                        <div class="row mb-1">
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="">Customer Name: </p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="text-light">Rikkard Ambrose</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-1">
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="">Customer Email:</p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="text-light">Rikkar@gmail.com</p>
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
                                                                        <div class="row mb-1">
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="">Customer Phone: </p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="text-light">+1-541-754-3010</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row border-bottom pb-2 pt-3">
                                                    <div class="col-12 col-lg-12 col-md-12">
                                                        <div class="mb-2">
                                                            <h4 class="h2 nunito black font-weight-bold">Address Information </h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6 col-md-12">
                                                        <div class="media d-md-flex d-block">
                                                            <div class="media-body pl-0">
                                                                <div class="row detail-row d-flex align-items-start">
                                                                    <div class="col-xl-12 col-12">
                                                                        <div class="row mb-1">
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="">Address: </p>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <p class="text-light">Jane Roe 200 E Main St phoenix Az 7689</p>
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
                                    <div class="shadow-none orderin">
                                        <div class="card-body">
                                            <div class="row mt-1">
                                                <div class="main-tabble w-100">
                                                    <div class="dataTables_wrapper">
                                                        <div class="row">
                                                            <div class="col-md-9 col-sm-12">
                                                                <h4 class="h2 nunito black font-weight-bold">Order Information</h4>
                                                                <table class="table table-borderless dataTable  table-responsive">
                                                                    <tbody>
                                                                        <tr class="box-shadow-0">
                                                                            <td colspan="3">
                                                                                <h5 class="font-weight-semibold">Order Information</h5>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-semibold">Unit Price</h5>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-semibold">Total</h5>
                                                                            </td>
                                                                        </tr>                           
                                                                        <tr class="box-shadow-0">
                                                                            <td><img src="images/product-details/view_rmenu_thum_1.png"></td>
                                                                            <td>    
                                                                                <h5 class="font-weight-semibold">Product Name</h5>
                                                                                <p class="text-light">A grilled chicken patty with bbq sauce</p>
                                                                            </td>
                                                                            <td>
                                                                                <p class="text-light">2x</p>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-semibold">$101</h5>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-semibold">$500</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="box-shadow-0">
                                                                            <td colspan="3">
                                                                                <h5 class="font-weight-semibold">Add-Ons</h5>
                                                                            </td>
                                                                        </tr> 
                                                                        <tr class="box-shadow-0">
                                                                            <td><img src="images/product-details/view_rmenu_thum_2.png"></td>
                                                                            <td>
                                                                                <h5 class="font-weight-semibold">Ad-Ons</h5>
                                                                                <p class="text-light">Fries With Drink</p>
                                                                            </td>
                                                                            <td>
                                                                                <p class="text-light text-right">x3</p>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-semibold">$67</h5>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-semibold">$300</h5>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>     
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <h5 class="font-weight-semibold">Notes:</h5> 
                                                                    <p class="text-light ml-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
                                                                </div>                                              
                                                            </div>
                                                            <div class="col-md-3 col-sm-12">
                                                                <div class="row justify-content-end">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 ">
                                                                                <h4 class="h2 nunito black font-weight-bold mb-3">Summary:</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-2 ">                                                                      
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <h5 class="">Sub Total</h5>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <h5 class="text-right">$202</h5>
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-2 ">
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <h5 class="">Delivery</h5>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <h5 class="text-right">$202</h5>
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row mb-2 border-top pt-2">
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <h5 class="">Total Rates</h5>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 ">
                                                                                <h5 class="text-right">$202</h5>
                                                                            </div>
                                                                        </div>                                                        
                                                                    </div>                                                
                                                                </div> 
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="button mb-4">
                                                                    <a href="#" class="gd-btn pl-3 pr-3" data-toggle="modal" data-target=".accepted_activate">Accept</a>
                                                                    <a href="#" class="btn-red pl-3 pr-3" data-toggle="modal" data-target=".rejected_activate">Reject</a>
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









<!--accepted_activate Modal start -->
<div class="default-modal accepted_activate modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
            <div class="modal-body text-center"> <img src="images/check_img.png" class="img-fluid" alt="Check Image">
                <h5 class="font-weight-semibold mt-2">Alert</h5>
                <h6>You have accepted the order.</h6>
                <button class="gd-btn" data-dismiss="modal" aria-label="Close">Ok</button> 
            </div>
        </div>
    </div>
</div>
<!--accepted_activate Modal end -->




<!--rejected_activate Modal start -->
<div class="default-modal rejected_activate modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
            <div class="modal-body text-center"> <img src="images/inactive_img.png" class="img-fluid" alt="Check Image">
                <h5 class="font-weight-semibold mt-2">Alert</h5>
                <h6>You have rejected the order.</h6>
                <button class="gd-btn" data-dismiss="modal" aria-label="Close">Ok</button> 
            </div>
        </div>
    </div>
</div>
<!--rejected_activate Modal end -->



<!--status_change Modal start -->
<div class="default-modal status_change modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
            <div class="modal-body text-center"> <img src="images/inactive_img.png" class="img-fluid" alt="Check Image">
                <h5 class="font-weight-semibold mt-2">Alert</h5>
                <h6>Are you sure you want to change the status?</h6>
                <button class="white-btn" data-toggle="modal" data-target=".status_successfully" data-dismiss="modal" aria-label="Close">yes</button> 
                <button class="gd-btn ml-2" data-dismiss="modal" aria-label="Close">no</button> 
            </div>
        </div>
    </div>
</div>
<div class="default-modal status_successfully modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
            <div class="modal-body text-center"> <img src="images/check_img.png" class="img-fluid" alt="Check Image">
                <h5 class="font-weight-semibold mt-2">Alert</h5>
                <h6>Status Changed Successfully!</h6>
                <button class="gd-btn" data-dismiss="modal" aria-label="Close">Ok</button> 
            </div>
        </div>
    </div>
</div>
<!--status_change Modal end -->



<!--delete-req-confirm Modal end -->
<?php include( 'footer.php' );?>