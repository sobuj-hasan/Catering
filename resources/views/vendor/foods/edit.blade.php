@extends('vendor.layouts.app')
@section('title','Food Edit')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Edit Food</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Vendor</a></li>
                        <li class="breadcrumb-item"><a href="">Edit Food</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row mt-4">
            <div class="col-md-12 m-auto">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Edit Food</h4>
                    <form method="POST" action="{{ route('vendorcatering.update', $food->id) }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Select Food Category : </label>
                            <div class="col-9">
                                <select class="form-control" name="category_id">
                                    <option value="{{ $food->category->id }}">{{ $food->category->name }}</option>
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
                                <input type="text" class="form-control" id="inputEmail3" placeholder="title" value="{{ $food->title }}" name="title">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Short Description : </label>
                            <div class="col-9">
                                <textarea class="form-control" rows="1" id="field-1" placeholder="Here short description" name="short_description">{{ $food->short_description }}</textarea>
                                @error('short_description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Food Price : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="price" value="{{ $food->price }}" name="price">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Food Discount % : <span class="text-light">(if any)</span></label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="discount %" value="{{ $food->discount }}" name="discount">
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

@section('footer_script')
    <script>
        function productDelete(){
            alert('Are you shure ? You want to delete this Category')
        }
    </script>
@endsection
