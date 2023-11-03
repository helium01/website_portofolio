@extends('admin.layout.core')
@section('content')
<div class="templatemo-content-wrapper">
    <div class="templatemo-content">
      <ol class="breadcrumb">
        <li><a href="/home">Admin Panel</a></li>
        <li  class="active"><a href="#">Dashboard</a></li>
      </ol>
      <div class="container">
        <h2>Tambah Kontak Baru</h2>
        <form action="{{ route('admin.kontak.store') }}" method="POST" class="form">
            @csrf
            <div class="mb-3">
                <label for="id_tentang" class="form-label">ID Tentang:</label>
                <select name="id_tentang" class="form-control" required>
                    @foreach($tentangs as $tentang)
                        <option value="{{ $tentang->id }}">{{ $tentang->nama_perusahaan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="no_wa" class="form-label">No. WhatsApp:</label>
                <input type="text" name="no_wa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram:</label>
                <input type="text" name="instagram" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telp" class="form-label">Telepon:</label>
                <input type="text" name="telp" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>  
    </div>
  </div>
</div>
@endsection
