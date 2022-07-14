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
                                <div class="card product_detail">
                                    <div class="card-content collapse show">
                                        <div class="card-dashboard">
                                            <div class="d-md-flex top justify-content-md-between align-items-center mb-2">
                                                <h1>Products Details</h1>
                                            </div>                                          
                                            <div class="box py-3 px-5">
                                                <div class="row product_dboxm">
                                                    <div class="product_dboxl">
                                                        <img src="images/products/01.png">
                                                    </div>
                                                    <div class="product_dboxr ml-3">
                                                        <div class="col-md-12 text-right product_dbr1">
                                                            <a href="#" class="btn-green">Active</a>
                                                        </div>
                                                        <div class="align-items-center d-flex justify-content-between product_dbr2">
                                                            <div class="product_dbr2l">
                                                                <h4>Beef Steak</h4>
                                                                <h5>Product Category</h5>
                                                            </div>
                                                            <div class="product_dbr2r">
                                                                <h4 class="pr-3">$50</h4>
                                                            </div>
                                                        </div>
                                                        <div class="product_dbr3">
                                                            <p>A good steak is juicy, tender, loaded with flavor, and has a minimum amount of fat. Lean is the cherry-red part of the meat. The fat is the white part of the meat. Fat is a waste item on a steak.</p>
                                                        </div>
                                                        <div class="product_dbr4">
                                                            <ul class="d-flex">
                                                                <li class=""> 
                                                                   <div class="d-flex align-items-center">
                                                                       <i class="fas fa-circle"></i>
                                                                       <img src="images/fries_icon.png" alt="">
                                                                       <h4>Fries With Drink</h4>
                                                                       <h5 class="black">$50</h5>
                                                                   </div> 
                                                                </li>
                                                                <li class=""> 
                                                                   <div class="d-flex align-items-center">
                                                                       <i class="fas fa-circle"></i>
                                                                       <img src="images/fries_icon.png" alt="">
                                                                       <h4>Fries With Drink</h4>
                                                                       <h5 class="black">$50</h5>
                                                                   </div> 
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 product_dboxr mt-3">
                                                        <div class="product_dbr2">
                                                            <div class="product_dbr2l">
                                                                <h5 class="black">Product Category</h5>
                                                            </div>
                                                        </div>
                                                        <div class="product_dbr3">
                                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
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







<!--delete-req-confirm Modal end -->
<?php include( 'footer.php' );?>
