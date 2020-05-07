@extends('layouts.admin')

@section('title')Show Ticket Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<style>
  button.btn.btn-danger {
     margin-left: 141px;
     margin-top: -57px;
 }

 .btn-group.a {
     padding: 66px;
 }
</style>
@endsection

@section('content')

<section class="content-header">
	<h1> Show Ticket page</h1>
	<a href="{{ route('admin.ticket.create')}}" class="btn btn-primary">Add new Ticket</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.ticket.index') }}">Ticket</a></li>
		<li class="active">Show Ticket</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
     <div class="col-md-1"></div>
     <div class="col-md-6">
       <div class="box">
           <div class="box-header">
               <h3 class="box-title">Ticket profile</h3>
           </div>
           <div class="box-body">
            <table id="example1s" class="table table-bordered table-striped table-responsive">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $ticket->id }}</td>
                    </tr>
                    <tr>
                        <th>Match Name</th>
                        <td>{{ $ticket->match->name }}</td>
                    </tr>
                    <tr>
                        <th>VIP Ticket Quantity</th>
                        <td>{{ $ticket->vip_qty }}</td>
                    </tr>
                    <tr>
                        <th>Normal Ticket Quantity</th>
                        <td>{{ $ticket->normal_qty }}</td>
                    </tr>
                    <tr>
                        <th>Classic Ticket Quantity</th>
                        <td>{{ $ticket->classic_qty }}</td>
                    </tr>
                    <tr>
                        <th>VIP Ticket Price</th>
                        <td>{{ $ticket->vip_price }}</td>
                    </tr>
                    <tr>
                        <th>Normal Ticket Price</th>
                        <td>{{ $ticket->normal_price }}</td>
                    </tr>
                    <tr>
                        <th>Classic Ticket Price</th>
                        <td>{{ $ticket->classic_price }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-group">
                <a href="{{ route('admin.ticket.show', $ticket->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                <a href="{{ route('admin.ticket.edit', $ticket->id) }}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a>
                <form role="form" action="{{ route('admin.ticket.destroy', $ticket->id) }}" method="post">
                 @csrf
                 @method('DELETE ')
                 <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');"><i class="fa  fa-trash"></i> Delete</button>
             </form>
         </div>
           </div>
      </div>
     </div>
       <div class="col-md-5"></div>
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