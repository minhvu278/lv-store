<section id="outProducts">
    <div id="outProducts__wrapper">
        <div class="outProducts__title">
            <div class="outProducts__title__first">
                Our Products
            </div>
            <div class="outProducts__title__second">
                <div class="outProducts__title__second--text">
                    Hard to choose right products for your pets?
                </div>
                <a href="#">
                    <div class="outProducts__title__second--button">
                        View more
                        <img src="{{ Vite::asset('resources/assets/client/pages/homepage/list-pet/arrow_right.png') }}" alt="arrow-right">
                    </div>
                </a>
            </div>
        </div>
        <div class="outProducts__content">
            @for ($i = 0; $i < 8; $i++)
                <div class="outProducts__card">
                    <img src="{{ Vite::asset('resources/assets/client/pages/homepage/out-products/thumb.png') }}" alt="pet">
                    <div class="outProducts__card__info">
                        <div class="outProducts__card__info__name">
                            Cute Pet Cat Warm Nest
                        </div>
                        <div class="outProducts__card__info__middle">
                            <div class="outProducts__card__info__middle--sex">
                                Product: Costume
                            </div>
                            <div class="outProducts__card__info__middle--size">
                                Size: 1.5kg
                            </div>
                        </div>
                        <div class="outProducts__card__info__price">
                            8.900.000 VND
                        </div>
                        <div class="outProducts__card__info__gift">
                            <div class="outProducts__card__info__gift--img">
                                <img src="{{ Vite::asset('resources/assets/client/pages/homepage/out-products/gift.png') }}" alt="gift">
                            </div>
                            <div class="outProducts__card__info__gift--text">
                                Free Toy & Free Shaker
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
