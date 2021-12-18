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



@include('admin._header')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"> Message Details</h1>

        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Content</h1>
            </div>
            <form class="user" action="{{ route('admin_message_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data" >
                @csrf


                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Messages Page</h1>

                    <div class="card-header">
                        @include('home.message')
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Messages DataTable</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <tr>
                                            <th>Id</th> <td>{{$data->id}}</td>
                                        </tr>

                                        <tr>
                                            <th>Name</th> <td>{{$data->name}}</td>
                                        </tr>

                                    <tr>
                                        <th>Email</th> <td>{{$data->email}}</td>
                                    </tr>

                                    <tr>
                                        <th>Phone</th> <td>{{$data->phone}}</td>
                                    </tr>

                                    <tr>
                                        <th>Subject</th> <td>{{$data->subject}}</td>
                                    </tr>

                                    <tr>
                                        <th>Message</th> <td>{{$data->message}}</td>
                                    </tr>


                                    <tr>
                                        <th>Admin Note</th> <td> <textarea id="ip" name="ip">{{$data->ip}}</textarea></td>
                                    </tr>

                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="container my-3 bg-light">
                    <div class="col-md-12 text-center">
                <button  href="#" type="submit" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                    <span class="text">update</span>
                </button>
                    </div>
                </div>


            </form>

        </div>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




@include('admin._footer')


