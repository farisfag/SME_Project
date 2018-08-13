<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			iKnow | SME
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
		<link href=<?php echo base_url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') ?> rel="stylesheet" type="text/css" />
		<!--end::Page Vendors -->
		<link href=<?php echo base_url('assets/vendors/base/vendors.bundle.css') ?> rel="stylesheet" type="text/css" />
		<link href=<?php echo base_url('assets/demo/default/base/style.bundle.css') ?> rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href=<?php echo base_url("assets/demo/default/media/img/logo/favicon.ico") ?> />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png"/>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
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
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- begin Header -->
							<?php include 'Header.php' ?>
							<!-- end Header -->
											<!-- begin::Body -->
											<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
												<!-- BEGIN: Left Aside -->
												<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
													<i class="la la-close"></i>
												</button>
												<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
													<!-- BEGIN: Aside Menu -->
													<?php include 'LeftMenu.php' ?>
													<!-- END: Aside Menu -->
												</div>
												<!-- END: Left Aside -->
												<div class="m-grid__item m-grid__item--fluid m-wrapper">
                                                    <div class="m-content">
														<div class="row">
															<div class="col-md-12">
																<div class="m-portlet m-portlet--creative m-portlet--bordered-semi" >
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h2>
																					Penjelasan
																				</h2>
																				<h2 class="m-portlet__head-label m-portlet__head-label--danger">
																					<span>
																					Studi Lingkungan
																					</span>
																				</h2>
																			</div>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																	Mengetahui tatacara sebuah studi  lingkungan (AMDAL, UKL/UDL) guna pengajuan perijinan
																	</div>
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h2 >
																					Sub-Ilmu
																				</h2>
																			</div>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<ul>
																			<li> Ilmu Lingkungan </li>
																			<li> Ilmu Lingkungan </li>
																			<li> Ilmu Lingkungan </li>
																		</ul>
																	</div>
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h2 >
																					Experts
																				</h2>
																			</div>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<div class="m-list-search">
																			<div class="m-list-search__results">
																				<a href="#" class="m-list-search__result-item">
																					<span class="m-list-search__result-item-pic">
																						<img class="m--img-rounded" src=<?php echo base_url("assets/app/media/img/users/user1.jpg") ?> title="">
																					</span>
																					<span class="m-list-search__result-item-text">
																						Amanda Anderson
																					</span>
																				</a>
																				<a href="#" class="m-list-search__result-item">
																					<span class="m-list-search__result-item-pic">
																						<img class="m--img-rounded" src=<?php echo base_url("assets/app/media/img/users/user2.jpg") ?> title="">
																					</span>
																					<span class="m-list-search__result-item-text">
																						Kennedy Lloyd
																					</span>
																				</a>
																				<a href="#" class="m-list-search__result-item">
																					<span class="m-list-search__result-item-pic">
																						<img class="m--img-rounded" src=<?php echo base_url("assets/app/media/img/users/user2.jpg") ?> title="">
																					</span>
																					<span class="m-list-search__result-item-text">
																						Megan Weldon
																					</span>
																				</a>
																				<a href="#" class="m-list-search__result-item">
																					<span class="m-list-search__result-item-pic">
																						<img class="m--img-rounded" src=<?php echo base_url("assets/app/media/img/users/user2.jpg") ?> title="">
																					</span>
																					<span class="m-list-search__result-item-text">
																						Marc-André ter Stegen
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="m-portlet__head">
																		<div class="m-portlet__head-caption">
																			<div class="m-portlet__head-title">
																				<h2 >
																					FAQ
																				</h2>
																			</div>
																		</div>
																	</div>
																	<div class="m-portlet__body">
																		<div class="m-portlet">
																			<div class="m-portlet__body" style="padding-bottom: 10px;">
																				<span>
																					<p> Q : Siapa yang dapat mengajukan permohonan informasi publik? </p>
																				</span>
																				<span>
																					<p> A : Setiap warga negara dan/atau badan hukum Indonesia sebagaimana diatur dalam Undang-Undang Republik Indonesia Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik. </p>
																				</span>
																			</div>
																		</div>
																		<div class="m-portlet">
																			<div class="m-portlet__body" style="padding-bottom: 10px;">
																				<span>
																					<p> Q : Siapa yang dapat mengajukan permohonan informasi publik? </p>
																				</span>
																				<span>
																					<p> A : Setiap warga negara dan/atau badan hukum Indonesia sebagaimana diatur dalam Undang-Undang Republik Indonesia Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik. </p>
																				</span>
																			</div>
																		</div>
																		<div class="m-portlet">
																			<div class="m-portlet__body" style="padding-bottom: 10px;">
																				<span>
																					<p> Q : Siapa yang dapat mengajukan permohonan informasi publik? </p>
																				</span>
																				<span>
																					<p> A : Setiap warga negara dan/atau badan hukum Indonesia sebagaimana diatur dalam Undang-Undang Republik Indonesia Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik. </p>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
                                                    </div>
												</div>
											</div>
											<!-- end:: Body -->
<!-- begin::Footer -->
											<footer class="m-grid__item		m-footer ">
												<div class="m-container m-container--fluid m-container--full-height m-page__container">
													<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
														<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
															<span class="m-footer__copyright">
																2017 &copy; Metronic theme by
																<a href="https://keenthemes.com" class="m-link">
																	Keenthemes
																</a>
															</span>
														</div>
														<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
															<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-text">
																			About
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#"  class="m-nav__link">
																		<span class="m-nav__link-text">
																			Privacy
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-text">
																			T&C
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<span class="m-nav__link-text">
																			Purchase
																		</span>
																	</a>
																</li>
																<li class="m-nav__item m-nav__item">
																	<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
																		<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</footer>
											<!-- end::Footer -->
										</div>
										<!-- end:: Page -->
    		        <!-- begin::Quick Sidebar -->
										
										<!-- end::Quick Sidebar -->		    
	    <!-- begin::Scroll Top -->
										<div id="m_scroll_top" class="m-scroll-top">
											<i class="la la-arrow-up"></i>
										</div>
										<!-- end::Scroll Top -->		    	
    	<!--begin::Base Scripts -->
										<script src=<?php echo base_url("assets/vendors/base/vendors.bundle.js") ?> type="text/javascript"></script>
										<script src=<?php echo base_url("assets/demo/default/base/scripts.bundle.js") ?> type="text/javascript"></script>
										<!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
										<script src=<?php echo base_url("assets/vendors/custom/fullcalendar/fullcalendar.bundle.js") ?> type="text/javascript"></script>
										<!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
										<script src=<?php echo base_url("assets/app/js/dashboard.js") ?> type="text/javascript"></script>
										<!--end::Page Snippets -->
										 <!--begin::Page Resources -->
										 <script src=<?php echo base_url("assets/demo/default/custom/crud/metronic-datatable/base/html-table.js") ?> type="text/javascript"></script>
										<!--end::Page Resources -->
										<!--begin::Page Vendors -->
										<script src=<?php echo base_url("assets/vendors/custom/datatables/datatables.bundle.js") ?> type="text/javascript"></script>
										<!--end::Page Vendors -->  
        <!--begin::Page Resources -->
										<script src=<?php echo base_url("assets/demo/default/custom/crud/datatables/basic/basic.js") ?> type="text/javascript"></script>
										<!--end::Page Resources -->
									</body>
									<!-- end::Body -->
								</html>