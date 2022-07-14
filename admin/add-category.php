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
                                <div class="card create-product">
                                    <div class="card-content collapse show">
                                        <div class="card-dashboard">
                                            <div class="d-md-flex top justify-content-md-between align-items-center mb-2">
                                                <h1><i onclick="javascript:history.go(-1)" class="fas fa-chevron-left text-light"></i> Category Management - Products </h1>
                                                <i class="fas fa-chevron-left"></i>
                                            </div>                                          
                                            <div class="box py-3 px-5">
                                                <form class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4 class="h2 black font-weight-bold">Add Category</h4>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="felid">
                                                                    <label for="">Category Name <span class="red">*</span></label>
                                                                    <input type="text" name="" placeholder="Category Abc">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="felid">
                                                                    <label for="">Status <span class="red">*</span></label>
                                                                    <select name="">
                                                                        <option value="">Active</option>
                                                                        <option value="">In-Active</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="felid">
                                                                <button type="submit" class="btnn gd-btn pl-5 pr-5">Add</button>
                                                            </div>
                                                        </div>                                              
                                                    </div>
                                                </form>
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







<!--delete-req-confirm Modal end -->
<?php include( 'footer.php' );?>
