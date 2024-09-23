<header>
    <div class="container-fluid text-bg-dark d-flex">
        <div>
            <a href="{{ route('home') }}" target=""></a>
        </div>
        <div>
            <ul class="navbar">
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}">Registrati</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id ='navbarDropdown' class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria aria-labelledby="navbarDropdown">
                            <a href="{{ 'admin.home' }}">Home</a>
                            <a href="{{ 'logout' }}">Logout</a>
                        </div>
                    </li>

                @endguest
            </ul>

        </div>
    </div>
</header>
