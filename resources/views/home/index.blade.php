@extends('layouts.app-master')
@section('title','Arox')

@section('content')

    @auth
        <div class="side-app home">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard 03</li>
                </ol>
                <div>
                    <a href="#" class="btn btn-sm btn-primary"><i class="ti-settings"></i> General Settings </a>
                    <a href="#" class="btn btn-sm btn-secondary"><i class="ti-file"></i> Print </a>
                    <a href="#" class="btn btn-sm btn-danger">Buy Now </a>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row row-cards">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-9">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                            <div class="card">
                                <div class="card-body border-0">
                                    <div class="row mb-0">
                                        <div class="col-lg-4">
                                            <div class="dash3 mb-2 text-center">
                                                <div class="chart-circle mt-0 mt-sm-0 mb-0 ml-auto" data-value="0.73" data-thickness="8" data-color="#00b3ff"><canvas width="128" height="128"></canvas><canvas width="128" height="128"></canvas>
                                                    <div class="chart-circle-value text-center ">70%<small class="mt-1 text-muted">yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8  mt-4 mt-md-0">
                                            <h4>Avg Absenteesim rate</h4>
                                            <div class="mt-4 mb-1">
                                                <h6 class="media-heading fw-500">UI/UX Development</h6>
                                                <div class="d-flex justify-content-between mb-1 align-items-center">
                                                    <div class="progress h-2 w-100 flex-grow-1 mr-4">
                                                        <div class="progress-bar bg-secondary w-50"></div>
                                                    </div>
                                                    <p class="text-muted mt-1 mb-0">50%</p>
                                                </div>
                                            </div>
                                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet Sed hendrerit. Curabitur blandit mollis lacus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                            <div class="card">
                                <div class="card-body text-center feature">
                                    <div class="fa-stack fa-lg fa-1x icons shadow-default">
                                        <i class="icon-basket-loaded text-yellow"></i>
                                    </div>
                                    <p class="card-text mt-3 mb-3">New Sales</p>
                                    <p class="h1 text-center text-yellow">262</p>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        <div class="col-md-12">
                            <div class="card overflow-hidden">
                                <div class="card-body overflow-hidden">
                                    <div class="">
                                        <h5 class="card-title mb-5">Satisfaction survey result</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                            <div class="mb-5">
                                                <h2 class="mb-1">6,382</h2>
                                                <small class="text-white-transparent-1">
                                                    <i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2"></i>
                                                    <span>+24%</span>
                                                </small>
                                                <small class="text-white-transparent-1 ml-2">From Last Month Average resolved Complaints by year.</small>
                                            </div>
                                            <div class="media mb-4 mt-2">
                                                <div class="media-body">
                                                    <h6 class="media-heading fw-500 mb-2">Alignment</h6>
                                                    <div class="progress h-2">
                                                        <div class="progress-bar w-80 bg-success-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media mb-4">
                                                <div class="media-body">
                                                <h6 class="media-heading fw-500 mb-2">Company culture</h6>
                                                    <div class="progress h-2">
                                                        <div class="progress-bar w-30 bg-yellow" role="progressbar">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media mb-4">
                                                <div class="media-body">
                                                <h6 class="media-heading fw-500 mb-2">Leadership</h6>
                                                    <div class="progress h-2">
                                                        <div class="progress-bar w-50 bg-secondary-1 " role="progressbar">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media mb-4">
                                                <div class="media-body">
                                                <h6 class="media-heading fw-500 mb-2">Accounts</h6>
                                                    <div class="progress h-2">
                                                        <div class="progress-bar w-70 bg-primary " role="progressbar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media mb-0">
                                                <div class="media-body">
                                                <h6 class="media-heading fw-500 mb-2">Pay benfits</h6>
                                                    <div class="progress h-2">
                                                        <div class="progress-bar w-70 bg-danger-1" role="progressbar">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                                            <div class="chart-wrapper">
                                                <canvas id="survey" class="chart-dropshadow overflow-hidden chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                            <div class="card overflow-hidden">
                                <div class="card-header">
                                    <h3 class="card-title">Active Candidates</h3>
                                </div>
                                <div class="card-body">
                                    <div class="card-overlay">
                                        <h2 class="mb-1">352</h2>
                                        <h6 class="text-white">Active employees</h6>
                                        <small class="">
                                            <span class="text-white-transparent-1">20% increased from last month</span>
                                        </small>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart" class="chart-height chart-dropshadow-primary-1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Employee Engagement by department</h3>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <p class="mb-0 text-muted">Marketing</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress h-3 w-100 mt-2 flex-grow-1 mr-4">
                                                <div class="progress-bar bg-primary-1 w-80"></div>
                                            </div>
                                            <p class="text-muted mt-1 mb-0">80%</p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p class="mb-0 text-muted">Sales</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress h-3 w-100 mt-2 flex-grow-1 mr-4">
                                                <div class="progress-bar bg-secondary-1 w-50"></div>
                                            </div>
                                            <p class="text-muted mt-1 mb-0">50%</p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p class=" mb-0 text-muted">Administration</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress h-3 w-100 mt-2 flex-grow-1 mr-4">
                                                <div class="progress-bar bg-danger-1 w-65"></div>
                                            </div>
                                            <p class="text-muted mt-1 mb-0">65%</p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p class=" mb-0 text-muted">Finance</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress h-3 w-100 mt-2 flex-grow-1 mr-4">
                                                <div class="progress-bar bg-success-1 w-30"></div>
                                            </div>
                                            <p class="text-muted mt-1 mb-0">30%</p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p class=" mb-0 text-muted">IT</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress h-3 w-100 mt-2 flex-grow-1 mr-4">
                                                <div class="progress-bar bg-warning-1 w-40"></div>
                                            </div>
                                            <p class="text-muted mt-1 mb-0">40%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                            <div class="card overflow-hidden widget-drop">
                                <div class="card-body overflow-hidden">
                                    <div class="clearfix mb-0">
                                        <div class="float-left">
                                            <h4 class="card-text font-weight-semibold">Turn Over rate</h4>
                                        </div>
                                        <div class="dropdown float-right show">
                                            <span class=" text-white" id="dropdownMenuButton"><i class="fa fa-cog fa-spin fs-25"></i></span>
                                            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                                <div class="dropdown-menu-content">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <p class="mb-1">Company Turn over rate by year.</p>
                                        <h2 class="text-primary-1 mb-1">2.546%</h2>
                                        <small class="text-white-transparent-1">
                                            <i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2"></i>
                                            <span>+14%</span>
                                        </small>
                                        <small class="text-white-transparent-1 ml-1 mb-2 ">vs pervious month</small>
                                    </div>
                                </div>
                                <canvas id="turnover-rate" class="chart-dropshadow2 overflow-hidden"></canvas>
                            </div>
                        </div><!-- COL END -->

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 grid-margin">
                            <div class="card">
                                <div class="card-header ">
                                    <h3 class="card-title ">Projects</h3>
                                </div>
                                <div class="">
                                    <div class="d-flex table-responsive p-3">
                                        <div class="btn-group mr-2">
                                            <button class="btn btn-sm btn-default"><i class="mdi mdi-plus-circle-outline"></i>Add</button>
                                        </div>
                                        <div class="btn-group mr-2">
                                            <button type="button" class="btn btn-default mr-2"><i class="mdi mdi-alert-circle-outline"></i></button>
                                            <button type="button" class="btn btn-default"><i class="mdi mdi-delete-empty"></i></button>
                                        </div>
                                        <div class="btn-group mr-2">
                                            <button type="button" class="btn btn-default"><i class="mdi mdi-printer"></i></button>
                                        </div>
                                        <div class="btn-group ml-auto mr-2 mt-1 border-0 d-none d-md-block">
                                            <input type="text" class="form-control" placeholder="Search Here">
                                        </div>
                                    </div>
                                    <div class="table-responsive border-top">
                                        <table class="table card-table table-striped table-vcenter text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Project Name</th>
                                                    <th>Team</th>
                                                    <th>Feedback</th>
                                                    <th>Date</th>
                                                    <th>Preview</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2345</td>
                                                    <td>Megan Peters</td>
                                                    <td><div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/12.jpg" ></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/male/21.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/29.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/male/2.jpg"></span>
                                                        </div>
                                                    </td>
                                                    <td>please check pricing Info </td>
                                                    <td class="text-nowrap">July 13, 2018</td>
                                                    <td class="w-1"><a href="#" class="icon"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>4562</td>
                                                    <td>Phil Vance</td>
                                                    <td><div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/male/12.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/21.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/male/29.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/2.jpg"></span>
                                                        </div>
                                                    </td>
                                                    <td>New stock</td>
                                                    <td class="text-nowrap">June 15, 2018</td>
                                                    <td><a href="#" class="icon"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>8765</td>
                                                    <td>Adam Sharp</td>
                                                    <td><div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/male/21.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/6.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/male/19.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/7.jpg"></span>
                                                        </div>
                                                    </td>
                                                    <td>Daily updates</td>
                                                    <td class="text-nowrap">July 8, 2018</td>
                                                    <td><a href="#" class="icon"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2665</td>
                                                    <td>Samantha Slater</td>
                                                    <td><div class="avatar-list avatar-list-stacked">
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/2.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/male/1.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/female/9.jpg"></span>
                                                        <span class="avatar brround cover-image" data-image-src="../assets/images/faces/male/2.jpg"></span>
                                                        </div>
                                                    </td>
                                                    <td>available item list</td>
                                                    <td class="text-nowrap">June 28, 2018</td>
                                                    <td><a href="#" class="icon"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-3">
                    <div class="border p-0 mb-5">
                        <div class="card-body p-0">
                            <div class="tab-menu-heading siderbar-tabs border-0 ">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class=""><a href="#tab4" class="active" data-toggle="tab">Employes</a></li>
                                        <li><a href="#tab5" data-toggle="tab">Online</a></li>
                                        <li><a href="#tab6" data-toggle="tab">Archive</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
                                <div class="tab-content border-top">
                                    <div class="tab-pane active" id="tab4">
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
                                    <div class="tab-pane" id="tab5">
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
                                    <div class="tab-pane" id="tab6">
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
                    </div>
                </div>
            </div>
        </div>
    @endauth
    
    @guest
        <div class="bg-dark p-5 rounded">
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        </div>
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block text-sm-right starting-page">
            <a href="{{ route('login.perform') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
            <a href="{{ route('register.perform') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        </div>
    @endguest
@endsection