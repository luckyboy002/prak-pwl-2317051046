<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List MK',
            'mks' => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required|numeric'
        ]);

        MataKuliah::create([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect('/matakuliah')->with('success', 'Data mata kuliah berhasil ditambahkan!');
    }

    public function edit($id)
{
    $mk = MataKuliah::findOrFail($id);
    return view('edit_mk', compact('mk'));
}

public function update(Request $request, $id)
{
    $mk = MataKuliah::findOrFail($id);
    $mk->update([
        'nama_mk' => $request->nama_mk,
        'sks' => $request->sks,
    ]);

    return redirect('/matakuliah')->with('success', 'Data berhasil diperbarui!');
}

public function destroy($id)
{
    $mk = MataKuliah::findOrFail($id);
    $mk->delete();

    return redirect('/matakuliah')->with('success', 'Data berhasil dihapus!');
}

}
