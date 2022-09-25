@extends('layouts.master')
@section('title', 'Sign up - ablog')
@section('content')
    <style>
        .main-nav {
            display: none !important;
        }
    </style>

    <section>
        <div class="sign_up">
            <div class="sign_up__mid">
            </div>
            <div class="sign_up__left">
                <a class="sec_link" href="login">login</a>
                <form action={{ route('me.store') }} method="post">
                    @csrf
                    <div class="sign_up__left__content">
                        <h1>Sign Up</h1>
                    </div>

                    <div class="forms" id="form_1">
                        <div class="forms__form">
                            <input type="email" placeholder="Email" class="css-input" />
                        </div>
                        <div class="forms__form">
                            <input type="password" placeholder="Password" class="css-input" />
                        </div>
                        <div class="forms__form">
                            <input type="password" placeholder=" Repeat Password" class="css-input" />
                        </div>
                        <div class="forms__btn">
                            <button type="button" id="form_1">back</button>
                            <button type="button" id="form_1">next</button>
                        </div>
                    </div>
                   

                </form>
            </div>
            <div class="sign_up__right">
                <img src={{ url('img/logo.png') }} alt="logo ablog" class="logo">
            </div>
        </div>
    </section>
@endsection
