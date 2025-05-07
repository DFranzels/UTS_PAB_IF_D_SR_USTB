<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

// TODO: tuliskan code untuk controller buku anda disini
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Buku::all();

        return view('Buku.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Buku.form',['item' => new Buku()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Buku::create([
            'Judul' => $request ->input('Judul'),
            'Pengarang'=>$request->input('Pengarang'),
            'Tahun terbit'=>$request->input('Tahun terbit'),
            'Penerbit' => $request ->input('Penerbit'),
            'Kategori' => $request ->input('Kategori'),
        ]);
        return redirect(route("Buku.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        $item = Buku::findOrfail($buku);

        return view('Buku.show', ['item' => $item ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('buku.form', ['item' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $buku->update([
            'Judul' => $request->input('Judul'),
            'Pengarang' => $request->input('Pengarang'),
            'Tahun_terbit' => $request->input('Tahun terbit'),
            'Penerbit' => $request->input('Penerbit'),
            'Kategori' => $request->input('Kategori'),
        ]);
        return redirect(route("buku.index"))->with('success', 'Buku berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect(route("buku.index"))->with('success', 'Buku berhasil dihapus.');
    }
}
