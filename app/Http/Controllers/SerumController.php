<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serum;

use Illuminate\Support\Facades\Storage;
class SerumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serums = Serum::all();
        return view('serums.index', compact('serums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_serum' => 'required|unique:serums|max:6',
            'nama_serum' => 'required',
            'deskripsi' => 'nullable',
            'foto_serum' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $serum = new Serum($request->all());

        if ($request->hasFile('foto_serum')) {
            $serum->foto_serum = $request->file('foto_serum')->store('serum_images', 'public');
        }

        $serum->save();

        return redirect()->route('serums.index')->with('success', 'Serum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serum = Serum::findOrFail($kode_serum);
        return view('serums.show', compact('serum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serum = Serum::findOrFail($kode_serum);
        return view('serums.edit', compact('serum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_serum' => 'required',
            'deskripsi' => 'nullable',
            'foto_serum' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $serum = Serum::findOrFail($kode_serum);

        if ($request->hasFile('foto_serum')) {
            // Delete old image if exists
            if ($serum->foto_serum && Storage::disk('public')->exists($serum->foto_serum)) {
                Storage::disk('public')->delete($serum->foto_serum);
            }
            $serum->foto_serum = $request->file('foto_serum')->store('serum_images', 'public');
        }

        $serum->update($request->only('nama_serum', 'deskripsi'));

        return redirect()->route('serums.index')->with('success', 'Serum updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serum = Serum::findOrFail($kode_serum);

        // Delete image if exists
        if ($serum->foto_serum && Storage::disk('public')->exists($serum->foto_serum)) {
            Storage::disk('public')->delete($serum->foto_serum);
        }

        $serum->delete();

        return redirect()->route('serums.index')->with('success', 'Serum deleted successfully.');
    }
}
