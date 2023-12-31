@extends('home')
@section('student')

<h1>Project_Ardian</h1>

<div class="card mt-3">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>Nama Sekolah</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Jumlah Guru</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($sekolahs as $sekolah)
            
            <td>{{ $sekolah -> nama_sekolah }}</td>
            <td>{{ $sekolah -> alamat }}</td>
            <td>{{ $sekolah -> jurusan }}</td>
            <td>{{ $sekolah -> jumlah_guru }}</td>
            <td>
            <a href="{{ route('sekolahs.edit', $sekolah->id) }}">Edit</a>
                <form action="{{route('sekolahs.destroy' , $sekolah->id)}}" method="post">
                @csrf 
                @method('DELETE')
                <input type="submit" value="hapus" class="btn btn-danger btn-sm">
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection