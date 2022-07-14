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
                                <div class="card ">
                                    <div class="card-content collapse show">
                                        <div class="card-dashboard dataTables_wrapper">
                                            <div class="d-md-flex top justify-content-md-between align-items-center mb-2">
                                                <h1>Payment Logs</h1>
                                                <h6 class="h2 text-danger font-weight-semibold">Total Orders for this month:30</h6>
                                            </div>
                                            <div class="user-listing-top mb-3">
                                                <div class="row align-items-end">
                                                    <div class="col-12 col-md-9 col-lg-9 col-xl-9 mt-2">                            
                                                        <div class="d-sm-flex d-flex align-items-end justify-content-between">
                                                            <div class="dataTables_length d-flex align-items-center">
                                                                <label class="d-inline-block w-25">Show</label>
                                                                <select class="form-control d-inline-block">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select>
                                                                <label class="d-inline-block">Entries</label>
                                                            </div>  

                                                            <div class="input-wrap mr-0 mr-sm-2 mb-2 mb-sm-0 w-25">
                                                                <label for="">From</label>
                                                                <input type="date" id="datepicker-2" placeholder="From" class="form-control mb-0" /> 
                                                            </div>
                                                            <div class="input-wrap w-25">
                                                                <label for="">To</label>
                                                                <input type="date" id="datepicker-3" placeholder="to" class="form-control mb-0" /> 
                                                            </div>
                                                            <div class="dataTables_length">
                                                                <label class="d-block">Select Month</label>
                                                                <select class="form-control d-block">
                                                                    <option value="10">Jan, 20201</option>
                                                                    <option value="25">Jan, 20201</option>
                                                                    <option value="50">Jan, 20201</option>
                                                                    <option value="100">Jan, 20201</option>
                                                                </select>                                                                
                                                            </div>

                                                        </div>                                                       
                                                    </div>
                                                    <div class="col-12 col-md-3 col-lg-3 col-xl-3 mt-2 mt-md-0 d-md-flex d-block justify-content-start justify-content-md-end align-items-center">
                                                        <div class="dataTables_filter">
                                                            <div class="search-wrap">
                                                                <input type="search" class="form-control" placeholder="Search......" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box p-0">
                                                <div class="dataTables_wrapper">
                                                    <div class="row row-table">
                                                        <div class="main-tabble table-responsive">
                                                            <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <table class="table table-borderless dataTable">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="sorting">S. No.</th>
                                                                                    <th class="sorting">Order Id</th>
                                                                                    <th class="sorting">Order Date</th>
                                                                                    <th class="sorting">Total Amount</th>
                                                                                    <th class="sorting">Payment method</th>
                                                                                    <th class="sorting">Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>2136</td>
                                                                                    <td>001</td>
                                                                                    <td>mm/dd/yyyy</td>
                                                                                    <td>#123</td>
                                                                                    <td>COD</td>
                                                                                    <td>
                                                                                        <div class="btn-group ml-1">
                                                                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                            <div class="dropdown-menu"> 
                                                                                                <a class="dropdown-item" href="payment-logs-details-prepared.php"><i class="fas fa-eye"></i> View</a> 
                                                                                                <!-- <a class="dropdown-item" href="edit-category.php"><i class="fas fa-check"></i> Accept</a> 
                                                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target=".activated"><i class="fas fa-times-circle"></i> Reject</a>  -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </td> 
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite"> Showing 1 to 20 of 52 entries </div>
                                                </div>
                                                <div class="col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled"> <a href="#" class="page-link">Previous</a> </li>
                                                            <li class="paginate_button page-item active"> <a href="#" class="page-link">1</a> </li>
                                                            <li class="paginate_button page-item"> <a href="#" class="page-link">2</a> </li>
                                                            <li class="paginate_button page-item"> <a href="#" class="page-link">3</a> </li>
                                                            <li class="paginate_button page-item"> <a href="#" class="page-link">4</a> </li>
                                                            <li class="paginate_button page-item"> <a href="#" class="page-link">5</a> </li>
                                                            <li class="paginate_button page-item next disabled" i=""> <a href="#" class="page-link">Next</a> </li>
                                                        </ul>
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




<!--inactive Modal start -->
<div class="default-modal inactive modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
            <div class="modal-body text-center"> <img src="images/inactive_img.png" class="img-fluid" alt="Check Image">
                <h5 class="font-weight-semibold mt-2">Inactivate Category </h5>
                <h6>Are you sure you want to inactivate abc category?</h6>
                <button class="white-btn" data-toggle="modal" data-target=".inactive_successfully" data-dismiss="modal" aria-label="Close">yes</button> 
                <button class="gd-btn ml-2" data-dismiss="modal" aria-label="Close">no</button> 
            </div>
        </div>
    </div>
</div>

<div class="default-modal inactive_successfully modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
            <div class="modal-body text-center"> <img src="images/check_img.png" class="img-fluid" alt="Check Image">
                <h5 class="font-weight-semibold mt-2">In-Activate Category </h5>
                <h6>Category In-activated successfully!</h6>
                <button class="gd-btn" data-dismiss="modal" aria-label="Close">Ok</button> 
            </div>
        </div>
    </div>
</div>
<!--inactive Modal end -->


<!--activated Modal start -->
<div class="default-modal activated modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
            <div class="modal-body text-center"> <img src="images/inactive_img.png" class="img-fluid" alt="Check Image">
                <h5 class="font-weight-semibold mt-2">activate Category </h5>
                <h6>Are you sure you want to activate abc category?</h6>
                <button class="white-btn" data-toggle="modal" data-target=".activated_successfully" data-dismiss="modal" aria-label="Close">yes</button> 
                <button class="gd-btn ml-2" data-dismiss="modal" aria-label="Close">no</button> 
            </div>
        </div>
    </div>
</div>
<div class="default-modal activated_successfully modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
            <div class="modal-body text-center"> <img src="images/check_img.png" class="img-fluid" alt="Check Image">
                <h5 class="font-weight-semibold mt-2">Activate Category </h5>
                <h6>Category activated successfully!</h6>
                <button class="gd-btn" data-dismiss="modal" aria-label="Close">Ok</button> 
            </div>
        </div>
    </div>
</div>
<!--activated Modal end -->



<!--delete-req-confirm Modal end -->
<?php include( 'footer.php' );?>