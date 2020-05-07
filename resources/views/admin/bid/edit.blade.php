@extends('layouts.admin')

@section('title')  Update Bid  @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Bid 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{ route('admin.bid.index') }">Bid</a></li>
		<li class="active">Update Bid</li>
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
					<h3 class="box-title">Update Bid</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.bid.update',$bid->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<div class="form-group">
							<label for="player_auction_id">Player Auction ID:</label>
							<select name="player_auction_id" id="player_auction_id" class="form-control">
								
								@foreach($playerauctions as $playerauction)
									<option @if($playerauction->id == $bid->player_auction_id) selected @endif value="{{ $playerauction->id }}">{{ $playerauction->id }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="bidder_id">Bidder Name:</label>
							<select name="bidder_id" id="bidder_id" class="form-control">
								
								@foreach($bidders as $bidder)
									<option @if($bidder->id == $bid->bidder_id) selected @endif value="{{ $bidder->id }}">{{ $bidder->name }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="price"> Player Price:</label>
							<input type="text" class="form-control" id="price" name="price" placeholder="Enter  player price" value="{{ $bid->price }}">
						</div>

						<!-- <div class="form-group">
							<label for="date_time">Date & Time:</label>
							<input type="text" class="form-control" id="date_time" name="date_time" placeholder="Enter Date Time" value="{{ $bid->date_time }}">
						</div> -->
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

