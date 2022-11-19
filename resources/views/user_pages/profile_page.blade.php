@extends('layouts.master')
@section('title', '@'.$username)
@section('content')
    <div class="container">
        @include('layouts.components.login_session')
        <div class="profilePage">
            <section>
                <div class="banner">
                    <img class="banner__foto" src={{ 'img/banner/' . $header_pic }}>
                </div>
                <div class="trending">
                    @include('layouts.components.menu.aside')
                    <main>
                        <div class="banner__profile">
                            <div class="banner__profile__foto">
                                <img src="img/people/{{ $profile_pic? $profile_pic : 'user.png' }}" style="{{ $profile_pic? '' : 'padding: .35rem'}}" alt="person">
                            </div>
                            <div class="banner__profile__content">
                                <div class="banner__profile__content__name">
                                    <span>{{ '@' . $username }}</span>
                                </div>
                                <div class="banner__profile__content__button">
                                    <button class="light_btn">follow</button>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <div class="info__box">
                                <div class="info__box__name">
                                    <span>{{ $name }}</span>
                                    <p class="info__box__name__job">{{ $personal_job }}</p>
                                </div>
                                <div class="info__box__stats">
                                </div>
                                <div class="info__box__bio">
                                    <p>{{ $bio }}</p>
                                </div>
                            </div>
                            <div class="info__box">
                                <div class="info__box__stats">
                                    <div class="stat">
                                        <img src="img/icons/person_black.svg" alt="">
                                        <p>
                                            {{-- <span>{{ shortNumber(count($followers)) }}</span> --}}
                                            followers
                                        </p>
                                    </div>
                                    <div class="stat">
                                        <img src="img/icons/diary_black.svg" alt="">
                                        <p>
                                            {{-- <span>{{ shortNumber(count($my_posts)) }}</span> --}}
                                            posts
                                        </p>
                                    </div>
                                    <div class="stat">
                                        <img src="img/icons/like_black.svg" alt="">
                                        <p>
                                            {{-- <span>{{ shortNumber(count($my_posts)) }}</span> --}}
                                            likes
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 style="margin-top: 4rem">My posts</h2>
                        @include('layouts.components.post', [
                            'name' => 'Mahmud Abdul',
                            'id' => '2342424',
                            'profile_pic' => 'asad.png',
                            'heading' =>
                                'An elderly man living alone in Manchester wanted to plant his annual tomato garden, but i was very difficult work, since the ground was hard.',
                            'content' => '...',
                            'likes' => '444',
                            'comments' => '444',
                            'followed' => 'true',
                            'liked' => 'false',
                            'where_to' => 'adsasd',
                            'date_published' => '11/3/2021',
                        ])
                    </main>
                </div>
            </section>
        </div>
    </div>

@endsection
