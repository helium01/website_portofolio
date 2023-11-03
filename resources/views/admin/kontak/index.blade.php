@extends('admin.layout.core')
@section('content')
<div class="templatemo-content-wrapper">
    <div class="templatemo-content">
      <ol class="breadcrumb">
        <li><a href="/home">Admin Panel</a></li>
        <li  class="active"><a href="#">Kontak</a></li>
      </ol>
      <h1>Kontak</h1>
      <a href="{{ route('admin.kontak.create') }}" class="btn btn-primary">Tambah Kontak Baru</a>

      <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Tentang</th>
                <th>No. WhatsApp</th>
                <th>Alamat</th>
                <th>Instagram</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kontaks as $kontak)
                <tr>
                    <td>{{ $kontak->id }}</td>
                    <td>{{ $kontak->id_tentang }}</td>
                    <td>{{ $kontak->no_wa }}</td>
                    <td>{{ $kontak->alamat }}</td>
                    <td>{{ $kontak->instagram }}</td>
                    <td>{{ $kontak->email }}</td>
                    <td>{{ $kontak->telp }}</td>
                    <td>
                        <a href="{{ route('admin.kontak.edit', $kontak->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <!-- Tambahkan formulir untuk menghapus data jika diperlukan -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

      
       
         
    </div>
  </div>
</div>
@endsection