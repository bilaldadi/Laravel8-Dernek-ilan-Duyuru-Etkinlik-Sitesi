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
        <h1 class="h3 mb-4 text-gray-800">Edit Content Page</h1>

        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Content</h1>
            </div>
            <form class="user" action="{{ route('admin_menu_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data" >
                @csrf

                <div class="form-group row">

                    <label>Parent Menu</label>
                    <select class="form-control select2" name="parent_id">
                        <option value="0" selected="selected">Main Menu</option>
                        @foreach($menulist as $rs)
                            <option value="{{$rs->id}}" @if($rs->id==$data->parent_id) selected="selected" @endif>
                                {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}</option>
                        @endforeach
                    </select>
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
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Image:</label>
                        <input type="file" class="form-control form-control-user" name="image">
                        @if($data->image)
                            <img src="{{Storage::url($data->image)}}" height="60">
                        @endif
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


