<?php

namespace App\Http\Controllers;

use App\Models\produk;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $produk = produk::find($id);
        return view('admin.product.edit',['produk'=>$produk]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(){

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
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
        return view('admin.product.create');
    }

   
}
