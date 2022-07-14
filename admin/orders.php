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
                                    <div class="top align-items-center mb-2">
                                        <h1>Category Management </h1>
                                        <h4 class="h2 font-weight-bold mt-1 nunito">Order Logs</h4> </div>
                                    <div class="orders_main">
                                        <nav>
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"> 
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Received Orders</a> 
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">In-Process Orders</a> 
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Prepared Orders</a> 
                                                <a class="nav-item nav-link" id="nav-onroute-tab" data-toggle="tab" href="#nav-onroute" role="tab" aria-controls="nav-contact" aria-selected="false">OnRoute Orders</a> 
                                                <a class="nav-item nav-link" id="nav-delivered-tab" data-toggle="tab" href="#nav-delivered" role="tab" aria-controls="nav-contact" aria-selected="false">Delivered Orders</a> 
                                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Cancelled Orders</a> 
                                            </div>
                                        </nav>
                                        <div class="tab-content px-sm-0" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="user-listing-top mb-3">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                                                            <div class="dataTables_length">
                                                                <label class="d-inline-block">Show</label>
                                                                <select class="form-control d-inline-block">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select>
                                                                <label class="d-inline-block">Entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2 mt-md-0 d-md-flex d-block justify-content-start justify-content-md-end align-items-center">
                                                            <div class="dataTables_filter">
                                                                <div class="search-wrap">
                                                                    <input type="search" class="form-control" placeholder="Search......" /> </div>
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
                                                                                        <th class="sorting">Order ID</th>
                                                                                        <th class="sorting">Order Time</th>
                                                                                        <th class="sorting">Order Age</th>
                                                                                        <th class="sorting">Order Date</th>
                                                                                        <th class="sorting">Customer Name</th>
                                                                                        <th class="sorting">Amount paid</th>
                                                                                        <th class="sorting">Order Status</th>
                                                                                        <th class="sorting">Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle danger" data-toggle="dropdown"> Received <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#" data-toggle="modal" data-target=".oraccept_popup"> Accept</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-received.php"><i class="fas fa-eye"></i> View Order</a> <a class="dropdown-item" href="edit-category.php"><i class="fas fa-check"></i> Accept</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target=".activated"><i class="fas fa-times-circle"></i> Reject</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle danger" data-toggle="dropdown"> Received <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#" data-toggle="modal" data-target=".oraccept_popup"> Accept</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-prepared.php"><i class="fas fa-eye"></i> View Order</a> <a class="dropdown-item" href="edit-category.php"><i class="fas fa-check"></i> Accept</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target=".activated"><i class="fas fa-times-circle"></i> Reject</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle danger" data-toggle="dropdown"> Received <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#" data-toggle="modal" data-target=".oraccept_popup"> Accept</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-process.php"><i class="fas fa-eye"></i> View Order</a> <a class="dropdown-item" href="edit-category.php"><i class="fas fa-check"></i> Accept</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target=".activated"><i class="fas fa-times-circle"></i> Reject</a> </div>
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
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <div class="user-listing-top mb-3">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                                                            <div class="dataTables_length">
                                                                <label class="d-inline-block">Show</label>
                                                                <select class="form-control d-inline-block">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select>
                                                                <label class="d-inline-block">Entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2 mt-md-0 d-md-flex d-block justify-content-start justify-content-md-end align-items-center">
                                                            <div class="dataTables_filter">
                                                                <div class="search-wrap">
                                                                    <input type="search" class="form-control" placeholder="Search......" /> </div>
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
                                                                                        <th class="sorting">Order ID</th>
                                                                                        <th class="sorting">Order Time</th>
                                                                                        <th class="sorting">Order Age</th>
                                                                                        <th class="sorting">Ready Target</th>
                                                                                        <th class="sorting">Order Date</th>
                                                                                        <th class="sorting">Customer Name</th>
                                                                                        <th class="sorting">Amount paid</th>
                                                                                        <th class="sorting">Order Status</th>
                                                                                        <th class="sorting">Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>05 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle text-yellow" data-toggle="dropdown"> In-Process <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#"> Prepared</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-process.php"><i class="fas fa-eye"></i> View Order</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>10 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle text-yellow" data-toggle="dropdown"> In-Process <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#"> Prepared</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-process.php"><i class="fas fa-eye"></i> View Order</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>20 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle text-yellow" data-toggle="dropdown"> In-Process <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#"> Prepared</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-process.php"><i class="fas fa-eye"></i> View Order</a> </div>
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
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <div class="user-listing-top mb-3">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                                                            <div class="dataTables_length">
                                                                <label class="d-inline-block">Show</label>
                                                                <select class="form-control d-inline-block">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select>
                                                                <label class="d-inline-block">Entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2 mt-md-0 d-md-flex d-block justify-content-start justify-content-md-end align-items-center">
                                                            <div class="dataTables_filter">
                                                                <div class="search-wrap">
                                                                    <input type="search" class="form-control" placeholder="Search......" /> </div>
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
                                                                                        <th class="sorting">Order ID</th>
                                                                                        <th class="sorting">Order Time</th>
                                                                                        <th class="sorting">Order Age</th>
                                                                                        <th class="sorting">Order Date</th>
                                                                                        <th class="sorting">Customer Name</th>
                                                                                        <th class="sorting">Amount paid</th>
                                                                                        <th class="sorting">Order Status</th>
                                                                                        <th class="sorting">Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle text-green" data-toggle="dropdown"> Prepared <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#"> OnRoute</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-prepared.php"><i class="fas fa-eye"></i> View Order</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle text-green" data-toggle="dropdown"> Prepared <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#"> OnRoute</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-prepared.php"><i class="fas fa-eye"></i> View Order</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle text-green" data-toggle="dropdown"> Prepared <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#"> OnRoute</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-prepared.php"><i class="fas fa-eye"></i> View Order</a> </div>
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
                                            <div class="tab-pane fade" id="nav-onroute" role="tabpanel" aria-labelledby="nav-onroute-tab">
                                                <div class="user-listing-top mb-3">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                                                            <div class="dataTables_length">
                                                                <label class="d-inline-block">Show</label>
                                                                <select class="form-control d-inline-block">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select>
                                                                <label class="d-inline-block">Entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2 mt-md-0 d-md-flex d-block justify-content-start justify-content-md-end align-items-center">
                                                            <div class="dataTables_filter">
                                                                <div class="search-wrap">
                                                                    <input type="search" class="form-control" placeholder="Search......" /> </div>
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
                                                                                        <th class="sorting">Order ID</th>
                                                                                        <th class="sorting">Order Time</th>
                                                                                        <th class="sorting">Order Age</th>
                                                                                        <th class="sorting">Order Date</th>
                                                                                        <th class="sorting">Customer Name</th>
                                                                                        <th class="sorting">Amount paid</th>
                                                                                        <th class="sorting">Order Status</th>
                                                                                        <th class="sorting">Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle text-green" data-toggle="dropdown"> OnRoute <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#"> delivered</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-prepared.php"><i class="fas fa-eye"></i> View Order</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle text-green" data-toggle="dropdown"> OnRoute <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#"> delivered</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-prepared.php"><i class="fas fa-eye"></i> View Order</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle text-green" data-toggle="dropdown"> OnRoute <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#"> delivered</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-prepared.php"><i class="fas fa-eye"></i> View Order</a> </div>
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
                                            <div class="tab-pane fade" id="nav-delivered" role="tabpanel" aria-labelledby="nav-delivered-tab">
                                                <div class="user-listing-top mb-3">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                                                            <div class="dataTables_length">
                                                                <label class="d-inline-block">Show</label>
                                                                <select class="form-control d-inline-block">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select>
                                                                <label class="d-inline-block">Entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2 mt-md-0 d-md-flex d-block justify-content-start justify-content-md-end align-items-center">
                                                            <div class="dataTables_filter">
                                                                <div class="search-wrap">
                                                                    <input type="search" class="form-control" placeholder="Search......" /> </div>
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
                                                                                        <th class="sorting">Order ID</th>
                                                                                        <th class="sorting">Order Time</th>
                                                                                        <th class="sorting">Order Age</th>
                                                                                        <th class="sorting">Order Date</th>
                                                                                        <th class="sorting">Customer Name</th>
                                                                                        <th class="sorting">Amount paid</th>
                                                                                        <th class="sorting">Order Status</th>
                                                                                        <th class="sorting">Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle text-green" data-toggle="dropdown"> Prepared <i class="fas fa-angle-down text-light"></i></button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="#"> OnRoute</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-prepared.php"><i class="fas fa-eye"></i> View Order</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td class="text-green">Prepared</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-prepared.php"><i class="fas fa-eye"></i> View Order</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td class="text-green">Prepared</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-prepared.php"><i class="fas fa-eye"></i> View Order</a> </div>
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
                                            <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                                <div class="user-listing-top mb-3">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                                                            <div class="dataTables_length">
                                                                <label class="d-inline-block">Show</label>
                                                                <select class="form-control d-inline-block">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select>
                                                                <label class="d-inline-block">Entries</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2 mt-md-0 d-md-flex d-block justify-content-start justify-content-md-end align-items-center">
                                                            <div class="dataTables_filter">
                                                                <div class="search-wrap">
                                                                    <input type="search" class="form-control" placeholder="Search......" /> </div>
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
                                                                                        <th class="sorting">Order ID</th>
                                                                                        <th class="sorting">Order Time</th>
                                                                                        <th class="sorting">Order Age</th>
                                                                                        <th class="sorting">Order Date</th>
                                                                                        <th class="sorting">Customer Name</th>
                                                                                        <th class="sorting">Amount paid</th>
                                                                                        <th class="sorting">Order Status</th>
                                                                                        <th class="sorting">Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td class="text-danger">Cancelled</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-cancelled.php"><i class="fas fa-eye"></i> View Order</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td class="text-danger">Cancelled</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-cancelled.php"><i class="fas fa-eye"></i> View Order</a> </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>2136</td>
                                                                                        <td>001</td>
                                                                                        <td>20:00</td>
                                                                                        <td>01 min</td>
                                                                                        <td>mm/dd/yyyy</td>
                                                                                        <td>Abc</td>
                                                                                        <td>$12345</td>
                                                                                        <td class="text-danger">Cancelled</td>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button>
                                                                                                <div class="dropdown-menu"> <a class="dropdown-item" href="order-details-cancelled.php"><i class="fas fa-eye"></i> View Order</a> </div>
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

<div class="default-modal oraccept_popup modal fade block-req" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i aria-hidden="true" class="fa fa-times"></i> </button>
            <div class="modal-body text-center"> <img src="images/check_img.png" class="img-fluid" alt="Check Image">
                <h5 class="font-weight-semibold mt-2">Accept </h5>
                <h6>how long this order will be before its ready </h6>
                <select name="" class="mt-2">
                    <option value="">5 min</option>
                    <option value="">10 min</option>
                    <option value="">20 min</option>
                    <option value="">30 min</option>
                    <option value="">Other</option>
                </select>
                <button class="gd-btn" data-dismiss="modal" aria-label="Close">Ok</button> 
            </div>
        </div>
    </div>
</div>



<!--delete-req-confirm Modal end -->
<?php include( 'footer.php' );?>