@extends('admin.layout.core')
@section('content')
<div class="templatemo-content-wrapper">
    <div class="templatemo-content">
      <ol class="breadcrumb">
        <li><a href="/home">Admin Panel</a></li>
        <li  class="active"><a href="#">Kontak</a></li>
      </ol>
      <h2>Data Projek</h2>
      <a href="{{ route('admin.projek.create') }}" class="btn btn-primary">Tambah Projek Baru</a>
      <table class="table mt-3">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nama Projek</th>
                  <th>Jenis</th>
                  <th>Keterangan</th>
                  <th>Harga</th>
                  <th>Diskon</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($projeks as $projek)
                  <tr>
                      <td>{{ $projek->id }}</td>
                      <td>{{ $projek->nama_projek }}</td>
                      <td>{{ $projek->jenis }}</td>
                      <td>{{ $projek->keterangan }}</td>
                      <td>{{ $projek->harga }}</td>
                      <td>{{ $projek->diskon }}</td>
                      <td>
                          <a href="{{ route('admin.projek.edit', $projek->id) }}" class="btn btn-sm btn-primary">Edit</a>
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