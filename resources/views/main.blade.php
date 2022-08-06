@extends('mainlayout')

@section('title_content')
Home page
@endsection

@section('body_content')
<h1>Строительная компания</h1>
@guest
<a href = "/register">Зарегестрироваться</a><br>
<a href = "/login">Войти</a><br>
@endguest
@auth
<h2>Здравствуйте, {{auth()->user()->name}}</h2>
<a href = "/logout">Выйти</a><br>
@endauth
<a href = "/houses">Смотреть список домов</a>
@endsection