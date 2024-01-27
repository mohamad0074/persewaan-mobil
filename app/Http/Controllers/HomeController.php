<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\User;
use App\Transaksi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

        // $list_mobil = Mobil::select('*')
        //             ->where('b.kategori', '>', 0)
        //             ->leftjoin(DB::raw('gambar b'), 'gambar.sub_kategori', '=', 'b.kategori')
        //             ->orderby('gambar.sub_kategori', 'asc')
        //             ->get();
        
        // return view('home', compact('home'));
    }
}
