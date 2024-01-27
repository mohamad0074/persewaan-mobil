<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Transaksi;
use App\Mobil;

class TransaksiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        
        // echo 'ad : '.auth()->user()->id;
        $transaksi = Transaksi::select('*')
                    ->join('mst_mobil', 'mst_mobil.mmid', '=', 'mst_transaksi.mmid')
                    ->where('mst_transaksi.id', '=' , auth()->user()->id)
                    ->get();
        
        return view('transaksi', compact('transaksi'));

    }

    public function tambah()
    {

        $list_mobil = Mobil::select('nama', 'mmid')
                    ->where('tersedia', '==', '1')
                    ->get();
        
        return view('transaksi_tambah', compact('list_mobil'));
        // return view('transaksi_tambah');
    }

    public function store(Request $request)
    {

        // $mtid = Transaksi::max('mtid');
        // $mtid = ($mtid) ? $mtid : 0;
        // $mtid = $mtid+1;
        // dd($mtid);
        // dd($request);
        // dd($imageName.' -- '.$imageName2.' -- '.$imageName3.' -- '.$imageName4);
        // if($ok){
        // dd(($request->is_kategori == 't') ? null : $request->kategori);
            $trans = Transaksi::create([
                'mmid' => $request->mmid,
                'id' => auth()->user()->id,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_akhir' => $request->tgl_akhir                
            ]);

            if($trans){
                $up_tersedia = DB::table('mst_mobil')
                        ->where('mmid', '=', $request->mmid)
                        ->update(array('tersedia' => '0'));
            }

            echo '<script type="text/javascript">
                    alert("Berhasil");
                </script>';
            return redirect('/transaksi');
        // }else{
        //     echo '<script type="text/javascript">
        //             alert("Simpan Gagal. Mohon hubungi teknisi terkait.");
        //         </script>';
        //     return view('pegawai_tambah');
        // }
    }

    public function edit($id)
    {

        $list_kat = Transaksi::select('nama', 'kategori')
                    ->where('kategori', '!=', '')
                    ->get();
        $pegawai = Transaksi::find($id);
        
        return view('pegawai_edit', compact('list_kat','pegawai'));
            // return view('pegawai_edit', ['pegawai' => $pegawai]);
    }

     public function update($id, Request $request)
    {

        // dd($request->mtid);
        $pegawai->nama = $request->nama;
        $pegawai->lokasi = ($ok) ? $imageName : $pegawai->lokasi;
        $pegawai->lokasi2 = ($ok2) ? $imageName2 : $pegawai->lokasi2;
        $pegawai->lokasi3 = ($ok3) ? $imageName3 : $pegawai->lokasi3;
        $pegawai->lokasi4 = ($ok4) ? $imageName4 : $pegawai->lokasi4;
        $pegawai->deskripsi = $request->deskripsi;
        $pegawai->harga = $request->harga;
        $pegawai->kategori = null; //($request->is_kategori == 't') ? $request->mtid : null;
        $pegawai->sub_kategori = $request->kategori; //($request->is_kategori == 't') ? null : $request->kategori;
        $pegawai->is_aktif = $request->is_aktif;
                
        $pegawai->save();
        return redirect('/admin/list_item');
    }


    public function retur()
    {

        $list_mobil = Mobil::select('nama', 'mmid')
                    ->where('tersedia', '==', '1')
                    ->get();
        
        return view('transaksi_tambah_retur', compact('list_mobil'));
        // return view('transaksi_tambah');
    }


     public function update_retur( Request $request)
    {

        $mmid = Mobil::select('mmid')
                ->where('no_plat','like',"%".$request->no_plat."%")
                ->limit(1)
                ->first();
// dd($mmid->mmid);
        if($mmid){
            $trans = DB::table('mst_transaksi')
                    ->where('mmid', '=', $mmid->mmid)
                    ->update(array('is_done' => '1'));
            
            if($trans){
                $up_tersedia = DB::table('mst_mobil')
                        ->where('mmid', '=', $mmid->mmid)

                        ->update(array('tersedia' => '1'));
            }            
        }


        return redirect('/transaksi');
    }

}
