
    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('unfollow', ['class' => "btn btn-danger btn-sm Flexbox"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('follow', ['class' => "btn btn-primary btn-sm Flexbox"]) !!}
        {!! Form::close() !!}
    @endif
