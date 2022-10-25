@extends('layouts.master')
@section('title', 'Trending')
@section('content')
    <div class="container">
        <div class="trending">
            @include('layouts.components.aside')
            <main>
                @php
                    $content =
                        'The border crisis is bad now, but climate change will make it exponentially worse,” writes Yessenia Funes in this compassionate piece for Atmos. Extreme heat plays a major role in migrant deaths along the southern border of the U.S. In 202"1", the bodies of 225 migrants were recovered from the Arizona desert, and this year, 126 have already been found. One third of these deaths are due to the harsh, dangerous environment. Funes joins a migrant rescue group that combs the desert for people who’ve gotten lost during their journeys. Mostly, though, they search for remains: “bodies, bones, and belongings.” While researchers have studied how climate change will influence migration patterns, they haven’t really measured how it will physically and mentally affect an individual — until now. Funes weaves this data into a very personal and reflective account. The photographs by Carlos Jaramillo, especially images of found items like black water jugs and camouflage backpacks scattered across the desert, are haunting. ';
                @endphp
                @include('layouts.components.post', [
                    'name' => 'Dwayne Johnson',
                    'id' => '1111',
                    'profile_pic' => 'rock.png',
                    'heading' =>
                        'An elderly man living alone in Manchester wanted to plant his annual tomato garden, but i was very difficult work, since the ground was hard.',
                    'content' => substr($content, 0, 400) . '...',
                    'likes' => shortNumber('300500'),
                    'comments' => shortNumber('3443'),
                    'followed' => 'false',
                    'liked' => 'true',
                    'where_to' => route('show_post', ['blog_id' => 111]),
                    'date_published' => '11/3/2021',
                ])
            </main>
        </div>
    </div>
@endsection
