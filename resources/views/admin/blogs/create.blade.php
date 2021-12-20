@extends('admin.layouts.app')
@section('title',' Blog create')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Create New</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Create Blog</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Blog</h4>
                    </div>
                    <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Select Category</label>
                                        <select class="form-control" name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Blog Title</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="Title" name="title" value="{{ old('title'); }}" required>
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Blog Description</label><br>
                                        <textarea class="summernote" cols="90" rows="8" placeholder="Design Product long description.." name="description">
                                            {{ old('description') }}
                                        </textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Blog Image (Preferable width : 500px Height: 400px)</label><br>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px; border: 1px solid #dadada;"></div>
                                            <div>
                                                <button type="button" class="btn btn-secondary btn-file mt-2">
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select blog image</span>
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

                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('blogs.index') }}" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Post Now</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('footer_script')
    <script>
        jQuery(document).ready(function(){
            $('.summernote').summernote({
                height: 250,              // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
            $('.inline-editor').summernote({
                airMode: true
            });
        });
    </script>
@endsection

