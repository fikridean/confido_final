<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="./"><img class="d-inline-block" src="images/Logo Confido.png" width="200"
                alt="logo" /><span class="fw-bold text-primary ms-2"></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active ' : '' }}"><a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active ' : '' }}"><a href="/about"
                        class="nav-link">About</a></li>
                <li class="nav-item {{ Request::is('destination') ? 'active ' : '' }}"><a href="/destination"
                        class="nav-link">Destination</a></li>
                <li class="nav-item {{ Request::is('contact') ? 'active ' : '' }}"><a href="/contact"
                        class="nav-link">Contact</a></li>
                @auth
                    <li class="nav-item {{ Request::is('dashboard') ? 'active ' : '' }}"><a href="/dashboard"
                            class="nav-link">Dashboard</a></li>
                @else
                    <li class="nav-item {{ Request::is('register') ? 'active ' : '' }}"><a href="/register"
                            class="nav-link">Register</a></li>
                    <li class="nav-item {{ Request::is('login') ? 'active ' : '' }}"><a href="/login"
                            class="nav-link">Login</a></li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
