<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

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
        //
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
        
      
            $user = User::find($id);
            if($user)
            {
                return view('user-profile.user-settings',compact('user'));
            }
            else
            {
                return back()->with('error','User not found.');
            }
    
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
            $data = $request->all();
            $rules = [
               
                'email' => 'required|email|unique:users,email,'.$request->id,
                'name' => 'required',
                'nohp' => 'required',
                'alamat' => 'required',
                'jenisKelamin' => 'required',
                'kodepos' => 'required',
            ];

            $customMessages = [
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'name.required' => 'Nama tidak boleh kosong',
                'nohp.required' => 'No HP tidak boleh kosong',
                'alamat.required' => 'Alamat tidak boleh kosong',
                'jenisKelamin.required' => 'Jenis Kelamin tidak boleh kosong',
                'kodepos.required' => 'Kode Pos tidak boleh kosong',
            ];

            $validator=Validator::make($data, $rules, $customMessages);

            if($validator->fails())
            {
                return Redirect::back()->withErrors($validator)->withInput();
            }else{

                        User::where('id', $request->id)->update([
                            'name' => $data['name'],
                            'email' => $data['email'],
                            'nohp' => $data['nohp'],
                            'alamat' => $data['alamat'],
                            'jenisKelamin' => $data['jenisKelamin'],
                            'kodepos' => $data['kodepos'],
                           
                        ]);
                        // return Redirect::back()->withSuccess('Data User berhasil diubah');
                        return back();
                    
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
        //
    }
}
