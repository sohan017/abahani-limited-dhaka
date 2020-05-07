@extends('layouts.admin')

@section('title')Show Single Match venue  @endsection

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
     <div class="row">
     <div class="col-md-1"></div>
     <div class="col-md-6">
       <div class="box">
           <div class="box-header">
               <h3 class="box-title">Matchvenue Table With Full Features</h3>
           </div>
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
                    <tr>
                     <th>Match Venue Country</th>
                     <td>{{ $matchvenue->country }}</td>
                    </tr>
                </tbody> 
            </table>
            <div class="btn-group">
                <a href="{{ route('admin.matchvenue.show', $matchvenue->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                <a href="{{ route('admin.matchvenue.edit', $matchvenue->id) }}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a>
                <form role="form" action="{{ route('admin.matchvenue.destroy', $matchvenue->id) }}" method="post">
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


                