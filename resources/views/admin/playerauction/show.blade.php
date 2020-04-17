@extends('layouts.admin')

@section('title')Show player auction Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show player auction page</h1>
	<a href="{{ route('admin.playerauction.create')}}" class="btn btn-primary">Add new player Auction</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.playerauction.index') }}">player auction</a></li>
		<li class="active">Show player auction</li>
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
                		<td>{{ $playerauction->id }}</td>
                	</tr>
                	<tr>
                		<th>Auction Name</th>
                		<td>{{ $playerauction->auction_id }}</td>
                	</tr>
                	<tr>
                		<th>Player Name</th>
                		<td>{{ $playerauction->player_id }}</td>
                	</tr>
                	<tr>
                		<th>Player Price </th>
                		<td>{{ $playerauction->player_price }}</td>
                	</tr>
                	
                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.playerauction.show', $playerauction->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.playerauction.edit', $playerauction->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.playerauction.destroy', $playerauction->id) }}" method="post">
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