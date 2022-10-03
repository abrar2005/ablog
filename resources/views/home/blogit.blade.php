@extends('layouts.master')
@section('title', 'Blogit')
@section('content')
    <div class="container">
        <div class="trending">
            @include('layouts.components.aside')
            <main>
                <div class="blogit">
                    @include('layouts.components.login_session')
                    <div class="blogit__content">
                        <h2>Blog your day.</h2>
                    </div>
                    <form class="blogit" action="" method="post">
                        @csrf
                        <div class="blogit_form">
                            <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" />
                            <span class="alert">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="blogit_form">
                            <input type="text" name="category" placeholder="Category" value="{{ old('category') }}" />
                            <span class="alert">
                                @error('category')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="blogit__form">
                            <textarea rows="8" name="description" placeholder="Description" value="{{ old('content') }}"></textarea>
                            <span class="alert">
                                @error('content')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>  
                        <button type="submit" class="blue_btn">Post</button>
                    </form>
                </div>
            </main>
        </div>
    </div>

@endsection
