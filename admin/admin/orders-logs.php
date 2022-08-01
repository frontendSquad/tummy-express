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
                        <div class="d-flex flex-md-row flex-column justify-content-between border-bottom">
                            <h3 class="mb-2 page-main-hdng">Orders Logs</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card custom-card rounded-10">
                            <div class="card-body pt-0">
                                <div class="detail-block">
                                    <div class="row mb-3 pb-3">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <div class="order-logs">
                                                <ul class="nav nav-tabs nav-fill" role="tablist">
                                                  <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#rorders" role="tab" aria-controls="rorders" aria-selected="false  ">Received Orders</a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#porders" role="tab" aria-controls="porders" aria-selected="false">In Process Orders</a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#dorders" role="tab" aria-controls="dorders" aria-selected="false">Delivered Orders</a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#corders" role="tab" aria-controls="corders" aria-selected="false">Cancelled Orders</a>
                                                  </li>
                                                </ul>        
                                                <div class="tab-content mt-3">
                                                  <div class="tab-pane active" id="rorders" role="tabpanel" aria-labelledby="rorders-tab">    
                                                    <div class="order-log-main">
                                                        <div class="row user-listing-top">
                                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-2 sort-datepicker">
                                                                <div class="filter-wrap custom-filter mr-1  d-flex align-items-center justify-content-start">
                                                                    <label class="d-block mb-0 text-start mb-lg-0 mb-3">Show:</label>
                                                                    <div class="select-wrapper d-block ">
                                                                        <select name="" class="form-control" id="">
                                                                            <option value="">10</option>
                                                                            <option value="">50</option>
                                                                            <option value="">100</option>
                                                                        </select>
                                                                    </div>
                                                                    <label class="d-block mb-0 text-start mb-lg-0 mb-3 pl-1">Entries</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-2 sort-datepicker">
                                                                <div class="filter-wrap custom-filter mr-1 ">
                                                                    <div class="input-wrapper d-block w-100 ">
                                                                        <div class="search-wrap d-flex align-items-end justify-content-end">
                                                                            <input type="search" class="form-control w-75" placeholder="Search">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>  
                                                    <div class="shadow-none">
                                                        <div class="card-body">
                                                            <div class="row mt-1">
                                                                <div class="main-tabble table-responsive">
                                                                    <div class="dataTables_wrapper container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <table class="table table-borderless dataTable">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="">S.No <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Restaurant Name <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order ID <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order Date <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Title <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Amount Paid <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order Status <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-success-primry" data-toggle="dropdown">
                                                                                                    Recieved <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item"  data-toggle="modal" data-target=".order-inprocess"> In- Process</a>
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal">Recieved</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-success-primry" data-toggle="dropdown">
                                                                                                    Recieved <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item"  data-toggle="modal" data-target=".order-inprocess"> In- Process</a>
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal">Recieved</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-success-primry" data-toggle="dropdown">
                                                                                                    Recieved <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item"  data-toggle="modal" data-target=".order-inprocess"> In- Process</a>
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal">Recieved</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-success-primry" data-toggle="dropdown">
                                                                                                    Recieved <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item"  data-toggle="modal" data-target=".order-inprocess"> In- Process</a>
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal">Recieved</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-success-primry" data-toggle="dropdown">
                                                                                                    Recieved <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item"  data-toggle="modal" data-target=".order-inprocess"> In- Process</a>
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal">Recieved</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-success-primry" data-toggle="dropdown">
                                                                                                    Recieved <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">  
                                                                                                        <a class="dropdown-item"  data-toggle="modal" data-target=".order-inprocess"> In- Process</a>
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal">Recieved</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-5 align-self-center">
                                                                                <div class="dataTables_info">Showing 10 out of 40 records</div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-7">
                                                                                <div class="dataTables_paginate">
                                                                                    <ul class="pagination">
                                                                                        <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                                                                        <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                                                                        <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                                                                        <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                                                                        <li class="paginate_button page-item next disabled" i><a href="#" class="page-link">Next</a></li>
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
                                                  <div class="tab-pane" id="porders" role="tabpanel" aria-labelledby="porders-tab">  
                                                    <div class="order-log-main">
                                                        <div class="row user-listing-top">
                                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-2 sort-datepicker">
                                                                <div class="filter-wrap custom-filter mr-1  d-flex align-items-center justify-content-start">
                                                                    <label class="d-block mb-0 text-start mb-lg-0 mb-3">Show:</label>
                                                                    <div class="select-wrapper d-block ">
                                                                        <select name="" class="form-control" id="">
                                                                            <option value="">10</option>
                                                                            <option value="">50</option>
                                                                            <option value="">100</option>
                                                                        </select>
                                                                    </div>
                                                                    <label class="d-block mb-0 text-start mb-lg-0 mb-3 pl-1">Entries</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-2 sort-datepicker">
                                                                <div class="filter-wrap custom-filter mr-1 ">
                                                                    <div class="input-wrapper d-block w-100 ">
                                                                        <div class="search-wrap d-flex align-items-end justify-content-end">
                                                                            <input type="search" class="form-control w-75" placeholder="Search">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>  
                                                    <div class="shadow-none">
                                                        <div class="card-body">
                                                            <div class="row mt-1">
                                                                <div class="main-tabble table-responsive">
                                                                    <div class="dataTables_wrapper container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <table class="table table-borderless dataTable">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="">S.No <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Restaurant Name <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order ID <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order Date <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Title <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Amount Paid <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order Status <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-danger" data-toggle="dropdown">
                                                                                                    In Process <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".order-delivered"> Delivered</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-danger" data-toggle="dropdown">
                                                                                                    In Process <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".order-delivered"> Delivered</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-danger" data-toggle="dropdown">
                                                                                                    In Process <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".order-delivered"> Delivered</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-danger" data-toggle="dropdown">
                                                                                                    In Process <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".order-delivered"> Delivered</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-danger" data-toggle="dropdown">
                                                                                                    In Process <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".order-delivered"> Delivered</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="dropdown-toggle text-danger" data-toggle="dropdown">
                                                                                                    In Process <i class="fas fa-sort-down"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" data-toggle="modal" data-target=".order-delivered"> Delivered</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-5 align-self-center">
                                                                                <div class="dataTables_info">Showing 10 out of 40 records</div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-7">
                                                                                <div class="dataTables_paginate">
                                                                                    <ul class="pagination">
                                                                                        <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                                                                        <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                                                                        <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                                                                        <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                                                                        <li class="paginate_button page-item next disabled" i><a href="#" class="page-link">Next</a></li>
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
                                                  <div class="tab-pane" id="dorders" role="tabpanel" aria-labelledby="dorders-tab"> 
                                                    <div class="order-log-main">
                                                        <div class="row user-listing-top">
                                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-2 sort-datepicker">
                                                                <div class="filter-wrap custom-filter mr-1  d-flex align-items-center justify-content-start">
                                                                    <label class="d-block mb-0 text-start mb-lg-0 mb-3">Show:</label>
                                                                    <div class="select-wrapper d-block ">
                                                                        <select name="" class="form-control" id="">
                                                                            <option value="">10</option>
                                                                            <option value="">50</option>
                                                                            <option value="">100</option>
                                                                        </select>
                                                                    </div>
                                                                    <label class="d-block mb-0 text-start mb-lg-0 mb-3 pl-1">Entries</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-2 sort-datepicker">
                                                                <div class="filter-wrap custom-filter mr-1 ">
                                                                    <div class="input-wrapper d-block w-100 ">
                                                                        <div class="search-wrap d-flex align-items-end justify-content-end">
                                                                            <input type="search" class="form-control w-75" placeholder="Search">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>  
                                                    <div class="shadow-none">
                                                        <div class="card-body">
                                                            <div class="row mt-1">
                                                                <div class="main-tabble table-responsive">
                                                                    <div class="dataTables_wrapper container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <table class="table table-borderless dataTable">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="">S.No <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Restaurant Name <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order ID <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order Date <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Title <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Amount Paid <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order Status <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class=" text-blue">Delivered</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class=" text-blue">Delivered</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class=" text-blue">Delivered</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class=" text-blue">Delivered</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class=" text-blue">Delivered</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class=" text-blue">Delivered</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-5 align-self-center">
                                                                                <div class="dataTables_info">Showing 10 out of 40 records</div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-7">
                                                                                <div class="dataTables_paginate">
                                                                                    <ul class="pagination">
                                                                                        <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                                                                        <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                                                                        <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                                                                        <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                                                                        <li class="paginate_button page-item next disabled" i><a href="#" class="page-link">Next</a></li>
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
                                                  <div class="tab-pane" id="corders" role="tabpanel" aria-labelledby="corders-tab">      
                                                    <div class="order-log-main">
                                                        <div class="row user-listing-top">
                                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-2 sort-datepicker">
                                                                <div class="filter-wrap custom-filter mr-1  d-flex align-items-center justify-content-start">
                                                                    <label class="d-block mb-0 text-start mb-lg-0 mb-3">Show:</label>
                                                                    <div class="select-wrapper d-block ">
                                                                        <select name="" class="form-control" id="">
                                                                            <option value="">10</option>
                                                                            <option value="">50</option>
                                                                            <option value="">100</option>
                                                                        </select>
                                                                    </div>
                                                                    <label class="d-block mb-0 text-start mb-lg-0 mb-3 pl-1">Entries</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-2 sort-datepicker">
                                                                <div class="filter-wrap custom-filter mr-1 ">
                                                                    <div class="input-wrapper d-block w-100 ">
                                                                        <div class="search-wrap d-flex align-items-end justify-content-end">
                                                                            <input type="search" class="form-control w-75" placeholder="Search">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>  
                                                    <div class="shadow-none">
                                                        <div class="card-body">
                                                            <div class="row mt-1">
                                                                <div class="main-tabble table-responsive">
                                                                    <div class="dataTables_wrapper container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <table class="table table-borderless dataTable">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="">S.No <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Restaurant Name <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order ID <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order Date <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Title <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Amount Paid <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Order Status <i class="fas fa-sort"></i></th>
                                                                                            <th class="">Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class="text-danger">Cancelled</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class="text-danger">Cancelled</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class="text-danger">Cancelled</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class="text-danger">Cancelled</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class="text-danger">Cancelled</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01</td>
                                                                                            <td>Abc</td>
                                                                                            <td>454</td>
                                                                                            <td>mm/dd/yyyy</td>
                                                                                            <td>Product Name</td>
                                                                                            <td>$123</td>
                                                                                            <td class="text-danger">Cancelled</td>
                                                                                            <td>
                                                                                                <div class="btn-group ml-1">
                                                                                                    <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                                                    <i class="fa fa-ellipsis-v"></i>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu">
                                                                                                        <a class="dropdown-item" href="order-details-received.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-md-5 align-self-center">
                                                                                <div class="dataTables_info">Showing 10 out of 40 records</div>
                                                                            </div>
                                                                            <div class="col-sm-12 col-md-7">
                                                                                <div class="dataTables_paginate">
                                                                                    <ul class="pagination">
                                                                                        <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                                                                        <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                                                                        <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                                                                        <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                                                                        <li class="paginate_button page-item next disabled" i><a href="#" class="page-link">Next</a></li>
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



<div class="modal fade order-delivered p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <h5 class="text-left font-weight-semibold text-success-primry">Success</h5>
                            <p>Status For Order 123 Has Been Change To Delivered</p>
                            <div class="modal-buttons mt-3">
                                <button type="button" class="btn btn-primary mr-1"  data-dismiss="modal" aria-label="Close">Ok</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade order-inprocess p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <h5 class="text-left font-weight-semibold text-success-primry">Success</h5>
                            <p>Status For Order 123 Has Been Change To In-Process</p>
                            <div class="modal-buttons mt-3">
                                <button type="button" class="btn btn-primary mr-1"  data-dismiss="modal" aria-label="Close">Ok</button>
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