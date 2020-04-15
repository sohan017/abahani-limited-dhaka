@extends('layouts.admin')

@section('title')Show discount Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show discount page</h1>
	<a href="{{ route('admin.discount.create')}}" class="btn btn-primary">Add new discount</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">discount</a></li>
		<li class="active">Show discount</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Show discount</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1s" class="table table-bordered table-striped table-responsive">
		
                <tbody>
                	<tr>
                		<th>ID</th>
                		<td>{{ $discount->id }}</td>
                	</tr>
                	<tr>
                		<th>Discount Name</th>
                		<td>{{ $discount->name }}</td>
                	</tr>
                	<tr>
                		<th>Match name</th>
                		<td>{{ $discount->match_id }}</td>
                	</tr>
                	
                	<tr>
                		<th>Discount percent</th>
                		<td>{{ $discount->percent }}</td>
                	</tr>
                	<tr>
                	<td>
                	
                	
                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.discount.show', $discount->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.discount.edit', $discount->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.discount.destroy', $discount->id) }}" method="post">
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