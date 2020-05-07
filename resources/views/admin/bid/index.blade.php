@extends('layouts.admin')

@section('title') Bid List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<style>
    img {
      border-radius: 50%;
      height: 130px;
  }
  button.btn.btn-danger {
     margin-left: 141px;
     margin-top: -57px;
 }

 .btn-group.a {
     padding: 66px;
 }
</style>
@endsection

@section('content')

<section class="content-header">
	<h1> Show Bid page</h1>
	<a href="{{ route('admin.bid.create')}}" class="btn btn-primary">Add new bid</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Show Bid</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Player Auction Id</th>
                        <th>Bidder ID</th>
                        <th>Player Price</th>
                        <th>Date Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bids as $bid)
                    <tr>
                        <td>{{ $bid->id }}</td>
                        <td>{{ $bid->playerAuction->auction->name}}</td>
                        <td>{{ $bid->bidder->name }}</td>
                        <td>{{ $bid->price }}</td>
                        <td>{{ $bid->date_time }}</td>
                        <td>
                             <div class="btn-group">
                                <a href="{{ route('admin.bid.show', $bid->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Show</a>
                                <a href="{{ route('admin.bid.edit', $bid->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                               <form role="form" action="{{ route('admin.bid.destroy', $bid->id) }}" method="post">
                                   @csrf
                                    @method('DELETE ')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');"><i class="fa  fa-trash"></i> Delete</button>
                               </form>  
                            </div>
                        </td>
                    </tr>
                   @endforeach 
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                      	<th>Player Auction Id</th>
                        <th>Bidder ID</th>
                        <th>Player Price</th>
                        <th>Date Time</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

</section>
<!-- /.content -->

@endsection


@section("js")

<!-- DataTables -->
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

@endsection