@extends('layouts.admin')

@section('title') Tarinee List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
    <h1> Show Tarinee page</h1>
    <a href="" class="btn btn-primary">Add new Tarinee</a>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tarinee</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">


    <div class="box">

        @include("partial.notification")

        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tarinee Name</th>
                        <th>Photo</th>
                        <th>Contact Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>werty</td>
                        <td>wegh</td>
                        <td>wegh</td>
                        <td>erghghj</td>
                        <td>
                            <div class="btn-group">
                                <a href="" class="btn btn-block btn-primary">Show</a>
                               <!--  <a href="" class="btn btn-default">Edit</a>
                               <form role="form"  method="post">
                                  
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');">Delete</button>
                               </form> -->
                                
                            </div>
                        </td>
                    </tr>
                  
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tarinee Name</th>
                        <th>CLub Name</th>
                        <th>Contact email</th>
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