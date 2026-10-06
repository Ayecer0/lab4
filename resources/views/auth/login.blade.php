@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h3 class="text-center mb-1">Вход</h3>
                    <p class="text-center text-muted mb-4">Войдите в свой аккаунт</p>

                    <form method="POST" action="/auth/login">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email адрес</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Пароль</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль" required>
                        </div>

                        <button type="submit" class="btn btn-dark w-100">Войти</button>
                    </form>

                    <p class="text-center mt-4 mb-0">
                        Нет аккаунта? <a href="/signup">Зарегистрироваться</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection