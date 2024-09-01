<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>@yield('title')</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="{{ asset('assets/admin/fonts/ionicons/2.0.1/css/ionicons.min.css') }}">
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="{{ asset('assets/admin/fonts/SansPro/SansPro.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap_rtl-v4.2.1/custom_rtl.css')}}">
      <style>
         .login-box-msg, .register-box-msg {
         margin: 0;
         padding: 0 20px 20px;
         text-align: center;
         color: brown;
         font-size: 1.5vw;
         }
         span.fas {
         color: brown;
         }
      </style>
      @livewireStyles
   </head>
   <body class="hold-transition login-page" style="background-image: url({{ asset('assets/admin/imgs/login.jpeg') }}) ;background-size: 100%;background-repeate:ni-repeate;">
      <div class="login-box">
 
         <!-- /.login-logo -->
         <div class="card">
            <div class="card-body login-card-body">
               @if(Session::has('error'))
               <div class="alert alert-danger" role="alert">
                  {{  Session::get('error') }}
               </div>
               @endif
               <p class="login-box-msg">@yield('title')</p>
               @yield('content')
            </div>
            <!-- /.login-card-body -->
         </div>
      </div>
      <!-- /.login-box -->
      <!-- jQuery -->
      <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
      <!-- Bootstrap 4 -->
      <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      @livewireScripts
   </body>
</html>