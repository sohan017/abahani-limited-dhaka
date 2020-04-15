@extends('layouts.admin')

@section('title') Buy ticket List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Buy ticket page</h1>
	<a href="{{ route('admin.buyticket.create')}}" class="btn btn-primary">Add new Buy ticket</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Buy ticket</a></li>
		<li class="active">All Buy ticket</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Buy buyticket List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ticket Id</th>
                        <th>Subscriber Name</th>
                        <th>Normal Quality Ticket</th>
                        <th>Classic buyticket</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buytickets as $buyticket)
                    <tr>
                        <td>{{ $buyticket->id }}</td>
                        <td>{{ $buyticket->ticket_id }}</td>
                        <td>{{ $buyticket->subscriber_id }}</td>
                        <td>{{ $buyticket->normal_qty }}</td>
                        <td>{{ $buyticket->classic_qty }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.buyticket.show', $buyticket->id) }}" class="btn btn-default">Show</a>
                                <a href="{{ route('admin.buyticket.edit', $buyticket->id) }}" class="btn btn-default">Edit</a>
                               <form role="form" action="{{ route('admin.buyticket.destroy', $buyticket->id) }}" method="post">
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
                        <th>Ticket Id</th>
                        <th>Subscriber Name</th>
                        <th>Normal Quality Ticket</th>
                        <th>Classic buyticket</th>
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