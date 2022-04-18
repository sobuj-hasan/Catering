@extends('admin.layouts.app')
@section('title','Food Package')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Food Package List</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Food Package List</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>Food package List</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">
                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Image </th>
                                <th>Package Name </th>
                                <th>Created By</th>
                                <th>Restaurant </th>
                                <th>Package Time</th>
                                <th>Price</th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>
                                        <td>
                                            <img width="80px" src="{{ asset('assets/img/food') }}/{{ $package->image }}" alt="img" title="food-img"/>
                                        </td>
                                        <td>
                                            <h5>
                                                <a href="{{ route('package.show', $package->id) }}">{{ $package->name }}</a>
                                            </h5>
                                        </td>
                                        <td>
                                            <h5>{{ $package->user->name }}</h5>
                                        </td>
                                        <td>
                                            <h5>{{ $package->resturant?$package->resturant->res_name:'' }}</h5>
                                        </td>
                                        <td>
                                            <h5>{{ $package->time }}</h5>
                                        </td>
                                        <td>
                                            <h5>{{ $package->price }} </h5>
                                        </td>
                                        <form method="POST" action="{{ route('package.destroy', $package->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('package.edit', $package->id) }}" class="table-action-btn"> <i class="far fa-edit"></i> </a>
                                                <button onclick="productDelete()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                                @empty($package)
                                    <span class="text-danger">Nothing to show Packages...</span>
                                @endempty
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
        function productDelete(){
            alert('Are you shure ? You want to delete this Package')
        }
    </script>
@endsection
