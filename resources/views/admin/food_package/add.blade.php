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
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Package Name" value="{{ old('name') }}" name="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Package Price : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Package price" value="{{ old('price') }}" name="price">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Package Time : </label>
                            <div class="col-9">
                                <div class="radio radio-info form-check-inline p-2">
                                    <input type="radio" id="inlineRadio1" value="One Day" name="time">
                                    <label for="inlineRadio1"> One Day </label>
                                </div>
                                <div class="radio radio-info form-check-inline p-2">
                                    <input type="radio" id="inlineRadio2" value="Weekly" name="time">
                                    <label for="inlineRadio2"> Weekly </label>
                                </div>
                                <div class="radio radio-info form-check-inline p-2">
                                    <input type="radio" id="inlineRadio3" value="Monthly" name="time">
                                    <label for="inlineRadio3"> Monthly </label>
                                </div><br>
                                @error('time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Add Package Items : </label>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <button style="cursor: pointer;" class="btn btn-light pt-2 pb-2" type="button" id="more_fields" onclick="add_fields()">Add more items <i class="fas fa-plus-circle"></i> </button>
                                                    
                                                    <div id="room_fileds">
                                                        <div>
                                                            <div class="content mt-4">
                                                                <div class="col-12 p-2 alert alert-info">
                                                                    <span class="text-danger"><i class="fas fa-info-circle"></i> Must be added at least 3 items</span>
                                                                </div>
                                                                <div class="col-12 p-0 mt-4">
                                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="add package item 1" value="" name="items[]" required>
                                                                    @error('items[]')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12 p-0 mt-4">
                                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="add package item 2" value="" name="items[]" required>
                                                                    @error('items[]')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12 p-0 mt-4">
                                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="add package item 3" value="" name="items[]" required>
                                                                    @error('items[]')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        var room = 3;
                                                        function add_fields() {
                                                            room++;
                                                            var objTo = document.getElementById('room_fileds')
                                                            var divtest = document.createElement("div");
                                                            divtest.innerHTML = '<div class=""></div><div class="content mt-3"> <input type="text" class="form-control" style="width:100%;" placeholder="add new item ' + room +'" name="items[]" value="" /> </div>';
                                                            
                                                            objTo.appendChild(divtest)
                                                        }
                                                    </script>
                                                </div>
                                            </div>
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
                                            <input type="file" class="btn-secondary" value="{{ old('image') }}" name="image"/>
                                            @error('image')
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
