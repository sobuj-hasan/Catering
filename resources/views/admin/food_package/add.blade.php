@extends('admin.layouts.app')
@section('title','Add Food Package')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Add Food Package</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Add Food Package</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row mt-4">
            <div class="col-md-12 m-auto">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Add Food Package</h4>
                    <form method="POST" action="{{ route('package.store') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Select One Restaurant : </label>
                            <div class="col-9">
                                <select class="form-control" name="restaurant_id">
                                    <option value="">--- Select one Restaurant ---</option>
                                    @foreach ($restaurants as $restaurant)
                                        <option value="{{ $restaurant->id }}">{{ $restaurant->res_name }}</option>
                                    @endforeach
                                </select>
                                @error('restaurant_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Package Name : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Package Name" value="{{ old('package_name') }}" name="package_name">
                                @error('package_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Package Price : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Package price" value="{{ old('package_price') }}" name="package_price">
                                @error('package_price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Package Time : </label>
                            <div class="col-9">
                                <div class="radio radio-info form-check-inline p-2">
                                    <input type="radio" id="inlineRadio1" value="option1" name="package_time">
                                    <label for="inlineRadio1"> One Day </label>
                                </div>
                                <div class="radio radio-info form-check-inline p-2">
                                    <input type="radio" id="inlineRadio2" value="option2" name="package_time">
                                    <label for="inlineRadio2"> Weekly </label>
                                </div>
                                <div class="radio radio-info form-check-inline p-2">
                                    <input type="radio" id="inlineRadio3" value="option3" name="package_time">
                                    <label for="inlineRadio3"> Monthly </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Add Package Features : </label>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h4 id="todo-message"><span id="todo-remaining">5</span> of <span id="todo-total">8</span> remaining</h4>
                                                </div>
                                            </div>
                                            <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                                <div class="row">
                                                    <div class="col-sm-9 todo-inputbar">
                                                        <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="add new features">
                                                    </div>
                                                    <div class="col-sm-3 todo-send">
                                                        <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add New Features</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <ul class="list-group m-t-20 todo-list m-b-0" id="todo-list">
                                                <li class="list-group-item">
                                                    <div class="checkbox checkbox-primary">
                                                        <input class="todo-done" id="8" type="checkbox" name="">
                                                        <label for="8">Discuss task requirements</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="checkbox checkbox-primary">
                                                        <input class="todo-done" id="7" type="checkbox" name="">
                                                        <label for="7">Schedule meeting with Bob</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="checkbox checkbox-primary">
                                                        <input class="todo-done" id="6" type="checkbox" name="">
                                                        <label for="6">Build an angular app</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="checkbox checkbox-primary">
                                                        <input class="todo-done" id="5" type="checkbox" name="">
                                                        <label for="5">Hehe!! This is looks cool!</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="checkbox checkbox-primary">
                                                        <input class="todo-done" id="4" type="checkbox" name="features" checked="">
                                                        <label for="4">Testing??</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="checkbox checkbox-primary">
                                                        <input class="todo-done" id="3" type="checkbox" name="" checked="">
                                                        <label for="3">Creating component page</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="checkbox checkbox-primary">
                                                        <input class="todo-done" id="2" type="checkbox" name="" checked="">
                                                        <label for="2">Build a js based app</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="checkbox checkbox-primary">
                                                        <input class="todo-done" id="1" type="checkbox" name="">
                                                        <label for="1">Design One page theme</label>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Package Image</label>
                            <div class="col-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px; border: 1px solid #dadada;"></div>
                                    <div>
                                        <button type="button" class="btn btn-secondary btn-file mt-2">
                                            <span class="fileupload-new p-3"><i class="fa fa-paper-clip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="btn-secondary" value="{{ old('package_image') }}" name="package_image"/>
                                            @error('package_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0 row">
                            <div class="offset-3 col-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light"> Submit Now </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
