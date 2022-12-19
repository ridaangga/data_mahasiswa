@extends('template')

@section('content')
    <div class="row mt-5 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Data Mahasiswa</h2>
            </div>
            <div class="float-right mb-3">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Data Mahasiswa</a>
            </div>
        </div>
    </div>



    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }} {{-- tampilkan isi dari session success dari controller --}}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">NO</th>
            <th>NIM</th>
            <th width="200px" class="text-center">NAMA</th>
            <th width="100px" class="text-center">TAHUN MASUK</th>
            <th class="text-center">PROGRAM STUDI</th>
            <th width="150px" class="text-center">KELAS</th>
            <th class="text-center">JENJANG</th>
            <th width="150px" class="text-center">OPSI</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
            @php
                //ambil numerik dari karakter sesuai dengan definisi kode NIM
                $kode_prodi = substr($mhs->nim, 3, 2);
                //get tabel prodis sesuai dengan kode NIMnya
                $prodi = DB::table('prodis')
                    ->where('kode_prodi', '=', $kode_prodi)
                    ->value('nama_prodi');
                
                //Idenfitikasi kelas berdasarkan kode kelas yang ada di NIM
                $kode_kelas = substr($mhs->nim, 5, 1);
                $kelas = DB::table('kelas')
                    ->where('kode_kelas', '=', $kode_kelas)
                    ->value('nama_kelas');
                
                //Identifikasi jenjang berdasarkan kode jenjang yang ada di NIM
                $kode_jenjang = substr($mhs->nim, 2, 1);
                $jenjang = DB::table('jenjangs')
                    ->where('kode_jenjang', '=', $kode_jenjang)
                    ->value('nama_jenjang');
            @endphp

            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td class="text-center">20{{ substr($mhs->nim, 0, 2) }}</td>
                <td>{{ $prodi }}</td>
                <td>{{ $kelas }}</td>
                <td class="text-center">{{ $jenjang }}</td>
                <td class="text-center">
                    <a class="btn btn-primary btn-sm" href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>

                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
