<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="">Rida Angga Kusuma</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        {{-- tambah menu disini --}}
    </div>

    <form class="form-inline" action="/logout" method="POST">
        @csrf {{-- Setiap ada form tambahkan ini --}}
        <button type="submit" class="btn btn-sm btn-outline-primary">
            Logout <i class="bi bi-box-arrow-right"></i></button>
    </form>
</nav>
