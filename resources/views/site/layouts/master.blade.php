<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	@yield('head.title')
	@yield('meta')
	@yield('css')
	<title>Thiết kế web</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/css.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="style/css.css"> -->
    <!-- response -->
    <link href="{{asset('home/responsemenu/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- end response menu -->
    <script src="{{asset('home/js/jquery-3.1.0.min.js')}}"></script>
</head>
<body>

  @include('site.partials.header')

  @yield('list.content')

  @include('site.partials.footer')

  @yield('js')
  
  
  <script src="{{asset('home/js/bootstrap.min.js')}}"></script>
  <!-- response menu -->
  <script type="text/javascript" src="{{asset('home/responsemenu/js/jquery.smartmenus.js')}}"></script>
  <script type="text/javascript" src="{{asset('home/responsemenu/js/jquery.smartmenus.bootstrap.js')}}"></script>
  <!-- end response menu -->
</body>
</html>