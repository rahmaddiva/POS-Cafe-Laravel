<?php

namespace App\Http\Controllers;

use App\Models\MejaModel;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mejas = MejaModel::latest()->paginate(10);

        return view('meja.index', compact('mejas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_meja' => 'required|unique:mejas',
            'kapasitas' => 'required|integer|min:1',
            'status' => 'required|in:Kosong,Digunakan',
        ]);

        $data = $request->only(['nomor_meja', 'kapasitas', 'status']);
        MejaModel::create($data);

        return redirect()->route('meja.index')->with('success', 'Meja berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(MejaModel $meja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MejaModel $meja)
    {
        return view('meja.edit', compact('meja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MejaModel $meja)
    {
        $validate = $request->validate([
            'nomor_meja' => 'required|unique:mejas,nomor_meja,'.$meja->nomor_meja,
            'kapasitas' => 'required|integer|min:1',
            'status' => 'required|in:Kosong,Digunakan',
        ]);

        $meja->update($validate);

        return redirect()->route('meja.index')->with('success', 'Meja berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MejaModel $meja)
    {
        $meja->delete();

        return redirect()->route('meja.index')->with('success', 'Meja berhasil dihapus');
    }
}
