<?php

namespace App\Http\Controllers;

use App\Http\Requests\StrukturRequest;
use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturs = Struktur::latest()->get();
        return view('backend.struktur.index', compact('strukturs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.struktur.create', [
            'struktur' => new Struktur
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StrukturRequest $request)
    {

        
        $file = $request->file('image');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/struktur/' . $path, file_get_contents($file)); 

        $struktur = new Struktur;
        $struktur->name     = $request->name;
        $struktur->jabatan  = $request->jabatan;
        $struktur->image    = $path;
        $struktur->save();
        
        return redirect()->route('struktur.index')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function show(Struktur $struktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function edit(Struktur $struktur)
    {
        return view('backend.struktur.edit', compact('struktur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function update(StrukturRequest $request, Struktur $struktur)
    {
        if($request->hasFile('image')){
            
            $file = $request->file('image');
            $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
            Storage::delete('public/struktur/' . $struktur->image);
            Storage::disk('local')->put('public/struktur/' . $path, file_get_contents($file)); 
    
        }else{
            $path       = $struktur->image;
        }
        
        $struktur->update([
            'name'       => $request->name,
            'jabatan'    => $request->jabatan,
            'image'      => $path
        ]);
       
        
        return redirect()->route('struktur.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struktur $struktur)
    {
        Storage::delete('public/struktur/' . $struktur->image);
        $struktur->delete();

        return redirect()->back()->with('success', 'Data Berhasil Di Hapus');
    }
}
