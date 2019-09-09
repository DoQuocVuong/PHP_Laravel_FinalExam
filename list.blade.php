@extends('templates.master')

@section('title','Quản lý học sinh')

@section('content')

    <?php ?>
    <div class="page-header"><h4>Quản lý học sinh</h4></div>

    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <?php ?>
    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <?php ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="table-responsive">
                <p><a class="btn btn-primary" href="/{{ url('/hocsinh/create') }}">Thêm mới</a></p>
                <table id="DataList" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Telephone</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php ?>
                    @foreach($listhocsinh as $key => $hocsinh)
                        <tr>
                            <?php ?>
                            <td>{{ $key+1 }}</td>
                            <?php ?>
                            <td>{{ $hocsinh->name }}</td>
                            <?php ?>
                            <td>{{ $hocsinh->age }}</td>
                            <?php ?>
                            <td>{{ $hocsinh->address }}</td>
                            <?php ?>
                            <td>{{ $hocsinh->telephone }}</td>
                        </tr>
                        <?php ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
