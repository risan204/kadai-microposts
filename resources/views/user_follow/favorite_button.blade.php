@if (Auth::user()->is_favorite($user->id))
    {{-- お気に入り外すボタンのフォーム --}}
    {!! Form::open(['route' => ['user.unfavorite', $user->id], 'method' => 'delete']) !!}
        {!! Form:submit('Unfavorite',['class'=>"btn btn-danger btn-block"])!!}
    {!! Form::close() !!}
@else
    {{-- 　お気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['user.favorite', $user->id]]) !!}
            {!! Form::submit('Follow', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
@endif

//本人、本人以外問わないので($use->id)不要？