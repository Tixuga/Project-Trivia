<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="{{ url('/') }}">TRIVIA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <a href="{{ url('/home') }}">Account</a>
                        @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                        @endif
                        @endauth
                    </div>
                @endif
            </li>
        </ul>
    </div>
</nav>
