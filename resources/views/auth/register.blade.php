@extends('mainlayout')

@section('title_content')
Register
@endsection

@section('body_content')
<h1>Регистрация</h1>
<form method="post" action="register/check">
	@csrf
	<h2>Введите имя</h2>
	<input type="string"
	       name="name"
	       id="name"
	       placeholder="Пример: Дмитрий" ><br>
	<h2>Введите почту</h2>
	<input type="string"
	       name="email"
	       id="email"
	       placeholder="Пример: beast729@mail.ru" ><br>
	<h2>Введите пароль</h2>
	<input type="password"
	       name="password"
	       id="password"><br>
	<button type="submit">Зарегестрироваться</button>
</form>
@endsection