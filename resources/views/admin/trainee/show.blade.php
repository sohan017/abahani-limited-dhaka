@extends('layouts.admin')

@section('title')Show Trainee Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Trainee page</h1>
	<a href="{{ route('admin.trainee.create')}}" class="btn btn-primary">Add new Trainee</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Trainee</a></li>
		<li class="active">Show Trainee</li>
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
			<table id="example1s" class="table table-bordered table-striped table-responsive">
		
                <tbody>
                	<tr>
                		<th>ID</th>
                		<td>{{ $trainee->id }}</td>
                	</tr>
                	<tr>
                		<th>Name</th>
                		<td>{{ $trainee->name }}</td>
                	</tr>
                	<tr>
                		<th>Photo</th>
                		<td>{{ $trainee->img }}</td>
                	</tr>
                	<tr>
                		<th>Address</th>
                		<td>{{ $trainee->address }}</td>
                	</tr>
                	<tr>
                		<th>City</th>
                		<td>{{ $trainee->city }}</td>
                	</tr>
                	

                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.trainee.show', $trainee->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.trainee.edit', $trainee->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.trainee.destroy', $trainee->id) }}" method="post">
                        			@csrf
                        			@method('DELETE ')
                        			<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');">Delete</button>
                        		</form>

                        	</div>
                        </td>
                    </tr>

                </tbody>
             <!--    <tfoot>
                	<tr>
                		<th>ID</th>
                		<th>Name</th>
                		<th>DoB</th>
                		<th>Photo</th>
                		<th>Address</th>
                		<th>City</th>
                		<th>State</th>
                		<th>Nationality</th>
                		<th>Gender</th>
                		<th>Hight</th>
                        <th>Religion</th>
                        <th>NID NO</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </tfoot> -->
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
		$('#example1s').DataTable()
	})
</script>

@endsection