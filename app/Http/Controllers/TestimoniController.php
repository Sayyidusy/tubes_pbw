<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestimoniRequest;
use App\Http\Requests\UpdateTestimoniRequest;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('detail-servis.detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestimoniRequest
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama'      => ['required', 'string', 'max:255'],
            'namaServis'     => ['required', 'string', 'max:255'],
            'tanggal'     => ['required', 'string', 'max:255'],
            'alamat'     => ['required', 'string'],
            'hargaServis'     => ['required', 'string', 'max:255'],
            
            
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong',
            // 'namaServis.required' => 'Nama Servis tidak boleh kosong',
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            
        ]);


        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
                $testimoni = new Testimoni();
                $testimoni->nama = $request->nama;
                $testimoni->namaServis = $request->namaServis;
                $testimoni->tanggal = $request->tanggal;
                $testimoni->alamat = $request->alamat;
                $testimoni->hargaServis = $request->hargaServis;
                $testimoni->save();
            }
            
            // return response()->json(['success' => "Berhasil menyimpan data"]);
            // return redirect()->route('servis.index');
            // return redirect('https://wa.me/6281212345678?text=Halo%20Admin,%20Saya%20ingin%20mengajukan%20servis%20'.$testimoni->namaServis. '%20saya');
            return redirect('https://wa.me/6281212345678?text=Halo%20EZPC%2C%20Saya%20'.$testimoni->nama. '%20ingin%20melakukan%20jasa%20layanan%20servis%20'.$testimoni->namaServis. '%20pada%20tanggal%20'.$testimoni->tanggal. '%20alamat%20saya%20di%20'.$testimoni->alamat. '%20ditunggu%20yaaa%20terimakasih%20');
            // return view('detail-servis.wa');
        }
        


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestimoniRequest  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimoniRequest $request, Testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        //
    }
}
