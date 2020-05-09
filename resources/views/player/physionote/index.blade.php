@extends('layouts.admin')
@section('title') Physio Note Profile @endsection
@section('css') 
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
	</h1>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<!-- /.col -->
        <div class="col-md-9">
            <br>
            <div class="box">
                <!-- /.box-header -->
                <div class="box-header">
                    <h3 class="box-title">Player Fitness</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Physio</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($player->fitnesses as $fitness)
                            <tr>
                                <td>{{ $fitness->id }}</td>
                                <td>{{ $fitness->physio ? $fitness->physio->name : "" }} </td>
                                <td>{{ $fitness->physio_note }} </td>
                                <td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Physio</th>
                                <th>Note</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

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
