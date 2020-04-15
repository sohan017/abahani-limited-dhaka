@extends('layouts.admin')

@section('title') Buy Ticket Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Buy Ticket Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Buy Ticket</a></li>
		<li class="active">Buy Ticket Create</li>
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
					<h3 class="box-title">Buy Ticket Entry</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ route('admin.buyticket.store') }}" method="post">
					@csrf
					<div class="box-body">

						<div class="form-group">
							<label for="ticket_id">Ticket ID:</label>
							<select name="ticket_id" id="ticket_id" class="form-control">
								
								@foreach($tickets as $ticket)
									<option value="{{ $ticket->id }}">{{ $ticket->id }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="subscriber_id">Subscriber Name:</label>
							<select name="subscriber_id" id="subscriber_id" class="form-control">
								
								@foreach($subscribers as $subscriber)
									<option value="{{ $subscriber->id }}">{{ $subscriber->name }}</option>
								@endforeach
							</select>
						</div>
					
						
						
						<div class="form-group">
							<label for="vip_qty">VIP Ticket Quantity:</label>
							<input type="text" class="form-control" id="vip_qty" name="vip_qty" placeholder="Enter VIP Quantity Ticket">
						</div>
					

						<div class="form-group">
							<label for="normal_qty">Normal Ticket Quantity:</label>
							<input type="text" class="form-control" id="normal_qty" name="normal_qty" placeholder="Enter Normal Quantity Ticket">
						</div>
					
						<div class="form-group">
							<label for="classic_qty">Classic Ticket Quantity:</label>
							<input type="text" class="form-control" id="classic_qty" name="classic_qty" placeholder="Enter Classic Quantity Ticket">
						</div>
					
						<div class="form-group">
							<label for="vip_price">VIP Ticket Price:</label>
							<input type="text" class="form-control" id="vip_price" name="vip_price" placeholder="Enter VIP Ticket Price">
						</div>
					
						<div class="form-group">
							<label for="normal_price">Normal Ticket Price:</label>
							<input type="text" class="form-control" id="normal_price" name="normal_price" placeholder="Enter Normal Ticket Price">
						</div>
					
						<div class="form-group">
							<label for="classic_price">Classic Ticket Price:</label>
							<input type="text" class="form-control" id="classic_price" name="classic_price" placeholder="Enter Classic Ticket Price">
						</div>

						<div class="form-group">
							<label for="sub_total_price">Sub Total Ticket Price:</label>
							<input type="text" class="form-control" id="sub_total_price" name="sub_total_price" placeholder="Enter Sub Total Ticket Price">
						</div>

						<div class="form-group">
							<label for="discount_id">Discount Name:</label>
							<select name="discount_id" id="discount_id" class="form-control">
								
								@foreach($discounts as $discount)
									<option value="{{ $discount->id }}">{{ $discount->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="total_price">Total Ticket Price:</label>
							<input type="text" class="form-control" id="total_price" name="total_price" placeholder="Enter Total Ticket Price">
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

