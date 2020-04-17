@extends('layouts.admin')

@section('title')Show Single Oponent Club  @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Oponent Club page</h1>
	<a href="{{ route('admin.oponentclub.create')}}" class="btn btn-primary">Add new Oponent Club</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.oponentclub.index') }}">Oponent Club</a></li>
		<li class="active">Show Oponent Club</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Oponent Club</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1s" class="table table-bordered table-striped table-responsive">
		
                <tbody>
                	<tr>
                		<th>ID</th>
                		<td>{{ $oponentclub->id }}</td>
                	</tr>
                	<tr>
                		<th>Oponent Club Name</th>
                		<td>{{ $oponentclub->name }}</td>
                	</tr>
                	<tr>
                		<th>Oponent Club Logo</th>
                		<td><img src="{{ asset($oponentclub->logo) }}" alt="logo"></td>
                	</tr>
                    <th>Oponent Club Country</th>
                        <td>{{ $oponentclub->country }}</td>
                    </tr>
                    <tr>
                        <th>Oponent Club State</th>
                        <td>{{ $oponentclub->state }}</td>
                    </tr>
                    
                	
                        	<div class="btn-group">
                        		<a href="{{ route('admin.oponentclub.show', $oponentclub->id) }}" class="btn btn-default">Show</a>
                        		<a href="{{ route('admin.oponentclub.edit', $oponentclub->id) }}" class="btn btn-default">Edit</a>
                        		<form role="form" action="{{ route('admin.oponentclub.destroy', $oponentclub->id) }}" method="post">
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