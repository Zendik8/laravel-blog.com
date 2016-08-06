<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>
    @include('partials._nav')
    <div class="container"> <!-- Start Container -->
        @yield('content')
        @include('partials._footer')
    </div> <!-- End Container -->
    @include('partials._javascript')
    @yield('scripts')
</body>
</html>