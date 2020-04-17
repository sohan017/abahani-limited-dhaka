@extends('layouts.admin')

@section('title')  Update discount  @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Update discount 
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.subscriber.index') }}">Discount</a></li>
		<li class="active">Update discount</li>
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
					<h3 class="box-title">Update discount</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.discount.update',$discount->id) }}" method="post">
					@csrf
					@method('PUT')
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name"> Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" value="{{ $discount->name }}">
						</div>

						<div class="form-group">
							<label for="match_id">Match Name: *</label>
							<select name="match_id" id="match_id" class="form-control">
								
								@foreach($matchs as $match)
									<option @if($match->id == $discount->match_id) selected @endif value="{{ $match->id }}">{{ $match->name }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="percent">VIP discount Quantity: *</label>
							<input type="text" class="form-control" id="percent" name="percent" placeholder="Enter VIP Quantity discount" value="{{ $discount->percent }}">
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

