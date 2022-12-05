@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">NIS</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($siswa as $siswa)
                        <tr>
                            <td>{{ $siswa->Nis }}</td>
                            <td>{{ $siswa->Nisn }}</td>
                            <td>{{ $siswa->Nama }}</td>
                            <td>{{ $siswa->JenisKelamin == 1 ? 'Perempuan' : 'Laki-laki'}}</td>
                            <td>{{ $siswa->Jalan }}, {{ $siswa->Kelurahan }}, {{ $siswa->Kecamatan }}, {{ $siswa->Kota }}</td>
                        @empty
                        <tr>
                            <td>
                                Data Empty
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
