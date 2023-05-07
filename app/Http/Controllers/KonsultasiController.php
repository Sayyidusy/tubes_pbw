<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('servis.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'max:255'],
            'nohp'      => ['required', 'string', 'max:255'],
            'domisili'  => ['required', 'string', 'max:255'],
            'keluhan'   => ['required', 'string'],
            
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'nohp.required' => 'No Hp tidak boleh kosong',
            'domisili.required' => 'Domisili tidak boleh kosong',
            'keluhan.required' => 'Keluhan tidak boleh kosong',
        ]);

        
        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $konsultasi = new Konsultasi();
            $konsultasi->nama = $request->nama;
            $konsultasi->email = $request->email;
            $konsultasi->nohp = $request->nohp;
            $konsultasi->domisili = $request->domisili;
            $konsultasi->keluhan = $request->keluhan;
            $konsultasi->save();
            }
            
            return response()->json(['success' => "Berhasil menyimpan data"]);
            // return view('servis.script');
        }
        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function show(Konsultasi $konsultasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Konsultasi $konsultasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konsultasi $konsultasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konsultasi $konsultasi)
    {
        //
    }
}
