<nav>
    <ul>
        <li class="{{setActive('home')}}"><a href="{{route('home')}}">@lang('Home')</a></li>
        <li class="{{setActive('about') ? 'active' : ''}}"><a href="{{route('about')}}">@lang('About')</a></li>
        <li class="{{setActive('portfolio') ? 'active' : ''}}"><a href="{{route('portfolio')}}">@lang('Portfolio')</a></li>
        <li class="{{setActive('contact') ? 'active' : ''}}"><a href="{{route('contact')}}">@lang('Contact')</a></li>
    </ul>
</nav>