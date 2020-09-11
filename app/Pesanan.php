<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = ['catalog_id', 'nama' , 'nomor_meja'];

    public function userPesanan(){
        return $this->belongsToMany(User::class ,'pesanan_details', 'pesanan_id', 'user_id');
    }

    public function catalog(){
        return $this->belongsTo(Catalog::class);
    }
}
