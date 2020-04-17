@extends('layouts.admin')

@section('title')Show Coach List @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Coach page</h1>
	<a href="{{ route('admin.coach.create')}}" class="btn btn-primary">Add new Coach</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.coach.index') }}">Coach</a></li>
		<li class="active">Show Coach</li>
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
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>DoB</th>
                        <th width="10%">Photo</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Nationality</th>
                        <th>Gender</th>
                        <th>Hight</th>
                        <!-- <th>Religion</th>
                        <th>NID NO</th>
                        <th>Email</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td>{{ $coach->id }}</td>
                        <td>{{ $coach->name }}</td>
                        <td>{{ $coach->dob }}</td>
                        <td><img src="{{ asset($coach->img) }}" alt="img"></td>
                        <td>{{ $coach->address }}</td>
                        <td>{{ $coach->city }}</td>
                        <td>{{ $coach->state }}</td>
                        <td>{{ $coach->nationality }}</td>
                        <td>{{ $coach->gender }}</td>
                        <td>{{ $coach->hight }}</td>
                       <!--  <td>{{ $coach->religion }}</td>
                        <td>{{ $coach->national_id_number }}</td>
                        <td>{{ $coach->email }}</td>
                        <td>{{ $coach->password }}</td> -->
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.coach.show', $coach->id) }}" class="btn btn-default">Show</a>
                                <a href="{{ route('admin.coach.edit', $coach->id) }}" class="btn btn-default">Edit</a>
                               <form role="form" action="{{ route('admin.coach.destroy', $coach->id) }}" method="post">
                                   @csrf
                                    @method('DELETE ')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');">Delete</button>
                               </form>
                                
                            </div>
                        </td>
                    </tr>
                  
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>DoB</th>
                        <th>Photo</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Nationality</th>
                        <th>Gender</th>
                        <th>Hight</th>
                        <!-- <th>Religion</th>
                        <th>NID NO</th>
                        <th>Email</th> -->
                        <th>Action</th>
                    </tr>
                </tfoot>
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