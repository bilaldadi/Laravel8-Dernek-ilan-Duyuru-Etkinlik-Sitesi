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
                    <h1 class="h3 mb-4 text-gray-800">Content Page</h1>

                    <a href="{{ route('admin_content_add')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Add New content</span>
                                    </a>



                     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Contant DataTable</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Menu</th>
                                            <th>Title</th>
                                            <th>Menu</th>
                                            <th>Type</th>
                                            <th>description</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Image Gallery</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                     <tbody>
                                     @foreach ($contentlist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>
                                                {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs->menu,$rs->menu->title)}}
                                            </td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->menu->title}}</td>
                                            <td>{{$rs->type}}</td>
                                            <td>{{$rs->description}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td>
                                                @if ($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="80">
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin_image_add',['content_id' =>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left =100 width=1100,height=700')">
                                                    <i class="far fa-images"></i></a>
                                            </td>

                                            <td><a href="{{ route('admin_content_edit',['id' =>$rs->id])}}"> <i class="far fa-edit"></i></a></td>
                                            <td> <a href="{{ route('admin_content_delete' ,['id' =>$rs->id])}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-circle btn-lg">
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
