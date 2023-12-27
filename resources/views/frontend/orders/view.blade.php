@extends('layouts.front')

@section('title')
    My Orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Ver Compra
                            <a href="{{ url('my-orders') }}" class="btn btn-warning text-white float-end">Atrás</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Detalles de envío</h4>
                                <hr>
                                <label for="">Nombre</label>
                                <div class="border">{{ $orders->fname }}</div>
                                <label for="">Apellidos</label>
                                <div class="border">{{ $orders->lname }}</div>
                                <label for="">Email</label>
                                <div class="border">{{ $orders->email }}</div>
                                <label for="">Número de contacto</label>
                                <div class="border">{{ $orders->phone }}</div>
                                <label for="">Shipping Address</label>
                                <div class="border">
                                    {{ $orders->address1 }}, <br>
                                    {{ $orders->address2 }}, <br>
                                    {{ $orders->city }}, <br>
                                    {{ $orders->state }}, <br>
                                    {{ $orders->country }}
                                </div>
                                <label for="">Código ZIP</label>
                                <div class="border">{{ $orders->pincode }}</div>
                            </div>
                            <div class="col-md-6">
                                <h4>Detalles del pedido</h4>
                                <hr>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th>Total Price</th>
                                            <th>Imagen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px" alt="Imagen">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Total: <span class="float-end">{{ $orders->total_price }}</span> </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection