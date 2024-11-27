<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Appiflix-Web | Dashboard</title>
  @include('backend.base.style')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
            @include('backend.base.header')
        <!-- /.navbar -->

        <!-- Main Admin Sidebar Container -->
            @include('backend.base.admin_menu')
        <!-- /.Main Admin Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('contents')
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
            @include('backend.base.footer')
        <!-- /.Footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    @include('backend.base.script')
</body>
</html>
