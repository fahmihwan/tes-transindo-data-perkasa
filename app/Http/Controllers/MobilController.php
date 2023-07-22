<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\User;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('pages.mobil.index', [
            'datas' => Mobil::with('user')->where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'merek' => 'required',
            'model' => 'required',
            'nomor_plat' => 'required',
            'tarif' => 'required',
        ]);
        $validated['user_id'] = auth()->user()->id;
        Mobil::create($validated);
        return redirect('/mobil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        //
    }
}
