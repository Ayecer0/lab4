<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Header / Navbar) -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Навигация</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/about') }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles/show">Articles</a>
                        </li>
                    </ul>
                </div> 
                <div class="d-flex gap-2 ms-auto">
    <a href="/auth/login" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-box-arrow-in-right"></i> Войти
    </a>
    <a href="/signup" class="btn btn-primary btn-sm">
        <i class="bi bi-person-plus"></i> Регистрация
    </a>
</div>
        </nav>
    </header>

    <!-- Основная часть -->
    <main class="flex-grow-1">
        <div class="container mt-4">
            @yield('content')
        </div>
    </main>

    
    <footer class="text-center py-3 mt-auto">
        <p class="text-muted mb-0">Выполнил: Гончарюк Вадим | Группа: 251-3210</p>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>