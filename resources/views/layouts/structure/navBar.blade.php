<div class="container">
    <nav class="main-nav">
        <div class="main-nav__logo">
            <a href="{{ url('/') }}">
                <img src="img/logo.png" alt="ablog_logo">
            </a>
        </div>
        <div class="main-nav__links">
            <ul>
                <li class={{ Request::is('trending') ? 'current-menu' : '' }}>
                    <a href={{ route('home.trending') }}>Trending</a>
                </li>
                <li class={{ Request::is('about') ? 'current-menu' : '' }}>
                    <a href={{ route('home.about') }}>About</a>
                </li>
                <li class={{ Request::is('explore') ? 'current-menu' : '' }}>
                    <a href={{ route('home.explore') }}>Explore</a>
                </li>
                <li class={{ Request::is('blogit') ? 'current-menu' : '' }}>
                    <a href={{ route('home.blogit') }}>Blogit</a>
                </li>
            </ul>
        </div>
        <div class="main-nav__cta-btn">
            @auth
                <a href="{{ route('show_user', auth()->user()->username) }}">
                    <img src="/img/icons/user.svg" alt="your personal page">
                </a>
            @else
                <a href={{ route('login') }}>
                    <button>Login</button>
                </a>
            @endauth

        </div>
    </nav>
</div>
