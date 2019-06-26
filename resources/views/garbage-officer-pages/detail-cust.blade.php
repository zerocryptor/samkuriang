@extends('garbage-officer-layouts.app')

@section('content-garbage-officer')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-6 col-lg-4 offset-2">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Garbage</div>
                        <div class="widget-subheading">Collection of Garbages</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>1Kg</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Money</div>
                        <div class="widget-subheading">Number of Money</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>8000</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 offset-md-2 mb-4">
        <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">History Collection</h6>
            <div class="scroll-area-sm">
                <div class="scrollbar-container">
                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left ml-3">
                                        <div class="widget-heading badge badge-info">12-12-2012</div>
                                        <!-- <div class="widget-subheading">Web Developer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <span>129</span>
                                            <small class="opacity-5 pr-1">Kg</small>
                                            <small class="text-success pl-2">
                                                <small class="opacity-5 pr-1">Organic</small>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left ml-3">
                                        <div class="widget-heading badge badge-info">12-12-2012</div>
                                        <!-- <div class="widget-subheading">UI Designer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <span>54</span>
                                            <small class="opacity-5 pr-1">Kg</small>
                                            <small class="text-success pl-2">
                                                <small class="opacity-5 pr-1">Organic</small>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left ml-3">
                                        <div class="widget-heading badge badge-info">12-12-2012</div>
                                        <!-- <div class="widget-subheading">Java Programmer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <span>429</span>
                                            <small class="opacity-5 pr-1">Kg</small>
                                            <small class="text-success pl-2">
                                                <small class="opacity-5 pr-1">Organic</small>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left ml-3">
                                        <div class="widget-heading badge badge-info">12-12-2012</div>
                                        <!-- <div class="widget-subheading">Web Developer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <span>129</span>
                                            <small class="opacity-5 pr-1">Kg</small>
                                            <small class="text-success pl-2">
                                                <small class="opacity-5 pr-1">Organic</small>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left ml-3">
                                        <div class="widget-heading badge badge-info">12-12-2012</div>
                                        <!-- <div class="widget-subheading">UI Designer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <span>54</span>
                                            <small class="opacity-5 pr-1">Kg</small>
                                            <small class="text-success pl-2">
                                                <small class="opacity-5 pr-1">Organic</small>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Recent Transactions</h6>
            <div class="scroll-area-sm">
                <div class="scrollbar-container">
                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left ml-3">
                                        <div class="widget-heading badge badge-danger">12-12-2012</div>
                                        <!-- <div class="widget-subheading">Web Developer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <small class="opacity-5 pr-1">Rp</small>
                                            <span>129.000</span>
                                            <small class="text-danger pl-2">
                                                <i class="fa fa-angle-down"></i>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left ml-3">
                                        <div class="widget-heading badge badge-success">12-12-2012</div>
                                        <!-- <div class="widget-subheading">UI Designer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <small class="opacity-5 pr-1">Rp</small>
                                            <span>54.000</span>
                                            <small class="text-success pl-2">
                                                <i class="fa fa-angle-up"></i>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left ml-3">
                                        <div class="widget-heading badge badge-success">12-12-2012</div>
                                        <!-- <div class="widget-subheading">Java Programmer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <small class="opacity-5 pr-1">Rp</small>
                                            <span>429.000</span>
                                            <small class="text-success pl-2">
                                                <i class="fa fa-angle-up"></i>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left ml-3">
                                        <div class="widget-heading badge badge-danger">12-12-2012</div>
                                        <!-- <div class="widget-subheading">Web Developer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <small class="opacity-5 pr-1">Rp</small>
                                            <span>129.000</span>
                                            <small class="text-danger pl-2">
                                                <i class="fa fa-angle-down"></i>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left ml-3">
                                        <div class="widget-heading badge badge-success">12-12-2012</div>
                                        <!-- <div class="widget-subheading">UI Designer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                        <small class="opacity-5 pr-1">Rp</small>
                                            <span>90.000</span>
                                            <small class="text-success pl-2">
                                                <i class="fa fa-angle-up"></i>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-8 offset-md-2">
            <div class="mb-3 card">
                <div class="card-header-tab card-header-tab-animation card-header">
                    <div class="card-header-title">
                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                        Activities
                    </div>
                    <ul class="nav">
                        <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">Current</a></li>
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link second-tab-toggle">Last</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-eg-77">
                            <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                        <canvas id="canvas"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection