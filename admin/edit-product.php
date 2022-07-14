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
                                                <h1>Menu Item</h1>
                                            </div>                                          
                                            <div class="box py-3 px-5">
                                                <form class="row">
                                                    <div class="col-md-12">
                                                        <h4 class="h2 black font-weight-bold">Add New Product</h4>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-3 col-12">
                                                                <div class="felid">
                                                                    <label for="">Base Image: <span class="red"></span>:</label>
                                                                    <div class="files2">
                                                                        <img src="images/base-image.png" alt="">
                                                                        <div class="">
                                                                            <a href="#" class="fchange"><input type="file" name=""> Change</a>
                                                                            <a href="#" class="ftrash"><i class="fas fa-trash"></i></a>
                                                                        </div>    
                                                                    </div>
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12 dynamic-field" id="dynamic-field-1">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="felid">
                                                                    <label for="">Category <span class="red">*</span></label>
                                                                    <select name="">
                                                                        <option value="">Select Category</option>
                                                                        <option value="">Select Category</option>
                                                                        <option value="">Select Category</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="felid">
                                                                    <label for="">Add-Ons <span class="red">*</span></label>
                                                                    <div class="d-flex">
                                                                        <select name="" class="mt-1">
                                                                            <option value="">Add-On Name</option>
                                                                            <option value="">Add-On Name</option>
                                                                            <option value="">Add-On Name</option>
                                                                        </select>
                                                                        <input type="text" name="" placeholder="Add-On Price" class="ml-3 mt-1">
                                                                    </div>
                                                                </div>
                                                            </div>                                                        
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-30">
                                                        <div class="text-right add-Ons-button">
                                                            <button type="button" id="add-button">Add More
                                                            </button>
                                                            <button type="button" id="remove-button" disabled="disabled"><i class="fas fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>  

                                                    <div class="col-md-6">
                                                        <div class="felid">
                                                            <label for="">Title <span class="red">*</span></label>
                                                            <input type="text" name="" placeholder="Enter Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="felid">
                                                            <label for="">Price <span class="red">*</span></label>
                                                            <input type="text" name="" placeholder="Enter Price">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="felid">
                                                            <label for="">Discounted <span class="red">*</span></label>
                                                            <input type="text" name="" placeholder="Enter Discounted Price">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="felid">
                                                            <label for="">Status <span class="red">*</span></label>
                                                            <select>
                                                                <option value="">Select Status</option>
                                                                <option value="">Select Status</option>
                                                                <option value="">Select Status</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="felid">
                                                            <label for="">Discription <span class="red">*</span></label>
                                                            <textarea name="" placeholder="Enter Description"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="felid mt-3 text-center">
                                                            <button type="submit" class="btnn gd-btn">Update</button>
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

<script>



$(document).ready(function() {
  var buttonAdd = $("#add-button");
  var buttonRemove = $("#remove-button");
  var className = ".dynamic-field";
  var count = 0;
  var field = "";
  var maxFields =50;

  function totalFields() {
    return $(className).length;
  }

  function addNewField() {
    count = totalFields() + 1;
    field = $("#dynamic-field-1").clone();
    field.attr("id", "dynamic-field-" + count);
    field.children("label").text("Field " + count);
    field.find("input").val("");
    $(className + ":last").after($(field));
  }

  function removeLastField() {
    if (totalFields() > 1) {
      $(className + ":last").remove();
    }
  }

  function enableButtonRemove() {
    if (totalFields() === 2) {
      buttonRemove.removeAttr("disabled");
      buttonRemove.addClass("shadow-sm");
    }
  }

  function disableButtonRemove() {
    if (totalFields() === 1) {
      buttonRemove.attr("disabled", "disabled");
      buttonRemove.removeClass("shadow-sm");
    }
  }

  function disableButtonAdd() {
    if (totalFields() === maxFields) {
      buttonAdd.attr("disabled", "disabled");
      buttonAdd.removeClass("shadow-sm");
    }
  }

  function enableButtonAdd() {
    if (totalFields() === (maxFields - 1)) {
      buttonAdd.removeAttr("disabled");
      buttonAdd.addClass("shadow-sm");
    }
  }

  buttonAdd.click(function() {
    addNewField();
    enableButtonRemove();
    disableButtonAdd();
  });

  buttonRemove.click(function() {
    removeLastField();
    disableButtonRemove();
    enableButtonAdd();
  });
});    
</script>