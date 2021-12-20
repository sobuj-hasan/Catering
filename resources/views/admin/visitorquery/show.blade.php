@extends('admin.layouts.app')
@section('title', $single_query->name)
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Restaurant Details</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">{{ $single_query->name }}</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>{{ $single_query->name }}</b></h4>
                    <div class="table-responsive">
                        <table class="table m-0 table-actions-bar">
                            <tr>
                                <th>Name</th>
                                <td>{{ $single_query->name }}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>
                                    <h5>
                                        <a href="mailto:{{ $single_query->email }}"> {{ $single_query->email }} </a>
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>
                                    <h5>{{ $single_query->phone }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Subject </th>
                                <td>
                                    <h5>{{ $single_query->subject }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Interested Services </th>
                                <td>
                                    <h5>{{ $single_query->profession }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>
                                    <h5>{{ $single_query->city }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Submission Time</th>
                                <td>
                                    <p class="m-b-0 m-t-0 font-600">{{ $single_query->created_at->diffForHumans() }}</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Queries Message </th>
                                <td>
                                    <p>{{ $single_query->message }}</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
