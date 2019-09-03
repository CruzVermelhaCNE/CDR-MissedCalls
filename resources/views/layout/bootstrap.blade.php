<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.head')
    <style>
        html,body {
            background-color: white;
        }
    </style>
    @yield('styles')
</head>

<body>
    @yield('content')
    @include('layout.partials.footer-scripts')
    @yield('javascript')
</body>

</html>