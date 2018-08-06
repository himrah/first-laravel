<html>
    <title>
        @yield('title')
    </title>
    @include('header')
    <body>
        <div class="top">
            <p>Welcome to Layout page all changes make below</p>
        </div>
        <div>
        @yield('content')
        </div>
    </body>
</html>