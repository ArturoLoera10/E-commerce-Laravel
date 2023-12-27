<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Abarrotes la central</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('category') }}">Categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('cart') }}">Carrito
                        <span class="badge badge-pill bg-primary cart-count">0</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{ url('wishlist') }} ">Wishlist
                        <span class="badge badge-pill bg-success wishlist-count">0</span>
                    </a>
                </li>
            </ul>

            @if (Route::has('login'))
                @auth
                    <li class="nav-item dropdown" style="list-style: none; text-decoration: none;">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">Mi perfil</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href=" {{ url('my-orders') }} ">Mis compras</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>
                @else
                    <li class="nav-item" style="list-style: none; text-decoration: none;">
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"
                            style="text-decoration: none; color:black; margin-right: 8px;">Log in</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item" style="list-style: none;">
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
                                style="text-decoration: none; color:black;">Register</a>
                        </li>
                    @endif
                @endauth
            @endif

        </div>

    </div>
</nav>
