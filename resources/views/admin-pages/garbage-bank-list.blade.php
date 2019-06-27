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
                        <div class="page-title-subheading">Terakhir login: Kemarin, 12-6-2019
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
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
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Actions</th>
                                </tr>  
                                </thead>
                                <tbody>
                                @foreach($garbage_officer as $data)
                                <tr>
                                    <td class="text-center text-muted">2</td>
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
        </div>
    </div>
@endsection