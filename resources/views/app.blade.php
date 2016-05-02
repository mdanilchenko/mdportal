<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, inicial-scale=1"/>
    <title>MD Portal - @yield('title')</title>
    <link href="{!! asset('css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css"/>
</head>
<body>

@include('mainmenu')

@yield('welcome')
</body>
</html>
<script type="text/javascript" src="{!! asset('js/jquery-2.2.3.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/main.js') !!}"></script>