<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Produk=Produk::all();
        return view('admin.product.index',['produk'=>$Produk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $produk = produk::find($id);
        return view('admin.product.edit',['produk'=>$produk]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $validasi = $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'harga_produk' => 'required',
            'kategori_produk' => 'required',
            'berat_produk' => 'required',
            'stok_produk' => 'required',
        ]);
        $produk = produk::find($id);
        $produk->update($validasi);
        Alert::success('Succes','Data Berhasil Di ubah');
        return redirect(route('product.index'));
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $produk = produk::find($id);
        $produk->delete();
        Alert::success('Succes','Data Berhasil Dihapus');
        return redirect(route('product.index'));
    }
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'harga_produk' => 'required',
            'kategori_produk' => 'required',
            'berat_produk' => 'required',
            'stok_produk' => 'required',
        ]);
        produk::create($validasi);
        Alert::success('Succes','Data Berhasil Di tambah');
        return redirect(route('product.index'));
    }

   
}
