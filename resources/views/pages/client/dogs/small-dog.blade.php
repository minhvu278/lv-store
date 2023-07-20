@extends('layouts.master')

@push('css')
    @vite('resources/sass/client/pages/client/dogs/small-dog.scss')
@endpush

@section('content')
    <div class="small-dog">
        <div class="small-dog__wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Dog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Small Dog</li>
                </ol>
            </nav>
            <div class="banner">
                <div class="banner__content">
                    <div class="banner__content__title">
                        One more friend
                    </div>
                    <div class="banner__content__sub-title">
                        Thousands more fun!
                    </div>
                    <div class="banner__content__desc">
                        Having a pet means you have more joy, a new friend, a happy person who will always be
                        Having a pet means you have more joy, a new friend, a happy person who will always be
                        Having a pet means you have more joy, a new friend, a happy person who will always be
                    </div>
                    <div class="banner__content__btn">
                        <div class="btn__intro">
                            <div class="btn__intro__text">View Intro</div>
                            <div class="btn__intro__icon">
                                <img src="{{ Vite::asset('resources/assets/client/pages/dogs/play-circle.png') }}" alt="play">
                            </div>
                        </div>
                        <div class="btn__explore">
                            <span>Explore Now</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="filter">
                    <div class="filter__common filter__gender">
                        <div class="title">Gender</div>
                        <div class="option">
                            <div>
                                <input type="checkbox" name="gender" id=""><span>Male</span>
                            </div>
                            <div>
                                <input type="checkbox" name="gender" id=""><span>Female</span>
                            </div>
                        </div>
                    </div>
                    <div class="filter__common filter__color">
                        <div class="title">Color</div>
                        <div class="option">
                            <div>
                                <input type="checkbox" name="color" id="">
                                <div>
                                    <img src="" alt="">
                                    <span>Red</span>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" name="color" id="">
                                <div>
                                    <img src="" alt="">
                                    <span>Apricot</span>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" name="color" id="">
                                <div>
                                    <img src="" alt="">
                                    <span>Black</span>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" name="color" id="">
                                <div>
                                    <img src="" alt="">
                                    <span>Black & White</span>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" name="color" id="">
                                <div>
                                    <img src="" alt="">
                                    <span>Silver</span>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" name="color" id="">
                                <div>
                                    <img src="" alt="">
                                    <span>Tan</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="filter__common filter__price">
                        <div class="title">Price</div>
                        <div class="option">
                            <div class="choose">
                                <span>Min</span>
                                <input type="number" name="min">
                            </div>
                            <div class="choose">
                                <span>Max</span>
                                <input type="number" name="max">
                            </div>
                        </div>
                    </div>
                    <div class="filter__common filter__breed">
                        <div class="title">Breed</div>
                        <div class="option">
                            <div>
                                <input type="checkbox" name="breed" id=""><span>Small</span>
                            </div>
                            <div>
                                <input type="checkbox" name="breed" id=""><span>Medium</span>
                            </div>
                            <div>
                                <input type="checkbox" name="breed" id=""><span>Large</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="content__head">
                        <div class="content__head__title">
                            <span>Small Dog</span>
                            <span>52 puppies</span>
                        </div>
                        <div class="content__head__sort">
                            <div>Sort by: Popular</div>
                        </div>
                    </div>
                    <div class="content_center">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
