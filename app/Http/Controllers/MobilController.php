<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mobil;
use App\User;

class MobilController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        
        $mobil = Mobil::select('*')
            ->get();
        
        return view('mobil', compact('mobil'));

    }

    public function cari(Request $request)
    {
        
        $merk = $request->merk;
        $model = $request->model;
        $tersedia = $request->tersedia;
     

        $mobil = Mobil::select('*')
                ->where('merk','like',"%".$merk."%")
                ->where('model','like',"%".$model."%")
                ->where('tersedia','=',$tersedia)
                ->orderby('merk', 'asc')
                ->get();
        
        return view('mobil',['mobil' => $mobil]);
     
    }


    public function tambah()
    {

        $mobil = Mobil::select('*')
                    ->get();
        
        return view('mobil_tambah', compact('mobil'));
        // return view('pegawai_tambah');
    }

    public function store(Request $request)
    {
        // dd($request);
        // $gid = Mobil::max('gid');
        // $gid = ($gid) ? $gid : 0;
        // $gid = $gid+1;
        // dd($gid);
        
            Mobil::create([
                'merk' => $request->merk,
                'model' => $request->model,
                'nama' => $request->nama,
                'no_plat' => $request->no_plat,
                'tarif' => $request->tarif,
                'tersedia' => $request->tersedia
                
            ]);
            echo '<script type="text/javascript">
                    alert("Berhasil simpan.");
                </script>';
            return redirect('/mobil');
        // }else{
        //     echo '<script type="text/javascript">
        //             alert("Simpan Gagal. Mohon hubungi teknisi terkait.");
        //         </script>';
        //     return view('pegawai_tambah');
        // }
    }

    public function edit($id)
    {

        $list_kat = Mobil::select('nama', 'kategori')
                    ->where('kategori', '!=', '')
                    ->get();
        $pegawai = Mobil::find($id);
        
        return view('pegawai_edit', compact('list_kat','pegawai'));
            // return view('pegawai_edit', ['pegawai' => $pegawai]);
    }

     public function update($id, Request $request)
    {
        $imageName = $imageName2 = $imageName3 = $imageName4 = null;
        $ok = $ok2 = $ok3 = $ok4 = false;
        
        
        $pegawai = Mobil::find($id);
                

        // dd($request->gid);
        $pegawai->nama = $request->nama;
        $pegawai->lokasi = ($ok) ? $imageName : $pegawai->lokasi;
        $pegawai->lokasi2 = ($ok2) ? $imageName2 : $pegawai->lokasi2;
        $pegawai->lokasi3 = ($ok3) ? $imageName3 : $pegawai->lokasi3;
        $pegawai->lokasi4 = ($ok4) ? $imageName4 : $pegawai->lokasi4;
        $pegawai->deskripsi = $request->deskripsi;
        $pegawai->harga = $request->harga;
        $pegawai->kategori = null; //($request->is_kategori == 't') ? $request->gid : null;
        $pegawai->sub_kategori = $request->kategori; //($request->is_kategori == 't') ? null : $request->kategori;
        $pegawai->is_aktif = $request->is_aktif;
                
        $pegawai->save();
        return redirect('/admin/list_item');
    }


     public function delete($id)
    {
            $pegawai = Mobil::find($id);
            $pegawai->delete();
            return redirect('/admin/list_item');
    }

}
