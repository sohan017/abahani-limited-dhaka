@extends('layouts.admin')

@section('title')  Update Ticket  @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update Ticket 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.ticket.index') }}">Ticket</a></li>
		<li class="active">Update Ticket</li>
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
					<h3 class="box-title">Update Ticket</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.ticket.update',$ticket->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="match_id">Match Name: *</label>
							<select name="match_id" id="match_id" class="form-control">
								
								@foreach($matchs as $match)
									<option @if($match->id == $ticket->match_id) selected @endif value="{{ $match->id }}">{{ $match->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					
					
					<div class="box-body">
						<div class="form-group">
							<label for="vip_qty">VIP Ticket Quantity: *</label>
							<input type="text" class="form-control" id="vip_qty" name="vip_qty" placeholder="Enter VIP Quantity Ticket" value="{{ $ticket->vip_qty }}">
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="normal_qty">Normal Ticket Quantity: *</label>
							<input type="text" class="form-control" id="normal_qty" name="normal_qty" placeholder="Enter Normal Quantity Ticket" value="{{ $ticket->normal_qty }}">
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="classic_qty">Classic Ticket Quantity: *</label>
							<input type="text" class="form-control" id="classic_qty" name="classic_qty" placeholder="Enter Classic Quantity Ticket" value="{{ $ticket->classic_qty }}">
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="vip_price">VIP Ticket Price: *</label>
							<input type="text" class="form-control" id="vip_price" name="vip_price" placeholder="Enter VIP Ticket Price" value="{{ $ticket->vip_price }}">
						</div>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label for="normal_price">Normal Ticket Price: *</label>
							<input type="text" class="form-control" id="normal_price" name="normal_price" placeholder="Enter Normal Ticket Price" value="{{ $ticket->normal_price }}">
						</div>
					</div>
					
					<div class="box-body">
						<div class="form-group">
							<label for="classic_price">Classic Ticket Price: *</label>
							<input type="text" class="form-control" id="classic_price" name="classic_price" placeholder="Enter Classic Ticket Price" value="{{ $ticket->classic_price }}">
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

