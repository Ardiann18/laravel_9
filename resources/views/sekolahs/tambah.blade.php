@extends('home')
@section('student')

<h1>Ardian</h1>

<div class="mb-3">
  <form action="/sekolahs" method="post">
    @csrf
                              <label class="form-label">Nama Sekolah</label>
                              <input type="text" class="form-control" name="nama_sekolah" placeholder="Tulis Nama Sekolah">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Alamat Sekolah</label>
                              <input type="text" class="form-control" name="alamat" placeholder="Tulis Alamat Sekolah">

                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" class="form-control" name="jurusan" placeholder="Tulis Jurusan">

                            <div class="mb-3">
                              <label class="form-label">Jumlah Guru</label>
                              <input type="text" class="form-control" name="jumlah_guru" placeholder="Tulis Jumlah Guru">

                            <button class="btn btn-primary" value="Simpan">Simpan</button>
                            </form>
                            <div class="mb-3">
   <imput type="submit" value="simpan" class="btn btn-primary">
</div>                           
@endsection