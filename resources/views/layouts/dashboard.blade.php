<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechVentures - @yield('title')</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/datepicker3.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    @yield('styles')

    <!--Icons-->
    <script src="{{ asset('assets/js/lumino.glyphs.js') }}"></script>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">

            @include('partials.header')
  
        </div><!-- /.container-fluid -->
    </nav>
        
    @include('partials.sidebar')<!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        @yield('page-header')
        
        @yield('content')
    </div>  <!--/.main-->

    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    @yield('scripts')

</body>

</html>
