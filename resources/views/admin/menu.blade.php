<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ESC Association Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('pi')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('pi')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{asset('pi')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin._sidebar')

               @include('admin._header')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Menu Page</h1>

                     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Parent</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                             <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                     <tbody>
                                     @foreach ($menulist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->parent_id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->image}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td>Edit</td>
                                            <td>Delete</td>
                                        </tr>
                                        @endforeach
                                     </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->




             @include('admin._footer')
                       <!-- Page level plugins -->
    <script src="{{asset('pi')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('pi')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('pi')}}/js/demo/datatables-demo.js"></script>
