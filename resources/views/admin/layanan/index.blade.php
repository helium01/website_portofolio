@extends('admin.layout.core')
@section('content')
<div class="templatemo-content-wrapper">
    <div class="templatemo-content">
      <ol class="breadcrumb">
        <li><a href="/home">Admin Panel</a></li>
        <li  class="active"><a href="#">Kontak</a></li>
      </ol>
      <h2>Data Layanan</h2>
      <a href="{{ route('admin.layanan.create') }}" class="btn btn-primary">Tambah Layanan Baru</a>
      <table class="table mt-3">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nama Layanan</th>
                  <th>Jenis</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($layanans as $layanan)
                  <tr>
                      <td>{{ $layanan->id }}</td>
                      <td>{{ $layanan->nama_layanan }}</td>
                      <td>{{ $layanan->jenis }}</td>
                      <td>{{ $layanan->keterangan }}</td>
                      <td>
                          <a href="{{ route('admin.layanan.edit', $layanan->id) }}" class="btn btn-sm btn-primary">Edit</a>
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