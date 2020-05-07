@extends('layouts.admin')

@section('title') Ticket Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Ticket Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.ticket.index') }}">Ticket</a></li>
		<li class="active">Ticket Create</li>
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
					<h3 class="box-title">Ticket Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.ticket.store') }}" method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="match_id">Match Name: *</label>
							<select name="match_id" id="match_id" class="form-control" value="{{old('match_id')}}">
								
								@foreach($matchs as $match)
									<option value="{{ $match->id }}">{{ $match->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
			
					<div class="box-body">
						<div class="form-group">
							<label for="vip_qty">VIP Ticket Quantity: *</label>
							<input type="text" class="form-control" id="vip_qty" name="vip_qty" placeholder="Enter VIP Quantity Ticket" value="{{old('vip_qty')}}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="normal_qty">Normal Ticket Quantity: *</label>
							<input type="text" class="form-control" id="normal_qty" name="normal_qty" placeholder="Enter Normal Quantity Ticket" value="{{old('normal_qty')}}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="classic_qty">Classic Ticket Quantity: *</label>
							<input type="text" class="form-control" id="classic_qty" name="classic_qty" placeholder="Enter Classic Quantity Ticket" value="{{old('classic_qty')}}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="vip_price">VIP Ticket Price: *</label>
							<input type="text" class="form-control" id="vip_price" name="vip_price" placeholder="Enter VIP Ticket Price" value="{{old('vip_price')}}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="normal_price">Normal Ticket Price: *</label>
							<input type="text" class="form-control" id="normal_price" name="normal_price" placeholder="Enter Normal Ticket Price" value="{{old('normal_price')}}">
						</div>
					</div>

					<div class="box-body">
						<div class="form-group">
							<label for="classic_price">Classic Ticket Price: *</label>
							<input type="text" class="form-control" id="classic_price" name="classic_price" placeholder="Enter Classic Ticket Price" value="{{old('classic_price')}}">
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

