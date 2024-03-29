@extends('layouts.admin')

@section('title')Show Coach List @endsection

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
   <div class="row">
       <div class="col-md-1"></div>
       <div class="col-md-6">
         <div class="box">
             <div class="box-header">
                 <h3 class="box-title">coach Table With Full Features</h3>
             </div>
             <div class="box-body">
                <table id="example1s" class="table table-bordered table-striped table-responsive">

                    <tbody>
                        <tr>
                            <img src="{{ asset($coach->img) }}" alt="img">
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>{{ $coach->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $coach->email }}</td>
                        </tr>
                        <tr>
                            <th>Contact Number</th>
                            <td>{{ $coach->con_num }}</td>
                        </tr>
                        <tr>
                            <th>Date of birth</th>
                            <td>{{ $coach->dob }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $coach->address }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{ $coach->city }}</td>
                        </tr>
                        <tr>
                            <th>State</th>
                            <td>{{ $coach->state }}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>{{ $coach->country }}</td>
                        </tr>
                        <tr>
                            <th>Nationality</th>
                            <td>{{ $coach->nationality }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $coach->gender }}</td>
                        </tr>
                        <tr>
                            <th>Hight</th>
                            <td>{{ $coach->hight }}</td>
                        </tr>
                        <tr>
                            <th>Religion</th>
                            <td>{{ $coach->religion }}</td>
                        </tr>
                        <tr>
                            <th>National id number</th>
                            <td>{{ $coach->national_id_number }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group">
                    <a href="{{ route('admin.coach.show', $coach->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                    <a href="{{ route('admin.coach.edit', $coach->id) }}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a>
                    <form role="form" action="{{ route('admin.coach.destroy', $coach->id) }}" method="post">
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