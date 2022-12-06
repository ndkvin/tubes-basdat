@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <ul class="list-group my-5">
            <li class="list-group-item">
                <a href="{{ route('siswa.lomba') }}">
                    Siswa Mengikuti Lomba
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('siswa.organisasi') }}">
                    Siswa Mengikuti Organisasi
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('siswa.keluar') }}">
                    Siswa Keluar Sebelum Lulus
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('siswa.lulus') }}">
                    Siswa Lulus
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('siswa.mbakademik') }}">
                    Jumlah Siswa Untuk setiap minat bakat akademik
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('siswa.mbnonakademik') }}">
                    Jumlah Siswa Untuk setiap minat bakat non akademik
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('siswa.mbnonakademikall') }}">
                    Mb Akademik
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('siswa.mbakademikall') }}">
                    Mb Non Akademik
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('siswa.mbakademik.mipa') }}">
                    Siswa Minat Akademik MIPA
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('siswa.nilai') }}">
                    Nilai Siswa
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('siswa.absesnsi') }}">
                    Absensi Siswa
                </a>
            </li>
        </ul>
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">NIS</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nama Orang Tua</th>
                        <th scope="col">Riwayat Belajar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($siswa as $siswa)
                        <tr>
                            <td>
                                {{ $siswa->Nis }}
                            </td>
                            <td>{{ $siswa->Nisn }}</td>
                            <td>{{ $siswa->Nama }}</td>
                            <td>{{ $siswa->JenisKelamin == 1 ? 'Perempuan' : 'Laki-laki' }}</td>
                            <td>
                                {{ $siswa->Jalan }}, {{ $siswa->Kelurahan }}, {{ $siswa->Kecamatan }},
                                {{ $siswa->Kota }}
                            </td>
                            <td>{{ $siswa->NamaOrtu }}</td>
                            <td>
                                <a href="{{ route('siswa.riwayat', $siswa->Nis) }}">
                                    Lihat history
                                </a>
                            </td>
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
