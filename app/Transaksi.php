<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
	protected $primaryKey = 'mtid';
    protected $table = 'mst_transaksi';
    // protected $guarded = ['gambar'];
    protected $fillable = ['tgl_mulai', 'tgl_akhir', 'mmid', 'id', 'is_done'];



}
