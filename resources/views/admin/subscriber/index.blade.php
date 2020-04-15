@extends('layouts.admin')

@section('title') Subscriber List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
	<h1> Show Subscriber page</h1>
	<a href="{{ route('admin.subscriber.create')}}" class="btn btn-primary">Add new Subscriber</a>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Subscriber</a></li>
		<li class="active">Show Subscriber</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">All Subscriber Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subscribers as $subscriber)
                    <tr>
                        <td>{{ $subscriber->id }}</td>
                        <td>{{ $subscriber->name }}</td>
                        <td>{{ $subscriber->contact_num }}</td>
                        <td>{{ $subscriber->email }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.subscriber.show', $subscriber->id) }}" class="btn btn-default">Show</a>
                                <a href="{{ route('admin.subscriber.edit', $subscriber->id) }}" class="btn btn-default">Edit</a>
                               <form role="form" action="{{ route('admin.subscriber.destroy', $subscriber->id) }}" method="post">
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
                        <th>Contact Number</th>
                        <th>Email</th>
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