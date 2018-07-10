@extends('layouts.app')

@section('content')
 

    <div class="form-group">
        {!! Form::open(['input type' => 'hidden', 'name' => 'subcategory', 'value' => 'movie'])!!}


        <div class="form-group">
            <label>Director</label>
            {!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'Steven Spielberg（任意）']) !!}
       </div>
       
       <div class="form-group">
           <label>Title</label>
            {!! Form::textarea('subject', old('subject'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'E.T.']) !!}
        </div>
        
        <div class="form-group">
            <label>Details</label>
            {!! Form::textarea('detail', old('deatail'), ['class' => 'form-control', 'rows' => '2', ]) !!}
        </div>
            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}

    {!! Form::close()!!}
    </div>

@endsection