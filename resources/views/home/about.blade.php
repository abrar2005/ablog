@extends('layouts.master')
@section('title', 'ablog')
@section('content')
    <div class="container">
        <section>
            <header class="header">
                <div class="header__content">
                    <div class="header__content__h1">
                        <h1>the <span>ultimate</span></h1>
                        <h1>digital <strong>journal</strong></h1>
                    </div>
                    <p>
                        Write, share and immortalize the things during your day-to-day life with the world’s bets-loved
                        digital journal
                    </p>
                    @auth
                    @else
                        <a href={{ route('sign_up') }}>
                            <button>Sign Up</button>
                        </a>
                    @endauth
                </div>
                <div class="header__foto">
                    <img src="img/header/mobile_user.svg" alt="">
                </div>
            </header>
            <div class="scroll_icon">
                <img src="img/header/scroll_icon.png" alt="">
            </div>
        </section>
    </div>

    <div class="container">
        <section class="section__box">
            <div class="box">
                <div class="box__txt">
                    <h2>An app where you will find a peace of mind</h2>
                </div>
                <div class="box__cards">
                    <div class="box__cards__card">
                        <div class="box__cards__card__foto">
                            <img src="img/home_cards/wire.png" alt="">
                        </div>
                        <div class="box__cards__card__content">
                            <h4>Clean you tangled mind</h4>
                            <p>Access hundreds of people to share your thoughts and idea with </p>
                        </div>
                    </div>
                    <div class="box__cards__card">
                        <div class="box__cards__card__foto">
                            <img src="img/home_cards/bulb.png" alt="">
                        </div>
                        <div class="box__cards__card__content">
                            <h4>Write down your thoughts</h4>
                            <p>Note down thoughts & share your ideas with the world's best loved digital paper</p>
                        </div>
                    </div>
                    <div class="box__cards__card">
                        <div class="box__cards__card__foto">
                            <img src="img/home_cards/frame.png" alt="">
                        </div>
                        <div class="box__cards__card__content">
                            <h4>The choice is yours to write</h4>
                            <p>Customize your paper to create gorgeous post that you want</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
