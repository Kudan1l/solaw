<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function PEMBUATANDOKUM()
    {
        return view('document.PEMBUATANDOKUM');
    }

    public function Gugatan()
    {
        return view('document.gugatan');
    }

    public function Kontrak()
    {
        return view('document.kontrak', );
    }

    public function Notaris()
    {
        return view('document.notaris');
    }

    public function SuratKuasa()
    {
        return view('document.suratKuasa');
    }

    public function Perjanjian()
    {
        return view('document.perjanjian');
    }

    public function Pengadilan()
    {
        return view('document.pengadilan');
    }

    public function buatSurat()
    {
        return view('document.buatSurat', ['jenis' => 'Surat Kontrak']);
    }
    public function buatKontrak()
    {
        return view('document.buatKontrak', );
    }

    public function buatKuasa()
    {
        return view('document.buatSuratKuasa');
    }

    public function buatNotaris()
    {
        return view('document.buatNotaris');
    }

    public function buatPerjanjian()
    {
        return view('document.buatPerjanjian');
    }

    public function buatPengadilan()
    {
        return view('document.buatPengadilan');
    }

    public function buatGugatan()
    {
        return view('document.buatGugatan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Jenis_Surat' => 'required',
            'Permasalahan' => 'string|required',
            'Permintaan' => 'string|required',
        ]);

        Document::create($request->all());

        return redirect()->route('PEMBUATANDOKUM')->with('success', 'Task Sucessfully
added !');
    }


    

}
