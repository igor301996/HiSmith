@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                Авторы
                <div class="float-right">
                    <a href="{{ route('authors.create') }}" class="btn btn-success btn-sm">Новый автор</a>
                    <a href="{{ route('books.index') }}" class="btn btn-primary btn-sm">Книги</a>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Автор</th>
                    <th>Количество книг</th>
                    <th></th>
                </tr>
                </thead>
                @foreach($authors as $author)
                    <tbody>
                    <tr>
                        <td>{{ $author->fullName }}</td>
                        <td>{{ $author->books()->count() }}</td>
                        <td style="width: 250px">
                            <a href="{{ route('authors.show', $author) }}" class="btn btn-primary btn-sm">Просмотр</a>
                            <a href="{{ route('authors.edit', $author) }}" class="btn btn-info btn-sm">Изменить</a>
                            <form class="d-inline" method="post"
                                  action="{{ route('authors.destroy', $author) }}">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">
                                    Удалить
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection