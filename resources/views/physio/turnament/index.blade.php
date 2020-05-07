@extends('layouts.admin')

@section('title') Turnament List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
    <h1> Show Turnament page</h1>
    
    <ol class="breadcrumb">
        <li><a href="{{route('admin.admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Turnament</li>
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
                        <th>Turnament Name</th>
                        <th>Turnament Start Date</th>
                        <th>Turnament End Date</th>
                        <!-- <th>Game Played</th>
                        <th>Win</th>
                        <th>Drow</th>
                        <th>Lost</th>
                        <th>PTS</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($turnaments as $turnament)  
                  <tr>
                    <td>{{$turnament->id}}</td>
                    <td>{{$turnament->name}}</td>
                    <td>{{$turnament->start_date}}</td>
                    <td>{{$turnament->end_date}}</td>
                        <!-- <td>42</td>
                        <td>12</td>
                        <td>6</td>
                        <td>95</td> -->
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('physio.turnamentprofile', $turnament->id) }}" class="btn btn-block btn-primary">Show</a>
                                
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                     <th>ID</th>
                     <th>Turnament Name</th>
                     <th>Turnament Start Date</th>
                     <th>Turnament End Date</th>
                        <!-- <th>Point</th>
                        <th>Win</th>
                        <th>Drow</th>
                        <th>Lost</th>
                        <th>PTS</th> -->
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