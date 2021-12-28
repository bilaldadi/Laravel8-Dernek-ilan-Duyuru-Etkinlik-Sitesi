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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

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
            <form class="user" action="{{ route('admin_faq_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group row">

                        <label>Title:</label>
                        <input type="text" class="form-control form-control-user" name="question" value="{{$data->question}}">


                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <textarea id="summernote" name="answer" >{{$data->answer}}</textarea>

                        <script>
                            $('#summernote').summernote({

                                tabsize: 2,
                                height: 100
                            });
                        </script>

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


