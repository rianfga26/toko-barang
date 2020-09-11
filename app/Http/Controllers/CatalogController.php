<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Pesanan;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::all();
        
         return view('admin.catalog', compact('catalogs'));
    }

    public function guest(){
        $catalogs = Catalog::all();
        return view('catalog', compact('catalogs'));
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
        // $request->validate([
        //     'nama' => 'required|min:8|max:100',
        //     'deskripsi' => 'required|min:8',
        //     'stok' => 'required|integer|digits_between:2,4',
        //     'gambar' => 'mimes:jpeg,jpg,png|nullable|dimensions:min_width=100,min_height=200',
        //     'harga' => 'required|integer',
        //     'suka' => 'required|integer|max:1',
        // ]);
        
        
        $result = Catalog::create($request->only('nama', 'deskripsi', 'stok', 'gambar', 'harga', 'suka'));

        return 'OK!'.$result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Catalog::find($id);

        return response()->json(['data' => $result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
            'nama' => 'required|min:8|max:100',
            'deskripsi' => 'required|min:8',
            'stok' => 'required|integer|digits_between:2,4',
            'gambar' => 'mimes:jpeg,jpg,png|required|dimensions:min_width=100,min_height=200',
            'harga' => 'required|integer',
            'suka' => 'required|integer'
        ]);

        $user = Catalog::find($id);

        $user->nama = $request->nama;
        $user->deskripsi = $request->deskripsi;
        $user->stok = $request->stok;
        $user->gambar = $request->gambar;
        $user->harga = $request->harga;
        $user->suka = $request->suka;
        
        if ($user->save()) {
            return 'OK, Data Has Updates!';
        }

        return 'Data Gagal Updates!';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Catalog::find($id);

        if ($user->delete()) {
            return 'Code Has Delete!';
        }
        
    }

   
    public function orderstore(Request $req, $id){
        $catalogs = Catalog::find($id);
        
        if($req->stok > $catalogs->stok){
            dd("stok tidak tersedia!");
        }

        $pesanan = Pesanan::where('nomor_meja','=', $req->nomor_meja)->first();

        if ($pesanan === null) {
            for ($i=0; $i < $req->stok; $i++) { 
                Pesanan::create([
                    'catalog_id' => $catalogs->id,
                    'nama' => $req->nama,
                    'nomor_meja' => $req->nomor_meja
                ]);
            }
            
            dd('menuju checkout');
            // return redirect(route('checkout', ['id' => $id]));
        }else{
            dd('nama atau nomor meja sudah dipesan!');
        }
        


    }

    public function checkout(){
        return view('checkout');
    }


    public function cari(Request $request){
        
        $request->validate([
            'cari' => 'required',
        ]);
        
        $cari = $request->cari;
        
        $catalogs = Catalog::where('nama' , 'like', "%".$cari."%")->get();
        return view('catalog', compact('catalogs'));
    }
}
