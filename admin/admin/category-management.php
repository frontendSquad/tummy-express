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
                    <div class="d-flex flex-md-row flex-column justify-content-between mb-2">
                        <h3 class="mb-2 page-main-hdng">Category Management</h3>
                        <div>
                            <a href="#" class="btnn gd-btn" data-target=".add_new_category" data-toggle="modal">Add New Category</a>
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
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-2 mt-md-0 sort-datepicker">
                                    <div class="filter-wrap custom-filter mr-1 d-block  d-md-flex align-items-center justify-content-star">
                                        <label class="d-block mb-0 text-start mb-lg-0 mb-3">Filter By:</label>
                                        <div class="select-wrapper ">
                                            <select name="" class="form-control" id="">
                                                <option value="">Select</option>
                                                <option value="">Active</option>
                                                <option value="">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="col-12 col-md-12 col-lg-6 col-xl-6 mt-2 mt-md-0 sort-datepicker">
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
                                <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2 mt-md-0 d-md-flex d-block justify-content-start justify-content-md-end align-items-center">
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
                                                                <th class="">Category Name <i class="fas fa-sort"></i></th>
                                                                <th class="">Status <i class="fas fa-sort"></i></th>
                                                                <th class="">Action <i class="fas fa-sort"></i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc</td>
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
                                                                <td>Abc</td>
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
                                                                <td>Abc</td>
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
                                                                <td>Abc</td>
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
                                                                <td>Abc</td>
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
                                                                <td>Abc</td>
                                                                <td class="text-danger">Inactive</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
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

<div class="modal fade default-modal activeModal p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
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
                            <img src="../images/check_img.png" />
                            <h5 class="text-left font-weight-semibold text-danger">Alert</h5>
                            <p>Are You Sure You Want To Activate This Category?</p>
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

<div class="modal fade default-modal activeModal2 p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
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
                            <img src="../images/check_img.png" />
                            <h5 class="text-left font-weight-semibold text-success-primry">Success</h5>
                            <p>Category Activated Successfully</p>
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


<div class="modal fade default-modal inactivemodal p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
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
                            <img src="../images/check_img.png" />
                            <h5 class="text-left font-weight-semibold text-danger">Alert</h5>
                            <p>Are You Sure You Want To Inactivate This Category?</p>
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

<div class="modal fade default-modal inactiveModal2 p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
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
                            <p>Category Inactivated Successfully</p>
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







<div class="modal fade default-modal add_new_category p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
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
                            <h5 class="font-weight-semibold text-left color-gray mb-2">Add New Category</h5>     
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="" placeholder="Enter Category Name">
                                </div>
                            </div>
                            <select name="" class="mb-2">
                                <option value="">Status</option>
                                <option value="">Status</option>
                                <option value="">Status</option>
                                <option value="">Status</option>
                            </select>                      
                            <div class="modal-buttons">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".edit_category">Add</button>
                                <button type="submit" class="btn btn-secondary ml-1 cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade default-modal edit_category p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
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
                            <h5 class="font-weight-semibold text-left color-gray mb-2">Edit Category</h5>   
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="" placeholder="Category 1">
                                </div>
                            </div>    
                            <select name="" class="mb-2">
                                <option value="">Status</option>
                                <option value="">Status</option>
                                <option value="">Status</option>
                                <option value="">Status</option>
                            </select>                         
                            <div class="modal-buttons">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close">Update</button>
                                <button type="submit" class="btn btn-secondary ml-1 cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
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