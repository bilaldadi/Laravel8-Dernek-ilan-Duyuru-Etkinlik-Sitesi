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
        <h1 class="h3 mb-4 text-gray-800">Edit Setting Page</h1>

        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Setting</h1>
            </div>
            <form class="user" action="{{ route('admin_setting_update')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">

                        <input type="hidden"  id="id" class="form-control form-control-user" name="id" value="{{$data->id}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Title:</label>
                        <input type="text" class="form-control form-control-user" name="title" value="{{$data->title}}">
                    </div>
                    <div class="col-sm-6">
                        <label>Keywords:</label>
                        <input type="text" class="form-control form-control-user" name="keywords"  value="{{$data->keywords}}">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Description:</label>
                        <input type="text" class="form-control form-control-user" name="description" value="{{$data->description}}">
                    </div>
                    <div class="col-sm-6">
                        <label>Company:</label>
                        <input type="text" class="form-control form-control-user"  name="company"  value="{{$data->company}}">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Address:</label>
                        <input type="text" class="form-control form-control-user" name="address" value="{{$data->address}}">
                    </div>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Phone:</label>
                        <input type="text" class="form-control form-control-user" name="phone" value="{{$data->phone}}">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Fax:</label>
                        <input type="text" class="form-control form-control-user" name="fax" value="{{$data->fax}}">
                    </div>
                    <div class="col-sm-6">
                        <label>Email:</label>
                        <input type="email" class="form-control form-control-user"  name="email"  value="{{$data->email}}">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>smtpserver:</label>
                        <input type="text" class="form-control form-control-user" name="smtpserver" value="{{$data->smtpserver}}">
                    </div>
                    <div class="col-sm-6">
                        <label>smtpemail:</label>
                        <input type="text" class="form-control form-control-user"  name="smtpemail"  value="{{$data->smtpemail}}">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>smtppassword:</label>
                        <input type="text" class="form-control form-control-user" name="smtppassword" value="{{$data->smtppassword}}">
                    </div>
                    <div class="col-sm-6">
                        <label>smtpport:</label>
                        <input type="number" class="form-control form-control-user"  name="smtpport"  value="{{$data->smtpport}}">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Facebook:</label>
                        <input type="text" class="form-control form-control-user" name="facebook" value="{{$data->facebook}}">
                    </div>
                    <div class="col-sm-6">
                        <label>Instagram:</label>
                        <input type="text" class="form-control form-control-user"  name="instagram"  value="{{$data->instagram}}">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>About us:</label>
                        <input type="text" class="form-control form-control-user" name="aboutus" value="{{$data->aboutus}}">
                    </div>
                    <div class="col-sm-6">
                        <label>Contact:</label>
                        <input type="text" class="form-control form-control-user"  name="contact"  value="{{$data->contact}}">

                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>References:</label>
                        <input type="text" class="form-control form-control-user" name="references" value="{{$data->references}}">
                    </div>


                </div>


                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="cars">status:</label>
                        <select id="type" name="status" class="animated--grow-in">
                            <option selected="selected">{{$data->status}}</option>
                            <option value="True">True</option>
                            <option value="False">False</option>

                        </select>
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


