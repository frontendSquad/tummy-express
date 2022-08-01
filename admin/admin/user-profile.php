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
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-md-row flex-column justify-content-between mb-2">
                        <h3 class="mb-2 page-main-hdng"> <i onclick="javascript:history.go(-1)" class="far fa-long-arrow-left"></i> Users</h3>
                    </div>
                </div>
            </div>
            <!-- Basic form layout section start -->
            <section id="configuration" class="my-profile">
                <div class="row">
                    <div class="col-12">
                        <div class="card custom-card rounded-10">
                            <div class="card-body">
                                <div class="detail-block">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="media d-md-flex d-block">
                                                <div class="media-body pl-0">
                                                    <div class="row detail-row d-flex align-items-start">
                                                        <div class="col-xl-4 col-md-4 col-12">
                                                            <div class="profile-img text-center m-auto m-md-0">
                                                                <img src="../images/profile-avatar.png" class="img-fluid ml-0" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-8 col-12">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Full Name:</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">Joshua Rozario</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Phone No.</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">+1-541-754-3010</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Email Address</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">abc@gmail.com</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Password</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">***********</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Registered On</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">08/14/2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Wallet</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">$ 0.00</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="d-flex justify-content-end">
                                                <p class="color-gray"><i class="fas fa-map-marker-alt text-info pr-1"></i> JANE ROE 200 E MAIN ST PHOENIX AZ 85123 </p>
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
                                                                <th class="">Amount Paid <i class="fas fa-sort"></i></th>
                                                                <th class="">Order Status </th>
                                                                <th class="">Action </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>Abc Restaurant</td>
                                                                <td>454</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>$123</td>
                                                                <td class="text-blue">Delivered</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".delivered"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>02</td>
                                                                <td>Abc Restaurant</td>
                                                                <td>454</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>$123</td>
                                                                <td class="text-danger">In-Process</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".inprocess"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>03</td>
                                                                <td>Abc Restaurant</td>
                                                                <td>454</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>$123</td>
                                                                <td class="text-blue">Delivered</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".delivered"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>04</td>
                                                                <td>Abc Restaurant</td>
                                                                <td>454</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>$123</td>
                                                                <td class="text-blue">Delivered</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".delivered"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>05</td>
                                                                <td>Abc Restaurant</td>
                                                                <td>454</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>$123</td>
                                                                <td class="text-blue">Delivered</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".delivered"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>06</td>
                                                                <td>Abc Restaurant</td>
                                                                <td>454</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>$123</td>
                                                                <td class="text-blue">Delivered</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".delivered"><i class="fa pr-1 fa-eye"></i> View</a>
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



<div class="default-modal modal fade delivered p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <p>Status For Order 123 Has Been Change To Delivered</p>
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


<div class="default-modal modal fade inprocess p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <p>Status For Order 123 Has Been Change To In-Process</p>
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