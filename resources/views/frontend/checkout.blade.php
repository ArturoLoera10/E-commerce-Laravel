@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-3">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Detalles básicos</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control firstname" value="{{ Auth::user()->name }}" name="fname" placeholder="Ingrese su nombre">
                                    <span id="fname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Apellido</label>
                                    <input type="text" class="form-control lastname" value="{{ Auth::user()->lname }}" name="lname" placeholder="Ingrese su apellido">
                                    <span id="lname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control email" value="{{ Auth::user()->email }}" name="email" placeholder="Ingrese su correo electrónico">
                                    <span id="email_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Número de teléfono</label>
                                    <input type="text" class="form-control phone" value="{{ Auth::user()->phone }}" name="phone" placeholder="Ingrese su número de teléfono">
                                    <span id="phone_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="">Dirección 1</label>
                                    <input type="text" class="form-control address1" value="{{ Auth::user()->address1 }}" name="address1" placeholder="Ingrese su dirección 1">
                                    <span id="address1_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="">Dirección 2</label>
                                    <input type="text" class="form-control address2" value="{{ Auth::user()->address2 }}" name="address2" placeholder="Ingrese su dirección 2">
                                    <span id="address2_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Ciudad</label>
                                    <input type="text" class="form-control city" value="{{ Auth::user()->city }}" name="city" placeholder="Ingrese su ciudad">
                                    <span id="city_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Estado</label>
                                    <input type="text" class="form-control state" value="{{ Auth::user()->state }}" name="state" placeholder="Ingrese su estado">
                                    <span id="state_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">País</label>
                                    <input type="text" class="form-control country" value="{{ Auth::user()->country }}" name="country" placeholder="Ingrese su país">
                                    <span id="country_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Código Pin</label>
                                    <input type="text" class="form-control pincode" value="{{ Auth::user()->pincode }}" name="pincode" placeholder="Ingrese su código">
                                    <span id="pincode_error" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Detalles del pedido</h6>
                            <hr>
                            @if ($cartitems->count() >0)
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartitems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->prod_qty }}</td>
                                                <td>{{ $item->products->selling_price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <hr>

                                <div class="inner-div cont" style="border-radius: 5px;  height: 150px;">
                                    <h4 class="text-center textblack tamh4">Diferentes metodos de pago</h4>
                                    <div class="card2 bg-dark">
                                        <div class="card__info">
                                            <div class="card__logo">MasterCard</div>
                                            <div class="card__chip">
                                                <svg class="card__chip-lines" role="img" width="20px" height="20px" viewBox="0 0 100 100" aria-label="Chip">
                                                    <g opacity="0.8">
                                                        <polyline points="0,50 35,50" fill="none" stroke="#000" stroke-width="2"></polyline>
                                                        <polyline points="0,20 20,20 35,35" fill="none" stroke="#000" stroke-width="2"></polyline>
                                                        <polyline points="50,0 50,35" fill="none" stroke="#000" stroke-width="2"></polyline>
                                                        <polyline points="65,35 80,20 100,20" fill="none" stroke="#000" stroke-width="2"></polyline>
                                                        <polyline points="100,50 65,50" fill="none" stroke="#000" stroke-width="2"></polyline>
                                                        <polyline points="35,35 65,35 65,65 35,65 35,35" fill="none" stroke="#000" stroke-width="2"></polyline>
                                                        <polyline points="0,80 20,80 35,65" fill="none" stroke="#000" stroke-width="2"></polyline>
                                                        <polyline points="50,100 50,65" fill="none" stroke="#000" stroke-width="2"></polyline>
                                                        <polyline points="65,65 80,80 100,80" fill="none" stroke="#000" stroke-width="2"></polyline>
                                                    </g>
                                                </svg>
                                                <div class="card__chip-texture"></div>
                                            </div>
                                              <div class="card__type">debit</div>
                                              <div class="card__number">
                                                <span class="card__digit-group">0123</span>
                                                <span class="card__digit-group">4567</span>
                                                <span class="card__digit-group">8901</span>
                                                <span class="card__digit-group">2345</span>
                                            </div>
                                              <div class="card__valid-thru" aria-label="Valid thru">Valid<br>thru</div>
                                              <div class="card__exp-date"><time datetime="2038-01">01/38</time></div>
                                              <div class="card__name" aria-label="Dee Stroyer">Jk Huger</div>
                                              <div class="card__vendor" role="img" aria-labelledby="card-vendor">
                                              <span id="card-vendor" class="card__vendor-sr">Mastercard</span>
                                            </div>
                                        <div class="card__texture"></div>
                                                </div>
                                                    </div>
                                </div>

                                <p for="" class="text-center m-0 mt-3">Número de Tarjeta</p>
                                <input type="text" class="form-control address2" value="" name="address2" placeholder="Número de Tarjeta">

                                
                                <button type="submit" class="btn btn-primary w-100 mt-2">Pagar con Tarjeta</button>
                                <button type="submit" class="btn btn-primary w-100 mt-3">Pagar con Paypal</button>
                                <hr>
                                <button type="submit" class="btn btn-success w-100">Realizar pedido</button>
                            @else
                                <h4 class="text-center">No products in cart</h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection