@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">NamaMapel</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mapel as $mapel)
                        <tr>
                            <td>{{ $mapel->NamaMapel }}</td>
                            <td>
                                <form action="{{ route('mapel.destroy', $mapel->NamaMapel) }}" method="POST">
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
