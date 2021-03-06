@extends('admin-layouts.app')

@section('content-admin')
<div class="app-main__inner">
<div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-leaf icon-gradient bg-mean-fruit">
                                </i>
                            </div>
                            <div>Administrator Samkuriang Dashboard
                                <div class="page-title-subheading">Terakhir login: Today, 28-Jun-2019
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <div class="card mb-3 widget-content bg-grow-early">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Total mitra bank sampah yang bergabung</div>
                                    <div class="widget-subheading">Total</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$petugas}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="card mb-3 widget-content bg-grow-early">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Menunggu mitra untuk disetujui</div>
                                    <div class="widget-subheading">Total yang belum disetujui</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span>{{$totalpetugas}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-premium-dark">
                            <div clas   s="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Products Sold</div>
                                    <div class="widget-subheading">Revenue streams</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
</div>
@endsection