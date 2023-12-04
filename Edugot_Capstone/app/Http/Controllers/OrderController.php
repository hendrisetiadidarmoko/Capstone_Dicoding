<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderStatus;
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

    public function changeOrderStatus(Request $request){
        $status = $request->get('status');
        $order_id = $request->get('order_id');

        $newOStatus = new OrderStatus();
        $newOStatus->date = date("Y-m-d H:i:s");
        $newOStatus->status = $status;
        $newOStatus->order_id = $order_id;
        $newOStatus->save();

        if(Auth::user()->role=='admin'){
            return redirect()->route('order.show', $order_id)->with('status', 'Berhasil Mengubah Status Transaksi menjadi '.$status);
        }
        else{
            // ISI KALO CUSTOMER SELESAI GIMANA
        }
    }
}
