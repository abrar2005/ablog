<aside class="aside__menu">
    <nav class="aside__menu__nav">
        @include('layouts.components.menu.aside_menu', [
            'name' => 'Library',
            'link' => '',
            'pic' => 'library.svg'
        ])
        @include('layouts.components.menu.aside_menu', [
            'name' => 'Subscription',
            'link' => '',
            'pic' => 'subscription.svg'
        ])
        @include('layouts.components.menu.aside_menu', [
            'name' => 'Likes',
            'link' => '',
            'pic' => 'like.svg'
        ])
        @include('layouts.components.menu.aside_menu', [
            'name' => 'My posts',
            'link' => '',
            'pic' => 'posts.svg'
        ])
    </nav>
    
</aside>