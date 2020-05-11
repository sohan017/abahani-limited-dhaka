@extends('layouts.admin')
@section('title') Auction Player page @endsection
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

<!-- Main content -->
<section class="content">

	@if($auctions->isNotEmpty())
	@foreach($auctions as $auction)

	<h2>
		Auction Player page
	</h2>
	<div class="row">
		@foreach($auction->playerActions as $pa)

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
					<a href="{{ route('bidder.player.auction', $pa->id)}}" class="btn btn-primary btn-block"><b>Go For Bit</b></a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		@endforeach
	</div>
	@endforeach

	@else
	<p>No Auction is available</p>
	@endif

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