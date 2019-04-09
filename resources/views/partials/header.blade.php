<nav class="nav topNav">
    <div class="container">
        <div class="row">
            <ul class="list-inline float-left">
                <li class="list-inline-item"> Address No 40 Baria Street 133/2 </li>
                <li class="list-inline-item"> | </li>
                <li class="list-inline-item"> Call Us (295) 146 8067 </li>
            </ul>
            <ul class="list-inline float-right ml-auto">
                <li class="list-inline-item nav-item dropdown"> 
                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> Languages </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">En</a>
                            <a class="dropdown-item" href="#">Jp</a>
                        </div>
                </li>
                <li class="list-inline-item"> | </li>
                @guest
                    <li class="list-inline-item"> <a href="{{ route('loginregister') }}">Login / Register</a> </li>
                @else
                    <a class="list-inline-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="container">
        <div class="row"><a href="{{ url('/') }}"><img src="{{ asset('images/logo21.png') }}" alt="logo"></a>
        </div>
    </div>
</header>