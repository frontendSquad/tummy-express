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
                            <h3 class="mb-2 page-main-hdng pr-3">Feedbacks</h3>
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
                                                                <th class="">Email <i class="fas fa-sort"></i></th>
                                                                <th class="">Phone No. <i class="fas fa-sort"></i></th>
                                                                <th class="">Status <i class="fas fa-sort"></i></th>
                                                                <th class="">Action <i class="fas fa-sort"></i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc</td>
                                                                <td>abc@abc.com</td>
                                                                <td>+58 7521 174652</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".pfeedback"><i class="fa pr-1 fa-eye"></i> View</a><a class="dropdown-item" data-toggle="modal" data-target=".fdelete"><i class="fas pr-1 fa-trash-alt"></i> Delete</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc</td>
                                                                <td>abc@abc.com</td>
                                                                <td>+58 7521 174652</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".pfeedback"><i class="fa pr-1 fa-eye"></i> View</a><a class="dropdown-item" data-toggle="modal" data-target=".fdelete"><i class="fas pr-1 fa-trash-alt"></i> Delete</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc</td>
                                                                <td>abc@abc.com</td>
                                                                <td>+58 7521 174652</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".pfeedback"><i class="fa pr-1 fa-eye"></i> View</a><a class="dropdown-item" data-toggle="modal" data-target=".fdelete"><i class="fas pr-1 fa-trash-alt"></i> Delete</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc</td>
                                                                <td>abc@abc.com</td>
                                                                <td>+58 7521 174652</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".pfeedback"><i class="fa pr-1 fa-eye"></i> View</a><a class="dropdown-item" data-toggle="modal" data-target=".fdelete"><i class="fas pr-1 fa-trash-alt"></i> Delete</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc</td>
                                                                <td>abc@abc.com</td>
                                                                <td>+58 7521 174652</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".pfeedback"><i class="fa pr-1 fa-eye"></i> View</a><a class="dropdown-item" data-toggle="modal" data-target=".fdelete"><i class="fas pr-1 fa-trash-alt"></i> Delete</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inactivemodal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc</td>
                                                                <td>abc@abc.com</td>
                                                                <td>+58 7521 174652</td>
                                                                <td class="text-danger">Inactive</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".pfeedback"><i class="fa pr-1 fa-eye"></i> View</a><a class="dropdown-item" data-toggle="modal" data-target=".fdelete"><i class="fas pr-1 fa-trash-alt"></i> Delete</a>
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

<div class="modal fade fdelete p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <h5 class="text-left font-weight-semibold text-danger">System Message </h5>
                            <p>Are You Sure You Want To Delete This Feedback?</p>
                            <div class="modal-buttons mt-3">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".fdelete2">yes</button>
                                <button type="submit" class="btn btn-secondary ml-1 cancel-btn" data-dismiss="modal" aria-label="Close">No</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade fdelete2 p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <h5 class="text-left font-weight-semibold text-success-primry">Success</h5>
                            <p>Feedback Has Been Deleted</p>
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



<div class="modal fade pfeedback details p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <h5 class="font-weight-semibold text-left color-gray mb-2">Feedback Details</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Name</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">ABC</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Email</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">abc@xyz.com</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Subject</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">Abc</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <p>User Type</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">Restaurant</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Message</p>
                                </div>

                                <div class="col-md-8">
                                    <label class="color-gray">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</label>
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