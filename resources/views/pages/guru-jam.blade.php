@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Nama Mapel</th>
                        <th scope="col">Total Jam Mengajar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($guru as $guru)
                        <tr>
                            <td>{{ $guru->NamaGuru }}</td>
                            <td>{{ $guru->NamaMapel }}</td>
                            <td>{{ $guru->TotalJamMengajar }}</td>
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
