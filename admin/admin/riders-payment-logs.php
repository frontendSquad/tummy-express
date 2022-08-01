<?php

$title = "Tummy Express - Dashboard";
include( 'header.php' );

?>

    <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
        <!-- fixed-top-->
        <?php include( 'topbar.php' ); ?>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        
        <?php include( 'sidebar.php' ); ?> 




<div class="app-content dashboard content">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-md-row flex-column justify-content-between border-bottom mb-3">
                        <div class="d-flex">
                            <h3 class="mb-2 page-main-hdng pr-3">Riders Payment Logs</h3>
                        </div>
                        <div>
                            <div class="filter-wrap custom-filter mr-1  d-flex align-items-center justify-content-start">
                                <label class="d-block mb-0 text-start mb-lg-0 mb-3 mr-3">Month</label>
                                <div class="select-wrapper d-block ">
                                    <select name="" class="form-control" id="">
                                        <option value="">Select</option>
                                        <option value="">Select</option>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic form layout section start -->
            <section id="configuration" class="user-page">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <div class="row user-listing-top ">
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6 sort-datepicker">
                                    <!-- <div class="filter-wrap custom-filter mr-1 ">
                                        <div class="input-wrapper d-block w-100 ">
                                            <form class="d-flex">
                                                <input type="search" class="form-control w-50" placeholder="Search">
                                                <button type="submit" class="btn btn-primary ml-1">Search</button>
                                            </form>
                                        </div>
                                    </div> -->
                                </div>                                 
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6 sort-datepicker">
                                    <div class="d-sm-flex d-block align-items-center justify-content-lg-end">
                                        <!-- <label class="d-block mb-0 text-start mb-lg-0 mb-1">Sort by:</label> -->
                                        <div class="input-wrap text-start mr-2 mr-sm-2 mb-2 mb-sm-0">
                                            <input placeholder="From" class="textbox-n form-control" type="text" onfocus="(this.type='date')" id="date">
                                        </div>
                                        <div class="input-wrap text-start mx-lg-2 mx-0">
                                            <input placeholder="To" class="textbox-n form-control" type="text" onfocus="(this.type='date')" id="date">
                                        </div>
                                    </div>
                                </div>
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
                                                                <th class="">Product Name <i class="fas fa-sort"></i></th>
                                                                <th class="">Promo Code <i class="fas fa-sort"></i></th>
                                                                <th class="">Date <i class="fas fa-sort"></i></th>
                                                                <th class="">Status <i class="fas fa-sort"></i></th>
                                                                <th class="">Action <i class="fas fa-sort"></i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc Promo</td>
                                                                <td>123</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc Promo</td>
                                                                <td>123</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc Promo</td>
                                                                <td>123</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc Promo</td>
                                                                <td>123</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc Promo</td>
                                                                <td>123</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc Promo</td>
                                                                <td>123</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td class="text-danger">Inactive</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
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
            </section>
        </div>
    </div>
</div>

<div class="modal fade activeModal p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                                <img src="images/question-icon.png" alt="">
                            </i> -->
                            <h5 class="text-left font-weight-semibold text-danger">Alert</h5>
                            <p>Are You Sure You Want To activate This Categry?</p>
                            <div class="modal-buttons mt-3">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".activeModal2">yes</button>
                                <button type="submit" class="btn btn-secondary ml-1 cancel-btn" data-dismiss="modal" aria-label="Close">No</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade inactivemodal p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                                <img src="images/question-icon.png" alt="">
                            </i> -->
                            <h5 class="text-left font-weight-semibold text-danger">Alert</h5>
                            <p>Are You Sure You Want To Inactivate This Categry?</p>
                            <div class="modal-buttons mt-3">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".inactiveModal2">yes</button>
                                <button type="submit" class="btn btn-secondary ml-1 cancel-btn" data-dismiss="modal" aria-label="Close">No</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="modal fade send_promo p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <h5 class="font-weight-semibold text-left color-gray mb-2">Send Promo Code To Users</h5>
                            <div class="felid d-inline-block mb-2">
                                <label class="felidlab">Send through Notification
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label> 
                            </div>
                            <div class="felid d-inline-block mb-2 pl-2">
                                <label class="felidlab">Send through Email
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <select name="" class="mb-2">
                                <option value="">Please select promo code from the list:*</option>
                                <option value="">Promo Code ABC</option>
                                <option value="">Promo Code ABC</option>
                                <option value="">Promo Code ABC</option>
                            </select>
                            <select name="" class="mb-2">
                                <option value="">Please add users:*</option>
                                <option value="">User Abc</option>
                                <option value="">User Abc</option>
                                <option value="">User Abc</option>
                            </select>
                            <div class="chips__choice">
                                <div class="chip">User Abc <i class="fas fa-times"></i></div>
                                <div class="chip">User Abc <i class="fas fa-times"></i></div>
                                <div class="chip">User Abc <i class="fas fa-times"></i></div>
                                <div class="chip">User Abc <i class="fas fa-times"></i></div>
                                <div class="chip">User Abc <i class="fas fa-times"></i></div>
                                <div class="chip">User Abc <i class="fas fa-times"></i></div>
                                <div class="chip">User Abc <i class="fas fa-times"></i></div>
                            </div>                            
                            <div class="modal-buttons">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".ppromo_details">Refund</button>
                                <button type="submit" class="btn btn-secondary ml-1 cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade ppromo_details p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <h5 class="font-weight-semibold text-left color-gray mb-2">Promo Details</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Promo Name</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">Promo ABC</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Promo Code</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">Discount25%</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Added on</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">02/02/2020</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Discount</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">$ 5</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Date</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">05/13/2020</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Availed </p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">300</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Valid Till</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">02/02/2020</label>
                                </div>
                            </div>                           
                            <div class="modal-buttons">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close">Ok</button>
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