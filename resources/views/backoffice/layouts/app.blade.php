<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name').' '.'-'.''.$page_title ?? 'Home'}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">RESUME BACKOFFICE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="{{route('admin.school.index')}}">School</a>
                  <a class="nav-link" href="#">Education</a>
                  <a class="nav-link" href="{{route('admin.auth.logout')}}">Logout</a>
                </div>
              </div>
            </div>
          </nav>
        <h1 class="mt-4 mb-4" >{{$page_title}}</h1>
        <!-- panggil tampilan di folder views/backoffice/pages/index.blade.php -->
        @yield('content')
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- link jquery untuk memanfaatkan libary yg sudah tersedia. tpi jika situs ini tutup, maka aplikasi akan terganggu juga -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- link jquery untuk memanfaatkan libary sweet alert yg sudah tersedia. tpi jika situs ini tutup, maka aplikasi akan terganggu juga -->   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('script')

    <script>
       @if(session('error'))
       Swal.fire({
        title : "Terjadi Kesalahan :",
        text : "{{session('error')}}",
        icon : "error"
      });
      @endif

      @if(session('success'))
      Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{session('succes')}}",
        showConfirmButton: false,
        timer: 1500
      });
      @endif
    
    </script>
  
  </body>

</html>