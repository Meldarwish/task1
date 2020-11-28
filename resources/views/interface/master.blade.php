<!DOCTYPE html>
<html lang="en">
<head>
   <!-- BEGIN HEAD -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>{{ config('app.name') }}</title>
    <link href="{{asset('interface/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('interface/fonts/glyphicons.css')}}" rel="stylesheet" type="text/css" />


   </head>
   <!-- END HEAD -->



   <body class=" ">




           @yield('content')






       <script src="{{asset('interface/js/bootstrap.min.js')}}"></script>


   </body>



</html>
