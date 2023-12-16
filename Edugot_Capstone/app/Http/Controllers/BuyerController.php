<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        //
    }

    public function registerBuyer(Request $request)
    {
        $request->validate(
            [
                'buyer-name' => 'required',
                'buyer-address' => 'required',
                'buyer-number-phone' => 'numeric|required',
                'buyer-email' => 'required|email|unique:users,email',
                'buyer-password' => 'required|min:8',
                'buyer-confirmation-password' => 'required|same:buyer-password',
            ],
        );

        User::create([
            'email' => $request->get('buyer-email'),
            'password' => Hash::make($request->get('buyer-password')),
            'role' => 'buyer'
        ]);

        $userId = User::select('id')->where('email', $request->get('buyer-email'))->first();
        $newBuyer = new Buyer();
        $newBuyer->name = $request->get('buyer-name');
        $newBuyer->address = $request->get('buyer-address');
        $newBuyer->number_phone = $request->get('buyer-number-phone');
        $newBuyer->user_id = $userId->id;
        $newBuyer->save();

        return redirect('login')->with('status', 'Pendaftaran berhasil, silahkan lakukan login.');
    }

    public function showProfile()
    {
        $buyer = Auth::user()->buyer;
        return view('profile', compact('buyer'));
    }
}
