<?php

namespace App\Http\Controllers;

use App\Models\ResepModel;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index()
    {
        $reseps = ResepModel::all();

        return view('resep.index', [
            'reseps' => $reseps,
            'title' => 'Daftar Resep Masakan',
            'activeMenu' => 'resep'
        ]);
    }

    public function create()
    {
        return view('resep.create', [
            'title' => 'Tambah Resep',
            'activeMenu' => 'resep'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string'
        ]);

        ResepModel::create($request->all());

        return redirect()->route('resep.index')->with('success', 'Resep berhasil ditambahkan');
    }

    public function show($id)
    {
        $resep = ResepModel::with(['bahan', 'langkah'])->findOrFail($id);

        return view('resep.show', [
            'title' => 'Detail Resep',
            'resep' => $resep,
        ]);
    }

    public function edit($id)
    {
        $resep = ResepModel::findOrFail($id);

        return view('resep.edit', [
            'resep' => $resep,
            'title' => 'Edit Resep',
            'activeMenu' => 'resep'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string'
        ]);

        $resep = ResepModel::findOrFail($id);
        $resep->update($request->all());

        return redirect()->route('resep.index')->with('success', 'Resep berhasil diperbarui');
    }

    public function destroy($id)
    {
        $resep = ResepModel::findOrFail($id);
        $resep->delete();

        return redirect()->route('resep.index')->with('success', 'Resep berhasil dihapus');
    }
}
