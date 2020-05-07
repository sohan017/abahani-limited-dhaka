@extends('layouts.admin')

@section('title')  Update Player Auction  @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Player Auction 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.playerauction.index') }}">Player Auction</a></li>
		<li class="active">Update Player Auction</li>
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
					<h3 class="box-title">Update Player Auction</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.playerauction.update',$playerauction->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="auction_id">Auction Name: *</label>
							<select name="auction_id" id="auction_id" class="form-control">
								
								@foreach($auctions as $auction)
									<option @if($auction->id == $playerauction->auction_id) selected @endif value="{{ $auction->id }}">{{ $auction->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="player_id">Player Name: *</label>
							<select name="player_id" id="player_id" class="form-control">
								
								@foreach($players as $player)
									<option @if($player->id == $playerauction->player_id) selected @endif value="{{ $player->id }}">{{ $player->name }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="player_price"> Player Price: *</label>
							<input type="text" class="form-control" id="player_price" name="player_price" placeholder="Enter  player price" value="{{ $playerauction->player_price }}">
						</div>
					</div>
					

					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Update</button>
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

