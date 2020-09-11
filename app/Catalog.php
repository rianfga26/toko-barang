<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = ['nama', 'deskripsi', 'stok', 'gambar', 'harga', 'suka'];

    public function pesanan(){
        return $this->hasMany(Pesanan::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
