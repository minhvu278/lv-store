<header>
    <div id="header__wrapper">
        <div id="header__left">
            <a href="{{ route('index') }}">
                <img src="{{ Vite::asset('resources/assets/client/partials/header/logo.png') }}" alt="logo">
            </a>
        </div>
        <div id="header__nav">
            @foreach (__('client/partials/header.items') as $item)
                <div class="header__nav__item header__nav__item--hover">
                    <label for="header__nav-{{ $loop->index }}"
                           @class([
                               'header__nav__item__name',
                               'header__nav__item__name--active-route' => isActiveRouteForHeader($item)
                           ])
                    >
                        {{ $item['name'] ?? '' }}
                    </label>
                </div>
            @endforeach

        </div>
        <div id="header__right">
            <div class="header__right__search">
                <input type="text">
            </div>
            <div class="header__right__join">
                <button>Join the community</button>
            </div>
            <div class="header__right__vnd">
                <span>VND</span>
            </div>
        </div>
    </div>
</header>
