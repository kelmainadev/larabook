@extends('layouts.default')

@section('content')

        <h1>Welcome to Larabook</h1>
        <p>Larabook is a platform where you can share ideas about Laravel and be able to ask question and make new friends who have the same interest as you!</p>
        <p>
            {{ link_to_route('register_path','Sign Up!',null, ['class'=>'btn btn-lg btn-primary'])}}
        </p>


    @stop