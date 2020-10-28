<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">
            {{config('app.name')}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarProjects" aria-controls="navbarProjects" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarProjects">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link {{setActive('home')}}" href="{{route('home')}}">@lang('Home')</a></li>
                <li class="nav-item"><a class="nav-link {{setActive('about') ? 'active' : ''}}" href="{{route('about')}}">@lang('About')</a></li>
                <li class="nav-item"><a class="nav-link {{setActive('projects.*') ? 'active' : ''}}" href="{{route('projects.index')}}">@lang('Projects')</a></li>
                <li class="nav-item"><a class="nav-link {{setActive('contact') ? 'active' : ''}}" href="{{route('contact')}}">@lang('Contact')</a></li>
                @guest
                    <li class="nav-item"><a class="nav-link {{setActive('login') ? 'active' : ''}}" href="{{route('login')}}">Iniciar Sesión</a></li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>
                    </li>
                @endguest
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</nav>