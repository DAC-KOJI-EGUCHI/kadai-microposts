@if (count($microposts) > 0)
    <div class="border-bottom bg-info"><h3 class="text-center text-white">Favorites List</h3></div>
    <ul class="list-unstyled">
        @foreach ($microposts as $micropost)
            <li class="media mb-3">
                <img class="mr-2 rounded" src="{{ Gravatar::src($micropost->user->email, 50) }}" alt="">
                <div class="media-body">
                    <div>
                        {!! link_to_route('users.show', $micropost->user->name, ['id' => $micropost->user->id]) !!} <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                    </div>
                    <div>
                        <p class="mb-0">{!! nl2br(e($micropost->content)) !!}</p>
                    </div>
                </div>
                @include('user_favorite.favorite_button', ['micropost' => $micropost])
            </li>
        @endforeach
    </ul>
    {{ $microposts->render('pagination::bootstrap-4') }}
@endif