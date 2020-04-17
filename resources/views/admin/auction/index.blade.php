@extends('layouts.admin')

@section('title') auction List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show auction page</h1>
	<a href="{{ route('admin.auction.create')}}" class="btn btn-primary">Add new auction</a>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin.admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Show auction</li>
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
                        <th>Name</th>
                        <th>Auction start time</th>
                        <th>Auction end time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($auctions as $auction)
                    <tr>
                        <td>{{ $auction->id }}</td>
                        <td>{{ $auction->name }}</td>
                        <td>{{ $auction->start_time }}</td>
                        <td>{{ $auction->end_time }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.auction.show', $auction->id) }}" class="btn btn-default">Show</a>
                                <a href="{{ route('admin.auction.edit', $auction->id) }}" class="btn btn-default">Edit</a>
                               <form role="form" action="{{ route('admin.auction.destroy', $auction->id) }}" method="post">
                                   @csrf
                                    @method('DELETE ')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');">Delete</button>
                               </form>
                                
                            </div>
                        </td>
                    </tr>
                   @endforeach 
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                      	<th>Name</th>
                        <th>Auction start time</th>
                        <th>Auction end time</th>>
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