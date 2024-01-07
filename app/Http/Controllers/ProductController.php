<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::latest()->paginate(10);
        
        $breadcrumbsItems = [
            'name' => 'Product',
            'url' => '/product',
            'active' => true
        ];
    
        $icon = '<iconify-icon icon="gridicons:product"></iconify-icon>';

        return view('products.index', [
            'pageTitle' => 'Daftar Produk',
            'icon' => $icon,
            'product' => $product, // Menambahkan produk ke array data yang dikirim ke view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.tambah', [
            'pageTitle' => 'Tambah Produk',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $fotoName = $foto->hashName();
        $foto->storeAs('public/images/produk', $fotoName);
        $product = product::create([
            'name' => $request->name,
            'foto' => $fotoName,
            'suhu' => $request->suhu,
            'category' => $request->category,
            'price' => $request->price
        ]);

        if ($product) {
            return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan!');
        } else {
            return redirect()->route('product.index')->with('error', 'Produk gagal ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('products.update', [
            'pageTitle' => 'Update Produk',
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        if ($request->hasFile('foto')) {
            // Delete the old file
            Storage::disk('local')->delete('public/images/produk/'. $product->foto);
        
            // Process the new file
            $foto = $request->file('foto');
            $fotoName = $foto->hashName();
            $foto->storeAs('public/images/produk', $fotoName);
        
            // Update product data including new file name
            $product->update([
                'name' => $request->name,
                'foto' => $fotoName,
                'suhu' => $request->suhu,
                'category' => $request->category,
                'price' => $request->price
            ]);
        } else {
            // Update product data without changing the file
            $product->update([
                'name' => $request->name,
                'suhu' => $request->suhu,
                'category' => $request->category,
                'price' => $request->price
            ]);
        }
        
        if ($product) {
            return redirect()->route('product.index')->with('success', 'Produk berhasil di Update!');
        } else {
            return redirect()->route('product.index')->with('error', 'Produk gagal di Update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
        if ($product) {
            return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus!');
        } else {
            return redirect()->route('product.index')->with('error', 'Produk gagal dihapus!');
        }
    }
}
