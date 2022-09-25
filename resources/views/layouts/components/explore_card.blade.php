<a href="tto">
    <div class=@if ($card_pic) "exploreCards__card noPadding" @else "exploreCards__card" @endif>
        <div class="exploreCards__card__img">
            @if ($master_icon)
                <img src="img/explore/{{ $master_icon }}" alt="logos">
            @endif
        </div>
        <div class="exploreCards__card__name">
            @if ($card_pic)
                <img src="img/topic/{{ $card_pic }}" alt="logos">
                <div class="exploreCards__card__name__content">
                    <span>{{ ucfirst($name) }}</span>
                    <p>{{ substr($content, 0, 30) . '...' }}</p>
                </div>
            @else
                <span>{{ ucfirst($name) }}</span>
            @endif
        </div>
    </div>
</a>
