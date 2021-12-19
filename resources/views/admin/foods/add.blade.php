@extends('admin.layouts.app')
@section('title','Special Catering List')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Add New Catering Foods</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Special Catering Foods</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row mt-4">
            <div class="col-md-12 m-auto">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Add Catering Food</h4>
                    <form method="POST" action="{{ route('catering.store') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
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
                            <label for="inputEmail3" class="col-3 col-form-label">Select Food Category : </label>
                            <div class="col-9">
                                <select class="form-control" name="category_id">
                                    <option value="">--- Select category ---</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Catering Food Name : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="title" value="{{ old('title') }}" name="title">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Short Description : </label>
                            <div class="col-9">
                                <textarea class="form-control" rows="1" id="field-1" placeholder="Here short description" name="short_description" required>{{ old('short_description') }}</textarea>
                                @error('short_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Food Price : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="price" value="{{ old('price') }}" name="price">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Food Discount % : <span class="text-light">(if any)</span></label>
                            <div class="col-9">
                                {{-- <div class="input-group bootstrap-touchspin">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary bootstrap-touchspin-down" type="button">-</button>
                                    </span>
                                    <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;">
                                    </span>
                                    <input id="demo1" type="text" value="55" name="demo1" class="form-control" style="display: block;">
                                    <span class="input-group-addon bootstrap-touchspin-postfix">%</span>
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary bootstrap-touchspin-up" type="button">+</button>
                                    </span>
                                </div> --}}
                                <input type="text" class="form-control" id="inputPassword3" placeholder="discount %" value="{{ old('discount') }}" name="discount">
                                @error('discount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Image Upload</label>
                            <div class="col-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px; border: 1px solid #dadada;"></div>
                                    <div>
                                        <button type="button" class="btn btn-secondary btn-file mt-2">
                                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="btn-secondary" value="{{ old('image') }}" name="image"/>
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

@section('footer_script')
    <script>
        function productDelete(){
            alert('Are you shure ? You want to delete this Category')
        }
    </script>
@endsection
