<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelKategori extends Model
{
    protected $primaryKey = 'id_kategori';
    protected $fillabele = ['nama_kategori', 'deskripsi'];
    public function buku ()
     {

        return $this->hasMany(Buku::class, 'kategori');
    }
   
}
