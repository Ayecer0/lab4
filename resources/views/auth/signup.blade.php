@extends('layout')

@section('content')
<form action="/auth/login" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputPassword1" class="form-label">Имя</label>
        <input name="name" type="text" class="form-control" id="" placeholder="Введите ваше имя">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label">Email адрес</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Потвердить</button>
</form>
@endsection