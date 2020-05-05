@extends('layouts.admin')

@section('title')Show Team Detaile @endsection

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

<section class="content-header">
    <h1> Show Team page</h1>
    <a href="{{ route('admin.team.create')}}" class="btn btn-primary">Add new Team</a>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.team.index') }}">Team</a></li>
        <li class="active">Show Team</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1s" class="table table-bordered table-striped table-responsive">

                        <tbody>
                            <tr>
                                <img src="{{ asset($team->logo) }}" alt="img">
                            </tr>
                            <tr>
                                <th>ID</th>
                                <td>{{ $team->id }}</td>
                            </tr>

                            <tr>
                                <th>Name</th>
                                <td>{{ $team->name }}</td>
                            </tr>
                            <tr>
                                <th>Captain</th>
                                <td>{{ $team->captain }}</td>
                            </tr>
                            <tr>
                                <th>Coach name</th>
                                <td>{{ $team->coach->name }}</td>
                            </tr>
                            <tr>
                                <th>Physio name</th>
                                <td>{{ $team->physio->name }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <div class="btn-group">
                        <a href="{{ route('admin.team.show', $team->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                        <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-success"><i class="fa fa-edit"> </i> Edit</a>
                        <form role="form" action="{{ route('admin.team.destroy', $team->id) }}" method="post">
                            @csrf
                            @method('DELETE ')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');"><i class="fa  fa-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-1=5"></div>
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