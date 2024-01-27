<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
	protected $primaryKey = 'mmid';
    protected $table = 'mst_mobil';
    // protected $guarded = ['gambar'];
    protected $fillable = ['merk', 'model', 'nama', 'no_plat', 'tarif', 'tersedia'];



}
