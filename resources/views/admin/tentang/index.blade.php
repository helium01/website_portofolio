@extends('admin.layout.core')
@section('content')
<div class="templatemo-content-wrapper">
    <div class="templatemo-content">
      <ol class="breadcrumb">
        <li><a href="/home">Admin Panel</a></li>
        <li  class="active"><a href="#">Kontak</a></li>
      </ol>
      <h2>Data Tentang</h2>
        <a href="{{ route('admin.tentang.create') }}" class="btn btn-primary">Tambah Tentang Baru</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tentangs as $tentang)
                    <tr>
                        <td>{{ $tentang->id }}</td>
                        <td>{{ $tentang->nama_perusahaan }}</td>
                        <td>{{ $tentang->alamat }}</td>
                        <td>{{ $tentang->visi }}</td>
                        <td>{{ $tentang->misi }}</td>
                        <td>
                            <a href="{{ route('admin.tentang.edit', $tentang->id) }}" class="btn btn-sm btn-primary">Edit</a>
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