@extends('layouts.default')

@section('content')

        <h1>Registration</h1>
{{Form::open(['route'=>'register_path'])}}
        {{--user form input--}}
        <div class="Form-group">
            {{Form::label('username','Username:')}}
            {{Form::text('username',null,['class'=>'form-control'])}}

        </div>

        <div class="Form-group">
            {{Form::label('email','Email:')}}
            {{Form::text('email',null,['class'=>'form-control'])}}

        </div>

        <div class="Form-group">
            {{Form::label('password','Password:')}}
            {{Form::text('password',null,['class'=>'form-control'])}}

        </div>
        <div class="Form-group">
            {{Form::label('password_confirmation','Password Confirmation:')}}
            {{Form::text('password_confirmation',null,['class'=>'form-control'])}}

        </div>
        </br>
        <div class="Form-group">
            {{Form::submit('Sign Up',['class'=>'btn btn-primary'])}}

        </div>



@stop