<?php

namespace App\Http\Controllers;

use App\Models\tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $tentangs = Tentang::all();
        return view('admin.tentang.index', compact('tentangs'));
    }

    public function create()
    {
        return view('admin.tentang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        Tentang::create($validatedData);

        return redirect(route('admin.tentang.index'))->with('success', 'Data tentang berhasil ditambahkan.');
    }

    public function edit(Tentang $tentang)
    {
        return view('admin.tentang.edit', compact('tentang'));
    }

    public function update(Request $request, Tentang $tentang)
    {
        $validatedData = $request->validate([
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $tentang->update($validatedData);

        return redirect(route('admin.tentang.index'))->with('success', 'Data tentang berhasil diperbarui.');
    }

    public function destroy(Tentang $tentang)
    {
        $tentang->delete();

        return redirect(route('admin.tentang.index'))->with('success', 'Data tentang berhasil dihapus.');
    }
}
