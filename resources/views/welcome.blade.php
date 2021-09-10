<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" />
      <link href="{{ asset('css/light-bootstrap-dashboard.css')}}" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="{{ asset('css/app.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="wrapper">
         <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
               Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
               
               Tip 2: you can also add an image using data-image tag
               -->
            <div class="sidebar-wrapper">
               <div class="logo">
                  <a href="http://www.creative-tim.com" class="simple-text">
                  Creative Tim
                  </a>
               </div>
               <ul class="nav">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">
                        <p>{{ __('sidebar.dashboard') }}</p>
                     </a>
                  </li>
                  <li>
                     <a class="nav-link" href="{{ route('category.index') }}">
                        <p>{{ __('sidebar.category_list') }}</p>
                     </a>
                  </li>
                  <li>
                     <a class="nav-link" href="{{ route('product.index') }}">
                        <p>{{ __('sidebar.product_list') }}</p>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="main-panel">
               <!-- Navbar -->
               <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                  <div class="container-fluid">
                     <a class="navbar-brand" href="/"> {{ __('quicktask.dashboard') }} </a>
                     <a class="navbar-item" href="{{ route('change-language',['language' => 'en']) }}"> {{ __('quicktask.language.en') }} </a>
                     <a class="navbar-item" href="{{ route('change-language',['language' => 'vi']) }}"> {{ __('quicktask.language.vi') }} </a>
                  </div>
               </nav>
               <!-- End Navbar -->
               <div class="content">
                  <div class="container-fluid">
                     @yield('content')
                  </div>
               </div>
               <footer class="footer">
                  <div class="container-fluid">
                  </div>
               </footer>
         </div>
      </div>
   </body>
   <script src="{{ asset('js/select2.js') }}"></script>
</html>
