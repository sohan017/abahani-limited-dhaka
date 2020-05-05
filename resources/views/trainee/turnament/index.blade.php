@extends('layouts.admin')

@section('title') Turnament List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<section class="content-header">
    <h1> Show Turnament page</h1>
    
    <ol class="breadcrumb">
        <li><a href="{{route('admin.admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Turnament</li>
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
                        <th>Turnament Name</th>
                        <th>Game Played</th>
                        <th>Win</th>
                        <th>Drow</th>
                        <th>Lost</th>
                        <th>PTS</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>1</td>
                        <td>wegh</td>
                        <td>60</td>
                        <td>42</td>
                        <td>12</td>
                        <td>6</td>
                        <td>95</td>
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
                        <th>Turnament Name</th>
                        <th>Point</th>
                        <th>Win</th>
                        <th>Drow</th>
                        <th>Lost</th>
                        <th>PTS</th>
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