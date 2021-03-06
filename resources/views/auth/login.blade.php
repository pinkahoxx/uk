@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'login.post']) !!}
            <div class="form-group">
           {!! form::label('name','Name')!!}
           {!! form::text('name', old('name'), ['class' => 'form-control']) !!}
           </div>
                    <div class="form-group">
                        {!! form::label('password', 'パスワード') !!}
                        {!! form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="text-right">
                        {!! form::submit('ログイン', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! form::close() !!}
            </div>
      <p>New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
</div>
@endsection