@extends('admin.layouts.app')
@section('title', $single_food->title)
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Food Details</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ $single_food->title }}</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>{{ $single_food->Title }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Name</th>
                                <td>{{ $single_food->title }}</td>
                            </tr>
                            <tr>
                                <th>Published By</th>
                                <td>{{ $single_food->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Restaurant </th>
                                <td>{{ $single_food->restaurant->res_name }}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $single_food->category->name }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{ $single_food->price }} SAR </td>
                            </tr>
                            <tr>
                                <th>Discount </th>
                                <td>{{ $single_food->discount }} (%) </td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td>{{ $single_food->short_description }}</td>
                            </tr>
                            <tr>
                                <th>Food Image</th>
                                <td><img width="100" src="{{ asset('assets/img/food/'. $single_food->image) }}" alt=""></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
