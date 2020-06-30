<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @csrf
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet">
    @stack('styles')
    <title>Document</title>
</head>
<body>
    <div class="container">
       @yield('content')
    </div>
    
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}" type="text/javascript"></script>  
    <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>  
   
    <script src="{{asset('assets/js/js/main.js')}}" type="text/javascript"></script>  
    @stack('scripts') 
</body>
</html>