@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <ul class="list-group mb-5">
            <li class="list-group-item">
                <a href="{{ route('guru.jam') }}">
                  Jam Mengajar Tiap Guru Setiap Minggu
                </a>
            </li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
        </ul>
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">KdGuru</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($guru as $guru)
                        <tr>
                            <td>{{ $guru->KdGuru }}</td>
                            <td>{{ $guru->NamaGuru }}</td>
                            <td>{{ $guru->JenisKelamin == 1 ? 'Perempuan' : 'Laki-Laki' }}</td>
                            <td>
                                <form action="{{ route('guru.destroy', $guru->KdGuru) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        Hapus
                                    </button>
                                </form>
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
