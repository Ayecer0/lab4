@extends('layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Список статей</h2>
    
    <div class="table-responsive shadow-sm rounded">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Дата</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Краткое описание</th>
                    <th scope="col">Описание</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <th scope="row">{{ $article['datePublic'] }}</th>
                    <td>{{ $article['title'] }}</td>
                    <td>{{ $article['shortDesc'] }}</td>
                    <td>{{ $article['desc'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection