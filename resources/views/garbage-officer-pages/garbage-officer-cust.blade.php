@extends('garbage-officer-layouts.app')

@section('content-garbage-officer')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card pt-5">
                <div class="card-header">Active Customers
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            <!-- <button class="active btn btn-focus">Last Week</button>
                            <button class="btn btn-focus">All Month</button> -->
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="text-center">Tabungan Sampah</th>
                            <th class="text-center">Total Pendapatan</th>
                            <th class="text-center">Terakhir Diupdate</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sampah as $data)
                        <tr>
                            <td class="text-center text-muted">1</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Budi</div>
                                            <!-- <div class="widget-subheading opacity-7">Web Developer</div> -->
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">20 Kg</td>
                            <td class="text-center">
                                <div class="">Rp 70.000</div>
                            </td>
                            <td class="text-center">20/12/2019</td>
                            <td class="text-center">
                                <a href="{{ url('garbage_officer/customers/edit') }}" type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ url('garbage_officer/customers/detail') }}" type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Detail</a>
                                <button class="mr-2 btn btn-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="text-center text-muted">2</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Bejo</div>
                                            <!-- <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div> -->
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">50 Kg</td>
                            <td class="text-center">
                                <div class="">Rp 100.000</div>
                            </td>
                            <td class="text-center">20/12/2019</td>
                            <td class="text-center">
                                <a href="{{ url('garbage_officer/customers/edit') }}" type="button" id="PopoverCustomT-1" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ url('garbage_officer/customers/detail') }}" type="button" id="PopoverCustomT-1" class="btn btn-sm btn-success">Detail</a>
                                <button class="mr-2 btn btn-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                            </td>
                        </tr>
                        </tbody>
                        {{ $sampah->links() }}
                    </table>
                </div>
                <div class="d-block text-center card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection