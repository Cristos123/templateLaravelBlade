<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    <title>@yield('title')Template</title>
    @include('layout.partials.head-meta')
</head>

<body>



    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
        @include('layout.partials.header')
        {{-- Main Page Content will be here --}}
        @yield('content')


        @include('layout.partials.footer')

    </div>






    <script src="./js/global.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="./js/plugins/owl-carousel-init.js"></script>

    <script src="./vendor/scrollit/scrollIt.js"></script>
    <script src="./js/plugins/scrollit-init.js"></script>

    <script src="./vendor/apexchart/apexcharts.min.js"></script>
    <script src="./vendor/apexchart/apexchart-init.js"></script>

    <script src="./js/scripts.js"></script>

    {{-- Page Custom Javascript(used by the current page) --}}
    @stack('scripts')


</body>

</html>
