<!DOCTYPE html>
<html lang="bg">
<head>
    @include('includes.head')
</head>
<body>

<!-- HEADER AND NAVIGATION -->
@include('includes.navigation')

<!-- SLIDER -->
@include('includes.slider')

<!-- MAIN SITE CONTAINER -->
<div class="container clearfix">
    @yield('content')
</div>
<!-- END OF MAIN CONTAINER -->

<!-- FOOTER-->
<footer>
    @include('includes.footer')
</footer>
<!-- END OF FOOTER-->

<!-- BOTTOM-->
@include('includes.bottom')

</body>
</html>
