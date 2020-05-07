@extends('layouts.admin')

@section('title') Discount Create @endsection
@section('css') 

@endsection


@section('content')

<section class="content-header">
	<h1>
		Discount Create
		<small>it all starts here</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{ route('admin.subscriber.index') }}">Discount</a></li>
		<li class="active">Discount Create</li>
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
					<h3 class="box-title">Discount Entry</h3>
				</div>
				<!-- /.box-header -->
				@include("partial.notification")
				<!-- form start -->
				<form role="form" action="{{ route('admin.discount.store') }}" method="post">
					@csrf
					<div class="box-body">
						<small>required = *</small>
						<div class="form-group">
							<label for="name">Discount Name: *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Discount Name" value="{{old('name')}}">
						</div>

						<div class="form-group">
							<label for="match_id">Match Name: *</label>
							<select name="match_id" id="match_id" class="form-control" value="{{old('match_id')}}">
								
								@foreach($matchs as $match)
									<option value="{{ $match->id }}">{{ $match->name }}</option>
								@endforeach
							</select>
						</div>
					
						<div class="form-group">
							<label for="percent">Discount Percent: *</label>
							<input type="text" class="form-control" id="percent" name="percent" placeholder="Enter Discount Percent" value="{{old('percent')}}">
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

