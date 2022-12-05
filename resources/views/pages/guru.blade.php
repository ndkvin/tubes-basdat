@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">KdGuru</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($guru as $guru)
                        <tr>
                            <td>{{ $guru->KdGuru }}</td>
                            <td>{{ $guru->NamaGuru }}</td>
                            <td>{{ $guru->JenisKelamin==1 ? 'Perempuan' : 'Laki-Laki' }}</td>
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
