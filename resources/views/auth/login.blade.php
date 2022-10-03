@extends('layouts.master')
@section('title', 'Login - ablog')
@section('content')
    <style>
        .main-nav {
            display: none !important;
        }
    </style>

    <section>
        <div class="sign_up">
            <div class="sign_up__left">

                @include('layouts.components.login_session')

                <a class="sec_link" href={{ route('sign_up') }}>sign up</a>
                <form action="{{ route('register_login') }}" method="post">
                    @csrf
                    <div class="sign_up__left__content">
                        <h1>Login</h1>
                    </div>

                    <div class="forms" id="form_1">

                        <div class="forms__form">
                            <input type="text" name="username" placeholder="Username" class="css-input"
                                value="{{ old('username') }}" />
                            <span class="alert">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="forms__form">
                            <div class="password_input">
                                <input id="password" type="password" name="password" placeholder="Password"
                                    class="css-input" />
                                <img class="eye_icon" src="img/icons/eye.png" alt="check_pass">
                            </div>
                            <span class="alert">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="forms__btn">
                            <button style="background: rgb(34, 194, 34);" type="submit" id="form_1">Login</button>
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
