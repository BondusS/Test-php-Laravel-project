@extends('mainlayout')

@section('title_content')
Houses
@endsection

@section('body_content')
<h1>Список домов</h1>
@foreach($housess as $el)
	<form method="post" action="houses/delete/{{$el->adres}}">
		@csrf
		<a href = "flats/{{$el->adres}}">{{$el->adres}}, количество квартир: {{$el->counter($el->adres)}}</a>
		@auth
		<button type="submit">Удалить</button>
		@endauth
		<br>
	</form>
@endforeach
@auth
<h1>Форма добавления домов</h1>
@if($errors->any())
	@foreach($errors->all() as $error)
		<er>{{$error}}</er><br>
	@endforeach
@endif
<h2>Введите адресс дома :</h2>
<form method="post" action="houses/check">
	@csrf
	<input type="string"
	       name="adres"
	       id="adres"
	       placeholder="Пример: Южная 17" ><br>
	<button type="submit">Добавить</button>
</form>
@endauth
@endsection
@section('footer_content')
<a href = "/">Вернуться на главную</a>
@endsection