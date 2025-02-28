<div class="card bg-transparent border-0 text-center">
    <div class="card-img">
        @if ($member->image !='')
        <img loading="lazy" decoding="async" src="{{ asset('storage/'.$member->image) }}" alt="Scarlet Pena"
            class="rounded w-100 fixed-size" style="width: 300px; height: 332px; object-fit: contain;">
        @endif

        @if($member->fb_url !='' || $member->in_url !='' ||$member->tw_url !='')
        <ul class="card-social list-inline">

            @if($member->fb_url !='')
            <li class="list-inline-item"><a class="facebook" href="{{$member->fb_url}}"><i
                        class="fab fa-facebook"></i></a>
            </li>
            @endif

            @if($member->tw_url !='')
            <li class="list-inline-item"><a class="instagram" href="{{$member->insta_url}}"><i
                        class="fab fa-instagram"></i></a>
            </li>
            @endif

            @if($member->in_url !='')
            <li class="list-inline-item"><a class="x" href="{{$member->x_url}}"><i class="fab fa-twitter"></i></a>
            </li>
            @endif

            @endif

        </ul>
    </div>
    <div class="card-body">
        <h3>{{$member->name}}</h3>
        <p>{{$member->designation}}</p>

    </div>
</div>