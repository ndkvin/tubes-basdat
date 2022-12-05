@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Grade</th>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Total Siswa</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kelas as $kelas)
                        <tr>
                            <td>{{ $kelas->Grade }}</td>
                            <td>{{ $kelas->NamaKelas }}</td>
                            <td>{{ $kelas->Total}}</td>
                            <td>
                                <a class="btn btn-primary d-block" href="{{ route('siswa.kelas', $kelas->KdKelas) }}">Lihat Siswa</a>
                            </td>
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
