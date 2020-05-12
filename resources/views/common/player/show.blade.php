@extends('layouts.admin')

@section('title')Show Player Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<style>
    img {
        border-radius: 50%;
        height: 130px;
    }

    button.btn.btn-danger {
        margin-left: 141px;
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
    <h1></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route($route.'.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route($route.'.player') }}">Player</a></li>
        <li class="active">Show Player</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">

    <div class="row">
        <br>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Player Table With Full Features</h3>
                </div>
                <div class="box-body">
                    <table id="example1s" class="table table-bordered table-striped table-responsive">

                        <tbody>
                            <tr>
                                <img src="{{ asset($player->img) }}" alt="img">
                            </tr>

                            <tr>
                                <th>Name</th>
                                <td>{{ $player->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $player->email }}</td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td>{{ $player->con_num }}</td>
                            </tr>
                            <tr>
                                <th>Jersy no</th>
                                <td>{{ $player->jersy_no }}</td>
                            </tr>
                            <tr>
                                <th>Date of birth</th>
                                <td>{{ $player->dob }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $player->address }}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{ $player->city }}</td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td>{{ $player->state }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{ $player->country }}</td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td>{{ $player->nationality }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ $player->gender }}</td>
                            </tr>
                            <tr>
                                <th>Hight</th>
                                <td>{{ $player->hight }}</td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td>{{ $player->weight }}</td>
                            </tr>
                            <tr>
                                <th>Religion</th>
                                <td>{{ $player->religion }}</td>
                            </tr>
                            <tr>
                                <th>National id number</th>
                                <td>{{ $player->national_id_number }}</td>
                            </tr>
                            <tr>
                                <th>Team name</th>
                                <td>{{ $player->team ? $player->team->name : ""}}</td>
                            </tr>
                            <tr>
                                <th>Playertype name</th>
                                <td>{{ $player->playertype->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        @if(Auth::guard('coach')->check())
        <div class="col-md-5">
            <br>
            <br>
            <br>
            <br>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-header">
                    <h3 class="box-title">Player Fitness</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Physio</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($player->fitnesses as $fitness)
                            <tr>
                                <td>{{ $fitness->id }}</td>
                                <td>{{ $fitness->physio ? $fitness->physio->name : "" }} </td>
                                <td>{{ $fitness->physio_note }} </td>
                                <td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Physio</th>
                                <th>Note</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        @endif
    </div>
</section>
<!-- /.content -->

@endsection


@section("js")

<!-- DataTables -->
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function() {
        $('#example1s').DataTable()
    })
</script>

@endsection