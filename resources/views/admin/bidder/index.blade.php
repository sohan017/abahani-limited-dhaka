@extends('layouts.admin')

@section('title') bidder List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show bidder page</h1>
	<a href="{{ route('admin.bidder.create')}}" class="btn btn-primary">Add new bidder</a>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Bidders</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


    <div class="box">

        @include("partial.notification")

        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Bidder Name</th>
                        <th>CLub Name</th>
                        <th>Contact email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bidders as $bidder)
                    <tr>
                        <td>{{ $bidder->id }}</td>
                        <td>{{ $bidder->name }}</td>
                        <td>{{ $bidder->club_name }}</td>
                        <td>{{ $bidder->email }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.bidder.show', $bidder->id) }}" class="btn btn-default">Show</a>
                                <a href="{{ route('admin.bidder.edit', $bidder->id) }}" class="btn btn-default">Edit</a>
                               <form role="form" action="{{ route('admin.bidder.destroy', $bidder->id) }}" method="post">
                                   @csrf
                                    @method('DELETE ')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');">Delete</button>
                               </form>
                                
                            </div>
                        </td>
                    </tr>
                   @endforeach 
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                      	<th>Bidder Name</th>
                        <th>CLub Name</th>
                        <th>Contact email</th>
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