<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('admin.order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function changeOrderStatus(Request $request)
    {
        $status = $request->get('status');
        $order_id = $request->get('order_id');

        $newOStatus = new OrderStatus();
        $newOStatus->date = date("Y-m-d H:i:s");
        $newOStatus->status = $status;
        $newOStatus->order_id = $order_id;
        $newOStatus->save();

        if (Auth::user()->role == 'admin') {
            return redirect()->route('order.show', $order_id)->with('status', 'Berhasil Mengubah Status Transaksi menjadi ' . $status);
        } else {
            // ISI KALO CUSTOMER SELESAI GIMANA
        }
    }

    public function cancelOrder(Request $request)
    {
        $order_id = $request->get('order_id');

        $order = Order::find($order_id);
        $productData = Product::find($order->product_id);
        $productData->stock = $productData->stock + $order->quantity;
        $productData->save();

        $newOStatus = new OrderStatus();
        $newOStatus->date = date("Y-m-d H:i:s");
        $newOStatus->status = 'Order dibatalkan';
        $newOStatus->order_id = $order_id;
        $newOStatus->save();


        return redirect()->route('order.show', $order_id)->with('status', 'Berhasil membatalkan transaksi ');
    }

    public function showCheckout()
    {
        $products = Product::all();
        return view('servicebuy', compact('products'));
    }

    public function showPayment(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'alamat' => 'required',
                'nomor' => 'required|numeric',
                'quantity' => 'required|numeric|min:1',
            ],
            ['nama.required' => 'Nama tidak boleh kosong.'],
            ['alamat.required' => 'Alamat tidak boleh kosong'],
            ['nomor.required' => 'Nomor telepon tidak boleh kosong'],
            ['quantity.required' => 'Jumlah yang ditulis tidak valid'],
            ['quantity.min:1' => 'Jumlah yang ditulis tidak valid'],
        );

        $name = $request->get('nama');
        $address = $request->get('alamat');
        $phoneNumber = $request->get('nomor');
        $productBuy = $request->get('maggotType');
        $quantity = $request->get('quantity');
        $price = $request->get('price');

        $product = Product::find($productBuy);
        $productName = $product->name;

        return view('servicepay', compact('name', 'address', 'phoneNumber', 'productBuy', 'productName', 'quantity', 'price'));
    }

    public function orderCreate(Request $request)
    {
        $request->validate(
            [
                'buktiPembayaran' => 'mimes:jpg,png|required|file'
            ],
            ['buktiPembayaran.mimes:jpg,png' => 'Format gambar yang diterima hanya .jpg dan .png.'],
            ['buktiPembayaran.required' => 'Upload bukti pembayaran.'],
        );

        $file = $request->file('buktiPembayaran');
        $imgFolder = 'assets/bukti-pembayaran';
        $imgName = $request->get('nama') . '.' . $file->getClientOriginalExtension();
        $file->move($imgFolder, $imgName);

        $productId = $request->get('productId');
        $product = Product::find($productId);

        if ($request->get('quantity') <= $product->stock) {
            $product->stock = $product->stock - $request->get('quantity');
            $product->save();

            $data = new Order();
            $data->name = $request->get('nama');
            $data->address = $request->get('alamat');
            $data->number_phone = $request->get('notelp');
            $data->quantity = $request->get('quantity');
            $data->total = $request->get('price');
            $data->date = date("Y-m-d H:i:s");
            $data->buyer_id = Auth::user()->buyer->id;
            $data->product_id = $productId;
            $data->img_url = 'assets/bukti-pembayaran/' . $imgName . '-bayar';

            $data->save();

            $orderStatus = new OrderStatus();
            $orderStatus->status = 'Konfirmasi Pembayaran';
            $orderStatus->date = date("Y-m-d H:i:s");
            $orderStatus->order_id = $data->id;

            $orderStatus->save();

            return redirect()->route('home');
        } else {
            return redirect()->route('checkout')->withErrors('error', 'Stok tidak mencukupi.');
        }
    }

    public function showHistoryOrder(){
        
    }
}
