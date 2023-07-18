<section id="petSellers">
    <div id="petSellers__wrapper">
        <div class="petSellers__title">
            <div class="petSellers__title__first">
                Pet Sellers
            </div>
            <div class="petSellers__title__second">
                <div class="petSellers__title__second--text">
                    Proud to be part of
                </div>
                <a href="#">
                    <div class="petSellers__title__second--button">
                        View all our sellers
                        <img src="{{ Vite::asset('resources/assets/client/pages/homepage/list-pet/arrow_right.png') }}"
                             alt="arrow-right">
                    </div>
                </a>
            </div>
        </div>
        <div class="petSellers__content">
            @for ($i = 0; $i < 8; $i++)
                <div class="petSellers__proud">
                    <img src="{{ Vite::asset('resources/assets/client/pages/homepage/pet-sellers/sheba.png') }}"
                         alt="pet">
                </div>
            @endfor
        </div>
    </div>
</section>
