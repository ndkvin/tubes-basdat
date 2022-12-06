@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{-- <div class="col-md-4 col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Siswa</h5>
                        <p class="card-text">Lihat Siswa</p>
                        <a href="#" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-4 col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Guru</h5>
                        <p class="card-text">Lihat Guru</p>
                        <a href="{{ route('guru') }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Siswa</h5>
                        <p class="card-text">Manage Siswa</p>
                        <a href="{{ route('siswa') }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mapel</h5>
                        <p class="card-text">Lihat Mata Pelajaran</p>
                        <a href="{{ route('mapel') }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kelas</h5>
                        <p class="card-text">Manage Kelas</p>
                        <a href="{{ route('kelas') }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
