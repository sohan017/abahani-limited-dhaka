@extends('layouts.admin')

@section('title')Show Match Detaile @endsection

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
	<h1> Show Match page</h1>
	<a href="{{ route('admin.match.create')}}" class="btn btn-primary">Add new Match</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.match.index') }}">Match venue</a></li>
        <li class="active">Show Match</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-6">
     <div class="box">
         <div class="box-header">
             <h3 class="box-title">Player Table With Full Features</h3>
         </div>
         <div class="box-body">
            <table id="example1s" class="table table-bordered table-striped table-responsive">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $match->id }}</td>
                    </tr>
                    <tr>
                        <th>Match Number</th>
                        <td>{{ $match->match_number }}</td>
                    </tr>
                    
                    <tr>
                        <th>Turnament Name</th>
                        <td>{{ $match->turnament->name }}</td>
                    </tr>
                    <tr>
                        <th>Vanue</th>
                        <td>{{ $match->matchVanue->name }}</td>
                    </tr>
                    <tr>
                        <th>Team</th>
                        <td>{{ $match->team->name }}</td>
                    </tr>
                    <tr>
                        <th>Oponent Club</th>
                        <td>{{ $match->opnentClub->name }}</td>
                    </tr>
                    <tr>
                        <th>Home or Away</th>
                        <td>{{ $match->home_away }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $match->date }}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{ $match->time }}</td>
                    </tr>
                    <tr>
                        <th>Result</th>
                        <td>{{ $match->result }}</td>
                    </tr>
                    <tr>
                        <th>Decited</th>
                        <td>{{ $match->decided_by }}</td>
                    </tr>
                    <tr>
                        <th>Goal For</th>
                        <td>{{ $match->gf }}</td>
                    </tr>
                    <tr>
                        <th>Goal Against</th>
                        <td>{{ $match->ga }}</td>
                    </tr>
                    
                    <tr>
                        <th>Point</th>
                        <td>{{ $match->pts }}</td>
                    </tr>
                    </tbody>
                </table>
                <div class="btn-group">
                    <a href="{{ route('admin.match.show', $match->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                    <a href="{{ route('admin.match.edit', $match->id) }}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a>
                    <form role="form" action="{{ route('admin.match.destroy', $match->id) }}" method="post">
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
