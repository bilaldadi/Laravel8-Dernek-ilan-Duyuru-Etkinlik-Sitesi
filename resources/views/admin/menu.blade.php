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

                    <a href="{{ route('admin_menu_add')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                        <span class="text">Add New Menu</span>
                    </a>

                     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Menu DataTable</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Parent</th>
                                            <th>Title</th>
                                            <th>Discription</th>
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
                                            <td>
                                                {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}
                                            </td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->description}}</td>
                                            <td>
                                                @if ($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="90">
                                                @endif
                                            </td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{ route('admin_menu_edit',['id' =>$rs->id])}}"> <i class="far fa-edit"></i></a></td>
                                            <td> <a href="{{ route('admin_menu_delete' ,['id' =>$rs->id])}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-circle btn-lg">
                                                    <i class="far fa-trash-alt"></i>
                                                </a></td>
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
