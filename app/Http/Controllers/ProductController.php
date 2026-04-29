<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dapatkan semua product
        $product = Product::latest()->paginate(10);
        //paparkan product di fail index
        return view('frontend.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'tajuk' => 'required|min:5',
            'keterangan' => 'required|min:10',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric'
        ]);
        //upload image
        $image = $request->file('gambar');
        $image->storeAs('product', $image->hashName(), 'public');
        //create product
        Product::create([
            'gambar' => $image->hashName(),
            'tajuk' => $request->tajuk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);
        //redirect to index
        return redirect()->route('product.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('frontend.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('frontend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //pengesahan borang
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'tajuk' => 'required|min:5',
            'keterangan' => 'required|min:10',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric'
        ]);

        // periksa jika gambar telah dimuatnaik
        if ($request->hasFile('gambar')) {
            //hapus gambar lama
            Storage::disk('public')->delete('product/' . $product->gambar);
            // muatnaik gambar baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('product', $gambar->hashName(), 'public');
            // kemas kini produk dengan gambar baru
            $product->update([
                'gambar' => $gambar->hashName(),
                'tajuk' => $request->tajuk,
                'keterangan' => $request->keterangan,
                'harga' => $request->harga,
                'stok' => $request->stok
            ]);
        } else {
            // kemas kini Produk tanpa gambar
            $product->update([
                'tajuk' => $request->tajuk,
                'keterangan' => $request->keterangan,
                'harga' => $request->harga,
                'stok' => $request->stok
            ]);
        }
        //redirect to index
        return redirect()->route('product.index')->with([
            'success' => 'Data Berhasil Diubah!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Storage::disk('public')->delete('product/' . $product->image);

        return redirect()->route('product.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
