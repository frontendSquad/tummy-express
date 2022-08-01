
// Navigation Menu 
$(window).on('load', function() {
var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
$('.navigation-main li a').each(function() {
    var hrefVal = $(this).attr('href');
    if (hrefVal == currentUrl) {
        $(this).removeClass('active');
        $(this).closest('li').addClass('active')
        $('.navigation-main li.first').removeClass('active');
    }
});

});  




/*----- Password Display -----*/
let eyeBtn = Array.from(document.querySelectorAll('.passDisplay'));
if (eyeBtn) {
    eyeBtn.forEach(e => {
        e.addEventListener('click', function () {
            let passwordWrapper = e.closest('.passwordWrapper');
            let passInput = passwordWrapper.querySelector('input');
            let eyeIcon = passwordWrapper.querySelector('.passDisplay i');
            if (passInput.classList.contains('passInput')) {
                if (passInput.type == 'password') {
                    passInput.setAttribute('type', 'text');
                    eyeIcon.setAttribute('class', 'fas fa-eye');
                }
                else {
                    passInput.setAttribute('type', 'password');
                    eyeIcon.setAttribute('class', 'fas fa-eye-slash');
                };
            };
        });
    });
};



$('.view_rmenu_ltslider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: true,
    asNavFor: '.view_rmenu_lbslider'
});
$('.view_rmenu_lbslider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.view_rmenu_ltslider',
    dots: false,
    arrows: false,
    focusOnSelect: true
});  



// add new vehicle start

$(document).ready(function () {
	if (window.File && window.FileList && window.FileReader) {
	  $("#files").on("change", function (e) {
		var files = e.target.files,
		  filesLength = files.length;
		for (var i = 0; i < filesLength; i++) {
		  var f = files[i];
		  var fileReader = new FileReader();
		  fileReader.onload = function (e) {
			var file = e.target;
			$(
			  '<span class="pip">' +
				'<img class="imageThumb" src="' +
				e.target.result +
				'" title="' +
				file.name +
				'"/>' +
				'<br/><span class="remove"><i class="fa fa-times" aria-hidden="true"></i></span>' +
				"</span>"
			).insertAfter("#files");
			$(".remove").click(function () {
			  $(this).parent(".pip").remove();
			});
		  };
		  fileReader.readAsDataURL(f);
		}
		console.log(files);
	  });
	} else {
	  alert("Your browser doesn't support to File API");
	}
  });

// add new vehicle end

 /*modal click change start here*/
 
 $(function () {
 
  $('#delete-req').on('click', function () {
    $('.delete-req').modal('hide');
    $('.delete-req-confirm').modal('show');
  });

  $('#field-added').on('click', function () {
    $('.add-new-field').modal('hide');
    $('.field-added').modal('show');
  });

  $('#edit-field').on('click', function () {
    $('.edit-field').modal('hide');
    $('.field-update').modal('show');
  });

  $('#add-new-vehicle').on('click', function () {
    $('.add-new-vehicle').modal('hide');
    $('.vehicle-added').modal('show');
  });

  $('#vehicle-updated').on('click', function () {
    $('.edit-vehicle').modal('hide');
    $('.vehicle-updated').modal('show');
  });


  $('#conform-blocked').on('click', function () {
    $('.blocked-req').modal('hide');
    $('.conform-blocked').modal('show');
  });



});


/*modal click change end here*/


/*cropper start here*/
// Start upload preview image
$(".gambar").attr("src", "https://user.gadjian.com/static/images/personnel_boy.png");
						var $uploadCrop,
						tempFilename,
						rawImg,
						imageId;
						function readFile(input) {
				 			if (input.files && input.files[0]) {
				              var reader = new FileReader();
					            reader.onload = function (e) {
									$('.upload-demo').addClass('ready');
									$('#cropImagePop').modal('show');
						            rawImg = e.target.result;
					            }
					            reader.readAsDataURL(input.files[0]);
					        }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

						$uploadCrop = $('#upload-demo').croppie({
							viewport: {
								width: 150,
								height: 200,
							},
							enforceBoundary: false,
							enableExif: true
						});
						$('#cropImagePop').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop.croppie('bind', {
				        		url: rawImg
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});

						$('.item-img').on('change', function () { imageId = $(this).data('id'); tempFilename = $(this).val();
																										 $('#cancelCropBtn').data('id', imageId); readFile(this); });
						$('#cropImageBtn').on('click', function (ev) {
							$uploadCrop.croppie('result', {
								type: 'base64',
								format: 'jpeg',
								size: {width: 150, height: 200}
							}).then(function (resp) {
								$('#item-img-output').attr('src', resp);
								$('#cropImagePop').modal('hide');
							});
						});
				// End upload preview image
 /*cropper end here*/




 /*date picker start here*/

 //
 //$('#timepicker-1').timepicker({
 //	uiLibrary: 'bootstrap4'
 //});
 //$('#timepicker-2').timepicker({
 //	uiLibrary: 'bootstrap4'
 //});

 $(document).ready(function () {
 	$(".dataTables_filter input").attr("placeholder", "Search");
 });

 $('#datepicker-1').datepicker({
 	uiLibrary: 'bootstrap4'
 });
 $('#datepicker-2').datepicker({
 	uiLibrary: 'bootstrap4'
 });
 $('#datepicker-3').datepicker({
 	uiLibrary: 'bootstrap4'
 });
 $('#datepicker-4').datepicker({
 	uiLibrary: 'bootstrap4'
 });
 /*


  $('#datepicker-5').datepicker({
             uiLibrary: 'bootstrap4'
 });

  $('#datepicker-6').datepicker({
             uiLibrary: 'bootstrap4'
 });

  $('#datepicker-7').datepicker({
             uiLibrary: 'bootstrap4'
 });
 $('#datepicker-8').datepicker({
             uiLibrary: 'bootstrap4'
 });
 $('#datepicker-9').datepicker({
             uiLibrary: 'bootstrap4'
 });
 $('#datepicker-10').datepicker({
             uiLibrary: 'bootstrap4'
 });

  $('#datepicker-11').datepicker({
             uiLibrary: 'bootstrap4'
 });

  $('#datepicker-12').datepicker({
             uiLibrary: 'bootstrap4'
 });
 $('#datepicker-13').datepicker({
             uiLibrary: 'bootstrap4'
 });

  $('#datepicker-14').datepicker({
             uiLibrary: 'bootstrap4'
 });

  $('#datepicker-15').datepicker({
             uiLibrary: 'bootstrap4'
 });

  $('#datepicker-16').datepicker({
             uiLibrary: 'bootstrap4'
 });

  $('#datepicker-17').datepicker({
             uiLibrary: 'bootstrap4'
 }); 
 $('#datepicker-18').datepicker({
             uiLibrary: 'bootstrap4'
 });

  $('#datepicker-19').datepicker({
             uiLibrary: 'bootstrap4'
 });*/
 /*date picker end here*/
