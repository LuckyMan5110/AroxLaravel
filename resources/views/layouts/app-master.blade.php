<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Arox contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <link rel="icon" href="{{ asset('assets/images/brand/favicon.png') }}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.png') }}"/>
    <title>@yield('title')</title>
    
	<!-- DASHBOARD CSS -->
	<link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet"/>

	<!-- COLOR-THEMES CSS -->
	<link href="{{ asset('assets/css/color-themes.css') }}" rel="stylesheet"/>

	<!-- Sidemenu css -->
	<link href="{{ asset('assets/plugins/side-menu/full-sidemenu.css') }}" rel="stylesheet" />

	<!-- Sidebar Accordions css -->
	<link href="{{ asset('assets/plugins/sidemenu-responsive-tabs/css/easy-responsive-tabs.css') }}" rel="stylesheet">

	<!-- Perfect scroll bar css-->
	<link href="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />

	<!--C3.JS CHARTS PLUGIN -->
	<link href="{{ asset('assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet"/>

	<!-- TABS CSS -->
	<link href="{{ asset('assets/plugins/tabs/tabs-style2.css') }}" rel="stylesheet" type="text/css">

	<!-- CUSTOM SCROLL BAR CSS-->
	<link href="{{ asset('assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"/>

	<!--- FONT-ICONS CSS -->
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet"/>

	<!-- RIGHT-MENU CSS -->
	<link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

	<!-- LEFT-SIDEMENU CSS -->
	<link href="{{ asset('assets/plugins/jquery-jside-menu-master/css/jside-menu.css') }}" rel="stylesheet"/>
	<link href="{{ asset('assets/plugins/jquery-jside-menu-master/css/jside-skins.css') }}" rel="stylesheet"/>

	<!-- HORIZONTAL-MENU CSS -->
	<link href="{{ asset('assets/plugins/horizontal-menu/dropdown-effects/fade-down.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/plugins/horizontal-menu/horizontal-menu.css') }}" rel="stylesheet">

	<!-- FILE UPLODES -->
	<link href="{{ asset('assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



