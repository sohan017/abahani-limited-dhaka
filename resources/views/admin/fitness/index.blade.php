@extends('layouts.admin')

@section('title') Goal List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Goal page</h1>
	<a href="{{ route('goal.create')}}" class="btn btn-primary">Add new Goal</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Goal</a></li>
		<li class="active">All Goal</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Goal List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fitness problem name</th>
                        <th>Player name</th>
                        <th>Physio name</th>
                        <th>Physio not</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fitnesses as $fitness)
                    <tr>
                        <td>{{ $fitness->id }}</td>
                        <td>{{ $fitness->fitness_name }}</td>
                        <td>{{ $fitness->player_name }}</td>
                        <td>{{ $fitness->physio_name }}</td>
                        <td>{{ $fitness->physio_not }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('fitness.show', $fitness->id) }}" class="btn btn-default">Show</a>
                                <a href="{{ route('fitness.edit', $fitness->id) }}" class="btn btn-default">Edit</a>
                               <form role="form" action="{{ route('fitness.destroy', $fitness->id) }}" method="post">
                                   @csrf
                                    @method('DELETE ')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');">Delete</button>
                               </form>
                                
                            </div>
                        </td>
                    </tr>
                   @endforeach 
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Fitness problem name</th>
                        <th>Player name</th>
                        <th>Physio name</th>
                        <th>Physio not</th>
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