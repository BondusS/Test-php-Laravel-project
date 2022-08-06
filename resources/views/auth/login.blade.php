@extends('mainlayout')

@section('title_content')
Login
@endsection

@section('body_content')
<h1>Вход</h1>
<form method="post" action="login/check">
	@csrf
	<h2>Введите почту</h2>
	<input type="string"
	       name="email"
	       id="email"><br>
	<h2>Введите пароль</h2>
	<input type="password"
	       name="password"
	       id="password"><br>
	<button type="submit">Войти</button>
</form>
@endsection
