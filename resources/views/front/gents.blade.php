@extends('layouts.fronttemplate')
@section('content')
    <div class="container mt-2">
        <h2 class="text-lg-center">Kings Collection</h2>

        <div class="row">
            @forelse($products as $product)
                <div class="col-lg-3 mb-5">
                    <a href="{{ route('show',$product->id) }}">
                        <img src="{{ asset('upload/images/'.$product->image) }}" alt="" class="tumbnail">
                        <h4>{{ $product->name }}</h4>
                        <h5>{{$product->price}}$</h5>
                    </a>

                    <h3><a href="{{ route('cart.edit',$product->id) }}">Add to Cart</a></h3>
                </div>

            @empty
                <h3>No items</h3>
            @endforelse
        </div>


    </div>

@endsection


