<?php
// app/Http/Controllers/CFController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Pengetahuan;
use App\Models\Serum;

class CFController extends Controller
{
    public function showForm()
    {
        $gejala = Gejala::all();
        return view('diagnosa.cf_form', compact('gejala'));
    }

    public function calculateCF(Request $request)
    {
        $userInput = $request->input('gejala');
        $cfResults = [];
        $serums = Serum::all();
        $serumResults = [];

        foreach ($serums as $serum) {
            $cf_serum = 0;
            $iterasiCF = [];

            $pengetahuans = Pengetahuan::where('kode_serum', $serum->kode_serum)->get();
            foreach ($pengetahuans as $pengetahuan) {
                $kodeGejala = $pengetahuan->kode_gejala;
                if (isset($userInput[$kodeGejala]) && $userInput[$kodeGejala] != 0) {
                    $userCF = $userInput[$kodeGejala];
                    $cf_pengetahuan = $pengetahuan->nilai_cf;
                    $cf = $userCF * $cf_pengetahuan;
                    $cfResults[$kodeGejala] = $cf;

                    // Simpan iterasi CF untuk ditampilkan
                    $iterasiCF[] = [
                        'kode_gejala' => $kodeGejala,
                        'nama_gejala' => $pengetahuan->gejala->nama_gejala,
                        'cf_user' => $userCF,
                        'cf_pengetahuan' => $cf_pengetahuan,
                        'cf_hasil' => $cf,
                    ];

                    // Hitung CF serum menggunakan rumus CF_kombinasi
                    $cf_serum += $cf * (1 - abs($cf_serum));
                }
            }

            // Tambahkan hasil per serum
            $serumResults[] = [
                'kode_serum' => $serum->kode_serum,
                'nama_serum' => $serum->nama_serum,
                'persentase' => $cf_serum,
                'iterasi_cf' => $iterasiCF,
            ];
        }

        return view('diagnosa.cf_result', compact('cfResults', 'serumResults'));
    }
}
