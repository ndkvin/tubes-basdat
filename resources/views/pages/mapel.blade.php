@extends('layouts.app')

@section('content')
    <div class="container align-center">
        <form method="POST" action="{{ route('mapel.store') }}">
          @method('post')
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Tambah Mapel" aria-label="Recipient's username" aria-describedby="basic-addon2" name="NamaMapel">
          </div>
        </form>
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
