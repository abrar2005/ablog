@extends('layouts.master')
@section('title', 'Explore')
@section('content')
    <div class="container">
        <section>
            <header class="explore">
                <div class="explore__content">
                    <h2>Welcome,</h2>
                    <p>
                        Write, share and immortalize the things during your day-to-day life with the world’s best-loved
                        digital journal
                    </p>
                    <button>Sign in</button>
                </div>
                <div class="explore__foto">
                    <img src="img/header/people_header.svg" alt="">
                </div>
            </header>
            <div class="exploreCards">
                @include('layouts.components.explore_card', [
                    'name' => 'trending',
                    'master_icon' => 'fire.svg',
                    'card_pic' => '',
                ])
                @include('layouts.components.explore_card', [
                    'name' => 'games',
                    'master_icon' => 'game.svg',
                    'card_pic' => '',
                ])
                @include('layouts.components.explore_card', [
                    'name' => 'music',
                    'master_icon' => 'music.svg',
                    'card_pic' => '',
                ])
                @include('layouts.components.explore_card', [
                    'name' => 'sport',
                    'master_icon' => 'sport.svg',
                    'card_pic' => '',
                ])
            
            </div>
        </section>
        <section>
            <div class="discover">
                <h2>Discover places:</h2>
                <div class="placesCards">
                    @include('layouts.components.explore_card', [
                        'name' => 'Psychology',
                        'master_icon' => '',
                        'card_pic' => 'download.png',
                        'content' => 'How to stop bieng manipulated and defend yourself'
                    ])

                    @include('layouts.components.explore_card', [
                        'name' => 'Psychology under the water',
                        'master_icon' => '',
                        'card_pic' => 'download.png',
                        'content' => 'How to stop bieng manipulated and defend yourself'
                    ])

                    @include('layouts.components.explore_card', [
                        'name' => 'Computer science',
                        'master_icon' => 'fire.svg',
                        'card_pic' => '',
                    ])
                </div>
            </div>
        </section>
    </div>
@endsection
