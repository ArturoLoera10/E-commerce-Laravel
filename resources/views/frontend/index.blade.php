@extends('layouts.front')

@section('title')
    Welcome to E-Shop
@endsection

@section('content')
    @include('layouts.inc.slider')

    <div class="container">

        <div id="table">
            <div id="centeralign">
                <h1 class="text-center">Experiencia y calidad en un solo lugar</h1>
            </div>
        </div>

    </div>

    <div class="py-5">
        <div class="container">
            <div class="row d-flex align-items-stretch">
                <div class="col-sm-4">
                    <div class="inner-div" style="border-radius: 5px; height: 150px;">
                        <h4 class="text-center textblack tamh4">Envios</h4>
                        <div class="loader"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="inner-div cont" style="border-radius: 5px;  height: 150px;">
                        <h4 class="text-center textblack tamh4">Diferentes metodos de pago</h4>
                        <div class="card2 bg-dark">
                            <div class="card__info">
                                <div class="card__logo">MasterCard</div>
                                <div class="card__chip">
                                    <svg class="card__chip-lines" role="img" width="20px" height="20px"
                                        viewBox="0 0 100 100" aria-label="Chip">
                                        <g opacity="0.8">
                                            <polyline points="0,50 35,50" fill="none" stroke="#000" stroke-width="2">
                                            </polyline>
                                            <polyline points="0,20 20,20 35,35" fill="none" stroke="#000"
                                                stroke-width="2"></polyline>
                                            <polyline points="50,0 50,35" fill="none" stroke="#000" stroke-width="2">
                                            </polyline>
                                            <polyline points="65,35 80,20 100,20" fill="none" stroke="#000"
                                                stroke-width="2"></polyline>
                                            <polyline points="100,50 65,50" fill="none" stroke="#000" stroke-width="2">
                                            </polyline>
                                            <polyline points="35,35 65,35 65,65 35,65 35,35" fill="none" stroke="#000"
                                                stroke-width="2"></polyline>
                                            <polyline points="0,80 20,80 35,65" fill="none" stroke="#000"
                                                stroke-width="2"></polyline>
                                            <polyline points="50,100 50,65" fill="none" stroke="#000" stroke-width="2">
                                            </polyline>
                                            <polyline points="65,65 80,80 100,80" fill="none" stroke="#000"
                                                stroke-width="2"></polyline>
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
                </div>
                <div class="col-sm-4">
                    <div class="inner-div cont" style="border-radius: 5px;  height: 150px;">
                        <h4 class="text-center textblack tamh4">Atención al cliente</h4>

                        <div class="gearbox">
                            <div class="overlay"></div>
                            <div class="gear one">
                                <div class="gear-inner">
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="gear two">
                                <div class="gear-inner">
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="gear three">
                                <div class="gear-inner">
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="gear four large">
                                <div class="gear-inner">
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="container">
            <div class="row">
                <h2>Categorias</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcategory)
                        <div class="item">
                            <a href="{{ url('view-category', $tcategory->slug) }}">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/category/' . $tcategory->image) }}" alt="imagen">
                                    <div class="card-body">
                                        <h5>{{ $tcategory->name }}</h5>
                                        <p>
                                            {{ $tcategory->description }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="container">
            <div class="row">
                <h2>Productos más Vendidos</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <a href="{{ url('view-product', $prod->slug) }}">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/products/' . $prod->image) }}" alt="imagen">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <span class="float-start">${{ $prod->selling_price }}</span>
                                        <span class="float-end"> <s>${{ $prod->original_price }}</s> </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!--
                                        <div class="col-sm-12 sli mt-3">
                                            <div class="slider">
                                                <div class="slide-track">
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                    <div class="slide">
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                                                            alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    -->
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
@endsection
