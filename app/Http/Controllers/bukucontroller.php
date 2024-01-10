<?php

namespace App\Http\Controllers;
use App\Models\buku;
use Illuminate\Http\Request;

class bukucontroller extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=buku::orderBy('id','desc')->paginate();
        return view('buku.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = [
            'id'=>$request->id,
            'judul'=>$request->judul,
            'penulis'=>$request->penulis,
            'tahun'=>$request->tahun,
            'isbn'=>$request->isbn
        ];
        buku::create($data);
        return redirect()->to('buku')->with('success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = buku::find($id);
        return view('buku.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        buku::destroy($id);
        return redirect('/buku')->with('success', 'Buku berhasil dihapus');
    }
}
