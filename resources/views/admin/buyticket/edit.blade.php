@extends('layouts.admin')

@section('title')  Update buyticket  @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update buyticket 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.buyticket.index') }}">Buy Ticket</a></li>
		<li class="active">Update buyticket</li>
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
					<h3 class="box-title">Update buyticket</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.buyticket.update',$buyticket->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="ticket_id">Ticket ID: *</label>
							<select name="ticket_id" id="ticket_id" class="form-control">
								
								@foreach($tickets as $ticket)
									<option @if($ticket->id == $buyticket->ticket_id) selected @endif value="{{ $ticket->id }}">{{ $ticket->id }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="subscriber_id">Ticket ID: *</label>
							<select name="subscriber_id" id="subscriber_id" class="form-control">
								
								@foreach($subscribers as $subscriber)
									<option @if($subscriber->id == $buyticket->subscriber_id) selected @endif value="{{ $subscriber->id }}">{{ $subscriber->name }}</option>
								@endforeach
							</select>
						</div>
				
						<div class="form-group">
							<label for="vip_qty">VIP Ticket Quantity: *</label>
							<input type="text" class="form-control" id="vip_qty" name="vip_qty" placeholder="Update VIP Quantity Ticket" value="{{ $buyticket->vip_qty }}">
						</div>
					
						<div class="form-group">
							<label for="normal_qty">Normal Ticket Quantity: *</label>
							<input type="text" class="form-control" id="normal_qty" name="normal_qty" placeholder="Update Normal Quantity Ticket" value="{{ $buyticket->normal_qty }}">
						</div>
					
						<div class="form-group">
							<label for="classic_qty">Classic Ticket Quantity: *</label>
							<input type="text" class="form-control" id="classic_qty" name="classic_qty" placeholder="Update Classic Quantity Ticket" value="{{ $buyticket->classic_qty }}">
						</div>
				
						<div class="form-group">
							<label for="vip_price">VIP buyticket Price: *</label>
							<input type="text" class="form-control" id="vip_price" name="vip_price" placeholder="Update VIP buyticket Price" value="{{ $buyticket->vip_price }}">
						</div>
					
						<div class="form-group">
							<label for="normal_price">Normal Ticket Price: *</label>
							<input type="text" class="form-control" id="normal_price" name="normal_price" placeholder="Update Normal Ticket Price" value="{{ $buyticket->normal_price }}">
						</div>
					
						<div class="form-group">
							<label for="classic_price">Classic Ticket Price: *</label>
							<input type="text" class="form-control" id="classic_price" name="classic_price" placeholder="Update Classic Ticket Price" value="{{ $buyticket->classic_price }}">
						</div>

						<div class="form-group">
							<label for="sub_total_price">Sub Total Ticket Price: *</label>
							<input type="text" class="form-control" id="sub_total_price" name="sub_total_price" placeholder="Update Sub Total Ticket Price" value="{{ $buyticket->sub_total_price }}">
						</div>

						<div class="form-group">
							<label for="discount_id">Discount Name: *</label>
							<select name="discount_id" id="discount_id" class="form-control">
								
								@foreach($discounts as $discount)
									<option @if($discount->id == $buyticket->discount_id) selected @endif value="{{ $discount->id }}">{{ $discount->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="total_price">Total Ticket Price: *</label>
							<input type="text" class="form-control" id="total_price" name="total_price" placeholder="Update Total Ticket Price" value="{{ $buyticket->total_price }}">
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