</head>
<body class="app sidebar-mini rtl">
    <!-- GLOABAL LOADER -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>

	@auth
		<div class="page">
			<div class="page-main">

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<a class="header-brand left-meu-header-brand left-meu-header-brand-desktop" href="/">
						<img src="{{ asset('assets/images/brand/logo2.png') }}" class="header-brand-img desktop-logo" alt="Arox logo">
						<img src="{{ asset('assets/images/brand/favicon.png') }}" class="header-brand-img mobile-view-logo" alt="Arox logo">
					</a>
					<div class="input-group p-2  bg-white border-bottom">
						<input type="text" placeholder="Search..." class="form-control search">
						<div class="input-group-prepend mr-0">
							<span class="input-group-text border-right search_btn btn-primary-default"><i class="fa fa-search text-white"></i></span>
						</div>
					</div>
					<div class="side-tab-body p-0 border-0" id="parentVerticalTab">
						<div class="first-sidemenu">
							<ul class="resp-tabs-list hor_1">
								<li class="resp-tab-active" data-toggle="tooltip" data-placement="right" title="Home"><i class="side-menu__icon typcn typcn-device-desktop"></i><div class="slider-text">Home</div></li>
								<li data-toggle="tooltip" data-placement="right" title="Users"><i class="side-menu__icon typcn typcn-group"></i><div class="slider-text">Users</div></li>
								<li data-toggle="tooltip" data-placement="right" title="Users"><i class="side-menu__icon typcn typcn-clipboard"></i><div class="slider-text">Activity Log</div></li>
							</ul>
							<div class="second-sidemenu">
								<div class="resp-tabs-container hor_1">
									<div class="resp-tab-content-active">
										<div class="row">
											<div class="col-md-12">
												<h4 class="font-weight-normal"><i class="typcn typcn-device-desktop"></i> Home</h4>
												<a href="/" class="slide-item">Entertainment</a>
												<a href="/" class="slide-item">Big Data Dashboard</a>
												<a href="/" class="slide-item">HR Dashboard</a>
												<a href="/" class="slide-item">Crypto Currencies</a>
												<a href="/" class="slide-item">Gaming Dashboard</a>
												<div class="card mt-5">
													<div class="card-body p-3">
														<div class="d-flex">
															<div class="pr-4 pt-1"><i class="ti-user fs-40 mt-0 text-primary"></i></div>
															<div class="">
																<span>New Users</span>
																<h3 class="mb-0">65,485</h3>
															</div>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-body p-3">
														<div class="d-flex">
															<div class="pr-4 pt-1"><i class="ti-stats-up fs-40 mt-0 text-info"></i></div>
															<div class="">
																<span>Sales</span>
																<h3 class="mb-0">$75,845</h3>
															</div>
														</div>
													</div>
												</div>
												<h6 class="text-uppercase mt-6 mb-5">Short Cut</h6>
												<div class="row">
													<div class="col-6">
														<div class="border text-center bg-white  mb-5">
															<i class="ti-comment-alt fs-30 text-secondary"></i>
															<div><small class="mb-0">Messages</small></div>
														</div>
													</div>
													<div class="col-6">
														<div class="border text-center bg-white  mb-5">
															<i class="ti-image fs-30 text-yellow"></i>
															<div><small class="mb-0">Gallery</small></div>
														</div>
													</div>
													<div class="col-6">
														<div class="border text-center bg-white  mb-5">
															<i class="ti-bell fs-30 text-primary"></i>
															<div><small class="mb-0">Alerts</small></div>
														</div>
													</div>
													<div class="col-6">
														<div class="border text-center bg-white  mb-5">
															<i class="ti-settings fs-30 text-danger"></i>
															<div><small class="mb-0">Settings</small></div>
														</div>
													</div>
												</div>
												<h6 class="text-uppercase mt-2 mb-4">Browser Statistics</h6>
												<div class="progress progress-lg mb-4">
													<div class="progress-bar bg-yellow w-20"></div>
													<div class="progress-bar bg-pink w-10"></div>
													<div class="progress-bar bg-secondary w-30"></div>
													<div class="progress-bar bg-primary w-25"></div>
													<div class="progress-bar bg-danger w-15"></div>
												</div>
												<div class="table-responsive">
													<table class="table card-table table-vcenter text-nowrap table-bordered border-top bg-white">
														<tbody>
															<tr>
																<th scope="row"><div class="w-3 h-3 brround bg-yellow"></div></th>
																<td>Safari</td>
																<td>20%</td>
															</tr>
															<tr>
																<th scope="row"><div class="w-3 h-3 brround bg-pink"></div></th>
																<td>IE</td>
																<td>10%</td>
															</tr>
															<tr>
																<th scope="row"><div class="w-3 h-3 brround bg-secondary"></div></th>
																<td>Chrome</td>
																<td>30%</td>
															</tr>
															<tr>
																<th scope="row"><div class="w-3 h-3 brround bg-primary"></div></th>
																<td>Firefox</td>
																<td>25%</td>
															</tr>
															<tr>
																<th scope="row"><div class="w-3 h-3 brround bg-danger"></div></th>
																<td>Opera</td>
																<td>15%</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="row">
											<div class="col-md-12">
												<h4 class="font-weight-normal"><i class="typcn typcn-users"></i> Users</h4>
												<a href="{{ route('users.index') }}" class="slide-item">List</a>
												<a href="{{ route('users.create') }}" class="slide-item">Add</a>
												<div class="card mt-5">
													<div class="card-body p-3">
														<div class="d-flex">
															<div class="pr-4 pt-1"><i class="ti-user fs-40 mt-0 text-primary"></i></div>
															<div class="">
																<span>New Users</span>
																<h3 class="mb-0">65,485</h3>
															</div>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-body p-3">
														<div class="d-flex">
															<div class="pr-4 pt-1"><i class="ti-stats-up fs-40 mt-0 text-info"></i></div>
															<div class="">
																<span>Sales</span>
																<h3 class="mb-0">$75,845</h3>
															</div>
														</div>
													</div>
												</div>
												<h6 class="text-uppercase mt-6 mb-4">Contacts</h6>
												<div class="card overflow-hidden">
													<div class="card-body p-0">
														<div class="list-group list-group-flush ">
															<div class="list-group-item d-flex  align-items-center">
																<div class="mr-2">
																	<span class="avatar  brround cover-image" data-image-src="../assets/images/faces/female/12.jpg" ><span class="avatar-status bg-green"></span></span>
																</div>
																<div class="">
																	<div class="font-weight-semibold">Mozelle</div>
																</div>
																<div class="ml-auto">
																	<a href="#" class="btn btn-sm btn-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center">
																<div class="mr-2">
																	<span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/21.jpg"></span>
																</div>
																<div class="">
																	<div class="font-weight-semibold">Florinda</div>
																</div>
																<div class="ml-auto">
																	<a href="#" class="btn btn-sm btn-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center">
																<div class="mr-2">
																	<span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/29.jpg"><span class="avatar-status bg-green"></span></span>
																</div>
																<div class="">
																	<div class="font-weight-semibold">lina Bernie</div>
																</div>
																<div class="ml-auto">
																	<a href="#" class="btn btn-sm btn-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center">
																<div class="mr-2">
																	<span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/2.jpg"><span class="avatar-status bg-green"></span></span>
																</div>
																<div class="">
																	<div class="font-weight-semibold">Mclaughin</div>
																</div>
																<div class="ml-auto">
																	<a href="#" class="btn btn-sm btn-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<h6 class="text-uppercase mt-6 mb-4">Friends</h6>
												<div class="avatar-list">
													<span><img class="avatar brround mr-2" src="../assets/images/faces/male/1.jpg" alt="img"></span>
													<span><img class="avatar brround mr-2" src="../assets/images/faces/male/2.jpg" alt="img"></span>
													<span><img class="avatar brround mr-2" src="../assets/images/faces/female/1.jpg" alt="img"></span>
													<span class="avatar brround bg-primary">+8</span>
												</div>
												<h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
												<div class="btn-list">
													<button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
													<button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
													<button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
													<button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="row">
											<div class="col-md-12">
												<h4 class="font-weight-normal"><i class="typcn typcn-users"></i> Log Activiy</h4>
												<h6 class="text-uppercase mt-6 mb-4">Contacts</h6>
												<div class="card overflow-hidden">
													<div class="card-body p-0">
														<div class="list-group list-group-flush ">
															<div class="list-group-item d-flex  align-items-center">
																<div class="mr-2">
																	<span class="avatar  brround cover-image" data-image-src="../assets/images/faces/female/12.jpg" ><span class="avatar-status bg-green"></span></span>
																</div>
																<div class="">
																	<div class="font-weight-semibold">Mozelle</div>
																</div>
																<div class="ml-auto">
																	<a href="#" class="btn btn-sm btn-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center">
																<div class="mr-2">
																	<span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/21.jpg"></span>
																</div>
																<div class="">
																	<div class="font-weight-semibold">Florinda</div>
																</div>
																<div class="ml-auto">
																	<a href="#" class="btn btn-sm btn-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center">
																<div class="mr-2">
																	<span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/29.jpg"><span class="avatar-status bg-green"></span></span>
																</div>
																<div class="">
																	<div class="font-weight-semibold">lina Bernie</div>
																</div>
																<div class="ml-auto">
																	<a href="#" class="btn btn-sm btn-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
																</div>
															</div>
															<div class="list-group-item d-flex  align-items-center">
																<div class="mr-2">
																	<span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/2.jpg"><span class="avatar-status bg-green"></span></span>
																</div>
																<div class="">
																	<div class="font-weight-semibold">Mclaughin</div>
																</div>
																<div class="ml-auto">
																	<a href="#" class="btn btn-sm btn-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<h6 class="text-uppercase mt-6 mb-4">Friends</h6>
												<div class="avatar-list">
													<span><img class="avatar brround mr-2" src="../assets/images/faces/male/1.jpg" alt="img"></span>
													<span><img class="avatar brround mr-2" src="../assets/images/faces/male/2.jpg" alt="img"></span>
													<span><img class="avatar brround mr-2" src="../assets/images/faces/female/1.jpg" alt="img"></span>
													<span class="avatar brround bg-primary">+8</span>
												</div>
												<h6 class="text-uppercase mt-6 mb-4">Social Share</h6>
												<div class="btn-list">
													<button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
													<button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
													<button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
													<button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-4 -->
				</aside>
				<!--sidemenu end-->

				<!-- app-content-->
				<div class="app-content  my-3 my-md-5">

					<!-- HEADER -->
					<div class="header header-fixed ">
						<div class="container-fluid">
							<div class="d-flex">
								<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
								<a class="header-brand d-md-none" href="index.html">
									<img src="{{ asset('../assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="Arox logo">
									<img src="{{ asset('../assets/images/brand/favicon2.png') }}" class="header-brand-img mobile-view-logo" alt="Arox logo">
								</a>
								<!-- LOGO -->
								<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
								<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
									<a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a>
									<div class="">
										<form class="form-inline">
											<div class="search-element">
												<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
												<button class="btn btn-primary-color search" type="submit"><i class="ti-search"></i></button>
											</div>
										</form>
									</div><!-- SEARCH -->
									<div class="dropdown d-sm-flex d-none">
										<a class="nav-link icon full-screen-link nav-link-bg">
											<i class="ti-arrows-corner" id="fullscreen-button"></i>
										</a>
									</div><!-- FULL-SCREEN -->
									<div class="dropdown d-sm-flex d-none notifications">
										<a class="nav-link icon" data-toggle="dropdown">
											<i class="ti-bell"></i>
											<span class="nav-unread bg-warning-1 pulse"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right  dropdown-menu-arrow">
											<div class="dropdown-item p-4 bg-image-2 text-center">
												<h4 class="user-semi-title mb-0 font-weight-bold">3 New <span class="font-weight-normal">Notifications</span></h4>

											</div>
											<a href="#" class="dropdown-item mt-2 d-flex pb-3">
												<div class="notifyimg bg-success">
													<i class="fa fa-thumbs-o-up"></i>
												</div>
												<div>
													<strong>Someone likes our posts.</strong>
													<div class="small">3 hours ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="notifyimg bg-warning">
													<i class="fa fa-commenting-o"></i>
												</div>
												<div>
													<strong> 3 New Comments</strong>
													<div class="small">5  hour ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="notifyimg bg-danger">
													<i class="fa fa-cogs"></i>
												</div>
												<div>
													<strong> Server Rebooted.</strong>
													<div class="small">45 mintues ago</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item text-center">View all Notification</a>
										</div>
									</div><!-- NOTIFICATIONS -->
									<div class="dropdown d-sm-flex d-none message">
										<a class="nav-link icon text-center" data-toggle="dropdown">
											<i class="ti-email floating"></i>
											<span class="nav-unread bg-warning-1 pulse"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<div class="dropdown-item p-4 bg-image-3 text-center">
												<h4 class="user-semi-title mb-0 font-weight-bold">4 New <span class="font-weight-normal">Messages</span></h4>

											</div>
											<a href="#" class="dropdown-item d-flex mt-2 pb-3">
												<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../assets/images/faces/male/41.jpg">
													<span class="avatar-status bg-green"></span>
												</div>
												<div>
													<strong>Madeleine</strong>
													<p class="mb-0 fs-13">Hey! there I' am available</p>
													<div class="small">3 hours ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../assets/images/faces/female/1.jpg">
													<span class="avatar-status bg-red"></span>
												</div>
												<div>
													<strong>Anthony</strong>
													<p class="mb-0 fs-13 ">New product Launching</p>
													<div class="small">5  hour ago</div>
												</div>
											</a>
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../assets/images/faces/female/18.jpg">
													<span class="avatar-status bg-yellow"></span>
												</div>
												<div>
													<strong>Olivia</strong>
													<p class="mb-0 fs-13 ">New Schedule Realease</p>
													<div class="small">45 mintues ago</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item text-center">See all Messages</a>
										</div>
									</div><!-- MESSAGE-BOX -->
									<div class="dropdown text-center selector profile-1 d-sm-flex d-none">
										<a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
											<span><img src="{{ asset('assets/images/faces/female/16.jpg') }}" alt="profile-user" class="avatar brround cover-image mb-1 ml-0"></span>										
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<div class="text-center bg-image p-4">
												<a href="#" class="dropdown-item text-center font-weight-sembold user pt-0" data-toggle="dropdown">Joyce Stewart</a>
												<span class="text-center user-semi-title ">web designer</span>
											</div>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon  mdi mdi-settings"></i> Settings
											</a>
											<a class="dropdown-item" href="#">
												<span class="float-right"><span class="badge badge-danger">6</span></span>
												<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
											</a>
											@auth
												<a class="dropdown-item" href="{{ route('logout.perform') }}" >
													<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
												</a>
											@endauth

										</div>
									</div><!-- PROFILE -->
									<button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
										aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
									</button>
									<div class="dropdown d-md-flex header-settings">
										<a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
											<i class="ti-menu"></i>
										</a>
									</div><!-- SIDE-MENU -->
								</div>
								<a href="#" class="header-toggler d-lg-none ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
									<span class="header-toggler-icon"></span>
								</a>
							</div>
						</div>
					</div>
					<!-- HEADER END -->

					<!--Resposnisve Navbar-->
					<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-sm-none">
						<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
							<div class="d-flex order-lg-2 ml-auto">

								<div class="dropdown d-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="ti-arrows-corner" id="fullscreen-button"></i>
									</a>
								</div><!-- FULL-SCREEN -->
								<div class="dropdown d-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="ti-bell"></i>
										<span class="nav-unread bg-warning-1 pulse"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right  dropdown-menu-arrow">
										<div class="dropdown-item p-4 bg-image-2 text-center">
											<h4 class="user-semi-title mb-0 font-weight-bold">3 New <span class="font-weight-normal">Notifications</span></h4>

										</div>
										<a href="#" class="dropdown-item mt-2 d-flex pb-3">
											<div class="notifyimg bg-success">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div>
												<strong>Someone likes our posts.</strong>
												<div class="small">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-warning">
												<i class="fa fa-commenting-o"></i>
											</div>
											<div>
												<strong> 3 New Comments</strong>
												<div class="small">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-danger">
												<i class="fa fa-cogs"></i>
											</div>
											<div>
												<strong> Server Rebooted.</strong>
												<div class="small">45 mintues ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notification</a>
									</div>
								</div><!-- NOTIFICATIONS -->
								<div class="dropdown d-flex">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="ti-email floating"></i>
										<span class="nav-unread bg-warning-1 pulse"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="dropdown-item p-4 bg-image-3 text-center">
											<h4 class="user-semi-title mb-0 font-weight-bold">4 New <span class="font-weight-normal">Messages</span></h4>

										</div>
										<a href="#" class="dropdown-item d-flex mt-2 pb-3">
											<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../assets/images/faces/male/41.jpg">
												<span class="avatar-status bg-green"></span>
											</div>
											<div>
												<strong>Madeleine</strong>
												<p class="mb-0 fs-13">Hey! there I' am available</p>
												<div class="small">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../assets/images/faces/female/1.jpg">
												<span class="avatar-status bg-red"></span>
											</div>
											<div>
												<strong>Anthony</strong>
												<p class="mb-0 fs-13 ">New product Launching</p>
												<div class="small">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="../assets/images/faces/female/18.jpg">
												<span class="avatar-status bg-yellow"></span>
											</div>
											<div>
												<strong>Olivia</strong>
												<p class="mb-0 fs-13 ">New Schedule Realease</p>
												<div class="small">45 mintues ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">See all Messages</a>
									</div>
								</div><!-- MESSAGE-BOX -->
								<div class="dropdown text-center selector profile-1 mt-4">
									<a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
										<span><img src="{{ asset('assets/images/faces/female/16.jpg') }}" alt="profile-user" class="avatar brround cover-image mb-1 ml-0"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="text-center bg-image p-4">
											<a href="#" class="dropdown-item text-center font-weight-sembold user pt-0" data-toggle="dropdown">Joyce Stewart</a>
											<span class="text-center user-semi-title ">web designer</span>
										</div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="#">
											<span class="float-right"><span class="badge badge-danger">6</span></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
										</a>
										<a class="dropdown-item" href="login.html">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div><!-- PROFILE -->
							</div>
						</div>
					</div>
					<!--/Resposnisve Navbar-->

					<!-- HORIZONTAL-MENU -->
					<div class ="horizontal-main hor-menu clearfix">
						<div class="horizontal-mainwrapper clearfix">
							<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true"><a href="#" class="sub-icon active"><i class="fa fa-laptop"></i> Dashboard <span class="badge badge-primary  nav-badge">5</span></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="/">Entertainment Dashboard</a></li>
											<li aria-haspopup="true"><a href="/">Big data Dashboard</a></li>
											<li aria-haspopup="true"><a href="/">HR Dashboard</a></li>
											<li aria-haspopup="true"><a href="/">Crypto currencies</a></li>
											<li aria-haspopup="true"><a href="/">Gaming Dashboard</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-user-o"></i> Users <span class="badge badge-danger nav-badge">3</span></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="{{ route('users.index') }}">List</a></li>
											<li aria-haspopup="true"><a href="{{ route('users.create') }}">Add</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="{{ route('home.logactivity') }}" class=""><i class="fa fa-tasks"></i>Activity Log</a></li>
									
								</ul>
							</nav>
							<!-- NAV END -->
						</div>
					</div>
					<!-- HORIZONTAL-MENU END -->

					@yield('content')

					<!-- CONTAINER CLOSED -->
				</div>
			</div>

			<!-- RIGHT-SIDEBAR OPEN -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class=" close-button float-right">
					<a href="#" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x  text-white"></i></a>
				</div>
				<div class="tab-menu-heading siderbar-tabs border-0 ">
					<div class="tabs-menu ">
						<!-- Tabs -->
						<ul class="nav panel-tabs">
							<li class=""><a href="#tab1" class="active" data-toggle="tab">Friends</a></li>
							<li><a href="#tab2" data-toggle="tab">Online</a></li>
							<li><a href="#tab3" data-toggle="tab">Archive</a></li>
						</ul>
					</div>
				</div>
				<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
					<div class="tab-content border-top">
						<div class="tab-pane active" id="tab1">
							<div class="chat">
								<div class="contacts_card">
									<div class="input-group mb-0 p-3 border-bottom">
										<input type="text" placeholder="Search..." class="form-control search">
										<div class="input-group-prepend mr-0">
											<span class="input-group-text border-right search_btn btn-primary-light "><i class="fa fa-search text-white"></i></span>
										</div>
									</div>
									<div class="contacts mb-0">
										<div class="list-group list-group-flush ">
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar  brround avatar-md cover-image" data-image-src="../assets/images/faces/female/1.jpg" ><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Darlena Torian</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/2.jpg"></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Richie Verrill</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/3.jpg"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Cheree Morgan</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/4.jpg"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Katerine Coit</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar  brround avatar-md cover-image" data-image-src="../assets/images/faces/male/5.jpg" ><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Hai Indelicato</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/6.jpg"></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Cecilia Kerfoot</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/7.jpg"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Ronald Zirbel</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/8.jpg"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Darren Niemann</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar  brround avatar-md cover-image" data-image-src="../assets/images/faces/female/9.jpg" ><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Sibyl Cogley</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/10.jpg"></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Jess Hildebrandt</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/11.jpg"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Wanita Sheppard</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/12.jpg"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Deane Dreher</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar  brround avatar-md cover-image" data-image-src="../assets/images/faces/male/13.jpg" ><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Lavern Alverson</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/14.jpg"></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Caitlin Canas</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/15.jpg"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Santos Yadao</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/16.jpg"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Melodi Krantz</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar  brround avatar-md cover-image" data-image-src="../assets/images/faces/female/17.jpg" ><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Daisey Highfill</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/18.jpg"></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Gregg Rossow</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/19.jpg"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Clint Dejesus</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
											<div class="list-group-item d-flex  align-items-center">
												<div class="mr-2">
													<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/20.jpg"><span class="avatar-status bg-green"></span></span>
												</div>
												<div class="">
													<div class="font-weight-semibold">Florida Pearsall</div>
												</div>
												<div class="ml-auto">
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
													<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- TAB-1 END -->
						<div class="tab-pane" id="tab2">
							<div class="input-group mb-0 p-3 border-bottom">
								<input type="text" placeholder="Search..." class="form-control search">
								<div class="input-group-prepend mr-0">
									<span class="input-group-text border-right search_btn btn-primary-light "><i class="fa fa-search text-white"></i></span>
								</div>
							</div>
							<div class="contacts mb-0">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar  brround avatar-md cover-image" data-image-src="../assets/images/faces/female/1.jpg" ><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Darlena Torian</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/3.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Cheree Morgan</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/4.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Katerine Coit</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar  brround avatar-md cover-image" data-image-src="../assets/images/faces/male/5.jpg" ><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Hai Indelicato</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/7.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Ronald Zirbel</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/8.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Darren Niemann</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar  brround avatar-md cover-image" data-image-src="../assets/images/faces/female/9.jpg" ><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Sibyl Cogley</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/11.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Wanita Sheppard</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/12.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Deane Dreher</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar  brround avatar-md cover-image" data-image-src="../assets/images/faces/male/13.jpg" ><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Lavern Alverson</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/15.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Santos Yadao</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/16.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Melodi Krantz</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar  brround avatar-md cover-image" data-image-src="../assets/images/faces/female/17.jpg" ><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Daisey Highfill</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/19.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Clint Dejesus</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/20.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Florida Pearsall</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- TAB-2 END -->
						<div class="tab-pane" id="tab3">
							<div class="input-group mb-0 p-3 border-bottom">
								<input type="text" placeholder="Search..." class="form-control search">
								<div class="input-group-prepend mr-0">
									<span class="input-group-text border-right search_btn btn-primary-light "><i class="fa fa-search text-white"></i></span>
								</div>
							</div>
							<div class="contacts mb-0">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/2.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Richie Verrill</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/6.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Cecilia Kerfoot</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/10.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Jess Hildebrandt</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/female/14.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Caitlin Canas</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar brround avatar-md cover-image" data-image-src="../assets/images/faces/male/18.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold">Gregg Rossow</div>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-phone fs-10"></i></a>
											<a href="#" class="btn btn-sm btn-default-light btn-icon"><i class="fa fa-comment fs-10"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- TAB-3 END -->
					</div>
				</div>
			</div>
			<!-- RIGHT-SIDEBAR -->

			<!-- FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2019 <a href="#">Arox</a>. Designed by <a href="#">Spruko</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER END -->
		</div>
	@endauth

	@guest
		@yield('content')
    @endguest

	<!-- JQUERY SCRIPTS -->
	<script src="{{ asset('assets/js/vendors/jquery-3.2.1.min.js') }}"></script>

	<!-- BOOTSTRAP SCRIPTS -->
	<script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>

	<!-- SPARKLINE -->
	<script src="{{ asset('assets/js/vendors/jquery.sparkline.min.js') }}"></script>

	<!-- CHART-CIRCLE -->
	<script src="{{ asset('assets/js/vendors/circle-progress.min.js') }}"></script>

	<!-- RATING STAR -->
	<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

	<!-- CHARTJS CHART -->
	<script src="{{ asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
	<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

	<!-- C3.JS CHART PLUGIN -->
	<script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/charts-c3/c3-chart.js') }}"></script>

	<!-- INPUT MASK PLUGIN-->
	<script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

	<!-- CHARTJS CHART -->
	<script src="{{ asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
	<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

	<!-- CUSTOM SCROLLBAR -->
	<script src="{{ asset('assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

	<!--Side-menu js-->
	<script src="{{ asset('assets/plugins/side-menu/sidemenu.js') }}"></script>

	<!-- STICKY JS-->
	<script src="{{ asset('assets/js/sticky.js') }}"></script>
	<script src="{{ asset('assets/js/horizontal-sticky.js') }}"></script>

	<!-- Sidebar Accordions js -->
	<script src="{{ asset('assets/plugins/sidemenu-responsive-tabs/js/easyResponsiveTabs.js') }}"></script>

	<!-- Perfect scroll bar js-->
	<script src="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.js') }}"></script>

	<!-- NOTIFICATIONS JS -->
	{{-- <script src="{{ asset('assets/plugins/notify-growl/js/rainbow.js') }}"></script>
	<script src="{{ asset('assets/plugins/notify-growl/js/sample.js') }}"></script>
	<script src="{{ asset('assets/plugins/notify-growl/js/jquery.growl.js') }}"></script> --}}

	<!-- PIETY CHART -->
	<script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

	<!-- RIGHT-MENU JS -->
	<script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

	<!-- FILE UPLOADES JS -->
	<script src="{{ asset('assets/plugins/fileuploads/js/dropify.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>

	<!-- LEFTSIDEMENU PLUGIN -->
	<script src="{{ asset('assets/plugins/jquery-jside-menu-master/js/jquery.jside.menu.js') }}"></script>

	<!-- HORIZONTAL-MENU JS -->
	<script src="{{ asset('assets/plugins/horizontal-menu/horizontal-menu.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-jside-menu-master/docs/demo-only.js') }}"></script>

	<!-- INDEX-SCRIPTS -->
	<script src="{{ asset('assets/js/index3.js') }}"></script>

	<!-- Left CUSTOM JS-->
	<script src="{{ asset('assets/js/left-custom.js') }}"></script>

	<!--CUSTOM JS -->
	<script src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>