@extends('layouts.admin')

@section('title') Tarinee List @endsection

@section("css")
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<style>
    img {
        border-radius: 50%;
        height: 90px;
    }
</style>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainees as $trainee)
                    <tr>
                        <td>{{ $trainee->id }}</td>
                        <td>{{ $trainee->name }}</td>
                         <td><img src="{{ asset($trainee->img) }}" alt="img"></td>
                        <td>
                            
                        </td>
                    </tr>
                  @endforeach 
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tarinee Name</th>
                        <th>Photo</th>
                        
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