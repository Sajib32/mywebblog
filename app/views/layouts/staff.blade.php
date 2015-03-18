<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Simple Blog | @yield('title')</title>
    <meta name="author" content="Md. Monirul Islam">
    @section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/sblog.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/staff.css') }}">
    @show
  </head>
  <body class="staff">
    <div id="header">
      <h1>Simple Blog: Staff Area</h1>
    </div>
    <div id="pagecontent">
      <h1> @yield('title') </h1>
      @if (Session::has('message'))
      <div class="notice">
        {{ Session::get('message') }}
      </div>
       @endif

       @yield('content')

      
    </div>

    <div id="footer">
      <p id="copyright">&copy; Md. Monirul Islam</p>
    </div>
  </body>
</html>