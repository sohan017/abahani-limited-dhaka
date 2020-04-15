@extends('layouts.admin')

@section('title')Show bidder Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show bidder page</h1>
	<a href="{{ route('admin.bidder.create')}}" class="btn btn-primary">Add new bidder</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">bidder</a></li>
		<li class="active">Show bidder</li>
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
                		<td>{{ $bidder->id }}</td>
                	</tr>
                	<tr>
                		<th>Bidder Name</th>
                		<td>{{ $bidder->name }}</td>
                	</tr>
                	<tr>
                		<th>Club Name</th>
                		<td>{{ $bidder->club_name }}</td>
                	</tr>
                	<tr>
                		<th>Contact Number</th>
                		<td>{{ $bidder->contact_num }}</td>
                	</tr>
                	<tr>
                		<th>Email</th>
                		<td>{{ $bidder->email }}</td>
                	</tr>
                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.bidder.show', $bidder->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.bidder.edit', $bidder->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.bidder.destroy', $bidder->id) }}" method="post">
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