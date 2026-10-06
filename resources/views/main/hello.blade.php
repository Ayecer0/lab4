@extends('layout')

@section('content')

<style>
    .table-container {
        width: 95%;
        margin: 30px auto;
        overflow-x: auto;
    }

    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .table thead {
        background: #343a40;
        color: white;
    }

    .table th {
        padding: 15px;
        text-align: left;
        font-size: 16px;
        font-weight: 600;
    }

    .table td {
        padding: 14px 15px;
        border-bottom: 1px solid #e9ecef;
        font-size: 15px;
        vertical-align: middle;
    }

    .table tbody tr:nth-child(even) {
        background: #f8f9fa;
    }

    .table tbody tr:hover {
        background: #e9f2ff;
        transition: 0.2s;
    }

    .table tbody tr:last-child td {
        border-bottom: none;
    }

    .table img {
        width: 90px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
        transition: 0.2s;
    }

    .table img:hover {
        transform: scale(1.08);
    }

    .table a {
        display: inline-block;
    }

    .title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 28px;
        font-weight: 700;
        color: #343a40;
    }
</style>

<div class="table-container">

    <h1 class="title">Новости</h1>

    <table class="table">

        <thead>
            <tr>
                <th>Дата</th>
                <th>Название</th>
                <th>Краткое описание</th>
                <th>Описание</th>
                <th>Изображение</th>
            </tr>
        </thead>

        <tbody>

            @foreach($articles as $article)

                <tr>

                    <th scope="row">
                        {{$article['Дата']}}
                    </th>

                    <td>
                        {{$article['Название']}}
                    </td>

                    <td>
                        {{$article['Краткое описание']}}
                    </td>

                    <td>
                        {{$article['Описание']}}
                    </td>

                    <td>
                        <a href="/galery/{{$article['full_image']}}">
                            <img
                                src="{{URL::asset('/images/'.$article['preview_image'])}}"
                                alt="Изображение"
                            >
                        </a>
                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection