@extends('layouts.app')


@section('content')
 

  
  <div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-body">
                    {!! Form::open(['route' => 'posts.store','input type' => 'hidden', 'name' => 'subcategory', 'value' => $subcategory['name']]) !!}

                    {!! Form::hidden('subcategory', $subcategory['name']) !!}
        
                <div class="form-group">
                    <label>{{ $subcategory['label']['place'] }}</label>
                            {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => $subcategory['placeholder']['place']]) !!}
                </div>
       
                <div class="form-group">
                    <label>{{ $subcategory['label']['title'] }}</label>
                            {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => $subcategory['placeholder']['title']]) !!}
                </div>
        
                <div class="form-group">
                    <label>Details</label>
                            {!! Form::textarea('detail', old('deatail'), ['class' => 'form-control', 'rows' => '2',  'placeholder' => 'Free space' ]) !!}
                </div>

                <div class="text-right">
                            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
                    {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>

<ul class="media-list">
@foreach ($posts as $post)
    <?php $user = $post->user; ?>
    <li class="media">
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $post->created_at }}</span>
            </div>
            <div class="media-left">
                <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
            </div>            
            <div>
                <p>{!! nl2br(e($post->content)) !!}</p>
            </div>
            <div>
                @if (Auth::user()->id == $post->user_id)
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
            
            
             
        </div>
    </li>
@endforeach

@endsection

