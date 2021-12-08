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
                    <h1 class="h3 mb-4 text-gray-800">Add Image Page</h1>

                    <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Title: {{$data->title}}</h1>
                            </div>
                            <form class="user" action="{{route('admin_image_store',['content_id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                            @csrf


                                  <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Title</label>
                                        <input type="text" class="form-control form-control-user" name="title" placeholder="title">
                                    </div>

                                      <div class="col-sm-6 mb-3 mb-sm-0">
                                          <label>Image</label>
                                          <input type="file" class="form-control form-control-user" name="image">
                                      </div>



                                  </div>

                                <div class="container my-3 bg-light">
                                    <div class="col-md-12 text-center">
                                <button href="#" type="submit" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Creat</span>
                                    </button>
                                    </div>
                                </div>

                            </form>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($images as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->title}}</td>

                                            <td>
                                                @if ($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="60">
                                                @endif
                                            </td>

                                            <td> <a href="{{ route('admin_image_delete' ,['id' =>$rs->id ,'content_id' =>$data->id  ])}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-circle btn-lg">
                                                    <i class="far fa-trash-alt"></i>
                                                </a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->




             @include('admin._footer')

