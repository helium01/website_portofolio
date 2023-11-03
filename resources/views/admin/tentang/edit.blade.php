@extends('admin.layout.core')
@section('content')
<div class="templatemo-content-wrapper">
    <div class="templatemo-content">
      <ol class="breadcrumb">
        <li><a href="/home">Admin Panel</a></li>
        <li  class="active"><a href="#">Dashboard</a></li>
      </ol>
      <div class="container">
        <h2>Form Tentang</h2>
        <form action="{{ isset($tentang) ? route('admin.tentang.update', $tentang->id) : route('admin.tentang.store') }}" method="POST">
            @csrf
            @if(isset($tentang))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="nama_perusahaan" class="form-label">Nama Perusahaan:</label>
                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="{{ isset($tentang) ? $tentang->nama_perusahaan : '' }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ isset($tentang) ? $tentang->alamat : '' }}" required>
            </div>

            <div class="mb-3">
                <label for="visi" class="form-label">Visi:</label>
                <textarea class="form-control" id="visi" name="visi" rows="3" required>{{ isset($tentang) ? $tentang->visi : '' }}</textarea>
            </div>

            <div class="mb-3">
                <label for="misi" class="form-label">Misi:</label>
                <textarea class="form-control" id="misi" name="misi" rows="3" required>{{ isset($tentang) ? $tentang->misi : '' }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($tentang) ? 'Simpan Perubahan' : 'Simpan' }}</button>
        </form>
    </div>
      
       
         
    </div>
  </div>
</div>
@endsection