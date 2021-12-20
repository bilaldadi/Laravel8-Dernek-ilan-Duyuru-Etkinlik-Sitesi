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
                    <h1 class="h3 mb-4 text-gray-800">Add Content Page</h1>

                    <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add Content</h1>
                            </div>
                            <form class="user" action="{{ route('admin_content_create') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                                <div class="form-group row">

                                    <label>Parent Menu</label>
                                    <select class="form-control select2" name="menu_id">
                                        <option value="0" selected="selected">Main Menu</option>
                                        @foreach($contentlist as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="title" placeholder="Title">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="keywords"  placeholder="Keywords">
                                    </div>

                                </div>

                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="description" placeholder="description">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"  name="parent_id"  placeholder="parent id">
                                    </div>

                                </div>

                                  <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="user_id" placeholder="User id">
                                    </div>
                                  </div>




                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       <label for="cars">Type:</label>
                                          <select class="form-control select2" id="type" name="type" class="animated--grow-in">
                                            <option value="Announcement">Announcement</option>
                                            <option value="Activities">Activities</option>
                                            <option value="News">News</option>
                                        </select>
                                     </div>
                                     </div>

                                      <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       <label for="cars">status:</label>
                                          <select class="form-control select2" id="type" name="status" class="animated--grow-in">
                                            <option value="True">True</option>
                                            <option value="False">False</option>

                                        </select>
                                     </div>


                                </div>
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
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

                        </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->




             @include('admin._footer')

