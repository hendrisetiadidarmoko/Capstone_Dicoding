@extends('mainpage')
@section('content')
<section>
    <div class="container">
        <div class="catalog">
            <div class=" profile-message p-3">
                <h1 class="text-decoration-underline fw-bold mb-3" id="content-edugot">Pesanan</h1>
                @foreach($orders as $order)
                @if($order->orderStatuss[count($order->orderStatuss)-1]->status === 'Order sedang dikirim')
                <div class="row my-2">
                    <form action="{{ route('completeOrder') }}" method="POST">
                    @csrf
                    <div class="col-12 col-xl-2 mb-3 mb-md-0">
                        <img src="{{ asset($order->product->url_img) }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-xl-10 d-flex">
                        <div class="d-flex mt-4 justify-content-between w-100">
                            <div>
                                <h3>{{ $order->product->name }}</h3>
                                <p class="mb-0"><span>{{ $order->quantity }}</span>ons</p>
                                <h4>Total Harga: Rp. {{ $order->price }} <span></span></h4>
                            </div>
                            <div class="">
                                <div class="d-flex  justify-content-end align-items-end text-ends">
                                    <p class="send-service p-2 mx-2 rounded fw-semibold">{{ $order->orderStatuss[count($order->orderStatuss)-1]->status }}</p>
                                </div>
                            </div>
                            <div>
                                <input type="hidden" name="status" value="Order telah diterima">
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <button type="submit">Selesaikan Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                @else
                <div class="row my-2">
                    <div class="col-12 col-xl-2 mb-3 mb-md-0">
                        <img src="{{ asset($order->product->url_img) }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-xl-10 d-flex">
                        <div class="d-flex mt-4 justify-content-between w-100">
                            <div>
                                <h3>{{ $order->product->name }}</h3>
                                <p class="mb-0"><span>{{ $order->quantity }}</span>ons</p>
                                <h4>Total Harga: Rp. {{ $order->total }} <span></span></h4>
                            </div>
                            <div class="">
                                <div class="d-flex  justify-content-end align-items-end text-ends">
                                    <p class="send-service p-2 mx-2 rounded fw-semibold">{{ $order->orderStatuss[count($order->orderStatuss)-1]->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
