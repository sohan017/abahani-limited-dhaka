@extends('layouts.admin')

@section('title') Oponent Club List @endsection

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
	<h1> Show Oponent Club page</h1>
	<a href="{{ route('admin.oponentclub.create')}}" class="btn btn-primary">Add new Coach</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
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
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Oponent Club Name</th>
                        <th>Oponent Club Logo</th>
                        <th>Oponent Club Country</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($oponentclubs as $oponentclub)
                    <tr>
                        <td>{{ $oponentclub->id }}</td>
                        <td>{{ $oponentclub->name }}</td>
                        <td><img src="{{ asset($oponentclub->logo) }}" alt="logo"></td>
                        <td>{{ $oponentclub->country }}</td>
                       
                        <td>
                           <div class="btn-group">
                                <a href="{{ route('admin.oponentclub.show', $oponentclub->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                                <a href="{{ route('admin.oponentclub.edit', $oponentclub->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                               <form role="form" action="{{ route('admin.oponentclub.destroy', $oponentclub->id) }}" method="post">
                                   @csrf
                                    @method('DELETE ')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');"><i class="fa  fa-trash"></i> Delete</button>
                               </form>  
                            </div>
                        </td>
                    </tr>
                   @endforeach 
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Oponent Club Name</th>
                        <th>Oponent Club Logo</th>
                        <th>Oponent Club Country</th>
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


@section('js')

<!-- DataTables -->
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

@endsection