<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        
        @section('javascript')
        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/jquery.validate.min.js"></script>
        @show
        
    </head>
    <body>
        <div class="container">
            <div class="content">
                @if(Auth::check())
                <a href="/auth/logout">Logout</a>
                @else
                <a href="/auth/login">Login</a><br />
                <a href="/auth/register">Register</a>
                @endif
                <div class="title">@yield('content')</div>
            </div>
            @yield('content2')
        </div>
    </body>
</html>
