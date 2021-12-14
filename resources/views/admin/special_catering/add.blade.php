@extends('admin.layouts.app')
@section('title','Special Catering List')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Add New Special Catering Goods</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Special Catering Goods</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row mt-4">
            <div class="col-md-10 m-auto">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title">Add Special Catering</h4>
                    <form class="form-horizontal" role="form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-3 col-form-label">Special Catering Name : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Short Description : </label>
                            <div class="col-9">
                                <textarea class="form-control" rows="1" id="field-1" placeholder="Here short description" name="short_description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-3 col-form-label">Catering Price : </label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Image Upload</label>
                            <div class="col-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px; border: 1px solid #dadada;">
                                        <img src="{{ asset('assets/img/photos/luxurious-meal.png') }}" alt="image" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px; border: 1px solid #dadada;"></div>
                                    <div>
                                        <button type="button" class="btn btn-secondary btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="btn-secondary" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-b-0 row">
                            <div class="offset-3 col-9">
                                <button type="submit" class="btn btn-info waves-effect waves-light"> Submit Now </button>
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
