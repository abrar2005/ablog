<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // DUMMY DATA FOR DEVELOPMENT PURPOSES
    private function dummyData()
    {
        $content = 'The border crisis is bad now, but climate change will make it exponentially worse,” writes Yessenia Funes in this compassionate piece for Atmos. 
            Extreme heat plays a major role in migrant deaths along the southern border of the U.S. In 202"1", the bodies of 225 migrants were recovered from the Arizona 
            desert, and this year, 126 have already been found. One third of these deaths are due to the harsh, dangerous environment. Funes joins a migrant rescue group that combs the 
            desert for people who’ve gotten lost during their journeys. Mostly, though, they search for remains: “bodies, bones, and belongings.” While researchers have studied how climate change will 
            influence migration patterns, they haven’t really measured how it will physically and mentally affect an individual — until now. Funes weaves this data into a very personal and reflective account. 
            The photographs by Carlos Jaramillo, especially images of found items like black water jugs and camouflage backpacks scattered across the desert, are haunting. ';

        return [
            [
                'name' => 'Dwayne Johnson',
                'id' => '2342424',
                'profile_pic' => 'rock.png',
                'heading' =>
                'An elderly man living alone in Manchester wanted to plant his annual tomato garden, but i was very difficult work, since the ground was hard.',
                'content' => $content,
                'likes' => 67532,
                'comments' => 34332,
                'followed' => 'true',
                'liked' => 'false',
                'where_to' => 'adsasd',
                'date_published' => '11/3/2021',
            ],
            [
                'name' => 'Abrar Muftah',
                'id' => '2342424',
                'profile_pic' => 'john.png',
                'heading' =>
                'An elderly man living alone in Manchester wanted to plant his annual tomato garden, but i was very difficult work, since the ground was hard.',
                'content' => $content,
                'likes' => 32432,
                'comments' => 21322,
                'followed' => 'false',
                'liked' => 'true',
                'where_to' => 'tto',
                'date_published' => '11/3/2021',
            ],
            [
                'name' => 'Amanda Beek',
                'id' => '2342424',
                'profile_pic' => 'amanda.png',
                'heading' =>
                'An elderly man living alone in Manchester wanted to plant his annual tomato garden, but i was very difficult work, since the ground was hard.',
                'content' => $content,
                'likes' => 65432,
                'comments' => 7132,
                'followed' => 'true',
                'liked' => 'false',
                'where_to' => 'tto',
                'date_published' => '11/3/2021',
            ],
            [
                'name' => 'Rajesh Kapoor',
                'id' => '2342424',
                'profile_pic' => 'asad.png',
                'heading' =>
                'An elderly man living alone in Manchester wanted to plant his annual tomato garden, but i was very difficult work, since the ground was hard.',
                'content' => $content,
                'likes' => 342344,
                'comments' => 12344,
                'followed' => 'false',
                'liked' => 'true',
                'where_to' => 'tto',
                'date_published' => '11/3/2021',
            ]
        ];
    }
    private function dummyUser()
    {
        return [
            'id' => 2342424,
            'name' => 'Amanda Beek',
            'username' => 'amanda',
            'profile_pic' => 'amanda.png',
            'header_pic' => 'green.jpg',
            'email' => 'amandabeek@mail.com',
            'password' => 'admin123',
            'location' => 'Groningen, Netherlands',
            'bio' => 'Twitter maven. Web scholar. Freelance beer lover. Proud alcohol guru. Social media buff. Zombie specialist. Music aficionado.',
            'personal_website' => 'https://twitter.com/dream',
            'personal_job' => 'Writer',
            'twitter_account' => 'dream',

            // The following array have the id of people id
            'followers' => ['1', '2'],

            // The following array have the id of a post.
            'my_posts' => ['2'],
            'saved_content' => ['2'],
            'liked_content' => ['3'],
            'followed_category' => ['2'],
        ];
    }

    // ===================================

    /**
     *  List the profile page of the user
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Check how many likes my posts has.

        return view('pages.profile_page', [
            'name' => self::dummyUser()['name'],
            'username' => self::dummyUser()['username'],
            'profile_pic' => self::dummyUser()['profile_pic'],
            'header_pic' => self::dummyUser()['header_pic'],
            'bio' => self::dummyUser()['bio'],
            
            // The following array have the id of people id
            'followers' => self::dummyUser()['followers'],

            // The following array have the id of a post.
            'my_posts' => self::dummyUser()['my_posts'],
            'saved_content' => self::dummyUser()['saved_content'],
            'liked_content' => self::dummyUser()['liked_content'],
            'followed_category' => self::dummyUser()['followed_category'],
            
        ]);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // sign up page
        return view('pages.sign_up');
    }

    /**
     * Store a newly created User in db.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the settings page for a user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the settings of a user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified user from db.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
