<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {

            $riwayats = Riwayat::all();
        } else {

            $riwayats = Riwayat::where('id_users', auth()->user()->id)->get();
        }
        return view('riwayat.index', compact('riwayats'));
    }

    public function show($id)
    {

        $riwayats = Riwayat::where('id', $id)->first();

        $cfResults = json_decode($riwayats->cfResults);
        $serumResults = json_decode($riwayats->serumResults);
        return view('riwayat.show', compact('riwayats', 'cfResults', 'serumResults'));
    }
}
