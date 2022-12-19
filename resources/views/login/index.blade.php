<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Tes Pembuatan Aplikasi untuk seleksi Programmer Ummi</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <form class="form-signin" action="/" method="POST">
        @csrf
        <img class="mb-4" src="/img/logo-ummi.png" alt="" width="160" height="160">
        <h1 class="h3 mb-3 font-weight-normal">Silakan Login dulu</h1>
        <small class="mb-4">
            email: rida.angga@gmail.com<br>
            passwd: 12345678</small>

        @if (session()->has('success'))
            {{-- Jika di session ada flash success, maka tampilkan pesan dibawah --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }} {{-- cetak pesan yang ada di session success --}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger">
                {{ session('loginError') }} {{-- tampilkan isi dari session loginError dari controller --}}
            </div>
        @endif

        <label for="email" class="sr-only">Email address</label>
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
            placeholder="Email address" autofocus value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }} {{-- message merupakan fungsi laravel untuk mencetak pesan error --}}
            </div>
        @enderror

        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <div class="checkbox mb-3">

        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>



</body>

</html>
