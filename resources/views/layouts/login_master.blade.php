<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">


</head>

<body class="gray-bg">

@yield('content')

<!-- Mainly scripts -->
<script src="{{asset('backend/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>

</body>

</html>




