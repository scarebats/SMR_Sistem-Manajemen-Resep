<?php

namespace App\Http\Controllers;

use App\Models\LangkahModel;
use App\Models\ResepModel;
use Illuminate\Http\Request;

class LangkahController extends Controller
{
    public function index()
    {
        $langkahs = LangkahModel::with('resep')->get();

        return view('langkah.index', [
            'langkahs' => $langkahs,
            'title' => 'Daftar Langkah Memasak',
            'activeMenu' => 'langkah'
        ]);
    }

    public function create()
    {
        $reseps = ResepModel::all();

        return view('langkah.create', [
            'reseps' => $reseps,
            'title' => 'Tambah Langkah',
            'activeMenu' => 'langkah'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'resep_id' => 'required|exists:resep,id',
            'urutan' => 'required|integer|min:1',
            'deskripsi' => 'required|string'
        ]);

        LangkahModel::create($request->all());

        return redirect()->route('langkah.index')->with('success', 'Langkah berhasil ditambahkan');
    }

    public function show($id)
    {
        $langkah = LangkahModel::with('resep')->findOrFail($id);

        return view('langkah.show', [
            'langkah' => $langkah,
            'title' => 'Detail Langkah'
        ]);
    }

    public function edit($id)
    {
        $langkah = LangkahModel::findOrFail($id);
        $reseps = ResepModel::all();

        return view('langkah.edit', [
            'langkah' => $langkah,
            'reseps' => $reseps,
            'title' => 'Edit Langkah',
            'activeMenu' => 'langkah'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'resep_id' => 'required|exists:resep,id',
            'urutan' => 'required|integer|min:1',
            'deskripsi' => 'required|string'
        ]);

        $langkah = LangkahModel::findOrFail($id);
        $langkah->update($request->all());

        return redirect()->route('langkah.index')->with('success', 'Langkah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $langkah = LangkahModel::findOrFail($id);
        $langkah->delete();

        return redirect()->route('langkah.index')->with('success', 'Langkah berhasil dihapus');
    }
}
