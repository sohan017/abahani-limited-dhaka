@extends('layouts.admin')

@section('title')Show Buy Ticket Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Buy Ticket page</h1>
	<a href="{{ route('admin.buyticket.create')}}" class="btn btn-primary">Add new Buy Ticket</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.buyticket.index') }}">Buy Ticket</a></li>
		<li class="active">Show Buy Ticket</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Show Buy Ticket</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1s" class="table table-bordered table-striped table-responsive">
		
                <tbody>
                	<tr>
                		<th>ID</th>
                		<td>{{ $buyticket->id }}</td>
                	</tr>
                	<tr>
                		<th>Match Name</th>
                		<td>{{ $buyticket->ticket_id }}</td>
                	</tr>
                	<tr>
                		<th>Match Name</th>
                		<td>{{ $buyticket->subscriber_id }}</td>
                	</tr>
                	<tr>
                		<th>VIP Ticket Quantity</th>
                		<td>{{ $buyticket->vip_qty }}</td>
                	</tr>
                	<tr>
                		<th>Normal Ticket Quantity</th>
                		<td>{{ $buyticket->normal_qty }}</td>
                	</tr>
                	<tr>
                		<th>Classic Ticket Quantity</th>
                		<td>{{ $buyticket->classic_qty }}</td>
                	</tr>
                	<tr>
                		<th>VIP Ticket Price</th>
                		<td>{{ $buyticket->vip_price }}</td>
                	</tr>
                	<tr>
                		<th>Normal Ticket Price</th>
                		<td>{{ $buyticket->normal_price }}</td>
                	</tr>
                	<tr>
                		<th>Classic Ticket Price</th>
                		<td>{{ $buyticket->classic_price }}</td>
                	</tr>
                	<tr>
                		<th>Classic Ticket Price</th>
                		<td>{{ $buyticket->sub_total_price }}</td>
                	</tr>
                	<tr>
                		<th>Classic Ticket Price</th>
                		<td>{{ $buyticket->discount_id }}</td>
                	</tr>
                	<tr>
                		<th>Classic Ticket Price</th>
                		<td>{{ $buyticket->total_price }}</td>
                	</tr>
                	
                	
                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.buyticket.show', $buyticket->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.buyticket.edit', $buyticket->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.buyticket.destroy', $buyticket->id) }}" method="post">
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