@extends('layouts.admin')

@section('title')Show Bid Detaile @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<style>
    img {
      border-radius: 50%;
      height: 130px;
  }
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
	<h1> Show Bid page</h1>
	<a href="{{ route('admin.bid.create')}}" class="btn btn-primary">Add new Bid</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.bid.index')}}">Bid</a></li>
		<li class="active">Show Bid</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
     <div class="col-md-1"></div>
     <div class="col-md-6">
       <div class="box">
           <div class="box-header">
               <h3 class="box-title">Bid Details</h3>
           </div>
           <div class="box-body">
            <table id="example1s" class="table table-bordered table-striped table-responsive">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $bid->id }}</td>
                    </tr>
                    <tr>
                        <th>Player Austion Name</th>
                        <td>{{ $bid->player_auction_id }}</td>
                    </tr>
                    <tr>
                        <th>Bidder Name</th>
                        <td>{{ $bid->bidder->name }}</td>
                    </tr>
                    <tr>
                        <th>Player Price </th>
                        <td>{{ $bid->price }}</td>
                    </tr>
                    <tr>
                        <th>Date & Time</th>
                        <td>{{ $bid->date_time }}</td>
                    </tr>

                </tbody>
            </table>
            <div class="btn-group">
                <a href="{{ route('admin.bid.show', $bid->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                <a href="{{ route('admin.bid.edit', $bid->id) }}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a>
                <form role="form" action="{{ route('admin.bid.destroy', $bid->id) }}" method="post">
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