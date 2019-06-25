@extends('garbage-officer-layouts.app')

@section('content-garbage-officer')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-leaf icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Garbage Bank Officer Depok
                    <div class="page-title-subheading">Last login: Yesterday, 12-6-2019
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Customer</div>
                        <div class="widget-subheading">Number of Customers</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{$customertotal}}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Savings</div>
                        <div class="widget-subheading">Total Customer Saving</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{$saving}}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Garbages</div>
                        <div class="widget-subheading">Collection of Garbages</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{$garbagetotal}} Kg</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Daftar Sampah
                    
                    <div class="btn-actions-pane-right mr-5 pr-3">
                        <a href="{{ url('garbage_officer/garbages/create') }}" class="mr-4 btn-transition btn btn-outline-primary" >+ CREATE</a>
                    </div>
                </div>
               
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($garbage as $data)
                        <tr>
                            <td class="text-center text-muted">{{++$loop->index}}</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                            </div>
                                      
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{$data->name}}</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{$data->type}}</td>
                            <td class="text-center">
                                <div class="">{{$data->price}}</div>
                            </td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Edit</button>
                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-block text-center card-footer">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="mb-3 card">
                <div class="card-header-tab card-header-tab-animation card-header">
                    <div class="card-header-title">
                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                        Organic Garbage
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
        <div class="col-md-12 col-lg-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Anorganic Garbage</h5>
                    <canvas id="polar-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-5">
        <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Latest Customers</h6>
            <div class="scroll-area-sm">
                <div class="scrollbar-container">
                    <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Ella-Rose Henry</div>
                                        <!-- <div class="widget-subheading">Web Developer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <span>129</span>
                                            <small class="opacity-5 pr-1">Kg</small>
                                            <small class="text-danger pl-2">
                                                <!-- <i class="fa fa-angle-down"></i> -->
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Ruben Tillman</div>
                                        <!-- <div class="widget-subheading">UI Designer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <span>54</span>
                                            <small class="opacity-5 pr-1">Kg</small>
                                            <small class="text-success pl-2">
                                                <!-- <i class="fa fa-angle-up"></i> -->
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                        <!-- <div class="widget-subheading">Java Programmer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <span>429</span>
                                            <small class="opacity-5 pr-1">Kg</small>
                                            <small class="text-warning pl-2">
                                                <!-- <i class="fa fa-dot-circle"></i> -->
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Ella-Rose Henry</div>
                                        <!-- <div class="widget-subheading">Web Developer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <span>129</span>
                                            <small class="opacity-5 pr-1">Kg</small>
                                            <small class="text-danger pl-2">
                                                <!-- <i class="fa fa-angle-down"></i> -->
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Ruben Tillman</div>
                                        <!-- <div class="widget-subheading">UI Designer</div> -->
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="font-size-xlg text-muted">
                                            <span>54</span>
                                            <small class="opacity-5 pr-1">Kg</small>
                                            <small class="text-success pl-2">
                                                <!-- <i class="fa fa-angle-up"></i> -->
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
</div>
@endsection