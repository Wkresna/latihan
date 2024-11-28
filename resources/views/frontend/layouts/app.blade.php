<!DOCTYPE html>
<html lang="en">
    @stack('script')
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - {{$title_page ?? 'Home'}} Theme</title> {{-- 1. memanggil title pada controller --}}
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" /> {{-- 2. mengganti agar mau route ke folder public --}}
        @stack('style') {{--6. memanggil push--}}
    </head>
    <body id="page-top">
        @include('frontend.layouts.sidebar') {{-- //4.memasukkan coding html di sidebar.blade.php (semula disini dipindah ke sidebar) --}}
        <!-- Page Content-->
        <div class="container-fluid p-0">
          @yield('content')  {{-- 5. memanggil masing2 Page (content di folder page) --}}
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('frontend/js/scripts.js')}}"></script> {{-- 3. mengganti link script di folder public/js --}}
    </body>
</html>
