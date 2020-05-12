@extends('layouts.admin')

@section('title') Ticket List @endsection

@section("css")
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
	<h1> Show Ticket page</h1>
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
                        <th>Ticket id</th>
                        <th>Match name</th>
                        <th>Ticket Type</th>
                        <th>Total Sits</th>
                        <th>Sub-Total price</th>
                        <th>Total price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
						<td>{{ $ticket->ticket->match->name }}</td>
						@if($ticket->vip_qty != 0)
                        <td>Vip Sit</td>
						<td>{{ $ticket->vip_qty }}</td>
						@elseif($ticket->classic_qty != 0)
                        <td>Classic Sit</td>
						<td>{{ $ticket->classic_qty }}</td>
						@elseif($ticket->normal_qty != 0)
                        <td>Normal Sit</td>
						<td>{{ $ticket->normal_qty }}</td>
						@endif
                        <td>{{ $ticket->sub_total_price }} Tk</td>
                        <td>{{ $ticket->total_price }} TK</td>
                    </tr>
                   @endforeach 
                </tbody>
                <tfoot>
                    <tr>
                        <th>Ticket id</th>
                        <th>match name</th>
                        <th>Ticket Type</th>
                        <th>Total Sits</th>
                        <th>Sub-Total price</th>
                        <th>Total price</th>
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