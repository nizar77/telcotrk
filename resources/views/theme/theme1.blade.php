
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="">
    @csrf
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./img/favicon.ico" sizes="any" />
    @include('theme.partial._styles')
    <!-- Global site tag (gtag.js) - Google Analytics-->
    </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('theme.partial._header')
    <div class="app-body">
      <div class="sidebar">
            @include('theme.partial._sidebar-nav')        
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dasboard</li>
        </ol>
          <!-- Breadcrumb Menu-->
       
            <!-- /.row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                 @yield('content')
                </div>
               </div>
            </div>
              <!-- /.col-->
      </main>  
    </div>
        <!-- /.row-->
    @include('theme.partial._footer')
    @include('theme.partial._scripts')
    @stack('scripts')
  </body>
</html>
