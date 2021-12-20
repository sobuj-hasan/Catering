@extends('admin.layouts.app')
@section('title','Visitor Querstion')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Visitor Queries</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Queries List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Queries List</b></h4>
                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">
                            <thead>
                                <tr>
                                    <th>SI NO.</th>
                                    <th>Name </th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Sending Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($queries as $query)
                                    <tr>
                                        <td>
                                            <p>{{ $loop->index + 1 }}</p>
                                        </td>

                                        <td>
                                            <h5>
                                                <a href="{{ route('querstion.show', $query->id) }}">{{ $query->name }}</a>
                                            </h5>
                                        </td>

                                        <td>
                                            <h5>{{ $query->phone }}</h5>
                                        </td>

                                        <td>
                                            <h5>{{ $query->email }}</h5>
                                        </td>

                                        <td>
                                            <h5 class="m-b-0 m-t-0 font-600">{{ $query->created_at->diffForHumans() }}</h5>
                                        </td>
                                            <form method="POST" action="{{ route('querstion.destroy', $query->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <td>
                                                    <a href="mailto:{{ $query->email }}"> <i class="far fa-paper-plane"></i> </a>
                                                    <button onclick="deleteQuries()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                                </td>
                                            </form>
                                        </tr>
                                        @empty($query)
                                            <div class="alert alert-info">
                                                Nothing to show any users !
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
        function deleteQuries(){
            alert('Are your Shure ? You want ot delete this Subscriber !');
        }
    </script>
@endsection


