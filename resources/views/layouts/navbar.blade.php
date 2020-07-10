<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            {{-- <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28"> --}}
            <img src="{{ asset('img/logo_200x200.png') }}" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ route('dashboard') }}">
                Dashboard
            </a>

            <a class="navbar-item">
                Perfil
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Suporte
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        About
                    </a>
                    <a class="navbar-item">
                        Envie um email
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Relatar problema
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    @if (!Auth::check())
                    <a class="button is-primary" href="{{ route('register') }}">
                        <strong>Sign up</strong>
                    </a>
                    <a class="button is-light" href="{{ route('login') }}">
                        Log in
                    </a>
                    @else
                    <a class="button is-light" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Log out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
