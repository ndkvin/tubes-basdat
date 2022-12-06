@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Nama Organisasi</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($siswa as $siswa)
                        <tr>
                            <td>{{ $siswa->NamaSiswa }}</td>
                            <td>{{ $siswa->NamaOrganisasi }}</td>
                            <td>{{ $siswa->Jabatan }}</td>
                            <td>{{ $siswa->Tahun }}</td>
                        </tr>
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
