@extends('layouts.admin')

@section('title')Show Single turnament  @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show turnament page</h1>
	<a href="{{ route('turnament.create')}}" class="btn btn-primary">Add new turnament</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">turnament</a></li>
		<li class="active">Show turnament</li>
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
                		<td>{{ $turnament->id }}</td>
                	</tr>
                	<tr>
                		<th>Turnament Name</th>
                		<td>{{ $turnament->name }}</td>
                	</tr>
                	
                        	<div class="btn-group">
                        		<a href="{{ route('turnament.show', $turnament->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('turnament.edit', $turnament->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('turnament.destroy', $turnament->id) }}" method="post">
                        			@csrf
                        			@method('DELETE ')
                        			<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');">Delete</button>
                        		</form>

                        	</div>
                        </td>
                    </tr>

                </tbody>
            
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