@extends('admin.layout.core')
@section('content')
<div class="templatemo-content-wrapper">
    <div class="templatemo-content">
      <ol class="breadcrumb">
        <li><a href="/home">Admin Panel</a></li>
        <li  class="active"><a href="#">Dashboard</a></li>
      </ol>
      <div class="container">
        <h2>Form Layanan</h2>
        <form action="{{ isset($layanan) ? route('admin.layanan.update', $layanan->id) : route('admin.layanan.store') }}" method="POST">
            @csrf
            @if(isset($layanan))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="nama_layanan" class="form-label">Nama Layanan:</label>
                <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" value="{{ isset($layanan) ? $layanan->nama_layanan : '' }}" required>
            </div>

            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis:</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="{{ isset($layanan) ? $layanan->jenis : '' }}" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan:</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required>{{ isset($layanan) ? $layanan->keterangan : '' }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($layanan) ? 'Simpan Perubahan' : 'Simpan' }}</button>
        </form>
    </div>
      
       
         
    </div>
  </div>
</div>
@endsection