<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey ='id_anggota';
    protected $fillable = ['nama', 'alamat','no_telp','email'];
public function peminjaman(){
    return $this->hasMany(Peminjaman::class, 'id_anggota');
}
}
