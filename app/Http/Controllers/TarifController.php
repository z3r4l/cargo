<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarifRequest;
use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.tarif.index',[
            'tarif' => Tarif::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tarif.create', [
            'tarif'     => new Tarif
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TarifRequest $request)
    {
        Tarif::create([
            'asal'          => $request->asal,
            'tujuan'        => $request->tujuan,
            'tarif'         => $request->tarif,
        ]);

        return redirect()->route('tarif.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function show(Tarif $tarif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarif $tarif)
    {
        return view('backend.tarif.edit',[
            'tarif' => $tarif
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function update(TarifRequest $request, Tarif $tarif)
    {
        $tarif->update([
            'asal'          => $request->asal,
            'tujuan'        => $request->tujuan,
            'tarif'         => $request->tarif,
        ]);

        return redirect()->route('tarif.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarif $tarif)
    {
        $tarif->delete();
        return redirect()->route('tarif.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
