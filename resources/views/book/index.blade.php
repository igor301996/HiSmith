@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Книги

                <div class="float-right">
                    <a href="{{ route('books.create') }}" class="btn btn-success btn-sm">Новая книга</a>
                    <a href="{{ route('authors.index') }}" class="btn btn-primary btn-sm">Авторы</a>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Название книги</th>
                    <th>Цена</th>
                    <th>Автор</th>
                </tr>
                </thead>
                @foreach($books as $book)
                    <tbody>
                    <tr>
                        <td>{{ $book->name }}</td>
                        <td width="100px">{{ $book->priceFmt }}</td>
                        @if($book->author_id != null)
                            <td>{{ $book->author->fullName }}</td>
                        @elseif($book->author_id == null)
                            <td> -</td>
                        @endif
                        <td width="250px" class="">
                            <a href="{{ route('books.show', $book) }}" class="btn btn-primary btn-sm">Просмотр</a>
                            <a href="{{ route('books.edit', $book) }}" class="btn btn-info btn-sm">Изменить</a>
                            <form class="d-inline" method="post"
                                  action="{{ route('books.destroy', $book) }}">
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