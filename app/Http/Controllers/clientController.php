<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layanan;
use App\Models\projek;
use Illuminate\Support\Facades\DB;


class clientController extends Controller
{
    public function dashboard(){
        $kontak = DB::table('kontaks')
            ->join('tentantangs', 'kontaks.id_tentang', '=', 'tentantangs.id')
            ->get();
        $projek = projek::all();
        if($projek->count() == 0){
            $jumlah_projek=null;
        }else{
            $jumlah_projek=$projek->count()-1;

        }
        $layanan = layanan::all();
        // dd($kontak[0]);
        return view('client.dashboard',compact('kontak','layanan','projek','jumlah_projek'));
    }
    public function kontak(){
        $kontak = DB::table('kontaks')
            ->join('tentantangs', 'kontaks.id_tentang', '=', 'tentantangs.id')
            ->get();
        $projek = projek::all();
        if($projek->count() == 0){
            $jumlah_projek=null;
        }else{
            $jumlah_projek=$projek->count()-1;

        }
        $layanan = layanan::all();
        // dd($kontak[0]);
        return view('client.kontak',compact('kontak','layanan','projek','jumlah_projek'));
    }
    public function layanan(){
        $kontak = DB::table('kontaks')
            ->join('tentantangs', 'kontaks.id_tentang', '=', 'tentantangs.id')
            ->get();
        $projek = projek::all();
        if($projek->count() == 0){
            $jumlah_projek=null;
        }else{
            $jumlah_projek=$projek->count()-1;

        }
        $layanan = layanan::all();
        // dd($kontak[0]);
        return view('client.layanan',compact('kontak','layanan','projek','jumlah_projek'));
    }
    public function projek(){
        $kontak = DB::table('kontaks')
            ->join('tentantangs', 'kontaks.id_tentang', '=', 'tentantangs.id')
            ->get();
        $projek = projek::all();
        if($projek->count() == 0){
            $jumlah_projek=null;
        }else{
            $jumlah_projek=$projek->count()-1;

        }
        $layanan = layanan::all();
        // dd($kontak[0]);
        return view('client.projek',compact('kontak','layanan','projek','jumlah_projek'));
    }
    public function tentang(){
        $kontak = DB::table('kontaks')
            ->join('tentantangs', 'kontaks.id_tentang', '=', 'tentantangs.id')
            ->get();
        $projek = projek::all();
        if($projek->count() == 0){
            $jumlah_projek=null;
        }else{
            $jumlah_projek=$projek->count()-1;

        }
        $layanan = layanan::all();
        // dd($kontak[0]);
        return view('client.tentang',compact('kontak','layanan','projek','jumlah_projek'));
    }
    public function cari(Request $request){
        $kontak = DB::table('kontaks')
            ->join('tentantangs', 'kontaks.id_tentang', '=', 'tentantangs.id')
            ->get();
            $projek = Projek::where('nama_projek', 'like', '%' . $request->cari . '%')
            // ->where('jenis', 'like', '%' . $request->cari . '%')
            // ->where('harga', 'like', '%' . $request->cari . '%')
            ->get();
            if($projek->count()==0){
                $projek = Projek::where('jenis', 'like', '%' . $request->cari . '%')
            // ->where('harga', 'like', '%' . $request->cari . '%')
            ->get();
            }
            if($projek->count()==0){
                $projek = Projek::where('harga', 'like', '%' . $request->cari . '%')
                ->get();
                
            }
            if($projek->count()==0){
                $projek = Projek::where('keterangan', 'like', '%' . $request->cari . '%')
                ->get();
            }
            if($projek->count()==0){
                $projek = Projek::where('harga', 'like', '%' . $request->cari . '%')
                ->get();
            }
        if($projek->count() == 0){
            $jumlah_projek=null;
        }else{
            $jumlah_projek=$projek->count()-1;

        }
        $layanan = layanan::all();
        return view('client.projek',compact('kontak','layanan','projek','jumlah_projek'));
    }
}
