@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Minat Bakat NonAkademik</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($siswa as $siswa)
                        <tr>
                            <td>{{ $siswa->Nama  }}</td>
                            <td>{{ $siswa->MbNonAkademik }}</td>
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
