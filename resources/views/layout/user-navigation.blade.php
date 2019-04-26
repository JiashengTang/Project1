<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>JobPast</title>
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
		<link href="{{asset('resources/theme/metronic/vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<!-- <link href="{{asset('resources/theme/metronic/vendors/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" /> -->
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
   		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
	<!-- <link href="{{asset('resources/theme/metronic/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
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
		<link href="{{asset('resources/theme/metronic/vendors/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/jstree/dist/themes/default/style.css')}}" rel="stylesheet" type="text/css" />
 		<link href="{{asset('resources/theme/metronic/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" /> -->
		<link href="{{asset('resources/theme/metronic/vendors/chartist/dist/chartist.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- <link href="{{asset('resources/theme/metronic/vendors/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/vendors/flaticon/css/flaticon.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/vendors/metronic/css/styles.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/vendors/vendors/fontawesome5/css/all.min.css')}}" rel="stylesheet" type="text/css" /> -->

		<!--end:: Global Optional Vendors

		<!--begin::Global Theme Styles -->
		<link href="{{asset('resources/theme/metronic/assets/demo/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('resources/theme/metronic/assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		@yield('css')
		<!--end::Page Vendors Styles -->
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-page--loading-enabled m-page--loading m-content--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--offcanvas-default m-aside-left--enabled m-aside-left--fixed m-aside-left--skin-dark m-aside--offcanvas-default">

		<!-- begin::Page loader -->
		<div class="m-page-loader m-page-loader--base">
			<div class="m-blockui">
				<span>Loading...</span>
				<span>
					<div class="m-loader m-loader--brand"></div>
				</span>
			</div>
		</div>

		<!-- end::Page Loader -->

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize="minimize" m-minimize-mobile="minimize" m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop  m-header__wrapper">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand m-brand--mobile">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="{{asset('resources/images/logo.png')}}" width="60%" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--middle m-stack__item--left m-header-head" id="m_header_nav">
							<div class="m-stack m-stack--ver m-stack--desktop">
								<div class="m-stack__item m-stack__item--fluid m-header-head">

									<!-- BEGIN: Horizontal Menu -->
									<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
									<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
										<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
											<li class="m-menu__item"><a id="my-courses-btn" href="{{url('/home')}}" class="m-menu__link"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">Home</span></a>
											</li>
											<li class="m-menu__item"><a href="{{url('/skills')}}" class="m-menu__link"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">My Skills</span></a>
											<li class="m-menu__item"><a href="{{url('/missions')}}" class="m-menu__link"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">My Own Missions</span></a>
											</li>
											<li class="m-menu__item"><a href="{{url('/get/missions')}}" class="m-menu__link"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">My Got Missions</span></a>
											</li>
											<li class="m-menu__item"><a href="{{url('/missions/search')}}" class="m-menu__link"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Find Missions</span></a>
											</li>					
										</ul>
									</div>
									<!-- END: Horizontal Menu -->
								</div>
							</div>
						</div>
						<div class="m-stack__item m-stack__item--middle m-stack__item--center">

							<!-- BEGIN: Brand -->
							<a class="m-brand m-brand--desktop">
								<img alt="" src="{{asset('resources/images/logo.png')}}" width="70px"/>
							</a>

							<!-- END: Brand -->
						</div>
						<div class="m-stack__item m-stack__item--right">

							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<span id="student-available-time"></span>
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__username m--hidden-mobile">{{Session::get('user')[0]['name']}}</span>
												<span class="m-nav__link-icon m-topbar__usericon  m--hide">
													<span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center">
														<div class="m-card-user m-card-user--skin-light">
														<!-- Session  -->
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">{{Session::get('user')[0]['name']}}</span>
																<span class="m-card-user__email m--font-weight-300 m-link">{{Session::get('user')[0]['email']}}</span><br>
																<span href="" class="m-card-user__mobile m--font-weight-300 m-link">{{isset(Session::get('user')[0]['mobile']) ? Session::get('user')[0]['mobile'] : ''}}</span>
															</div>											
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
									<a href="{{url('/logout')}}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-danger m-btn--bolder">Log out</a>
								</div>
							</div>

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl m-container--full-height">
					<div class="m-grid__item m-grid__item--fluid m-wrapper">
                        @yield('body')
					</div>
				</div>
			</div>
			<!-- end:: Body -->

			<!-- begin::Footer -->
			<!-- <footer class="m-grid__item  m-footer ">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2018 &copy; Powerd by <a href="https://zetadigital.com.au" class="m-link">Zeta Digital Pty Ltd</a>
							</span>
						</div>
					</div>
				</div>
			</footer> -->

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		
		<!-- end::Scroll Top -->


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
<!-- 	<script src="{{asset('resources/theme/metronic/vendors/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script> -->
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js')}}" type="text/javascript"></script>
	<!-- <script src="{{asset('resources/theme/metronic/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
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
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/jstree/dist/jstree.js')}}" type="text/javascript"></script>
 		<script src="{{asset('resources/theme/metronic/vendors/raphael/raphael.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/morris.js/morris.js')}}" type="text/javascript"></script>
 -->		<script src="{{asset('resources/theme/metronic/vendors/chartist/dist/chartist.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/charts/chart.init.js')}}" type="text/javascript"></script>
		<!-- <script src="{{asset('resources/theme/metronic/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/vendors/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/vendors/js/framework/components/plugins/base/sweetalert2.init.js')}}" type="text/javascript"></script> -->

		<!--end:: Global Optional Vendors

		<!--begin::Global Theme Bundle -->
		<script src="{{asset('resources/theme/metronic/assets/demo/base/scripts.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('resources/theme/metronic/assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->

		<script type="text/javascript">
			window.addEventListener("beforeunload", function (e) {
				if (typeof document.activeElement.href == 'undefined'){
					$.ajax({
				        url: "{{url('/logout')}}",
				        type: 'get',
				    });					
				}
			});
		</script>

		@yield('script')		
		<!--end::Page Scripts -->

		<!-- begin::Page Loader -->
		<script>
			$(window).on('load', function() {
				$('body').removeClass('m-page--loading');
			});
		</script>
		<!-- end::Page Loader -->
	</body>

	<!-- end::Body -->
</html>