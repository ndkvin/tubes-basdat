@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">TahunAjaran</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($siswa as $siswa)
                        <tr>
                            <td>{{ $siswa->Nama }}</td>
                            <td>{{ $siswa->Grade }}</td>
                            <td>{{ $siswa->NamaKelas }}</td>
                            <td>{{ $siswa->TahunAjaran }}</td>
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
