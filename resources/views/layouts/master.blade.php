<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script defer src="{{asset('js/fontawesome.js')}}" ></script>
    <link rel="stylesheet" href={{asset("css/app.css")}} >
    @yield('style')
</head>
<body>



@yield('content')





<script src="{{asset('js/app.js')}}" ></script>
@yield('script')
</body>
</html>
