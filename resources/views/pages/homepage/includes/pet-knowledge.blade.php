<section id="petKnowledge">
    <div id="petKnowledge__wrapper">
        <div class="petKnowledge__title">
            <div class="petKnowledge__title__first">
                You already know ?
            </div>
            <div class="petKnowledge__title__second">
                <div class="petKnowledge__title__second--text">
                    Useful pet knowledge
                </div>
                <a href="#">
                    <div class="petKnowledge__title__second--button">
                        View more
                        <img src="{{ Vite::asset('resources/assets/client/pages/homepage/list-pet/arrow_right.png') }}" alt="arrow-right">
                    </div>
                </a>
            </div>
        </div>
        <div class="petKnowledge__content">
            @for ($i = 0; $i < 6; $i++)
                <div class="petKnowledge__card">
                    <img src="{{ Vite::asset('resources/assets/client/pages/homepage/pet-knowledge/pet.png') }}" alt="pet">
                    <div class="petKnowledge__card__info">
                        <div class="petKnowledge__card__info__tag">
                            <span>Pet knowledge</span>
                        </div>
                        <div class="petKnowledge__card__info__title">
                            What is a Pomeranian? How to Identify Pomeranian Dogs
                        </div>
                        <div class="petKnowledge__card__info__description">
                            The Pomeranian, also known as the Pomeranian (Pom dog), is always in the top of the cutest pets.
                            Not only that, the small, lovely, smart, friendly, and skillful circus dog breed.
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
