@extends('admin.layout.core')
@section('content')
<div class="templatemo-content-wrapper">
    <div class="templatemo-content">
      <ol class="breadcrumb">
        <li><a href="/home">Admin Panel</a></li>
        <li class="active"><a href="#">Dashboard</a></li>
      </ol>
      <div class="container">
        <h2>Edit Kontak</h2>
        <form action="{{ route('admin.kontak.update', $kontak->id) }}" method="POST" class="form">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="id_tentang" class="form-label">ID Tentang:</label>
                <input type="number" name="id_tentang" value="{{ $kontak->id_tentang }}" class="form-control" required readonly>
            </div>

            <div class="mb-3">
                <label for="no_wa" class="form-label">No. WhatsApp:</label>
                <input type="text" name="no_wa" value="{{ $kontak->no_wa }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" name="alamat" value="{{ $kontak->alamat }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram:</label>
                <input type="text" name="instagram" value="{{ $kontak->instagram }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" value="{{ $kontak->email }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telp" class="form-label">Telepon:</label>
                <input type="text" name="telp" value="{{ $kontak->telp }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
  </div>
</div>
@endsection
