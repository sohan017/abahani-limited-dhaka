@extends('layouts.admin')

@section('title')Show subscriber Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show subscriber page</h1>
	<a href="{{ route('admin.subscriber.create')}}" class="btn btn-primary">Add new subscriber</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.subscriber.index') }}">subscriber</a></li>
		<li class="active">Show subscriber</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Subscriber Data Table With Full Features</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1s" class="table table-bordered table-striped table-responsive">
		
                <tbody>
                	<tr>
                		<th>ID</th>
                		<td>{{ $subscriber->id }}</td>
                	</tr>
                	<tr>
                		<th>Full Name</th>
                		<td>{{ $subscriber->name }}</td>
                	</tr>
                	<tr>
                		<th>Contact</th>
                		<td>{{ $subscriber->contact_num }}</td>
                	</tr>
                	<tr>
                		<th>Address</th>
                		<td>{{ $subscriber->address }}</td>
                	</tr>
                	<tr>
                		<th>City</th>
                		<td>{{ $subscriber->email }}</td>
                	</tr>
                	<tr>
                		<th>City</th>
                		<td>{{ $subscriber->password }}</td>
                	</tr>
                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.subscriber.show', $subscriber->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.subscriber.edit', $subscriber->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.subscriber.destroy', $subscriber->id) }}" method="post">
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