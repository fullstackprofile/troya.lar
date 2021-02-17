@extends('layouts.main')

@section('content')
    <div class="right-bar">
        <div class="tabs">
            <div class="top">
                <h1>Главная</h1>
            </div>
            <p>Приветствую {{$user->user_name}}!</p>
        </div>
    </div>
@endsection
