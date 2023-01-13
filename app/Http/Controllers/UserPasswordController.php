<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserPassword;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPassword  $userPassword
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPassword  $userPassword
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if($user)
        {
            return view('user-profile.ganti-password',compact('user'));
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
     * @param  \App\Models\UserPassword  $userPassword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $rules = [
            'passwordLama' => 'required',
            'passwordBaru' => 'required|between:6,20',
            'konfirmasiPassword' => 'required|same:passwordBaru',
            
        ];

        $customMessages = [
            'passwordLama.required' => 'Password lama belum diisi',
            'passwordBaru.required' => 'Password baru belum diisi',
            'passwordBaru.between' => 'Password baru harus antara 6-20 karakter',
            'konfirmasiPassword.required' => 'Konfirmasi password belum diisi',
            'konfirmasiPassword.same' => 'Konfirmasi password tidak sama dengan password baru'
        ];

        $validator=Validator::make($data, $rules, $customMessages);

        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }else{

            if(Hash::check($data['passwordLama'], Auth::user()->password)) {
                if(Hash::check($data['passwordBaru'], Auth::user()->password)){
                    return Redirect::back()->withErrors('Password baru anda sama dengan password lama');
                } else{
                    User::where('id', $request->id)->update([
                       
                        'password' => bcrypt($data['passwordBaru'])
                    ]);
                    return Redirect::back()->withSuccess('Data User berhasil diubah');
                }
            } else {
                return Redirect::back()->withErrors('Password lama salah');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPassword  $userPassword
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
