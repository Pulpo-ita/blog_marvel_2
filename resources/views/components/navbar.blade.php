<nav id="#navbar" class="navbar navbar-expand-md navbar-light fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/img/logo.png" alt="" class="w-25">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item font  font-large"><a class="nav-link js-scroll-trigger font-white" href="">Contatti</a></li>
                
                @guest
                @if (Route::has('login'))
                <li class="nav-item ">
                    <a class="nav-link font font-large font-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif
                
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link font font-large font-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item font font-large"><a class="nav-link js-scroll-trigger font-white" href="{{route('post.create')}}">Inserisci Post</a></li>
                <li class="nav-item dropdown">
                    
                    <a id="navbarDropdown" class="nav-link dropdown-toggle font font-large font-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item font font-large" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            
            @endguest
        </ul>
    </div>
</div>
</nav>
