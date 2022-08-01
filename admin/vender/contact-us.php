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
                                <div class="card mb-0">
                                    <div class="card-content collapse show">
                                        <div class="card-dashboard dataTables_wrapper">
                                            <div class="top align-items-center mb-2">
                                                <h1>Contact Us</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="box contactus">
                                    <div class="row justify-content-center pt-5 pb-5">
                                        <div class="col-md-8">
                                            <form class="row">
                                                <div class="col-md-12">
                                                    <h5 class="h2 black text-center">Please fill this form in-order to get in contact with the admin</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="felid">
                                                        <label for="">Name <span class="red">*</span></label>
                                                        <input type="text" name="" placeholder="Enter Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="felid">
                                                        <label for="">Email <span class="red">*</span></label>
                                                        <input type="email" name="" placeholder="Enter Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="felid">
                                                        <label for="">Subject <span class="red">*</span></label>
                                                        <input type="email" name="" placeholder="Enter Subject">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="felid">
                                                        <label for="">Message <span class="red">*</span></label>
                                                        <textarea name="" placeholder="Enter Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="submit" name="" value="Submit" class="gd-btn pl-5 pr-5">
                                                </div>
                                            </form>
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