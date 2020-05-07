@extends('layouts.admin')

@section('title') Team List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
    <h1> Show Team page</h1>
    
    <ol class="breadcrumb">
        <li><a href="{{route('admin.admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Team</li>
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
                        <th>Team Name</th>
                        <th>Captain Name</th>
                        <th>Coach Name</th>
                        <th>Physio Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->captain }}</td>
                        <td>{{ $team->coach->name }}</td>
                        <td>{{ $team->physio->name }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('physio.teamprofile', $team->id) }}" class="btn btn-block btn-info"><i class="fa fa-eye"></i> Show</a>
                               
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                       <th>ID</th>
                        <th>Team Name</th>
                        <th>Captain Name</th>
                        <th>Coach Name</th>
                        <th>Physio Name</th>
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