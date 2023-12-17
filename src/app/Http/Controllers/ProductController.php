<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'product-url' => 'mimes:jpg,png|required|file',
                'product-name' => 'required',
                'product-price' => 'required|numeric',
                'product-description' => 'required'
            ],
            ['product-url.mimes:jpg,png' => 'Format gambar yang diterima hanya .jpg dan .png.'],
            ['product-url.required' => 'Upload gambar produk.'],
            ['product-name.required' => 'Nama produk tidak boleh kosong.'],
            ['product-price.required' => 'Harga produk tidak boleh kosong.'],
            ['product-description.required' => 'Deskripsi produk tidak boleh kosong'],
        );

        //upload gambar
        $file = $request->file('product-url');
        $imgFolder = 'assets/product-images';
        $imgName = $request->get('product-name') . '.' . $file->getClientOriginalExtension();
        $file->move($imgFolder, $imgName);

        $data = new Product();
        $data->name = $request->get('product-name');
        $data->price = $request->get('product-price');
        $data->stock = 0;
        $data->description = $request->get('product-description');
        $data->user_id = Auth::user()->id;

        $data->url_img = 'assets/product-images/' . $imgName;

        $data->save();

        return redirect()->route('product.index')->with('status', 'Berhasil menambahkan data produk baru.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate(
            [
                'product-url' => 'mimes:jpg,png|required|file',
                'product-name' => 'required',
                'product-price' => 'required|numeric',
                'product-description' => 'required',
            ],
            ['product-url.mimes:jpg,png' => 'Format gambar yang diterima hanya .jpg dan .png.'],
            ['product-name.required' => 'Nama produk tidak boleh kosong.'],
            ['product-price.required' => 'Harga produk tidak boleh kosong.'],
            ['product-description' => 'Deskripsi produk tidak boleh kosong'],
        );

        if ($request->file('product-url')) {
            $file = $request->file('product-url');
            $imgFolder = 'assets/product-images';
            $imgName = $request->get('product-name') . '.' . $file->getClientOriginalExtension();
            $file->move($imgFolder, $imgName);

            $product->url_img = 'assets/product-images/' . $imgName;
        }

        $product->name = $request->get('product-name');
        $product->price = $request->get('product-price');
        $product->description = $request->get('product-description');

        $product->save();

        return redirect()->route('product.index')->with('status', 'Data produk berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('product.index')->with('status', 'Data berhasil dihapus.');
            // dd($objCategory);
        } catch (\PDOException $ex) {
            $message = "Gagal untuk menghapus data, pastikan data yang dihapus tidak berelasi dengan data dari kolom lain.";
            return redirect()->route('product.index')->with('status', $message);
        }
    }

    public function showAddStock(Product $product)
    {
        return view('admin.product.addstock', compact('product'));
    }

    public function addStock(Request $request, Product $product)
    {
        $newStock = $product->stock + $request->get('product-stock');
        $product->stock =  $newStock;
        $product->save();
        
        return redirect()->route('product.index')->with('status', 'Berhasil menambahkan stok untuk produk '.$product->name.'.');
    }

    public function showProduct()
    {
        $products = Product::all();
        return view('service', compact('products'));
    }
}
