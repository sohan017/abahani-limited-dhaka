@extends('layouts.admin')

@section('title') Trainee fitness List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Trainee fitness page</h1>
	<a href="{{ route('admin.traineefitness.create')}}" class="btn btn-primary">Add new Trainee fitness</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Trainee fitness</a></li>
		<li class="active">Show Trainee fitness</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Trainee ID</th>
                        <th>Physio Name</th>
                        <th>Trainee Is feet</th>
                        <th>Trainee Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($traineefitnesses as $traineefitness)
                    <tr>
                        <td>{{ $traineefitness->id }}</td>
                        <td>{{ $traineefitness->trainee_id }}</td>
                        <td>{{ $traineefitness->physio_id }}</td>
                        <td>{{ $traineefitness->is_feet }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.traineefitness.show', $traineefitness->id) }}" class="btn btn-default">Show</a>
                                <a href="{{ route('admin.traineefitness.edit', $traineefitness->id) }}" class="btn btn-default">Edit</a>
                               <form role="form" action="{{ route('admin.traineefitness.destroy', $traineefitness->id) }}" method="post">
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
                        <th>Trainee ID</th>
                        <th>Physio Name</th>
                        <th>Is feet</th>
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