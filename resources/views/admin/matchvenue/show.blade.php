@extends('layouts.admin')

@section('title')Show Single Match venue  @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show match venue page</h1>
	<a href="{{ route('admin.matchvenue.create')}}" class="btn btn-primary">Add new match venue</a>
	<ol class="breadcrumb">
	<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.matchvenue.index') }}">match venue</a></li>
		<li class="active">Show match venue</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Match venue</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1s" class="table table-bordered table-striped table-responsive">
		
                <tbody>
                	<tr>
                		<th>Match Venue ID</th>
                		<td>{{ $matchvenue->id }}</td>
                	</tr>
                	<tr>
                		<th>Match Venue Name</th>
                		<td>{{ $matchvenue->name }}</td>
                	</tr>
                    <tr>
                        <th>Match Venue City</th>
                        <td>{{ $matchvenue->city }}</td>
                    </tr>
                    <th>Match Venue Country</th>
                        <td>{{ $matchvenue->country }}</td>
                    </tr>
                    
                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.matchvenue.show', $matchvenue->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.matchvenue.edit', $matchvenue->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.matchvenue.destroy', $matchvenue->id) }}" method="post">
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