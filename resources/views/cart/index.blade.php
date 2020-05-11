@extends('layouts.fronttemplate')
@section('content')
    <div class="container">
        <h3>Shopping Cart</h3>
        @foreach ($cartItems as $item)
            <div class="row">

                <div class="col-lg-4">

                    <img src="{{asset('upload/images/'.$item->image)}}" alt="" class="tumbnail">
                </div>
                <div class="col-lg-8">
                    <form action="{{ route('cart.update',$item->rowId) }}" method="post">
                        {{ csrf_field() }}

                        {{ method_field('PUT') }}
                        <input type="text" value="{{$item->qty}}" name="qty" width="500px">
                        <button type="submit">Add</button>
                    </form>


                    Price - {{ $item->price}}

                </div>
            </div>
        @endforeach
        <div class="text-center">
            <h6>Count {{ Cart::count() }}</h6>
            <h6>Total Bill -: {{ Cart::total() }}$</h6>


        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="text-right">

                    <button class="btn btn-outline-primary"><a href="{{ route('checkout') }}">Checkout</a></button>
                </div>
            </div>
        </div>

    </div>
@endsection
