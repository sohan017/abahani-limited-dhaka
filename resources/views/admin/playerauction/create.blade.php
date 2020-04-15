@extends('layouts.admin')

@section('title') Player Auction Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Player Auction Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Player Auction</a></li>
		<li class="active">Player Auction Create</li>
	</ol>
</section>


<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-1"></div>
		<div class="col-md-7">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Player Auction Entry</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.playerauction.store') }}" method="post">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="auction_id">Auction Name:</label>
							<select name="auction_id" id="auction_id" class="form-control">
								
								@foreach($auctions as $auction)
									<option value="{{ $auction->id }}">{{ $auction->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="player_id">Player Name:</label>
							<select name="player_id" id="player_id" class="form-control">
								
								@foreach($players as $player)
									<option value="{{ $player->id }}">{{ $player->name }}</option>
								@endforeach
							</select>
						</div>


						<div class="form-group">
							<label for="player_price">Player price:</label>
							<input type="text" class="form-control" id="player_price" name="player_price" placeholder="Enter Player price">
						</div>
						
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /.box-body -->
	</div>

</section>

<!-- /.content -->

@endsection

@section('js') 

@endsection

