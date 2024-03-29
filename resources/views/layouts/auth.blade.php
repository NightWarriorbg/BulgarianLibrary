<!DOCTYPE html>
<html lang="bg">
<head>
    @include('includes.head')
</head>
<body>
<div id="app">

    <!-- SITE LOGO -->
    <div class="auth-logo">
        <a href="{{ url('/') }}">@include('includes.logo')</a>
    </div>

    <!-- MAIN SITE CONTAINER -->
    <div class="container clearfix">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 mt-3">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- FOOTER-->
    <footer class="fixed-bottom">
        @include('includes.footer')
    </footer>
    <!-- END OF FOOTER-->

    <!-- BOTTOM-->
    @include('includes.bottom')

</div>
</body>
</html>
