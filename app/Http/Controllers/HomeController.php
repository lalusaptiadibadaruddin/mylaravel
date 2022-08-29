<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {     
        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get();

        // mengambil data dari table pegawai pagination
       // $pegawai = DB::table('pegawai')->paginate(10);



        $pegawai = DB::table('users')
        ->get();

 
        // mengirim data pegawai ke view index
        
        return view('home',['pegawai' => $pegawai]);

        //return view('home')->with('pegawai', $pegawai);
    }

     // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
 
        // memanggil view tambah
        return view('tambah');
 
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('user')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/home');
 
    }

        // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('users')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['pegawai' => $pegawai]);
 
    }

        // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('users')->where('id',$request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/home');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('users')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/home');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('users')
        ->where('pegawai_nama','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('home',['pegawai' => $pegawai]);
 
    }

}