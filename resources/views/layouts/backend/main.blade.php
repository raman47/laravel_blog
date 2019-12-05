<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','My Blog')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">


    <link rel="stylesheet" href="/backend/plugins/simplemde/simplemde.min.css">
    <link rel="stylesheet" href="/backend/css/custom.css">
    <link rel="stylesheet" href="/backend/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/backend/bootstrap-jasny/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="/backend/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('layouts.backend.navbar')

   @include('layouts.backend.sidebar')
    @yield('content')

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.1
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="/backend/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
<script src="/backend/plugins/simplemde/simplemde.min.js"></script>
<script src="/backend/bootstrap-jasny/js/jasny-bootstrap.min.js"></script>
<script src="/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="/backend/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="/backend/dist/js/adminlte.js"></script>






<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>

@yield('script')
</body>
</html>
