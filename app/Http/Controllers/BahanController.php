<?php

namespace App\Http\Controllers;

use App\Models\BahanModel;
use App\Models\ResepModel;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function index()
    {
        $bahans = BahanModel::with('resep')->get();

        return view('bahan.index', [
            'bahans' => $bahans,
            'title' => 'Daftar Bahan Masakan',
            'activeMenu' => 'bahan'
        ]);
    }

    public function create()
    {
        $reseps = ResepModel::all();

        return view('bahan.create', [
            'reseps' => $reseps,
            'title' => 'Tambah Bahan',
            'activeMenu' => 'bahan'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'resep_id' => 'required|exists:resep,id',
            'nama_bahan' => 'required|string|max:255',
            'jumlah' => 'nullable|string|max:100'
        ]);

        BahanModel::create($request->all());

        return redirect()->route('bahan.index')->with('success', 'Bahan berhasil ditambahkan');
    }

    public function show($id)
    {
        $bahan = BahanModel::with('resep')->findOrFail($id);

        return view('bahan.show', [
            'bahan' => $bahan,
            'title' => 'Detail Bahan'
        ]);
    }

    public function edit($id)
    {
        $bahan = BahanModel::findOrFail($id);
        $reseps = ResepModel::all();

        return view('bahan.edit', [
            'bahan' => $bahan,
            'reseps' => $reseps,
            'title' => 'Edit Bahan',
            'activeMenu' => 'bahan'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'resep_id' => 'required|exists:resep,id',
            'nama_bahan' => 'required|string|max:255',
            'jumlah' => 'nullable|string|max:100'
        ]);

        $bahan = BahanModel::findOrFail($id);
        $bahan->update($request->all());

        return redirect()->route('bahan.index')->with('success', 'Bahan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $bahan = BahanModel::findOrFail($id);
        $bahan->delete();

        return redirect()->route('bahan.index')->with('success', 'Bahan berhasil dihapus');
    }
}
