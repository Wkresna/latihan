<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name').' '.'-'.''.$page_title ?? 'Home'}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="card">
        <div class="card-body">
            <!--memanggil form di folder resources\views\backoffice\pages\auth\login.blade.php -->
            <form action="{{route('auth.login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" required id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" required id="" class="form-control">
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- link jquery untuk memanfaatkan libary yg sudah tersedia. tpi jika situs ini tutup, maka aplikasi akan terganggu juga -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- link jquery untuk memanfaatkan libary sweet alert yg sudah tersedia. tpi jika situs ini tutup, maka aplikasi akan terganggu juga -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if(session('error'))
    Swal.fire({
        title : "Terjadi Kesalahan :",
        text : "{{session('error')}}",
        icon : "error"
    });
    @endif
</script>

</body>

</html>
