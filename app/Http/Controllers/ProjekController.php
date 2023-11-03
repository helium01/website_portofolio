<?php

namespace App\Http\Controllers;

use App\Models\projek;
use Illuminate\Http\Request;

class ProjekController extends Controller
{
    public function index()
    {
        $projeks = Projek::all();
        return view('admin.projek.index', compact('projeks'));
    }

    public function create()
    {
        return view('admin.projek.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_projek' => 'required',
            'jenis' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'diskon' => 'required',
        ]);

        Projek::create($validatedData);

        return redirect(route('admin.projek.index'))->with('success', 'Data projek berhasil ditambahkan.');
    }

    public function edit(Projek $projek)
    {
        return view('admin.projek.edit', compact('projek'));
    }

    public function update(Request $request, Projek $projek)
    {
        $validatedData = $request->validate([
            'nama_projek' => 'required',
            'jenis' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'diskon' => 'required',
        ]);

        $projek->update($validatedData);

        return redirect(route('admin.projek.index'))->with('success', 'Data projek berhasil diperbarui.');
    }

    public function destroy(Projek $projek)
    {
        $projek->delete();

        return redirect(route('admin.projek.index'))->with('success', 'Data projek berhasil dihapus.');
    }
}
