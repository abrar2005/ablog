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
                <a class="sec_link" href={{ route('login') }}>login</a>
                <form action={{ route('register_sign_up') }} method="post">
                    @csrf
                    <div class="sign_up__left__content">
                        <h1>Sign Up</h1>
                    </div>

                    <div class="forms" id="form_1">
                        <div class="forms__form">
                            <input name="username" type="text" placeholder="Username" class="css-input" value="{{ old('username') }}" />
                            <span class="alert"> @error('username') {{ $message }} @enderror </span>
                        </div>

                        <div class="forms__form">
                            <input name="email" type="email" placeholder="Email" class="css-input" value="{{ old('email') }}" />
                            <span class="alert"> @error('email') {{ $message }} @enderror </span>
                        </div>
                        <div class="forms__form">
                            <div class="password_input">
                                <input id="password" type="password" name="password" placeholder="Password"  class="css-input" value="{{ old('password') }}" />
                                <img class="eye_icon" src="img/icons/eye.png" alt="check_pass"> 
                            </div>
                            <span class="alert"> @error('password') {{ $message }} @enderror </span>
                        </div>
                        <div class="forms__btn">
                            <button type="submit" class="green_btn">Sign Up</button>
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
