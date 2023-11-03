@extends('admin.layout.core')
@section('content')
<div class="templatemo-content-wrapper">
    <div class="templatemo-content">
      <ol class="breadcrumb">
        <li><a href="/home">Admin Panel</a></li>
        <li  class="active"><a href="#">Dashboard</a></li>
      </ol>
      <div class="container">
        <h2>Form Projek</h2>
        <form action="{{ isset($projek) ? route('admin.projek.update', $projek->id) : route('admin.projek.store') }}" method="POST">
            @csrf
            @if(isset($projek))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="nama_projek" class="form-label">Nama Projek:</label>
                <input type="text" class="form-control" id="nama_projek" name="nama_projek" value="{{ isset($projek) ? $projek->nama_projek : '' }}" required>
            </div>

            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis:</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="{{ isset($projek) ? $projek->jenis : '' }}" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan:</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required>{{ isset($projek) ? $projek->keterangan : '' }}</textarea>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ isset($projek) ? $projek->harga : '' }}" required>
            </div>

            <div class="mb-3">
                <label for="diskon" class="form-label">Diskon:</label>
                <input type="text" class="form-control" id="diskon" name="diskon" value="{{ isset($projek) ? $projek->diskon : '' }}" required>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($projek) ? 'Simpan Perubahan' : 'Simpan' }}</button>
        </form>
    </div>
      
       
         
    </div>
  </div>
</div>
@endsection