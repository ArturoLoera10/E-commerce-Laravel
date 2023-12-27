@extends('layouts.front')

@section('title')
    My Cart
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}">
                Home
            </a> /
            <a href="{{ url('wishlist') }}">
                Wishlist
            </a>
        </h6>
    </div>
</div>

<div class="container my-4">
    <div class="card shadow">
        <div class="card-body">
            @if ($wishlist->count() > 0)
                <div class="card-body">
                    @foreach ($wishlist as $item)
                        <div class="row product_data">
                            <div class="col-md-2 my-auto">
                                <img src="{{ asset('assets/uploads/products/'.$item->products->image ) }}" height="80px" width="80px" alt="Image">
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6>{{ $item->products->name }}</h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6>$ {{ $item->products->selling_price }}</h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                                <input type="hidden" class="qty-input" value="1">
                                @if($item->products->qty >= $item->prod_qty)
                                    <h6>En Stock</h6>
                                @else
                                    <h6>Agotado</h6>
                                @endif
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-success addToCartBtn"> <i class="fa fa-shopping-cart"></i> Agregar al carrito</button>
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-danger remove-wishlist-item"> <i class="fa fa-trash"></i> Eliminar</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            @else
                <h4>No hay productos en tu wishlist</h4>
            @endif
        </div>
    </div>
</div>
@endsection