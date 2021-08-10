<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use katalog;
use beli;
use Illuminate\Support\Facades\Validator;

class MajooController extends Controller
{
    //DASHBOARD USER
    public function catalog()
    {
        $katalog = \App\Models\katalog::all();
        return view('catalog',['katalog' => $katalog]);
    }
    public function buy(Request $request)
    {
        return view('beli');
    }
    public function store(Request $request,$id_produk)
    {
        
        \App\Models\beli::create([
            'nama_pembeli' => $request->get('nama_pembeli'),
            'email_pembeli' => $request->get('nama_pembeli'),
            'tlp_pembeli' => $request->get('tlp_pembeli'),
            'alamat_pembeli' => $request->get('alamat_pembeli'),
            'jumlah_beli' => $request->get('jumlah_beli'),
            'id_produk' => $id_produk
        ]);
        
        
        
        return redirect('/catalog')->with('alert','Pesanan Berhasil Ditambah!');
    }

    public function editbeli($id_beli)
        {
            $beli = \App\Models\beli::find($id_beli);
            return view('editbeli',['beli' => $beli]);
        }
    public function updatebeli(Request $request,$id_beli)
    {
        $beli = \App\Models\beli::find($id_beli);
        $beli->update($request->all());

        return redirect('/pesanan')->with('alert','Data Berhasil Diedit');
    }

    //DASHBOARD ADMIN
    public function masterCatalog()
    {
        $katalog = \App\Models\katalog::all();
        return view('masterCatalog',['katalog' => $katalog]);
    }
    public function createCatalog(Request $request)
    {
        return view('addCatalog');
    }
    public function insertCatalog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|string|max:255|unique:katalog'
        ]);

        if($validator->fails()){
            return redirect('/master_catalog')->with('alert','Nama Produk Tidak Boleh sama');
        }
        // dd($request->all());
        \App\Models\katalog::create([
            'nama_produk' => $request->get('nama_produk'),
            'harga' => $request->get('harga'),
            'deskripsi_produk' => $request->get('deskripsi_produk'),
            'gambar_produk' => $request->file('gambar_produk')->getClientOriginalName()
        ]);
        
        
        $file = $request->file('gambar_produk');
        
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = asset('/assets/images');
        
        // upload file
		$file->move('assets/images',$file->getClientOriginalName());
        //echo $file;

        return redirect('/master_catalog')->with('alert','Catalog Berhasil Ditambah');
    }
    public function editCatalog($id_produk)
    {
        $katalog = \App\Models\katalog::find($id_produk);
        return view('editCatalog',['katalog' => $katalog]);
    }
    public function update(Request $request,$id_produk)
    {
        $katalog = \App\Models\katalog::find($id_produk);
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|string|max:255|unique:katalog'
        ]);

        if($validator->fail()){
            return redirect('/master_catalog')->with('alert','Nama Produk Tidak Boleh sama');
        }
        $katalog->update($request->all());

        if($request->hasFile('gambar_produk')){

            $request->file('gambar_produk')->move('assets/images',$request->file('gambar_produk')->getClientOriginalName());
            $katalog->gambar_produk = $request->file('gambar_produk')->getClientOriginalName();
            $katalog->save();

        }

        return redirect('/master_catalog')->with('alert','Data Berhasil Diedit');
    }
    public function delete($id_produk)
    {
        $katalog = \App\Models\katalog::where('id_produk',$id_produk)->first();

        if ($katalog != null) {
            $katalog->delete();
            return redirect('/master_catalog')->with('sukses','Data Berhasil Dihapus');
        }

        return redirect('/master_catalog')->with('sukses','Data Tidak Berhasil Dihapus');
    }

    //HISTORY PESANAN
    public function pesanan()
    {
        $beli = \App\Models\beli::all();
        return view('pesanan',['beli' => $beli]);
    }
}
