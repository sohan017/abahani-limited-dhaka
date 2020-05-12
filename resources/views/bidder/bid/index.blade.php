@extends('layouts.admin')
@section('title') Auction page @endsection
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
		Auction page
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Auction </a></li>
		<li class="active">Auction page</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<!-- left column -->
		<div class="col-md-3">
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Place your bid</h3>

					<!-- /.box-tools -->
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					@include("partial.notification")
					<form role="form" action="{{ route('bidder.player.bid', $pa->id) }}" method="post">
						@csrf
						<div class="box-body">
							<div class="form-group input_right">
								<input type="number" value="0" class="form-control" id="bid_price" name="bid_price" placeholder="Enter bit Price" value="{{old('bid_price')}}">
							</div>
						</div>
						<input type="submit" class="btn btn-primary" value="Bid">
					</form>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>

		<div class="col-md-2"></div>

		<div class="col-md-4">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-body box-profile">

					<img class="profile-user-img img-responsive img-circle" src="{{ asset($pa->player->img) }}" alt="Auction Player picture">

					<h3 class="profile-username text-center"></h3>

					<p class="text-muted text-center">Auction Player</p>
					<p class="text-muted text-center">{{ $pa->player->name }}</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Name</b> <a class="pull-right">{{ $pa->player->name }}</a>
						</li>
						<li class="list-group-item">
							<b>Turnament</b> <a class="pull-right">{{ $pa->player->totalTurnament() }}</a>
						</li>
						<li class="list-group-item">
							<b>Matchs</b> <a class="pull-right">{{ $pa->player->team->matchs->count() }}</a>
						</li>
						<li class="list-group-item">
							<b>Goals</b> <a class="pull-right">{{ $pa->player->goals->count() }}</a>
						</li>
					</ul>
				</div>
				<!-- /.box-body -->
			</div>
		</div>

		<div class="col-md-3"></div>
		<!-- /.box-body -->
	</div>

	<div class="row">
		<div class="col-md-">


		</div>
		<!-- /.box -->
		<!-- /.col -->
		<div class="col-md-12">
			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Bidder Name</th>
								<th>Domain</th>
								<th>Bid</th>
								<th>Player Price</th>
							</tr>
						</thead>
						<tbody>
							@foreach($pa->bids as $bid)
							<tr>
								<td>1</td>
								<td>{{ $bid->bidder->name }}</td>
								<td>{{ $bid->bidder->club_name}}</td>
								<td>{{ $bid->price }} Tk</td>
								<td>{{ $pa->player_price }} TK</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Bidder Name</th>
								<th>Domain</th>
								<th>Bid</th>
								<th>Player Price</th>
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