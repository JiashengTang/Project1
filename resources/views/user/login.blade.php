<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>JobPost</title>
		<meta name="robots" content="noindex,nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{asset('resources/images/favicon.png')}}" />
        
		<!--begin::Web font -->
<!-- 		<script src="{{asset('resources/theme/metronic/assets/app/js/webfont.js')}}"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script> -->

		<!--end::Web font -->

		<!--begin:: Global Mandatory Vendors -->
		<!-- <link href="{{asset('resources/theme/metronic/vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" /> -->

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
<!-- 		<link href="{{asset('resources/theme/metronic/vendors/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/animate.css/animate.css')}}" rel="stylesheet" type="text/css" /> -->
		<link href="{{asset('resources/theme/metronic/vendors/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
<!-- 		<link href="{{asset('resources/theme/metronic/vendors/jstree/dist/themes/default/style.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/chartist/dist/chartist.min.css')}}" rel="stylesheet" type="text/css" /> -->
		<link href="{{asset('resources/theme/metronic/vendors/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<!-- 		<link href="{{asset('resources/theme/metronic/vendors/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/vendors/flaticon/css/flaticon.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/vendors/metronic/css/styles.css')}}" rel="stylesheet" type="text/css" /> -->
		<link href="{{asset('resources/theme/metronic/vendors/vendors/fontawesome5/css/all.min.css')}}" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="{{asset('resources/theme/metronic/assets/demo/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles --> 
		<link href="{{asset('resources/community/jqbtk/jqbtk.min.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles -->
	</head>

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-login m-login--signin  m-login--5" id="m_login" style="background-image: url(resources/images/login_bg.jpg);">
				<div class="m-login__wrapper-1 m-portlet-full-height">
					<div class="m-login__wrapper-1-1">
						<div class="m-login__contanier">
							<div class="m-login__content">
								<div class="m-login__logo">
									<a href="#">
										<img src="{{url('resources/images/logo.png')}}" width="35%">
									</a>
								</div>
								<div class="m-login__title">
									<!-- <h3>ToFuture</h3> -->
									<h3>JobPost</h3>
									<br>
									<br>
							        <div id="advertisment-block">
							           <img data-lazy-src="{{url('resources/images/advertisement/login/login_1.jpg')}}?v=<?php echo Date("Y.m.d.G.i.s")?>" width="100%">
							           <img data-lazy-src="{{url('resources/images/advertisement/login/login_2.jpg')}}?v=<?php echo Date("Y.m.d.G.i.s")?>" width="100%">
							           <img data-lazy-src="{{url('resources/images/advertisement/login/login_3.jpg')}}?v=<?php echo Date("Y.m.d.G.i.s")?>" width="100%">
							        </div>
								</div>
							</div>
						</div>
						<div class="m-login__border">
							<div></div>
						</div>
					</div>
				</div>
				<div class="m-login__wrapper-2 m-portlet-full-height">
					<div class="m-login__contanier">
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Login</h3>
							</div>
							<form class="m-login__form m-form" method="post" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								@if(isset($errorMsg))
									<div class="form-group m-form__group">
										<p style="text-align: center;"><span class="m--font-danger">{{$errorMsg}}</span></p>
									</div>
								@endif							
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" placeholder="Email" name="email" autocomplete="on">
								</div>						
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" name="password">
								</div>								
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn m-btn--pill m-btn--air btn-danger">Login</button>
									<a href="{{url('/registe')}}" class="btn m-btn--pill m-btn--air btn-danger">Registe</a>
								</div>	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="{{asset('resources/theme/metronic/vendors/jquery/dist/jquery.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/moment/min/moment.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/perfect-scrollbar/dist/perfect-scrollbar.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/wnumb/wNumb.js')}}" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
<!-- 		<script src="{{asset('resources/theme/metronic/vendors/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-switch/dist/js/bootstrap-switch.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-select/dist/js/bootstrap-select.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/inputmask/dist/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/autosize/dist/autosize.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/summernote/dist/summernote.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/markdown/lib/markdown.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/forms/jquery-validation.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-notify/bootstrap-notify.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js')}}" type="text/javascript"></script> -->
		<script src="{{asset('resources/theme/metronic/vendors/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
<!-- 		<script src="{{asset('resources/theme/metronic/vendors/jstree/dist/jstree.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/raphael/raphael.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/morris.js/morris.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/chartist/dist/chartist.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/charts/chart.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/vendors/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script> -->
		<script src="{{asset('resources/theme/metronic/vendors/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/base/sweetalert2.init.js')}}" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="{{asset('resources/theme/metronic/assets/demo/base/scripts.bundle.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="{{asset('resources/community/jqbtk/jqbtk.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/community/devrama-slider/jquery.devrama.slider.min-0.9.4.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#advertisment-block').DrSlider({navigationType: 'circle'});
            });
        </script>		
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>