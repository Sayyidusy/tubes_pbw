<?php

namespace App\Http\Controllers\Admin;

use App\Models\DetailServis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class AdminDetailServisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.detail-servis.index');
    }
    public function getAllDetailServis()
    {
        $detailServis = DB::table('detail_servis')
            ->select(
                'id as id',
                'namaServis as namaServis',
                'deskripsiServis as deskripsiServis',
                'poinServis as poinServis',
                'hargaServis as hargaServis'
                )
            ->orderBy('id', 'asc')
            ->get();

            // return DataTables::of($detailServis)->make(true);

            

            return DataTables::of($detailServis)
            ->addColumn('action', function($detailServis) {
                return view('admin.detail-servis._aksi')->with('detailServis', $detailServis);
            })
           
            ->make(true);
            
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'namaServis'      => ['required', 'string', 'max:255'],
            'deskripsiServis'     => ['required', 'string', 'max:255'],
            'poinServis'  => ['required', 'string', 'max:255'],
            'hargaServis' => ['required', 'string', 'max:255'],
            
        ],
        [
            'namaServis.required'     => 'NamaServis harus diisi',
            'deskripsiServis.required'    => 'deskripsi harus diisi',
            'poinServis.required' => 'sub Deskripsi harus diisi',
            'hargaServis.required' => 'harga harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
          

            $detailServis = new DetailServis();
            $detailServis->namaServis = $request->namaServis;
            $detailServis->deskripsiServis = $request->deskripsiServis;
            $detailServis->poinServis = $request->poinServis;
            $detailServis->hargaServis = $request->hargaServis;
        
            $detailServis->save();

            return redirect()->back()->with('success', 'Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DetailServis::find($id);
        if($data)
        {
            return response()->json([
                'status'=>200,
                'data'=> $data,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No data Found.'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'namaServis'      => ['required', 'string'],
            'deskripsiServis'     => ['required', 'string'],
            'poinServis'  => ['required', 'string'],
            'hargaServis' => ['required', 'string'],
            
        ],
        [
            'namaServis.required'     => 'NamaServis harus diisi',
            'deskripsiServis.required'    => 'deskripsi harus diisi',
            'poinServis.required' => 'sub Deskripsi harus diisi',
            'hargaServis.required' => 'harga harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $detailServis = DetailServis::find($request->id);
            $detailServis->namaServis = $request->namaServis;
            $detailServis->deskripsiServis = $request->deskripsiServis;
            $detailServis->poinServis = $request->poinServis;
            $detailServis->hargaServis = $request->hargaServis;
            $detailServis->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detailServis = DetailServis::findOrFail($id);
        $detailServis->delete();
    }
}
