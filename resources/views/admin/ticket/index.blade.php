@extends('layouts.admin')

@section('title') Ticket List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Ticket page</h1>
	<a href="{{ route('admin.ticket.create')}}" class="btn btn-primary">Add new Ticket</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Ticket</a></li>
		<li class="active">All Ticket</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Ticket List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>match name</th>
                        <th>VIP ticket</th>
                        <th>Normal ticket</th>
                        <th>Classic ticket</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td>{{ $ticket->match_id }}</td>
                        <td>{{ $ticket->vip_qty }}</td>
                        <td>{{ $ticket->normal_qty }}</td>
                        <td>{{ $ticket->classic_qty }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.ticket.show', $ticket->id) }}" class="btn btn-default">Show</a>
                                <a href="{{ route('admin.ticket.edit', $ticket->id) }}" class="btn btn-default">Edit</a>
                               <form role="form" action="{{ route('admin.ticket.destroy', $ticket->id) }}" method="post">
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
                        <th>ticket number</th>
                        <th>VIP ticket</th>
                        <th>Normal ticket</th>
                        <th>Classic ticket</th>
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