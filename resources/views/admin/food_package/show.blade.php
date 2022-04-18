@extends('admin.layouts.app')
@section('title', $single_package->name)
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Food Package Details</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">{{ $single_package->name }}</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>{{ $single_package->name }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Package Name</th>
                                <td>{{ $single_package->name }}</td>
                            </tr>
                            <tr>
                                <th>Package Price</th>
                                <td>
                                    {{ $single_package->price }}
                                </td>
                            </tr>
                            <tr>
                                <th>Package Time</th>
                                <td>
                                    {{ $single_package->time }}
                                </td>
                            </tr>
                            <tr>
                                <th>Restaurant Name </th>
                                <td>{{ $single_package->restaurant->res_name }}</td>
                            </tr>
                            <tr>
                                <th>Created By</th>
                                <td>{{ $single_package->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Image </th>
                                <td>
                                    <img width="120" src="{{ asset('assets/img/food/'. $single_package->image) }}" alt="img">
                                </td>
                            </tr>
                            <tr>
                                <th>Items</th>
                                <td>items..</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
