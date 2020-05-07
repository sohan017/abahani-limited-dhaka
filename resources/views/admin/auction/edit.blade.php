@extends('layouts.admin')

@section('title')Update auction @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update auction 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.auction.index') }}">auction</a></li>
		<li class="active"> Update auction </li>
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
					<h3 class="box-title">Update auction</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.auction.update',$auction->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name"> Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $auction->name }}">
						</div>
					
						<div class="form-group">
							<label for="start_time"> Auction start time: *</label>
							<input type="datetime-local" class="form-control" id="start_time" name="start_time" placeholder="Enter Auction start timeh" value="{{ $auction->start_time }}">
						</div>

						<div class="form-group">
							<label for="end_time"> Auction End time: *</label>
							<input type="datetime-local" class="form-control" id="end_time" name="end_time" placeholder="Enter Auction End timeh" value="{{ $auction->end_time }}">
						</div>
					
						<div class="form-group">
							<label for="auction_detail"> Auction detail: * </label>
							<textarea name="auction_detail" id="auction_detail" cols="30" rows="10" class="form-control" placeholder="Enter auction detail">{{ $auction->auction_detail }}</textarea>
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

