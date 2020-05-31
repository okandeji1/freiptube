<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Vlog">
      <meta name="author" content="Okandeji">
      <title>{{ config('app.name', 'Freiptube') }}</title>
      <!-- Bootstrap core CSS-->
      <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="{{asset('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="{{asset('/css/osahan.css')}}" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{asset('/vendor/owl-carousel/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{asset('/vendor/owl-carousel/owl.theme.css')}}">
      <!-- Favicon Icon -->
      <link rel="icon" type="image/ico" href="{{asset('/img/logot.ico')}}">
   </head>
   <body id="page-top">
    <!-- Navbar -->
      @include('partials.navbar')
      <!-- Navbar -->
      <div id="wrapper">
         <!-- Sidebar -->
         @include('partials.sidebar')
         <div id="content-wrapper">
            @yield('content')
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            @include('partials.footer')
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Core plugin JavaScript-->
      <script src="{{asset('/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
      <!-- Owl Carousel -->
      <script src="{{asset('/vendor/owl-carousel/owl.carousel.js')}}"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{asset('/js/custom.js')}}"></script>
   </body>
</html>