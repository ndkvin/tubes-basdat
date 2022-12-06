@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Nama Pelajaran</th>
                        <th scope="col">Semester ke</th>
                        <th scope="col">Total Masuk</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($siswa as $siswa)
                        <tr>
                          <td scope="col">{{ $siswa->Nama }}</td>
                          <td scope="col">{{ $siswa->NamaGuru }}</td>
                          <td scope="col">{{ $siswa->Grade }}</td>
                          <td scope="col">{{ $siswa->NamaKelas }}</td>
                          <td scope="col">{{ $siswa->NamaMapel }}</td>
                          <td scope="col">{{ $siswa->SemesterKe }}</td>
                          <td scope="col">{{ $siswa->TotalMasuk }}</td>
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
