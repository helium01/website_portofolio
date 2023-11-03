<?php

namespace App\Http\Controllers;

use App\Models\kontak;
use App\Models\tentang;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();
        return view('admin.kontak.index', compact('kontaks'));
    }

    public function create()
    {
        $tentangs = Tentang::all();
    return view('admin.kontak.create', compact('tentangs'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_tentang' => 'required|integer',
            'no_wa' => 'required',
            'alamat' => 'required',
            'instagram' => 'required',
            'email' => 'required',
            'telp' => 'required',
        ]);

        Kontak::create($validatedData);

        return redirect(route('admin.kontak.index'))->with('success', 'Data kontak berhasil ditambahkan.');
    }

    public function edit(Kontak $kontak)
    {
        return view('admin.kontak.edit', compact('kontak'));
    }

    public function update(Request $request, Kontak $kontak)
    {
        $validatedData = $request->validate([
            'id_tentang' => 'required|integer',
            'no_wa' => 'required',
            'alamat' => 'required',
            'instagram' => 'required',
            'email' => 'required',
            'telp' => 'required',
        ]);

        $kontak->update($validatedData);

        return redirect(route('admin.kontak.index'))->with('success', 'Data kontak berhasil diperbarui.');
    }

    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect(route('admin.kontak.index'))->with('success', 'Data kontak berhasil dihapus.');
    }
}
