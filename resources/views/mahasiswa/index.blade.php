@extends('layout/base')

@section('tittle', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <h1>Daftar Mahasiswa</h1>
    <table class="table mt-auto">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">E-mail</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <th>{{ $mhs->nama }}</th>
                <th>{{ $mhs->nim }}</th>
                <th>{{ $mhs->email }}</th>
                <th>{{ $mhs->jurusan }}</th>
                <th>
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger">Delete</a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection