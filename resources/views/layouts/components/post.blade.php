<div class="post">
    <div class="profile">
        <div class="profile__pic">
            <img src="img/people/{{ $profile_pic }}" alt="person">
        </div>
        <div class="profile__name">
            {{ $name }}
        </div>
        <div class="profile__button">
            <button type="submit" data-followed={{ $followed }}
                class={{ $followed == 'true' ? 'dark_btn' : 'light_btn' }}>
                {{ $followed == 'true' ? 'following' : 'follow' }}
            </button>
        </div>
    </div>
    <div class="post__content">
        <div class="post__content__heading">
            <a href={{ $where_to }}>
                <h4>An elderly man living alone in Manchester wanted to plant his annual tomato garden, but it
                    was very difficult work, since the ground was hard.
                </h4>
            </a>
        </div>
        <div class="post__content__paragraph">
            <p>{{ $content }}</p>
        </div>
    </div>
    <div class="post__socials">
        <div class="post__socials__action">
            <img data-liked={{ $liked }} src="img/icons/{{ $liked == 'true' ? 'heart_full' : 'heart' }}.svg"
                alt="like"><span>{{ $likes }}</span>
        </div>
        <div class="post__socials__action">
            <img src="img/icons/comment.svg" alt="comments"><span>{{ $comments }}</span>
        </div>
        <div class="post__socials__action">
            <img src="img/icons/share.svg" alt="share">
        </div>
    </div>
</div>
