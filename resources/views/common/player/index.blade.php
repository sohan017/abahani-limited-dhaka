@extends('layouts.admin')

@section('title') Player List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<style>
      img {
        border-radius: 50%;
        height: 80px;
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
    <h1> Show Player page</h1>
    
    <ol class="breadcrumb">
        <li><a href="{{route( $route .'.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Player</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">


    <div class="box">

        @include("partial.notification")

        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                <tr>
                    <th>ID</th>
                    <th>Player Name</th>
                    <th>Photo</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($players as $player)
                <tr>
                    <td>{{ $player->id }}</td>
                    <td>{{ $player->name }}</td>
                    <td><img src="{{ asset($player->img) }}" alt="img"></td>
                    <td>{{ $player->email }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route( $route . '.playerprofile', $player->id)  }}" class="btn btn-block btn-primary">Show</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Player Name</th>
                    <th>Photo</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>

            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
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
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

@endsection