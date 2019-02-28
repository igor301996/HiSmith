@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $book->name }}
            </div>
            <div class="card-body">
                <ul>
                    <li>
                        Автор: {{ $book->author->fullName ?? null }}
                    </li>
                    <li>
                        Описание: {{ $book->description }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection