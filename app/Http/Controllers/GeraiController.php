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
        $users = auth()->user($id);
        return view('admin.profile', compact('users'));
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
        $request->validate([
            'nama' => 'required|min:4|max:100',
            'email' => 'required|email',
            'username' => 'required|max:20',
            'new_password' => 'nullable|min:8',
            'password_now' => 'nullable|min:8',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'buka' => 'required',
            'tutup' => 'required',
            'haribuka' => 'required',
            'methode' => 'required',
            'logo' => 'mimes:jpeg,jpg,png',
            'code' => 'required|max:6'
        ]);
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('logo');
        
        if ($file) {
            $namaFile= $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'assets/img/avatar';
            //upload file
            $file->move($tujuan_upload,date('His').$namaFile);

            $user = User::find($id);
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->alamat = $request->alamat;
            $user->password = $request->password_now === $user->password ? bcrypt($request->new_password) : $user->password;
            $user->buka = $request->buka;
            $user->tutup = $request->tutup;
            $user->haribuka = $request->haribuka;
            $user->pembayaran = $request->methode;
            $user->code = $request->code;
            $user->deskripsi = $request->deskripsi;
            $user->logo = date('His').$namaFile;

            if($user->save()){
                return redirect()->back()->with('status', 'Edit Profile Berhasil!');   
            }

            }else{
                $user = User::find($id);
                $user->nama = $request->nama;
                $user->email = $request->email;
                $user->username = $request->username;
                $user->alamat = $request->alamat;
                $user->password = $request->password_now === $user->password ? bcrypt($request->new_password) : $user->password;
                $user->buka = $request->buka;
                $user->tutup = $request->tutup;
                $user->haribuka = $request->haribuka;
                $user->pembayaran = $request->methode;
                $user->code = $request->code;
                $user->deskripsi = $request->deskripsi;
                $user->logo = null;

                if($user->save()){
                    return redirect()->back()->with('status', 'Edit Profile Berhasil!');   
                }
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

        
        return redirect()->route('login')->with('status', 'Registrasi Berhasil Silahkan Login');
    }

}
