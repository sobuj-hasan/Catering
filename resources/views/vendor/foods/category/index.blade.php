@extends('vendor.layouts.app')
@section('title','Category List')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Category</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Vendor</a></li>
                        <li class="breadcrumb-item"><a href="">Category List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>All Categories List</b></h4>

                    <div class="table-responsive" style="width: 100%">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Name </th>
                                <th>Ar Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categorie)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>
                                        <td>
                                            <h5 class="m-b-0 m-t-0 font-600">{{ $categorie->name }}</h5>
                                        </td>

                                        <td>
                                            {{ $categorie->ar_name ?? "N/A" }}
                                        </td>
                                        <td>
                                            <h5 class="badge badge-danger p-2">Admin Control</h5>
                                        </td>
                                    </tr>
                                    @empty($categorie)
                                        <div class="alert alert-info">
                                            Nothing to show any Category !
                                        </div>
                                    @endempty
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('footer_script')
    <script>
        function categoryDelete(){
            alert('Are you shure ? You want to delete this Category')
        }
    </script>
@endsection
