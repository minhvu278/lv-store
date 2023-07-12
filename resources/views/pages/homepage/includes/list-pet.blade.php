<section id="listPet">
    <div id="listPet__wrapper">
        <div class="listPet__title">
            <div class="listPet__title__first">
                Whats new?
            </div>
            <div class="listPet__title__second">
                <div class="listPet__title__second--text">
                    Take a look at some of our pets
                </div>
                <a href="#">
                    <div class="listPet__title__second--button">
                        View more
                        <img src="{{ Vite::asset('resources/assets/client/pages/homepage/list-pet/arrow_right.png') }}" alt="arrow-right">
                    </div>
                </a>
            </div>
        </div>
        <div class="listPet__content">
            @for ($i = 0; $i < 8; $i++)
            <div class="listPet__card">
                <img src="{{ Vite::asset('resources/assets/client/pages/homepage/list-pet/alaskan.png') }}" alt="pet">
                <div class="listPet__card__info">
                    <div class="listPet__card__info__name">
                        MO512 - Alaskan Malamute Grey
                    </div>
                    <div class="listPet__card__info__middle">
                        <div class="listPet__card__info__middle--sex">
                            Gene: Male
                        </div>
                        <div class="listPet__card__info__middle--age">
                            Age: 2 months
                        </div>
                    </div>
                    <div class="listPet__card__info__price">
                        8.900.000 VND
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
