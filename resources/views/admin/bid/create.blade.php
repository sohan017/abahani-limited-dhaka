@extends('layouts.admin')

@section('title') Bid Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Bid Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.bid.index') }}">Bid</a></li>
		<li class="active">Bid Create</li>
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
					<h3 class="box-title">Bid Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.bid.store') }}" method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="player_auction_id">Player Auction Name: *</label>
							<select name="player_auction_id" id="player_auction_id" class="form-control" value="{{old('player_auction_id')}}">
								
								@foreach($playerauctions as $playerauction)
									<option value="{{ $playerauction->id }}">{{ $playerauction->id }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="bidder_id">Player Name: *</label>
							<select name="bidder_id" id="bidder_id" class="form-control" value="{{old('bidder_id')}}">
								
								@foreach($bidders as $bidder)
									<option value="{{ $bidder->id }}">{{ $bidder->name }}</option>
								@endforeach
							</select>
						</div>


						<div class="form-group">
							<label for="price">Player price: *</label>
							<input type="text" class="form-control" id="price" name="price" placeholder="Enter Player price" value="{{old('price')}}">
						</div>

						<!-- <div class="form-group">
							<label for="date_time">Date & Time: *</label>
							<input type="text" class="form-control" id="date_time" name="date_time" placeholder="Enter date & time">
						</div> -->
						
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

