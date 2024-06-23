<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\MahasiswaUntag;

class SuratKeteranganController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function generateSurat(Request $request)
    {
        $request->validate([
            'nbi' => [
                'required',
                function ($attribute, $value, $fail) {
                    $mahasiswa = MahasiswaUntag::where('nbi', $value)->first();
                    if (!$mahasiswa) {
                        $fail('Mahasiswa tidak ditemukan.');
                    }
                }
            ]
        ]);
    
        $mahasiswa = MahasiswaUntag::where('nbi', $request->nbi)->first();
    
        try {
            $pdf = PDF::loadView('surat', compact('mahasiswa'));
            return $pdf->stream('surat_keterangan.pdf');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
}