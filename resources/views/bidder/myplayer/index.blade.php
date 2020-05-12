@extends('layouts.admin')
@section('title') Sold Player Page @endsection
@section('css')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

<style>
	a.btn.btn-info.bid_place {
		margin-left: 48px;
	}

	.form-group.input_right {
		margin-top: -10px;
	}
</style>
@endsection


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Sold Player page
	</h1>
</section>

<!-- Main content -->
<section class="content">


	<div class="row">
		<!-- /.box -->
		<!-- /.col -->
		<div class="col-md-12">
			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Player Name</th>
								<th>Player Price</th>
								<th>Sold Price</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($players as $player)
                            @if($player->playerAuctions->first()->bids->first()->bidder->id == Auth::guard('bidder')->id())
							<tr>
								<td>{{ $player->name }}</td>
								<td>{{ $player->playerAuctions->first()->player_price }} Tk</td>
								<td>{{ $player->playerAuctions->first()->bids->first()->price }} Tk</td>
                            </tr>
                            @endif
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>Player Name</th>
								<th>Player Price</th>
								<th>Sold Price</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.nav-tabs-custom -->
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
	$(function() {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging': true,
			'lengthChange': false,
			'searching': false,
			'ordering': true,
			'info': true,
			'autoWidth': false
		})
	})
</script>

@endsection