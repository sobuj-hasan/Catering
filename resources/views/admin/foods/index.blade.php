@extends('admin.layouts.app')
@section('title','Special Foods')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Special Foods</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Special Catering Foods List</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title pb-3"><b>Special Catering Foods List</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">
                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Image </th>
                                <th>Name </th>
                                <th>Category </th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($foods as $food)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>
                                        <td>
                                            <img width="60px" src="{{ asset('assets/img/food') }}/{{ $food->image }}" alt="img" title="food-img"/>
                                        </td>
                                        <td>
                                            <a href="{{ route('catering.show', $food->id) }}">{{ $food->title }}</a>
                                        </td>
                                        <td>
                                            {{ $food->category->name }}
                                        </td>
                                        <td>
                                            {{ $food->price }}
                                        </td>
                                        <td>
                                            {{ $food->discount }} (%)
                                        </td>
                                        <form method="POST" action="{{ route('catering.destroy', $food->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('catering.edit', $food->id) }}" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                <button onclick="productDelete()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
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
        function productDelete(){
            alert('Are you shure ? You want to delete this Food')
        }
    </script>
@endsection
