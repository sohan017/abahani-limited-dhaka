@extends('layouts.admin')

@section('title')Show Trainee Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<style>
    img {
        border-radius: 50%;
        height: 130px;
    }
    button.btn.btn-danger {
        margin-left: 108px;
        margin-top: -57px;
    }

    .btn-group.a {
        padding: 66px;
    }
</style>
@endsection

@section('content')
@if(Auth::guard('coach')->check())
@php 
    $route = "coach";
@endphp
@elseif(Auth::guard('physio')->check())
@php 
    $route = "physio";
@endphp
@elseif(Auth::guard('player')->check())
@php 
    $route = "player";
@endphp
@elseif(Auth::guard('trainee')->check())
@php 
    $route = "trainee";
@endphp
@endif
<section class="content-header">
    <h1> Show Trainee page</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route($route.'.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route($route.'.trainee') }}">Trainee</a></li>
        <li class="active">Show Trainee</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Trainee Profile With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1s" class="table table-bordered table-striped table-responsive">

                        <tbody>
                            <tr>
                                <img src="{{ asset($trainee->img) }}" alt="img">
                            </tr>
                            <tr>
                                <th>ID</th>
                                <td>{{ $trainee->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $trainee->name }}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>{{ $trainee->email }}</td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td>{{ $trainee->con_num }}</td>
                            </tr>
                            <tr>
                                <th>Date of birth</th>
                                <td>{{ $trainee->dob }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $trainee->address }}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{ $trainee->city }}</td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td>{{ $trainee->state }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{ $trainee->country }}</td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td>{{ $trainee->nationality }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ $trainee->gender }}</td>
                            </tr>
                            <tr>
                                <th>Hight</th>
                                <td>{{ $trainee->hight }}</td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td>{{ $trainee->weight }}</td>
                            </tr>
                            <tr>
                                <th>Religion</th>
                                <td>{{ $trainee->religion }}</td>
                            </tr>
                            <tr>
                                <th>National id number</th>
                                <td>{{ $trainee->national_id_number }}</td>
                            </tr>
                            <tr>
                                <th>Coach name</th>
                                <td>{{ $trainee->coach->name }}</td>
                            </tr>
                            <tr>
                                <th>Playertype name</th>
                                <td>{{ $trainee->playertype->name }}</td>
                            </tr>
                            <tr>
                                <th>Is verified</th>
                                <td>{{ $trainee->is_verified ? "True" : "False" }}</td>
                            </tr>
                            <tr>
                                <th>trainee played</th>
                                <td>{{ $trainee->is_played ? "True" : "False" }}</td>
                            </tr>
                             <tr>
                                <th>Application fee</th>
                                <td>{{ $trainee->ap_fee }}</td>
                            </tr>

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-5"></div>
    </div>

</section>
<!-- /.content -->

@endsection


@section("js")

<!-- DataTables -->
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
        $('#example1s').DataTable()
    })
</script>

@endsection