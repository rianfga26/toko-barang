<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class GeraiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gerai = User::all();

        return view('gerai' , compact('gerai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
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
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // $request->validate([
        //     'nama' => 'required|min:4|max:100',
        //     'email' => 'required|max:100|email|unique:users',
        //     'username' => 'required|max:100|unique:users',
        //     'password' => 'required|min:8',
        //     'deskripsi' => 'required',
        //     'logo' => 'required|mimes:jpeg,jpg,png|file',
        //     'code' => 'required|min:8|max:100'
        // ]);
        // dd($request->file('logo')->isValid());
        
        dd($request->file('logo'));

        if ($request->file('logo')->isValid()) {
            dd($request->logo->storeAs('images'));

            $user = User::find($id);
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->deskripsi = $request->deskripsi;
            $user->logo = $request->logo;
            $user->code = $request->code;
    
            if ($user->save()) {
                return 'Data has update!';
            }
        }
        return 'data gagal di update!';
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

    public function register(Request $request){

        $validator = $request->validate([
            'nama' => 'required|min:4|max:100',
            'email' => 'required|max:100|email|unique:users',
            'username' => 'required|max:100|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);
        
        
        User::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

        
        return 'OK!';
    }

}
