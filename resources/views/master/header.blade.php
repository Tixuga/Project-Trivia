<nav class="navbar navbar-expand-lg navbar-dark">
    {{-- BRAND --}}
    <a class="navbar-brand" href="{{ url('/') }}">TRIVIA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            {{-- ACCOUNT LINK --}}
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

            {{-- DROPDOWN USER --}}
            <li class="nav-item">
                <!-- Authentication Links -->
                @if (Route::has('login'))
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    @endif
                </li>
                </div>
            </li>
        </ul>
    </div>
</nav>
