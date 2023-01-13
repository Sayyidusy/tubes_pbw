<?php

namespace App\Http\Controllers;

use App\Models\DetailServis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreDetailServisRequest;
use App\Http\Requests\UpdateDetailServisRequest;

class DetailServisController extends Controller
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

    public function detail($id)
    {
        
        $detail = DB::table('detail_servis')->select('namaServis','deskripsiServis','poinServis', 'hargaServis')->where('id', $id)->get()[0];
        // $detailComponent->price = parent::rupiah($detailComponent->price);

        // dd($columnNames);
        return view('detail-servis.detail', compact('detail'));
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
     * @param  \App\Http\Requests\StoreDetailServisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailServisRequest $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailServis  $detailServis
     * @return \Illuminate\Http\Response
     */
    public function show(DetailServis $detailServis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailServis  $detailServis
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailServis $detailServis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailServisRequest  $request
     * @param  \App\Models\DetailServis  $detailServis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailServisRequest $request, DetailServis $detailServis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailServis  $detailServis
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailServis $detailServis)
    {
        //
    }
}
