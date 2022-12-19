@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit/Ubah Data Mahasiswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('mahasiswa.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Input gagal.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">NIM</label>
                <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                    placeholder="NIM" autofocus value="{{ $mahasiswa->nim }}">
                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control @error('nim') is-invalid @enderror"
                    placeholder="Nama Mahasiswa" autofocus value="{{ $mahasiswa->nama }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
