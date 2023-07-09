<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnershipRequest;
use App\Models\partnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnership = partnership::latest()->get();
        return view('backend.partnership.index', compact('partnership'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partnership.create', [
            'partnership'   => new Partnership
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnershipRequest $request)
    {
        $file = $request->file('logo');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
      

        Partnership::create([
            'name'      => $request->name,
            'logo'      => $path
        ]);
        Storage::disk('local')->put('public/partnership/' . $path, file_get_contents($file)); 

        return redirect()->route('partnership.index')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function show(partnership $partnership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function edit(partnership $partnership)
    {
        return view('backend.partnership.edit', [
            'partnership'   => $partnership
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function update(PartnershipRequest $request, partnership $partnership)
    {
        if($request->hasFile('logo')){
            
            $file = $request->file('logo');
            $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
            Storage::delete('public/partnership/' . $partnership->logo);
            Storage::disk('local')->put('public/partnership/' . $path, file_get_contents($file)); 
        }else{
            $path       = $partnership->logo;
        }

        $partnership->update([
            'name'      => $request->name,
            'logo'      => $path
        ]);
        
        return redirect()->route('partnership.index')->with('success', 'Data Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partnership  $partnership
     * @return \Illuminate\Http\Response
     */
    public function destroy(partnership $partnership)
    {
        $partnership->delete();
        Storage::delete('public/partnership/' . $partnership->logo);

        return redirect()->back();
    }
}
