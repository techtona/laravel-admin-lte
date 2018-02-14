<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

	    return view('profile');
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
    	if ($request->password_baru != null){
		    $validator = Validator::make($request->all(), [
			    'nama_lengkap'  => 'required|max:255',
			    'email'         => 'required',
			    'tempat_lahir'  => 'required',
			    'tanggal_lahir' => 'required',
			    'password'      => 'required',
			    'password_baru' => 'required',
		    ]);
	    }else{
		    $validator = Validator::make($request->all(), [
			    'nama_lengkap'  => 'required|max:255',
			    'email'         => 'required',
			    'tempat_lahir'  => 'required',
			    'tanggal_lahir' => 'required',
		    ]);
	    }

	    if ($validator->fails()) {
		    return redirect()
			    ->back()
			    ->withErrors($validator)
			    ->withInput();
	    }


    }
}
