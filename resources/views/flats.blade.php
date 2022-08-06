@extends('mainlayout')

@section('title_content')
Flats
@endsection

@section('body_content')
<h1>Список квартир из дома по адрессу {{$houses->adres}}</h1>
@foreach($flatss as $el)
	@if($el->adres == $houses->adres)
		<form method="post" action="delete/{{$el->id}}">
			@csrf
			<a>Номер: {{$el->number}}, 
	    		Кол-во комнат: {{$el->rooms}},
				Площадь: {{$el->square}}</a>
			@auth
			<a>, ФИО владельца: {{$el->owner}}</a>
			<button type="submit">Удалить</button>
			@endauth
			<br>
		</form>
	@endif
@endforeach
@auth
<h1>Форма добавления квартир</h1>
@if($errors->any())
	@foreach($errors->all() as $error)
		<er>{{$error}}</er><br>
	@endforeach
@endif
<form method="post" action="check">
	@csrf
	<hid>
	<input type="string"
	       name="adres"
	       id="adres"
	       value="{{$houses->adres}}"><br>
	</hid>
	<h3>Введите номер квартиры : </h3>
	<input type="integer"
	       name="number"
	       id="number"
	       placeholder="Пример: 47"><br>
	<h3>Введите количество комнат : </h3>
	<input type="integer"
	       name="rooms"
	       id="rooms"
	       placeholder="Пример: 3"><br>
	<h3>Введите площадь : </h3>
	<input type="integer"
	       name="square"
	       id="square"
	       placeholder="Пример: 80"><br>
	<h3>Введите ФИО владельца : </h3>
	<input type="string"
	       name="owner"
	       id="owner"
	       placeholder="Пример: Иванов И. И."><br>
	<button type="submit">Добавить</button>
</form>
@endauth
@endsection
@section('footer_content')
<a href = "/houses">Вернуться к списку домов</a><br>
<a href = "/">Вернуться на главную</a>
@endsection