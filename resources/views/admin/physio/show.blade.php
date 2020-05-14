@extends('layouts.admin')

@section('title')Show Physio Detaile @endsection

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
	<h1> </h1>
	<a href="{{ route('admin.physio.create')}}" class="btn btn-primary">Add new Physio</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.physio.index') }}">Physio</a></li>
        <li class="active">Show Physio</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
       <div class="col-md-1"></div>
       <div class="col-md-6">
         <div class="box">
             <div class="box-header">
                <h3 class="box-title">physio Table With Full Features</h3>
             </div>
             <div class="box-body">
                <table id="example1s" class="table table-bordered table-striped table-responsive">

                    <tbody>
                        <tr>
                            <img src="{{ asset($physio->img) }}" alt="img">
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>{{ $physio->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $physio->email }}</td>
                        </tr>
                        <!--  -->
                        <tr>
                            <th>Address</th>
                            <td>{{ $physio->address }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{ $physio->city }}</td>
                        </tr>
                        <tr>
                            <th>State</th>
                            <td>{{ $physio->state }}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>{{ $physio->country }}</td>
                        </tr>
                        <tr>
                            <th>Nationality</th>
                            <td>{{ $physio->nationality }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $physio->gender }}</td>
                        </tr>
                        <tr>
                            <th>Religion</th>
                            <td>{{ $physio->religion }}</td>
                        </tr>
                        <tr>
                            <th>National id number</th>
                            <td>{{ $physio->national_id_number }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group">
                    <a href="{{ route('admin.physio.show', $physio->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                    <a href="{{ route('admin.physio.edit', $physio->id) }}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a>
                    <form role="form" action="{{ route('admin.physio.destroy', $physio->id) }}" method="post">
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