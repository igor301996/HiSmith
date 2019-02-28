@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Книги
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Название книги</th>
                    <th>Описание</th>
                    <th>Цена</th>
                </tr>
                </thead>
                @foreach($author->books as $authors)
                    <tbody>
                    <tr>
                        <td>{{ $authors->name }}</td>
                        <td>{{ $authors->description }}</td>
                        <td>{{ $authors->price }}</td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection