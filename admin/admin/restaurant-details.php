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
                            <h3 class="mb-2 page-main-hdng"> <i onclick="javascript:history.go(-1)" class="far fa-long-arrow-left"></i> Restaurant Details</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card custom-card rounded-10">
                            <div class="card-body">
                                <div class="detail-block">
                                    <div class="row border-bottom mb-3 pb-3">
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
                                                                    <p class="">Full Name</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">ABC</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="">Restaurant Name</p>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 ">
                                                                    <p class="color-gray">Reatuarant ABC</p>
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
                                                                    <p class="">Phone No.</p>
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
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="d-flex justify-content-end">
                                                <p class="color-gray"><i class="fas fa-map-marker-alt"></i> JANE ROE 200 E MAIN ST PHOENIX AZ 85123</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row border-bottom pb-3">
                                        <div class="col-12 col-lg-12 col-md-12">
                                            <div class="restaurants_logs">
                                                <h2 class="prmry-hdng mb-3">Restaurants Logs</h2>
                                                <div class="reviews_main">
                                                    <div class="row">
                                                        <div class="col-lg-2 text-center">
                                                            <h2 class="visia-text-61">4.5</h2>
                                                            <div class="rating-star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star outline-star"></i>
                                                                <i class="far fa-star outline-star"></i>
                                                            </div>
                                                            <small>40 Reviews</small>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="row">
                                                                <div class="side">
                                                                    <i class="fas fa-star"></i><span>1</span>
                                                                </div>
                                                                <div class="middle">
                                                                    <div class="bar-container">
                                                                        <div class="bar-5"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="side right">00</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="side">
                                                                    <i class="fas fa-star"></i><span>2</span>
                                                                </div>
                                                                <div class="middle">
                                                                    <div class="bar-container">
                                                                        <div class="bar-4"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="side right">00</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="side">
                                                                    <i class="fas fa-star"></i><span>3</span>
                                                                </div>
                                                                <div class="middle">
                                                                    <div class="bar-container">
                                                                        <div class="bar-3"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="side right">00</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="side">
                                                                    <i class="fas fa-star"></i><span>4</span>
                                                                </div>
                                                                <div class="middle">
                                                                    <div class="bar-container">
                                                                        <div class="bar-2"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="side right">00</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="side">
                                                                    <i class="fas fa-star"></i><span>5</span>
                                                                </div>
                                                                <div class="middle">
                                                                    <div class="bar-container">
                                                                        <div class="bar-1"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="side right">00</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6"></div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="reviews_bottom">
                                                                <div class="reviews_bmain row">
                                                                    <div class="col-md-1 p-0 reviews_bleft text-center">
                                                                        <img src="../images/card-picc.png" class="" alt="...">
                                                                    </div>
                                                                    <div class="col-md-8 pl-0 reviews_bcenter">
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <h5 class="mt-0">User A</h5>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <h6 class="mt-0">09:00 AM</h6>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="rating-star">
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="far fa-star outline-star"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <h6 class="mt-0">Mm/Dd/Yyyy</h6>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <p class="mt-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 reviews_bright pr-0">
                                                                        <a href="#" class="rtrash"><i class="fas fa-trash"></i></a>
                                                                        <a href="#" class="rdetails">View Order Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1"></div>
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="reviews_bottom">
                                                                <div class="reviews_bmain row">
                                                                    <div class="col-md-1 p-0 reviews_bleft text-center">
                                                                        <img src="../images/card-picc.png" class="" alt="...">
                                                                    </div>
                                                                    <div class="col-md-8 pl-0 reviews_bcenter">
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <h5 class="mt-0">User A</h5>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <h6 class="mt-0">09:00 AM</h6>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="rating-star">
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="far fa-star outline-star"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <h6 class="mt-0">Mm/Dd/Yyyy</h6>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <p class="mt-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the </p>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 reviews_bright pr-0">
                                                                        <a href="#" class="rtrash"><i class="fas fa-trash"></i></a>
                                                                        <a href="#" class="rdetails">View Order Details</a>
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
                        <div class="shadow-none">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <div class="main-tabble table-responsive">
                                        <div class="dataTables_wrapper container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="restaurants_logs">
                                                        <h2 class="prmry-hdng mb-3">Restaurants Menu</h2>
                                                    </div>
                                                    <table class="table table-borderless dataTable">
                                                        <thead>
                                                            <tr>
                                                                <th class="">S.No <i class="fas fa-sort"></i></th>
                                                                <th class="">Product Name <i class="fas fa-sort"></i></th>
                                                                <th class="">Category <i class="fas fa-sort"></i></th>
                                                                <th class="">Price <i class="fas fa-sort"></i></th>
                                                                <th class="">Status <i class="fas fa-sort"></i></th>
                                                                <th class="">Added On </th>
                                                                <th class="">Action </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>Category ABC</td>
                                                                <td>$123</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>7 Days Ago</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" href="edit-restaurants-details.php"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>Category ABC</td>
                                                                <td>$123</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>7 Days Ago</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" href="edit-restaurants-details.php"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>Category ABC</td>
                                                                <td>$123</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>7 Days Ago</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" href="edit-restaurants-details.php"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>Category ABC</td>
                                                                <td>$123</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>7 Days Ago</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" href="edit-restaurants-details.php"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>Category ABC</td>
                                                                <td>$123</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>7 Days Ago</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" href="edit-restaurants-details.php"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>Category ABC</td>
                                                                <td>$123</td>
                                                                <td class="text-danger">Inactive</td>
                                                                <td>7 Days Ago</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" href="edit-restaurants-details.php"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-sm-12 mt-3">
                                                    <div class="restaurants_logs">
                                                        <h2 class="prmry-hdng mb-3">Restaurants Categories</h2>
                                                    </div>
                                                    <table class="table table-borderless dataTable">
                                                        <thead>
                                                            <tr>
                                                                <th class="">S.No <i class="fas fa-sort"></i></th>
                                                                <th class="">Category Name <i class="fas fa-sort"></i></th>
                                                                <th class="">No. Of Products <i class="fas fa-sort"></i></th>
                                                                <th class="">Category Status <i class="fas fa-sort"></i></th>
                                                                <th class="">Action </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>454</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".addnewcategory"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>454</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".addnewcategory"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>454</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".addnewcategory"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>454</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".addnewcategory"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>454</td>
                                                                <td class="text-success-primry">Active</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".addnewcategory"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i> In-Active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>454</td>
                                                                <td>454</td>
                                                                <td class="text-danger">Inactive</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".addnewcategory"><i class="fas pr-1i fa-pencil-alt"></i> Edit</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal"><i class="fas pr-1 fa-toggle-on"></i>   active</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-sm-12 mt-3">
                                                    <div class="restaurants_logs">
                                                        <h2 class="prmry-hdng mb-3">Recent Orders</h2>
                                                    </div>
                                                    <table class="table table-borderless dataTable">
                                                        <thead>
                                                            <tr>
                                                                <th class="">S.No <i class="fas fa-sort"></i></th>
                                                                <th class="">Order ID <i class="fas fa-sort"></i></th>
                                                                <th class="">Order Date <i class="fas fa-sort"></i></th>
                                                                <th class="">Title <i class="fas fa-sort"></i></th>
                                                                <th class="">Amount Paid <i class="fas fa-sort"></i></th>
                                                                <th class="">Order Status <i class="fas fa-sort"></i></th>
                                                                <th class="">Action </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>001</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>Product Name</td>
                                                                <td>$123</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="dropdown-toggle text-danger" data-toggle="dropdown">
                                                                        In-Process <i class="fas fa-sort-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php">In- Process</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal">Recieved</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View Order</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>001</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>Product Name</td>
                                                                <td>$123</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="dropdown-toggle text-success-primry" data-toggle="dropdown">
                                                                        Recieved <i class="fas fa-sort-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php">In- Process</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal">Recieved</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View Order</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>001</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>Product Name</td>
                                                                <td>$123</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="dropdown-toggle text-blue" data-toggle="dropdown">
                                                                        Prepared <i class="fas fa-sort-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php">In- Process</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal">Recieved</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View Order</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>001</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>Product Name</td>
                                                                <td>$123</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="dropdown-toggle text-blue" data-toggle="dropdown">
                                                                        Prepared <i class="fas fa-sort-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php">In- Process</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal">Recieved</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View Order</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>001</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>Product Name</td>
                                                                <td>$123</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="dropdown-toggle text-blue" data-toggle="dropdown">
                                                                        Prepared <i class="fas fa-sort-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php">In- Process</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal">Recieved</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View Order</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>01</td>
                                                                <td>001</td>
                                                                <td>mm/dd/yyyy</td>
                                                                <td>Product Name</td>
                                                                <td>$123</td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="dropdown-toggle text-danger" data-toggle="dropdown">
                                                                        In-Process <i class="fas fa-sort-down"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php">In- Process</a>
                                                                            <a class="dropdown-item" data-toggle="modal" data-target=".activeModal">Recieved</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group ml-1">
                                                                        <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="view-restaurants-menu.php"><i class="fa pr-1 fa-eye"></i> View Order</a>
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
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>



<div class="modal fade addnewcategory p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
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
                            <h5 class="text-left font-weight-semibold">Add New Category</h5>
                            <input type="text" name="" placeholder="Enter Category Name">
                            <select name="">
                                <option value="">Status</option>
                                <option value="">Status</option>
                                <option value="">Status</option>
                            </select>
                            <p>Are You Sure You Want To activate This Categry?</p>
                            <div class="modal-buttons mt-3">
                                <button type="button" class="btn btn-primary mr-1" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".activeModal2">Add</button>
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