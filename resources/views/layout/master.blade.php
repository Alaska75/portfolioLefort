<!DOCTYPE html>
<html lang="fr">

<!--/head-->
@include('layout.head')
<header>
    @include('layout.nav')
</header>
<body>


<!--Body of 'content' -->
@yield('content')

<!--End of Body of 'content' -->

@include('layout.script')
<!-- ==== Footer Section Start ==== -->
@include('layout.footer')
<!-- ==== Footer Section End ==== -->
</body>
</html>