<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('admin.layanan.index', compact('layanans'));
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_layanan' => 'required',
            'jenis' => 'required',
            'keterangan' => 'required',
        ]);

        Layanan::create($validatedData);

        return redirect(route('admin.layanan.index'))->with('success', 'Data layanan berhasil ditambahkan.');
    }

    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit', compact('layanan'));
    }

    public function update(Request $request, Layanan $layanan)
    {
        $validatedData = $request->validate([
            'nama_layanan' => 'required',
            'jenis' => 'required',
            'keterangan' => 'required',
        ]);

        $layanan->update($validatedData);

        return redirect(route('admin.layanan.index'))->with('success', 'Data layanan berhasil diperbarui.');
    }

    public function destroy(Layanan $layanan)
    {
        $layanan->delete();

        return redirect(route('admin.layanan.index'))->with('success', 'Data layanan berhasil dihapus.');
    }
}
