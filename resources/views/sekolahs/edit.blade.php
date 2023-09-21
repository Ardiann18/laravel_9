@extends('home')
@section('student')

@php
$title='Edit Data';
@endphp

<h1>Ardianelek</h1>
<form action="{{ route('sekolahs.update', $sekolahs->id) }}" class="" method="post">
  @csrf
  @method('PUT')
<div class="mb-3">
            <label class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah"class="form-control" name="example-text-input" placeholder="Tulis Nama Sekolah"value="{{$sekolahs->nama_sekolah}}">
</div>

<div class="mb-3">
                              <label class="form-label">Alamat Sekolah</label>
                              <input type="text" name="alamat" class="form-control" name="example-text-input" placeholder="Tulis Alamat Sekolah"value="{{$sekolahs->alamat}}">
                            </div>


                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" name="jurusan"class="form-control" name="example-text-input" placeholder="Tulis Nama Jurusan"value="{{$sekolahs->jurusan}}">
                            </div>


                            <div class="mb-3">
                              <label class="form-label">Jumlah Guru</label>
                              <input type="text" name="jumlah_guru"class="form-control" name="example-text-input" placeholder="Jumlah Guru"value="{{$sekolahs->jumlah_guru}}">
                            </div>

                              <div class="mb-3">
                              <input type="submit" value="Simpan"class="btn btn-primary">
                              </div>
@endsection