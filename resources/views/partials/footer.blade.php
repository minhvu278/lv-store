<footer>
    <div id="footer__wrapper">
        <div class="footer__wrapper__first">
            <div class="footer__wrapper__first__title">
                <span>Register now so you don't miss our programs</span>
            </div>
            <div class="footer__wrapper__first__subscribe">
                <div class="footer__wrapper__first__subscribe__input">
                    <input type="text">
                </div>
                <div class="footer__wrapper__first__subscribe__button">
                    <button>Subscribe Now</button>
                </div>
            </div>
        </div>
        <div class="footer__wrapper__second">
            <div class="footer__wrapper__second__nav">
                @foreach (__('client/partials/header.items') as $item)
                    <div class="footer__wrapper__second__nav__item">
                        {{ $item['name'] ?? '' }}
                    </div>
                @endforeach
            </div>
            <div class="footer__wrapper__second__social">
                <img src="{{ Vite::asset('resources/assets/client/partials/footer/facebook.png') }}" alt="facebook">
                <img src="{{ Vite::asset('resources/assets/client/partials/footer/twitter.png') }}" alt="twitter">
                <img src="{{ Vite::asset('resources/assets/client/partials/footer/instagram.png') }}" alt="instagram">
                <img src="{{ Vite::asset('resources/assets/client/partials/footer/youtube.png') }}" alt="youtube">
            </div>
        </div>
        <div class="footer__wrapper__third">
            <div class="footer__wrapper__third__copyright">
                © 2022 Monito. All rights reserved.
            </div>

            <div class="footer__wrapper__third__logo">
                <a href="{{ route('index') }}">
                    <img src="{{ Vite::asset('resources/assets/client/partials/header/logo.png') }}" alt="logo">
                </a>
            </div>

            <div class="footer__wrapper__third__policy">
                <a href="#">Terms of Service</a>
                <a href="#">Privacy Policy</a>
            </div>
        </div>

    </div>
</footer>
