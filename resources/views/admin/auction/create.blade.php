@extends('layouts.admin')

@section('title') Auction Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Auction Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.auction.index') }}">Auction</a></li>
		<li class="active">Auction Create</li>
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
					<h3 class="box-title">Auction Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.auction.store') }}" method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name">Auction Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
						</div>
					
						<div class="form-group">
							<label for="start_time">Auction Start Time: *</label>
							<input type="datetime-local" class="form-control" id="start_time" name="start_time" placeholder="Enter Auction Start Time" value="{{old('start_time')}}">
						</div>

						<div class="form-group">
							<label for="end_time">Auction End Time: *</label>
							<input type="datetime-local" class="form-control" id="end_time" name="end_time" placeholder="Enter Auction End Time" value="{{old('end_time')}}">
						</div>
					
						<div class="form-group">
							<label for="auction_detail"> Auction Detail: *</label>
							<textarea name="auction_detail" id="auction_detail" cols="30" rows="10" class="form-control" placeholder="Enter Auction Detail">{{old('auction_detail')}}</textarea>
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

